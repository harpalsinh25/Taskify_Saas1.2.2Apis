@extends('layout')

@section('title')
    <?= get_label('todo_list', 'Todo list') ?>
@endsection

@section('content')

    <div class="container-fluid">
        <div class="d-flex justify-content-between mb-2 mt-4">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home.index') }}"><?= get_label('home', 'Home') ?></a>
                        </li>
                        <li class="breadcrumb-item active">
                            <?= get_label('todos', 'Todos') ?>
                        </li>
                    </ol>
                </nav>
            </div>
            <div>
                <span data-bs-toggle="modal" data-bs-target="#create_todo_modal"><a href="javascript:void(0);"
                        class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="left"
                        data-bs-original-title="<?= get_label('create_todo', 'Create todo') ?>"><i
                            class='bx bx-plus'></i></a></span>
            </div>
        </div>

        @if (is_countable($todos) && count($todos) > 0)
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <!-- Delete Selected Button -->
                        <button type="button" id="delete-selected" class="btn btn-outline-danger" data-type="todos">
                            <i class="bx bx-trash"></i> {{ get_label('delete_selected', 'Delete Selected') }}
                        </button>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="select-all"></th>
                                    <th><?= get_label('id', 'ID') ?></th>
                                    <th><?= get_label('status', 'Status') ?></th>
                                    <th><?= get_label('title', 'Title') ?></th>
                                    <th><?= get_label('priority', 'Priority') ?></th>
                                    <th><?= get_label('description', 'Description') ?></th>
                                    <th><?= get_label('updated_at', 'Updated at') ?></th>
                                    <th><?= get_label('actions', 'Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($todos as $todo)
                                    <tr>
                                        <td><input type="checkbox" class="selected-items form-check-input"
                                                value="{{ $todo->id }}"></td>
                                        <td>{{ $todo->id }}</td>
                                        <td>
                                            <input type="checkbox" id="{{ $todo->id }}" onclick='update_status(this)'
                                                name="{{ $todo->id }}" class="form-check-input mt-0"
                                                {{ $todo->is_completed ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            <h4 class="<?= $todo->is_completed ? 'striked' : '' ?> m-0"
                                                id="{{ $todo->id }}_title">{{ $todo->title }}</h4>
                                            <h7 class="text-muted m-0">{{ format_date($todo->created_at, true) }}</h7>
                                        </td>
                                        <td>
                                            <span
                                                class='badge bg-label-{{ config('taskify.priority_labels')[$todo->priority] ?? 'secondary' }} me-1'>{{ $todo->priority }}</span>
                                        </td>
                                        <td>
                                            {!! $todo->description !!}
                                        </td>
                                        <td>
                                            {{ format_date($todo->updated_at, true) }}
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="javascript:void(0);" class="edit-todo" data-bs-toggle="modal"
                                                    data-bs-target="#edit_todo_modal" data-id="{{ $todo->id }}"
                                                    title="<?= get_label('update', 'Update') ?>" class="card-link"><i
                                                        class='bx bx-edit mx-1'></i></a>
                                                <a href="javascript:void(0);" type="button" data-id="{{ $todo->id }}"
                                                    data-type="todos" data-reload="true"
                                                    title="<?= get_label('delete', 'Delete') ?>"
                                                    class="card-link delete mx-4"><i
                                                        class='bx bx-trash text-danger mx-1'></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        @else
            <?php
            $type = 'Todos'; ?>
            <x-empty-state-card :type="$type" />
        @endif
    </div>


@endsection