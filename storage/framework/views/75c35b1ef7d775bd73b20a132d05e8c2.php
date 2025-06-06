<?php $__env->startSection('title'); ?>
    <?= get_label('tasks', 'Tasks') ?> - <?= get_label('list_view', 'List view') ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
                                <a href="<?php echo e(route('projects.info', ['id' => $project->id])); ?>"><?php echo e($project->title); ?></a>
                            </li>
                        <?php endif; ?>
                        <li class="breadcrumb-item active"><?= get_label('tasks', 'Tasks') ?></li>
                    </ol>
                </nav>
            </div>
            <div>
                <?php
                    $taskDefaultView = getUserPreferences('tasks', 'default_view');
                    // dd($taskDefaultView);
                ?>
                <?php if(!$taskDefaultView || $taskDefaultView === 'tasks'): ?>
                    <span class="badge bg-primary"><?= get_label('default_view', 'Default View') ?></span>
                <?php else: ?>
                    <a href="javascript:void(0);"><span class="badge bg-secondary" id="set-default-view" data-type="tasks"
                            data-view="list"><?= get_label('set_as_default_view', 'Set as Default View') ?></span></a>
                <?php endif; ?>
            </div>

            <?php echo $__env->make('partials.tasks-views-buttons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <?php
        $id = isset($project->id) ? 'project_' . $project->id : '';
        ?>
        <?php if (isset($component)) { $__componentOriginal6e07742d54bdaa8ecbb34c156d7ec080 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6e07742d54bdaa8ecbb34c156d7ec080 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tasks-card','data' => ['tasks' => $tasks,'id' => $id,'users' => $users,'clients' => $clients,'projects' => $projects,'project' => $project]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tasks-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tasks' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tasks),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($id),'users' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($users),'clients' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($clients),'projects' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($projects),'project' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($project)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6e07742d54bdaa8ecbb34c156d7ec080)): ?>
<?php $attributes = $__attributesOriginal6e07742d54bdaa8ecbb34c156d7ec080; ?>
<?php unset($__attributesOriginal6e07742d54bdaa8ecbb34c156d7ec080); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6e07742d54bdaa8ecbb34c156d7ec080)): ?>
<?php $component = $__componentOriginal6e07742d54bdaa8ecbb34c156d7ec080; ?>
<?php unset($__componentOriginal6e07742d54bdaa8ecbb34c156d7ec080); ?>
<?php endif; ?>
    </div>
    <!-- </div> -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\Code v1.2.1 upload this on server\resources\views/tasks/tasks.blade.php ENDPATH**/ ?>