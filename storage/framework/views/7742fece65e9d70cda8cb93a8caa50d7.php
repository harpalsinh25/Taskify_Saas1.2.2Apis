<?php $__env->startSection('title'); ?>
    <?= get_label('clients', 'Clients') ?>
<?php $__env->stopSection(); ?>
<?php
    $visibleColumns = getUserPreferences('clients');
?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="d-flex justify-content-between mt-4">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('home.index')); ?>"><?= get_label('home', 'Home') ?></a>
                        </li>
                        <li class="breadcrumb-item active">
                            <?= get_label('clients', 'Clients') ?>
                        </li>
                    </ol>
                </nav>
            </div>
            <div>
                <a href="<?php echo e(route('clients.create')); ?>"><button type="button" class="btn btn-sm btn-primary"
                        data-bs-toggle="tooltip" data-bs-placement="left"
                        data-bs-original-title="<?= get_label('create_client', 'Create client') ?>"><i
                            class='bx bx-plus'></i></button></a>
            </div>
        </div>
        <?php if(is_countable($clients) && count($clients) > 0): ?>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <select class="form-select" id="client_status_filter" aria-label="Default select example">
                                <option value=""><?= get_label('select_status', 'Select status') ?></option>
                                <option value="1"><?php echo e(get_label('active', 'Active')); ?></option>
                                <option value="0"><?php echo e(get_label('deactive', 'Deactive')); ?></option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <select class="form-select" id="client_internal_purpose_filter"
                                aria-label="Default select example">
                                <option value=""><?= get_label('all', 'All') ?></option>
                                <option value="0"><?php echo e(get_label('normal', 'Normal')); ?></option>
                                <option value="1"><?php echo e(get_label('internal_purpose', 'Internal Purpose')); ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <input type="hidden" id="data_type" value="clients">
                            <input type="hidden" id="save_column_visibility">
                            <table id="table" data-toggle="table" data-loading-template="loadingTemplate"
                                data-url="<?php echo e(route('clients.list')); ?>" data-icons-prefix="bx" data-icons="icons"
                                data-show-refresh="true" data-total-field="total" data-trim-on-search="false"
                                data-data-field="rows" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true"
                                data-side-pagination="server" data-show-columns="true" data-pagination="true"
                                data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true"
                                data-query-params="queryParams"
                                data-route-prefix="<?php echo e(Route::getCurrentRoute()->getPrefix()); ?>">

                                <thead>

                                    <tr>
                                        <th data-checkbox="true"></th>
                                        <th data-field="id"
                                            data-visible="<?php echo e(in_array('id', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>"
                                            data-sortable="true"><?= get_label('id', 'ID') ?></th>
                                        <th data-field="profile"
                                            data-visible="<?php echo e(in_array('profile', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>">
                                            <?= get_label('clients', 'Clients') ?></th>
                                        <th data-field="company"
                                            data-visible="<?php echo e(in_array('company', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>"
                                            data-sortable="true"><?= get_label('company', 'Company') ?></th>
                                        <th data-field="phone"
                                            data-visible="<?php echo e(in_array('phone', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>"
                                            data-sortable="true"><?= get_label('phone_number', 'Phone number') ?></th>
                                        <th data-field="assigned"
                                            data-visible="<?php echo e(in_array('assigned', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>">
                                            <?= get_label('assigned', 'Assigned') ?></th>
                                        <th data-field="created_at"
                                            data-visible="<?php echo e(in_array('created_at', $visibleColumns) ? 'true' : 'false'); ?>"
                                            data-sortable="true"><?= get_label('created_at', 'Created at') ?></th>
                                        <th data-field="updated_at"
                                            data-visible="<?php echo e(in_array('updated_at', $visibleColumns) ? 'true' : 'false'); ?>"
                                            data-sortable="true"><?= get_label('updated_at', 'Updated at') ?></th>
                                        <th data-field="actions"
                                            data-visible="<?php echo e(in_array('actions', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>">
                                            <?= get_label('actions', 'Actions') ?></th>
                                    </tr>
                                </thead>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <?php
            $type = 'Clients'; ?>
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
        var label_update = '<?= get_label('update ', 'Update ') ?>';
        var label_delete = '<?= get_label('delete ', 'Delete ') ?>';
        var label_projects = '<?= get_label('projects ', 'Projects ') ?>';
        var label_tasks = '<?= get_label('tasks ', 'Tasks ') ?>';
    </script>
    <script src="<?php echo e(asset('assets/js/pages/clients.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/clients/clients.blade.php ENDPATH**/ ?>