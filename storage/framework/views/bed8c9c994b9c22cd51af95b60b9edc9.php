 <div class="col-md-12">
     <div class="d-flex justify-content-between align-items-center">
         <div></div>
         <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#createIssueModal">
             <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="left"
                 data-bs-original-title="<?php echo e(get_label('create_issue', 'Create Issue')); ?>">
                 <i class="bx bx-plus"></i>
             </button>
         </a>
     </div>
     <?php
         $visibleColumns = getUserPreferences('projects/issues');
     ?>
     <div class="table-responsive text-nowrap">
         <input type="hidden" id="data_type" value="projects/issues">
         <input type="hidden" id="data_table" value="project_issue_table">
         <input type="hidden" id="save_column_visibility">
         <table id="project_issue_table" data-toggle="table" data-loading-template="loadingTemplate"
             data-url="<?php echo e(route('issues.list', ['project' => $project->id])); ?>" data-icons-prefix="bx" data-icons="icons"
             data-show-refresh="true" data-total-field="total" data-trim-on-search="false" data-data-field="rows"
             data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-side-pagination="server"
             data-show-columns="true" data-pagination="true" data-sort-name="id" data-sort-order="desc"
             data-mobile-responsive="true" data-query-params="ProjectIssuesQueryParams">
             <thead>
                 <tr>
                     <th data-checkbox="true"></th>
                     <th data-field="id" data-sortable="true"
                         data-visible="<?php echo e(in_array('id', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>">
                         <?php echo e(get_label('id', 'ID')); ?></th>
                     <th data-field="title"
                         data-visible="<?php echo e(in_array('title', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>">
                         <?php echo e(get_label('title', 'Title')); ?></th>
                     <th data-field="description"
                         data-visible="<?php echo e(in_array('description', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>">
                         <?php echo e(get_label('description', 'Description')); ?></th>
                     <th data-field="status" data-sortable="true"
                         data-visible="<?php echo e(in_array('status', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>">
                         <?php echo e(get_label('status', 'Status')); ?></th>
                     <th data-field="users"
                         data-visible="<?php echo e(in_array('users', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>">
                         <?php echo e(get_label('users', 'Users')); ?></th>
                     <th data-field="created_by"
                         data-visible="<?php echo e(in_array('created_by', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>">
                         <?php echo e(get_label('created_by', 'Created By')); ?></th>
                     <th data-field="created_at"
                         data-visible="<?php echo e(in_array('created_at', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>"
                         data-sortable="true"><?php echo e(get_label('created_at', 'Created at')); ?> </th>
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
<?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/components/project-issues.blade.php ENDPATH**/ ?>