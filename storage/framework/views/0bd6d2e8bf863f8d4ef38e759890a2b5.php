<div class="col-12">
    <div class="d-flex justify-content-between align-items-center">
        <div></div>
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_task_time_entries">
            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="left"
                data-bs-original-title="<?= get_label('add_task_time_entries', 'Add Task Time Entries') ?>">
                <i class="bx bx-plus"></i>
            </button>
        </a>
    </div>
    <?php
        $visibleColumns = getUserPreferences('tasks/time_entries');
    ?>
    <div class="table-responsive text-nowrap">
        <input type="hidden" id="data_type" value="tasks/time-entries">
        <input type="hidden" id="data_table" value="task-time-entries">
        <input type="hidden" id="save_column_visibility">
        <table id="task-time-entries" data-toggle="table" data-loading-template="loadingTemplate"
            data-url="<?php echo e(route('tasks.time_entries.list', ['id' => $task->id])); ?>" data-icons-prefix="bx"
            data-icons="icons" data-show-refresh="true" data-total-field="total" data-trim-on-search="false"
            data-data-field="rows" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true"
            data-side-pagination="server" data-show-columns="true" data-pagination="true" data-sort-name="id"
            data-sort-order="desc" data-mobile-responsive="true" data-show-footer="true"
            data-query-params="queryParamsTaskTimeEntries">
            <thead>
                <tr>
                    <th data-checkbox="true"></th>
                    <th data-field="id"
                        data-visible="<?php echo e(in_array('id', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>"
                        data-sortable="true"><?= get_label('id', 'ID') ?></th>
                    <th data-field="user"
                        data-visible="<?php echo e(in_array('user', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>">
                        <?php echo e(get_label('user', 'User')); ?></th>
                    <th data-field="entry_date"
                        data-visible="<?php echo e(in_array('entry_date', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>"
                        data-sortable="true"><?= get_label('entry_date', 'Entry date') ?></th>
                    <th data-field="entry_type"
                        data-visible="<?php echo e(in_array('entry_type', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>">
                        <?= get_label('entry_type', 'Entry type') ?></th>
                    <th data-field="standard_hours"
                        data-visible="<?php echo e(in_array('standard_hours', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>">
                        <?php echo e(get_label('standard_hours', 'Standard Hours')); ?></th>
                    <th data-field="start_time"
                        data-visible="<?php echo e(in_array('start_time', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>">
                        <?php echo e(get_label('start_time', 'Start Time')); ?></th>
                    <th data-field="end_time"
                        data-visible="<?php echo e(in_array('end_time', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>"
                        data-sortable="false"><?php echo e(get_label('end_time', 'End Time')); ?></th>
                   <th data-field="total_duration" data-visible="<?php echo e(in_array('total_duration', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>"data-footer-formatter="sumTotalDuration">
                <?php echo e(get_label('total_duration', 'Total Duration')); ?>

                   </th>
                    <th data-field="is_billable"
                        data-visible="<?php echo e(in_array('is_billable', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>">
                        <?php echo e(get_label('billable', 'Billable')); ?></th>
                    <th data-field="description"
                        data-visible="<?php echo e(in_array('description', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>">
                        <?php echo e(get_label('description', 'Description')); ?></th>
                    <th data-field="created_at"
                        data-visible="<?php echo e(in_array('created_at', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>"
                        data-sortable="true"><?= get_label('created_at', 'Created at') ?></th>
                    <th data-field="updated_at"
                        data-visible="<?php echo e(in_array('updated_at', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>">
                        <?php echo e(get_label('updated_at', 'Updated At')); ?></th>
                    <th data-field="actions"
                        data-visible="<?php echo e(in_array('actions', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>">
                        <?php echo e(get_label('actions', 'Actions')); ?></th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/components/task-time-entries-card.blade.php ENDPATH**/ ?>