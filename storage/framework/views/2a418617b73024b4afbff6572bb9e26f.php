<?php $__env->startSection('title'); ?>
<?php echo e(get_label('projects', 'Projects')); ?> - <?php echo e(get_label('calendar_view', 'Calendar View')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-2 mt-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('home.index')); ?>"><?php echo e(get_label('home', 'Home')); ?></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('projects.index')); ?>"><?php echo e(get_label('projects', 'projects')); ?></a>

                    </li>
                    <li class="breadcrumb-item active">
                        <?php echo e(get_label('calendar_view', 'Calendar View')); ?>

                    </li>
                </ol>
            </nav>

        </div>
        <div>
        <a href="javascript:void(0);" class="btn-open-modal" data-bs-toggle="modal" data-bs-target="#create_project_modal">
                <button type="button" class="btn btn-sm btn-primary action_create_projects" 
                    data-bs-toggle="tooltip" data-bs-placement="left" 
                    title="<?php echo e(get_label('create_project', 'Create project')); ?>">
                    <i class='bx bx-plus'></i>
                </button>
            </a>

            <a
                href="<?php echo e(url(request()->has('status') ? route('projects.index', ['status' => request()->status]) : route('projects.index'))); ?>">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="left"
                    data-bs-original-title="<?= get_label('grid_view', 'Grid view') ?>">
                    <i class='bx bxs-grid-alt'></i>
                </button>
            </a>
            <a href="<?php echo e(route('projects.kanban_view', ['status' => request()->status, 'sort' => request()->sort])); ?>"><button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="<?= get_label('kanban_view', 'Kanban View') ?>"><i class='bx bxs-dashboard'></i></button></a>
            <a href="<?php echo e(route('projects.gantt_chart')); ?>"><button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="<?= get_label('gantt_chart_view', 'Gantt Chart View') ?>"><i class='bx bxs-collection'></i></button></a>
        <a href="<?php echo e(route('projects.index')); ?>"><button type="button" class="btn btn-sm btn-primary"
                    data-bs-toggle="tooltip" data-bs-placement="left"
                    data-bs-original-title="<?php echo e(get_label('list_view', 'List view')); ?>"><i
                        class='bx bx-list-ul'></i></button></a>
</div>
    </div>

    <div>
           


            <div class="card mb-4">
                <div class="card-body">
                    <div id="projectsCalenderDiv"></div>
                </div>
            </div>
        </div>
</div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/projects/calendar_view.blade.php ENDPATH**/ ?>