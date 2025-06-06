<?php $__env->startSection('title'); ?>
    <?php echo e(get_label('gantt_chart_view', 'Gantt Chart View')); ?> - <?php echo e(get_label('projects', 'Projects')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Frappe Gantt -->
    <div class="container-fluid">
        <div class="d-flex justify-content-between mb-2 mt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('home.index')); ?>"><?= get_label('home', 'Home') ?></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(getDefaultViewRoute('projects')); ?>">
                            <?= get_label('projects', 'Projects') ?></a>
                    </li>
                    <li class="breadcrumb-item active"><?= get_label('gantt_chart_view', 'Gantt Chart View') ?></li>
                </ol>
            </nav>
            <div>
                <a href="<?php echo e(route('projects.list_view')); ?>"><button type="button" class="btn btn-sm btn-primary"
                        data-bs-toggle="tooltip" data-bs-placement="left"
                        data-bs-original-title="<?= get_label('list_view', 'List view') ?>"><i
                            class='bx bx-list-ul'></i></button></a>
                <a
                    href="<?php echo e(url(request()->has('status') ? route('projects.index', ['status' => request()->status]) : route('projects.index'))); ?>">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="left"
                        data-bs-original-title="<?= get_label('grid_view', 'Grid view') ?>">
                        <i class='bx bxs-grid-alt'></i>
                    </button>
                </a>
                <a href="<?php echo e(route('projects.kanban_view')); ?>"><button type="button" class="btn btn-sm btn-primary"
                        data-bs-toggle="tooltip" data-bs-placement="left"
                        data-bs-original-title="<?= get_label('kanban_view', 'Kanban View') ?>"><i
                            class='bx bxs-dashboard'></i></button></a>

                            <a href="<?php echo e(route('projects.calendar_view')); ?>"><button type="button" class="btn btn-sm btn-primary"
                            data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-original-title="<?php echo e(get_label('calendar_view', 'Calendar log')); ?>"><i
                                class='bx bx-calendar'></i></button></a>
            </div>
        </div>
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <!-- Left Section: Previous and Next Buttons -->
                    <div class="btn-group" id="navigation-buttons-container">
                        <button id="prev" class="btn btn-outline-primary"><?php echo e(get_label('prev', 'Previous')); ?></button>
                        <button id="next" class="btn btn-outline-primary"><?php echo e(get_label('next', 'Next')); ?></button>
                    </div>
                    <div>
                        <span id="current-date" class="fw-bold fs-5 text-secondary text-center"></span>
                    </div>
                    <!-- Right Section: Views and Current Date -->
                    <div class="d-flex align-items-center">
                        <div class="btn-group me-3">
                            <button id="day-view"
                                class="btn btn-light btn-primary view-btns border"><?php echo e(get_label('day', 'Day')); ?></button>
                            <button id="week-view"
                                class="btn btn-light view-btns border"><?php echo e(get_label('week', 'Week')); ?></button>
                            <button id="month-view"
                                class="btn btn-light active view-btns border"><?php echo e(get_label('month', 'Month')); ?></button>
                        </div>
                    </div>
                </div>
                <!-- Gantt chart container -->
                <div id="gantt" class="rounded-3 border"></div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="confirmUpdateDates" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        <?php echo e(get_label('confirm_update_dates', 'Confirm Update Dates')); ?>

                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <?php echo e(get_label('cancel', 'Cancel')); ?>

                    </button>
                    <button type="button" id="confirm_update_dates"
                        class="btn btn-primary"><?php echo e(get_label('confirm', 'Confirm')); ?></button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="<?php echo e(asset('assets/js/pages/gantt-chart.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/projects/gantt-chart-view.blade.php ENDPATH**/ ?>