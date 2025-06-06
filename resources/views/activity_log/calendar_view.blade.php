@extends('layout')
@section('title')
{{ get_label('activity_log', 'Activity Log') }} - {{ get_label('calendar_view', 'Calendar View') }}
@endsection
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-2 mt-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="{{route('home.index')}}">{{ get_label('home', 'Home') }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('activity_log.index') }}">{{ get_label('activity_log', 'Activity Log') }}</a>

                    </li>
                    <li class="breadcrumb-item active">
                        {{ get_label('calendar_view', 'Calendar View') }}
                    </li>
                </ol>
            </nav>

        </div>
        <div>
            <a href="{{ route('activity_log.index') }}"><button type="button" class="btn btn-sm btn-primary"
                    data-bs-toggle="tooltip" data-bs-placement="left"
                    data-bs-original-title="{{ get_label('activity_log', 'Activity Log') }}"><i
                        class='bx bx-list-ul'></i></button></a>
        </div>

    </div>
    <div class="card mb-4">
        <div class="card-body">
            <div id="activityLogCalendar"></div>
        </div>
    </div>
    @endsection