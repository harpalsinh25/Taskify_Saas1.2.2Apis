
<?php $__env->startSection('title'); ?>
    <?php echo e(get_label('tasks', 'Tasks')); ?> - <?php echo e(get_label('group_by_task_lists', 'Group by task lists')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <!-- Breadcrumb Navigation -->
        <div class="d-flex justify-content-between mb-2 mt-4">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('home.index')); ?>">
                                <?= get_label('home', 'Home') ?>
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            <?= get_label('tasks', 'Tasks') ?>
                        </li>
                    </ol>
                </nav>
            </div>
            <!-- Default View Badge or Option -->
            <div>
                <?php
                    $taskDefaultView = getUserPreferences('tasks', 'default_view');
                    // dd($taskDefaultView);
                ?>
                <?php if($taskDefaultView === 'tasks/group-by-task-list'): ?>
                    <span class="badge bg-primary">
                        <?= get_label('default_view', 'Default View') ?>
                    </span>
                <?php else: ?>
                    <a href="javascript:void(0);">
                        <span class="badge bg-secondary" id="set-default-view" data-type="tasks"
                            data-view="group-by-task-list">
                            <?= get_label('set_as_default_view', 'Set as Default View') ?>
                        </span>
                    </a>
                <?php endif; ?>
            </div>
            <?php echo $__env->make('partials.tasks-views-buttons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        </div>
        <!-- Task Table -->
        <div class="card">
            <div class="card-header border-bottom py-3">
                <div class="d-flex justify-content-between align-items-center row">
                    <div class="col-md-6">
                        <h5 class="mb-0"><?php echo e(get_label('grouped_by_task_lists', 'Grouped by Task lists')); ?></h5>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="task-lists" id="taskListsContainer">
                    <?php if (isset($component)) { $__componentOriginalc840d4c19a013751b5154d5b8331ddb1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc840d4c19a013751b5154d5b8331ddb1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.group-task-list','data' => ['taskLists' => $taskLists]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('group-task-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['taskLists' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($taskLists)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc840d4c19a013751b5154d5b8331ddb1)): ?>
<?php $attributes = $__attributesOriginalc840d4c19a013751b5154d5b8331ddb1; ?>
<?php unset($__attributesOriginalc840d4c19a013751b5154d5b8331ddb1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc840d4c19a013751b5154d5b8331ddb1)): ?>
<?php $component = $__componentOriginalc840d4c19a013751b5154d5b8331ddb1; ?>
<?php unset($__componentOriginalc840d4c19a013751b5154d5b8331ddb1); ?>
<?php endif; ?>
                </div>
                <!-- Loading Indicator -->
                <div id="loadingIndicator" class="d-none">
                    <div class="d-flex justify-content-center py-3">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo e(asset('assets/js/pages/group-by-task-lists.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/tasks/group_by_task_lists.blade.php ENDPATH**/ ?>