<!-- meetings -->

<?php if(is_countable($meetings) && count($meetings) > 0): ?>
<?php
$visibleColumns = getUserPreferences('meetings');
?>
<div class="card">
    <div class="card-body">
        <?php echo e($slot); ?>

        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="input-group input-group-merge">
                    <input type="text" id="meeting_start_date_between" class="form-control" placeholder="<?= get_label('start_date_between', 'Start date between') ?>" autocomplete="off">
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="input-group input-group-merge">
                    <input type="text" id="meeting_end_date_between" class="form-control" placeholder="<?= get_label('end_date_between', 'End date between') ?>" autocomplete="off">
                </div>
            </div>
            <?php if(isAdminOrHasAllDataAccess()): ?>
            <div class="col-md-4 mb-3">
                <select class="form-select" id="meeting_user_filter" aria-label="Default select example">
                    <option value=""><?= get_label('select_user', 'Select user') ?></option>

                </select>
            </div>

            <div class="col-md-4 mb-3">
                <select class="form-select" id="meeting_client_filter" aria-label="Default select example">
                    <option value=""><?= get_label('select_client', 'Select client') ?></option>
                    <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($client->id); ?>"><?php echo e($client->first_name.' '.$client->last_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <?php endif; ?>
            <div class="col-md-4 mb-3">
                <select class="form-select" id="status_filter" aria-label="Default select example">
                    <option value=""><?= get_label('select_status', 'Select status') ?></option>
                    <option value="ongoing"><?= get_label('ongoing', 'Ongoing') ?></option>
                    <option value="yet_to_start"><?= get_label('yet_to_start', 'Yet to start') ?></option>
                    <option value="ended"><?= get_label('ended', 'Ended') ?></option>
                </select>
            </div>
        </div>

        <input type="hidden" id="meeting_start_date_from">
        <input type="hidden" id="meeting_start_date_to">

        <input type="hidden" id="meeting_end_date_from">
        <input type="hidden" id="meeting_end_date_to">

        <div class="table-responsive text-nowrap">
            <input type="hidden" id="data_type" value="meetings">
            <input type="hidden" id="data_table" value="meetings_table">
            <input type="hidden" id="save_column_visibility">
            <table id="meetings_table" data-toggle="table" data-loading-template="loadingTemplate" data-url="<?php echo e(route('meetings.list')); ?>" data-icons-prefix="bx" data-icons="icons" data-show-refresh="true" data-total-field="total" data-trim-on-search="false" data-data-field="rows" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-side-pagination="server" data-show-columns="true" data-pagination="true" data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true" data-query-params="queryParams">
                <thead>
                    <tr>
                        <th data-checkbox="true"></th>
                        <th data-field="id" data-visible="<?php echo e((in_array('id', $visibleColumns) || empty($visibleColumns)) ? 'true' : 'false'); ?>" data-sortable="true"><?= get_label('id', 'ID') ?></th>
                        <th data-field="title" data-visible="<?php echo e((in_array('title', $visibleColumns) || empty($visibleColumns)) ? 'true' : 'false'); ?>" data-sortable="true"><?= get_label('title', 'Title') ?></th>
                        <th data-field="users" data-visible="<?php echo e((in_array('users', $visibleColumns) || empty($visibleColumns)) ? 'true' : 'false'); ?>"><?= get_label('users', 'Users') ?></th>
                        <th data-field="clients" data-visible="<?php echo e((in_array('clients', $visibleColumns) || empty($visibleColumns)) ? 'true' : 'false'); ?>"><?= get_label('clients', 'Clients') ?></th>
                        <th data-field="start_date_time" data-visible="<?php echo e((in_array('start_date_time', $visibleColumns) || empty($visibleColumns)) ? 'true' : 'false'); ?>" data-sortable="true"><?= get_label('starts_at', 'Starts at') ?></th>
                        <th data-field="end_date_time" data-visible="<?php echo e((in_array('end_date_time', $visibleColumns) || empty($visibleColumns)) ? 'true' : 'false'); ?>" data-sortable="true"><?= get_label('ends_at', 'Ends at') ?></th>
                        <th data-field="status" data-visible="<?php echo e((in_array('status', $visibleColumns) || empty($visibleColumns)) ? 'true' : 'false'); ?>" data-sortable="true"><?= get_label('status', 'Status') ?></th>
                        <th data-field="created_at" data-visible="<?php echo e((in_array('created_at', $visibleColumns)) ? 'true' : 'false'); ?>" data-sortable="true"><?= get_label('created_at', 'Created at') ?></th>
                        <th data-field="updated_at" data-visible="<?php echo e((in_array('updated_at', $visibleColumns)) ? 'true' : 'false'); ?>" data-sortable="true"><?= get_label('updated_at', 'Updated at') ?></th>
                        <th data-field="actions" data-visible="<?php echo e((in_array('actions', $visibleColumns) || empty($visibleColumns)) ? 'true' : 'false'); ?>"><?= get_label('actions', 'Actions') ?></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<?php else: ?>
<?php
$type = 'Meetings'; ?>
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
<?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/components/meetings-card.blade.php ENDPATH**/ ?>