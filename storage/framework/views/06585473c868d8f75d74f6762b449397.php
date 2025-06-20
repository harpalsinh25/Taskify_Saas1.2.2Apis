<?php $__env->startSection('title'); ?>
    <?php echo e(get_label('lead_sources', 'Lead Sources')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-2 mt-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(url('home')); ?>"><?= get_label('home', 'Home') ?></a>
                    </li>
                    <li class="breadcrumb-item">
                        <?= get_label('leads_management', 'Leads Management') ?>
                    </li>
                    <li class="breadcrumb-item active">
                        <?= get_label('lead_sources', 'Lead Sources') ?>
                    </li>
                </ol>
            </nav>
        </div>
        <div>
            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#create_lead_source_modal"><button
                    type="button" class="btn btn-sm btn-primary action_create_items" data-bs-toggle="tooltip"
                    data-bs-placement="right"
                     data-bs-original-title=" <?= get_label('create_lead_source', 'Create Lead Source') ?>"><i
                        class="bx bx-plus"></i></button></a>
        </div>
    </div>

    <?php if($lead_sources->count() > 0): ?>
    <?php
        $visibleColumns = getUserPreferences('lead_sources');
    ?>
    <div class="card">
        <div class="card-body">
            <div class="row">


            </div>
            <div class="table-responsive text-nowrap">
                <input type="hidden" id="data_type" value="lead-sources">
                <input type="hidden" id="save_column_visibility">
                <table id="table" data-toggle="table" data-loading-template="loadingTemplate"
                            data-url="<?php echo e(route('lead-sources.list')); ?>" data-icons-prefix="bx" data-icons="icons"
                            data-show-refresh="true" data-total-field="total" data-trim-on-search="false"
                            data-data-field="rows" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true"
                            data-side-pagination="server" data-show-columns="true" data-pagination="true"
                            data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true"
                            data-query-params="queryParams">
                            <thead>
                                <tr>
                                    <th data-checkbox="true"></th>
                                    <th data-field="id"
                                        data-visible="<?php echo e(in_array('id', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>"
                                        data-sortable="true"><?= get_label('id', 'ID') ?></th>
                                    <th data-field="name"
                                        data-visible="<?php echo e(in_array('name', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>"
                                        data-sortable="true"><?= get_label('name', 'Name') ?></th>
                                    <th data-field="actions"
                                        data-visible="<?php echo e(in_array('actions', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>">
                                        <?= get_label('actions', 'Actions') ?></th>
                                </tr>
                            </thead>
                        </table>
            </div>
        </div>
    </div>
<?php else: ?>
    <?php
    $type = 'Lead sources'; ?>
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
<script src="<?php echo e(asset('assets/js/pages/lead_sources.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/lead_sources/index.blade.php ENDPATH**/ ?>