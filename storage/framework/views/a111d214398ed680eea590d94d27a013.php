
<?php $__env->startSection('title'); ?>
<?php echo e(get_label('task_list', 'Task List')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="d-flex justify-content-between mt-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('home.index')); ?>">
                            <?php echo e(get_label('home', 'Home')); ?>

                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        <?php echo e(get_label('task_lists', 'Task Lists')); ?>

                    </li>

                </ol>
            </nav>
        </div>
        <div>
            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#create_task_list_modal"><button
                    type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right"
                    data-bs-original-title="<?php echo e(get_label('create_task_list', 'Create Task List')); ?>"><i
                        class="bx bx-plus"></i></button></a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <?php if($taskLists->count() > 0): ?>
                    <input type="hidden" id="data_type" value="task-lists">

                    <table id="table" data-toggle="table" data-loading-template="loadingTemplate"
                        data-url="<?php echo e(route('task_lists.list')); ?>" data-icons-prefix="bx" data-icons="icons"
                        data-show-refresh="true" data-total-field="total" data-trim-on-search="false" data-data-field="rows"
                        data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-side-pagination="server"
                        data-show-columns="true" data-pagination="true" data-sort-name="id" data-sort-order="desc"
                        data-mobile-responsive="true" data-query-params="queryParams">
                        <thead>
                            <tr>
                                <th data-checkbox="true"></th>
                                <th data-sortable="true" data-field="id"> <?php echo e(get_label('id', 'ID')); ?></th>
                                <th data-sortable="true" data-field="name"><?php echo e(get_label('title', 'Title')); ?> </th>
                                <th data-sortable="false" data-field="project"><?php echo e(get_label('project', 'Project')); ?></th>
                                <th data-sortable="true" data-field="created_at" data-visible="false">
                                    <?php echo e(get_label('created_at', 'Created at')); ?>

                                </th>
                                <th data-sortable="true" data-field="updated_at" data-visible="false">
                                    <?php echo e(get_label('updated_at', 'Updated at')); ?>

                                </th>
                                <th data-field="actions"><?php echo e(get_label('actions', 'Actions')); ?></th>
                            </tr>
                        </thead>
                    </table>
                <?php else: ?>
                                <?php
                                    $type = 'Task Lists';
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
    </div>

</div>
<script>
    var label_update = '<?php echo e(get_label('update ', 'Update')); ?>';
    var label_delete = '<?php echo e(get_label('delete ', 'Delete')); ?>';
</script>
<script src="<?php echo e(asset('assets/js/pages/tags.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/task_lists/index.blade.php ENDPATH**/ ?>