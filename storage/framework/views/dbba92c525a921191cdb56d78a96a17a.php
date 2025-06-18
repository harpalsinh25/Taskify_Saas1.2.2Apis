

<?php $__env->startSection('title'); ?>
    <?= get_label('contract_types', 'Contract types') ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="d-flex justify-content-between mt-4">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('home.index')); ?>"><?= get_label('home', 'Home') ?></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('contracts.index')); ?>"><?= get_label('contracts', 'Contracts') ?></a>
                        </li>
                        <li class="breadcrumb-item active">
                            <?= get_label('contract_types', 'Contract types') ?>
                        </li>

                    </ol>
                </nav>
            </div>
            <div>
                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#create_contract_type_modal"><button
                        type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="left"
                        data-bs-original-title=" <?= get_label('create_contract_type', 'Create contract type') ?>"><i
                            class="bx bx-plus"></i></button></a>
                <a href="<?php echo e(route('contracts.index')); ?>"><button type="button" class="btn btn-sm btn-primary"
                        data-bs-toggle="tooltip" data-bs-placement="left"
                        data-bs-original-title="<?= get_label('contracts', 'Contracts') ?>"><i
                            class='bx bx-list-ul'></i></button></a>
            </div>
        </div>

        <div class="card ">
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <?php if($contract_types > 0): ?>
                        <input type="hidden" id="data_type" value="contract-type">

                        <table id="table" data-toggle="table" data-loading-template="loadingTemplate"
                            data-url="<?php echo e(route('contracts.contract_types_list')); ?>" data-icons-prefix="bx"
                            data-icons="icons" data-show-refresh="true" data-total-field="total" data-trim-on-search="false"
                            data-data-field="rows" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true"
                            data-side-pagination="server" data-show-columns="true" data-pagination="true"
                            data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true"
                            data-query-params="queryParams" data-route-prefix="<?php echo e(Route::getCurrentRoute()->getPrefix()); ?>">

                            <thead>
                                <tr>
                                    <th data-checkbox="true"></th>
                                    <th data-sortable="true" data-field="id"><?= get_label('id', 'ID') ?></th>
                                    <th data-sortable="true" data-field="type"><?= get_label('type', 'Type') ?></th>
                                    <th data-formatter="actionsFormatter"><?= get_label('actions', 'Actions') ?></th>
                                </tr>
                            </thead>
                        </table>
                    <?php else: ?>
                        <?php
                        $type = 'Contract types'; ?>
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
        var label_update = '<?= get_label('update ', 'Update ') ?>';
        var label_delete = '<?= get_label('delete ', 'Delete ') ?>';
    </script>
    <script src="<?php echo e(asset('assets/js/pages/contract-types.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/contracts/contract_types.blade.php ENDPATH**/ ?>