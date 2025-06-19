<?php $__env->startSection('title'); ?>
<?php echo e(get_label('preferences', 'Preferences')); ?>

<?php $__env->stopSection(); ?>

<?php
$enabledNotifications = getUserPreferences(
'notification_preference',
'enabled_notifications',
getAuthenticatedUser(true, true),
);

$notificationTypes = [
'project_assignment' => 'Project Assignment',
'project_status_updation' => 'Project Status Updation',
'project_issue_assignment' => 'Project Issue Assignment',
'task_assignment' => 'Task Assignment',
'task_status_updation' => 'Task Status Updation',
'workspace_assignment' => 'Workspace Assignment',
'meeting_assignment' => 'Meeting Assignment',
'announcement' => 'Announcement',
'leave_request_creation' => 'Leave Request Creation',
'leave_request_status_updation' => 'Leave Request Status Updation',
'team_member_on_leave_alert' => 'Team Member on Leave Alert',
'task_reminder' => 'Task Reminder',
'recurring_task' => 'Recurring Task',
];

$channels = ['email', 'sms', 'whatsapp', 'system', 'slack'];
$isAdminOrLeaveEditor = is_admin_or_leave_editor();
?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-2 mt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <a href="<?php echo e(route('home.index')); ?>"><?php echo e(get_label('home', 'Home')); ?></a>
                </li>
                <li class="breadcrumb-item active"><?php echo e(get_label('preferences', 'Preferences')); ?></li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="list-group list-group-horizontal-md text-md-center mb-4">
                <a class="list-group-item list-group-item-action active" data-bs-toggle="list"
                    href="#notification-preferences"><?php echo e(get_label('notification_preferences', 'Notification Preferences')); ?></a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list"
                    href="#customize-menu-order"><?php echo e(get_label('customize_menu_order', 'Customize Menu Order')); ?></a>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <!-- Notification Preferences Tab -->
                <div class="tab-pane fade show active" id="notification-preferences" role="tabpanel">
                    <form action="<?php echo e(route('preferences.saveNotifications')); ?>" method="POST">
                        <div class="form-check">
                            <input type="checkbox" id="selectAllPreferences" class="form-check-input">
                            <label class="form-check-label"
                                for="selectAllPreferences"><?= get_label('select_all', 'Select all') ?></label>
                        </div>
                        <div class="table-responsive">
                            <table class="table-striped table">
                                <thead>
                                    <tr>
                                        <th><?php echo e(get_label('type', 'Type')); ?></th>
                                        <?php $__currentLoopData = $channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $channel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <th class="text-center"><?php echo e(get_label($channel, ucfirst($channel))); ?></th>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $notificationTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(get_label($type, $label)); ?></td>
                                        <?php $__currentLoopData = $channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $channel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                        $value = "{$channel}_{$type}";
                                        $isDisabled =
                                        $type === 'leave_request_creation' &&
                                        !$isAdminOrLeaveEditor;
                                        $isChecked =
                                        is_array($enabledNotifications) &&
                                        in_array($value, $enabledNotifications);
                                        ?>
                                        <td class="text-center">
                                            <input type="checkbox" name="enabled_notifications[]"
                                                value="<?php echo e($value); ?>"
                                                <?php echo e($isDisabled ? 'disabled' : ''); ?>

                                                <?php echo e($isChecked ? 'checked' : ''); ?>>
                                        </td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary"><?php echo e(get_label('update', 'Update')); ?></button>
                        </div>
                    </form>
                </div>

                <!-- Customize Menu Order Tab -->
                <div class="tab-pane fade" id="customize-menu-order" role="tabpanel">
                    <form id="menu-order-form" method="POST">
                    <ul id="sortable-menu">
                            <?php
                            // Group menus by category
                            $menusByCategory = [];
                            foreach ($sortedMenus as $menu) {
                            if (!isset($menu['show']) || $menu['show'] === 1) {
                            $category = $menu['category'] ?? 'uncategorized';
                            if (!isset($menusByCategory[$category])) {
                            $menusByCategory[$category] = [];
                            }
                            $menusByCategory[$category][] = $menu;
                            }
                            }
                            ?>

                            <?php $__currentLoopData = $menusByCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category => $categoryMenus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-- Category heading -->
                            <li class="category-header">
                            <span class="folder-icon bx bx-folder"></span>
                            <strong><?php echo e(get_label($category, ucfirst(str_replace('_', ' ', $category)))); ?></strong>
                            </li>

                            <!-- Menus in this category -->
                            <?php $__currentLoopData = $categoryMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li data-id="<?php echo e($menu['id']); ?>">
                                <span class="handle bx bx-menu"></span>
                                <span><?php echo e($menu['label']); ?></span>

                                <!-- Check if there are submenus -->
                                <?php if(!empty($menu['submenus'])): ?>
                                <ul class="submenu">
                                    <?php $__currentLoopData = $menu['submenus']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(!isset($submenu['show']) || $submenu['show'] === 1): ?>
                                    <li data-id="<?php echo e($submenu['id']); ?>">
                                        <span class="handle bx bx-menu"></span>
                                        <span><?php echo e($submenu['label']); ?></span>
                                    </li>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <?php endif; ?>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary"><?php echo e(get_label('update', 'Update')); ?></button>
                            <button type="button" class="btn btn-warning" id="btnResetDefaultMenuOrder"><?php echo e(get_label('reset_to_default', 'Reset to default')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="confirmResetDefaultMenuOrderModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel2"><?= get_label('confirm', 'Confirm!') ?></h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><?= get_label('confirm_reset_default_menu', 'Are you sure you want to reset the menu order to the default?') ?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    <?= get_label('close', 'Close') ?>
                </button>
                <button type="submit" class="btn btn-primary"
                    id="btnconfirmResetDefaultMenuOrder"><?= get_label('yes', 'Yes') ?></button>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo e(asset('assets/js/pages/preferences.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/settings/preferences.blade.php ENDPATH**/ ?>