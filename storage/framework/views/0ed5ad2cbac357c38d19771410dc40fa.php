<?php $__env->startSection('title'); ?>
    <?php echo e(get_label('tasks_report', 'Tasks Report')); ?> - <?php echo e(get_label('reports', 'Reports')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="d-flex justify-content-between mt-4">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('home.index')); ?>"><?php echo e(get_label('home', 'Home')); ?></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#"><?php echo e(get_label('reports', 'Reports')); ?></a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="<?php echo e(route('reports.tasks-report')); ?>"><?php echo e(get_label('tasks_report', 'Tasks Report')); ?></a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
         <!-- Summary Cards -->
        <div class="d-flex mb-4 flex-wrap gap-3">
            <div class="card flex-grow-1 border-0 shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <i class="bx bx-task fs-2 text-primary me-3"></i>
                    <div>
                        <h6 class="card-title mb-1"><?php echo e(get_label('total_tasks', 'Total Tasks')); ?></h6>
                        <p class="card-text mb-0" id="total-tasks">Loading...</p>
                    </div>
                </div>
            </div>
            <div class="card flex-grow-1 border-0 shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <i class="bx bx-calendar-exclamation fs-2 text-danger me-3"></i>
                    <div>
                        <h6 class="card-title mb-1"><?php echo e(get_label('overdue_tasks', 'Overdue Tasks')); ?></h6>
                        <p class="card-text mb-0" id="overdue-tasks">Loading...</p>
                    </div>
                </div>
            </div>
            <div class="card flex-grow-1 border-0 shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <i class="bx bx-time-five fs-2 text-warning me-3"></i>
                    <div>
                        <h6 class="card-title mb-1"><?php echo e(get_label('average_task_completion_time', 'Avg. Task Completion Time')); ?></h6>
                        <p class="card-text mb-0" id="average-task-completion-time">Loading...</p>
                    </div>
                </div>
            </div>
            <div class="card flex-grow-1 border-0 shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <i class="bx bx-calendar fs-2 text-danger me-3"></i>
                    <div>
                        <h6 class="card-title mb-1"><?php echo e(get_label('urgent_tasks', 'Urgent Tasks')); ?></h6>
                        <p class="card-text mb-0" id="urgent_tasks">Loading...</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-body">
                  <div class="row mb-3">
                    <!-- Project Filter -->
                    <div class="col-md-4 col-lg-3 mb-md-0 mb-2">
                        <select id="filter_project" class="form-control">

                        </select>
                    </div>
                    <!-- User Filter -->
                    <div class="col-md-4 col-lg-3 mb-md-0 mb-2">
                        <select id="filter_user" class="form-control">

                        </select>
                    </div>
                    <!-- Date Range Filter -->
                    <div class="col-md-4 col-lg-6 mb-md-0 mb-2">
                        <input type="text" id="filter_date_range" class="form-control"
                            placeholder="<?php echo e(get_label('select_date_range', 'Select Date Range')); ?>">
                    </div>
                </div>
                <!-- Additional Filters Row -->
                <div class="row mb-3">
                    <!-- Client Filter -->
                    <div class="col-md-4 col-lg-3 mb-md-0 mb-2">
                        <select id="filter_client" class="form-control">

                        </select>
                    </div>
                    <!-- Status Filter -->
                    <div class="col-md-4 col-lg-3 mb-md-0 mb-2">
                        <select id="filter_status" class="form-control">

                        </select>
                    </div>
                    <!-- Export Button -->
                    <div class="col-md-4 col-lg-6 d-flex align-items-center justify-content-md-end mb-md-0 mb-2">
                        <button id="export_button" class="btn btn-primary"><?php echo e(get_label('export', 'Export')); ?></button>
                    </div>
                </div>

                <!-- Table -->
                <div class="table-responsive text-nowrap">
                    <table id="tasks_report_table" class="table table-striped table-bordered"
                        data-toggle="table"
                        data-url="<?php echo e(route('reports.tasks-report-data')); ?>"
                        data-loading-template="loadingTemplate"
                        data-icons-prefix="bx"
                        data-icons="icons"
                        data-show-refresh="true"
                        data-total-field="total"
                        data-trim-on-search="false"
                        data-data-field="tasks"
                        data-page-list="[5, 10, 20, 50, 100, 200]"
                        data-search="true"
                        data-side-pagination="server"
                        data-show-columns="true"
                        data-pagination="true"
                        data-sort-name="id"
                        data-sort-order="desc"
                        data-mobile-responsive="true"
                        data-query-params="tasks_report_query_params">
                        <thead>
                            <tr>
                                <th data-field="id" rowspan="2"><?php echo e(get_label('id', 'ID')); ?></th>
                                <th data-field="title" rowspan="2"><?php echo e(get_label('title', 'Title')); ?></th>
                                <th data-field="project" rowspan="2"><?php echo e(get_label('project', 'Project')); ?></th>
                                <th data-field="status" rowspan="2"><?php echo e(get_label('status', 'Status')); ?></th>
                                <th data-field="priority" rowspan="2"><?php echo e(get_label('priority', 'Priority')); ?></th>
                                <th colspan="3"><?php echo e(get_label('date_info', 'Date Info')); ?></th>
                                <th data-formatter="UserFormatter" data-field="users" rowspan="2"><?php echo e(get_label('users', 'Users')); ?></th>
                                <th data-field="clients" data-formatter="ClientFormatter" rowspan="2"><?php echo e(get_label('client', 'Client')); ?></th>
                            </tr>
                            <tr>
                                <th data-field="due_date" > <?php echo e(get_label('due_date', 'Due Date')); ?></th>
                                <th data-field="time.days_remaining" ><?php echo e(get_label('days_remaining', 'Days Remaining')); ?></th>
                                <th data-field ="time.overdue_days" ><?php echo e(get_label('overdue_days', 'Overdue Days')); ?></th>
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        var tasks_report_export_url = "<?php echo e(route('reports.export-tasks-report')); ?>";
    </script>
    <script src="<?php echo e(asset('assets/js/pages/tasks-report.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/reports/tasks-report.blade.php ENDPATH**/ ?>