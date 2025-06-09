<?php $__env->startSection('title'); ?>
    <?= get_label('tasks', 'Tasks') ?> - <?= get_label('draggable', 'Draggable') ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php
        $routePrefix = Route::getCurrentRoute()->getPrefix();
    ?>
  <div class="container-fluid">
    <div class="d-flex justify-content-between mb-2 mt-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('home.index')); ?>"><?= get_label('home', 'Home') ?></a>
                    </li>
                    <?php if(isset($project->id)): ?>

                    <li class="breadcrumb-item">
                        <a href="<?php echo e(getDefaultViewRoute('projects')); ?>"><?= get_label('projects', 'Projects') ?></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('projects.info' ,['id' =>$project->id])); ?>"><?php echo e($project->title); ?></a>
                    </li>
                    <?php endif; ?>
                    <li class="breadcrumb-item active">
                        <?= get_label('tasks', 'Tasks') ?>
                    </li>
                </ol>
            </nav>
        </div>
        <div>
            <?php
            $taskDefaultView = getUserPreferences('tasks', 'default_view');
            ?>
            <?php if($taskDefaultView === 'tasks/draggable'): ?>
            <span class="badge bg-primary"><?= get_label('default_view', 'Default View') ?></span>
            <?php else: ?>
            <a href="javascript:void(0);"><span class="badge bg-secondary" id="set-default-view" data-type="tasks" data-view="draggable"><?= get_label('set_as_default_view', 'Set as Default View') ?></span></a>
            <?php endif; ?>
        </div>
        <div>
            <?php echo $__env->make('partials.tasks-views-buttons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <?php if($total_tasks > 0): ?>
        <div class="alert alert-primary alert-dismissible" role="alert">
            <?= get_label('drag_drop_update_task_status', 'Drag and drop to update task status') . ' !' ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="d-flex card flex-row overflow-x-y-hidden">
           <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($status->admin_id == getAdminIdByUserRole() || $status->admin_id === null): ?>
                <div class="my-4 status-row">
                    <h4 class="fw-bold mx-4 my-2"><?php echo e($status->title); ?></h4>
                    <div class="row m-2 d-flex flex-column h-100" id="<?php echo e($status->slug); ?>"
                        data-status="<?php echo e($status->id); ?>">
                        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($task->status_id == $status->id): ?>
                                <?php if (isset($component)) { $__componentOriginal60510e71c64251387ed0924eb1007651 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal60510e71c64251387ed0924eb1007651 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.kanban','data' => ['task' => $task]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('kanban'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['task' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($task)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal60510e71c64251387ed0924eb1007651)): ?>
<?php $attributes = $__attributesOriginal60510e71c64251387ed0924eb1007651; ?>
<?php unset($__attributesOriginal60510e71c64251387ed0924eb1007651); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal60510e71c64251387ed0924eb1007651)): ?>
<?php $component = $__componentOriginal60510e71c64251387ed0924eb1007651; ?>
<?php unset($__componentOriginal60510e71c64251387ed0924eb1007651); ?>
<?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php else: ?>
        <?php
        $type = 'Tasks';
        ?>
        <?php if (isset($component)) { $__componentOriginal0fbbaf7987e44b855eae69b67dad7fdf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0fbbaf7987e44b855eae69b67dad7fdf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.empty-state-card','data' => ['type' => $type]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('empty-state-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($type)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0fbbaf7987e44b855eae69b67dad7fdf)): ?>
<?php $attributes = $__attributesOriginal0fbbaf7987e44b855eae69b67dad7fdf; ?>
<?php unset($__attributesOriginal0fbbaf7987e44b855eae69b67dad7fdf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0fbbaf7987e44b855eae69b67dad7fdf)): ?>
<?php $component = $__componentOriginal0fbbaf7987e44b855eae69b67dad7fdf; ?>
<?php unset($__componentOriginal0fbbaf7987e44b855eae69b67dad7fdf); ?>
<?php endif; ?>
    <?php endif; ?>
</div>
</div>

<script>
    var statusArray = '<?php echo json_encode($statuses); ?>';
    var routePrefix = '<?php echo e($routePrefix); ?>';
</script>
<script src="<?php echo e(asset('assets/js/pages/task-board.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/tasks/board_view.blade.php ENDPATH**/ ?>