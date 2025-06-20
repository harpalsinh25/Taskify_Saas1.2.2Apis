@extends('layout')

@section('title')
    <?= get_label('email_templates', 'Email Templates') ?>
@endsection

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-2 mt-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home.index') }}">{{ get_label('home', 'Home') }}</a>
                    </li>
                   
                    <li class="breadcrumb-item active">
                        {{ get_label('email_templates', 'Email Templates') }}
                    </li>
                </ol>
            </nav>
        </div>
        <div>
            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#createTemplateModal">
                <button type="button" class="btn btn-sm btn-primary " data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="{{ get_label('create_template', 'Create Template') }}">
                    <i class='bx bx-plus'></i>
                </button>
            </a>
        </div>
    </div>

@if (is_countable($templates) && count($templates) > 0)
    <div class="card">
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <input type="hidden" id="data_type" value="email_templates">
                <table id="table" data-toggle="table" data-loading-template="loadingTemplate"
                    data-url="{{ route('email.templates.list') }}" data-icons-prefix="bx" data-icons="icons"
                    data-show-refresh="true" data-total-field="total" data-trim-on-search="false" data-data-field="rows"
                    data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-side-pagination="server"
                    data-show-columns="true" data-pagination="true" data-sort-name="id" data-sort-order="desc"
                    data-mobile-responsive="true" data-query-params="queryParams">
                    <thead>
                        <tr>
                            <th data-checkbox="true"></th>
                            <th data-field="id" data-sortable="true">{{ get_label('id', 'ID') }}</th>
                            <th data-field="name" data-sortable="true">{{ get_label('name', 'Name') }}</th>
                            <th data-field="subject">{{ get_label('subject', 'Subject') }}</th>
                            <th data-field="placeholders" data-escap="false">
                                {{ get_label('placeholders', 'Placeholders') }}</th>
                            <th data-field="created_at" data-sortable="true">{{ get_label('created_at', 'Created at') }}
                            </th>
                            <th data-field="updated_at" data-sortable="true">{{ get_label('updated_at', 'Updated at') }}
                            </th>
                            <th data-field="actions">{{ get_label('actions', 'Actions') }}</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@else
    <?php $type = 'Email Templates'; ?>
    <x-empty-state-card :type="$type" />
@endif
</div>

<script>
    var label_update = '<?= get_label('update', 'Update') ?>';
    var label_delete = '<?= get_label('delete', 'Delete') ?>';
    var label_duplicate = '<?= get_label('duplicate', 'Duplicate') ?>';
</script>
 <script src="{{ asset('assets/js/pages/email-templates.js') }}"></script>

@endsection
