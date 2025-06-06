<?php if($unreadNotificationsCount > 0): ?>
    <?php $__currentLoopData = $unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <?php

                // Mapping of notification types to their respective routes
                $routes = [
                    'project' => '/master-panel/projects/information/$id',
                    'task' => '/master-panel/tasks/information/$id',
                    'workspace' => '/master-panel/workspaces',
                    'meeting' => '/master-panel/meetings',
                    'project_comment_mention' => '/master-panel/projects/information/$id',
                    'task_comment_mention' => '/master-panel/tasks/information/$id',
                    'leave_request' => '/master-panel/leave-requests',
                    'announcement' => '/master-panel/announcements',
                    'task_reminder' => '/master-panel/tasks/information/$id',
                    'recurring_task' => '/master-panel/tasks/information/$id',
                ];
                // Fallback route if the type is not matched in the array
                $defaultRoute = '/master-panel/notifications';
                // Determine the base URL based on the notification type, or fallback to the default
                $baseUrl = $routes[$notification->type] ?? $defaultRoute;

                // Check if the URL contains the '$id' placeholder and replace it with the actual id if
                // available
                if (strpos($baseUrl, '$id') !== false && !empty($notification->type_id)) {
                    $url = str_replace('$id', $notification->type_id, $baseUrl);
                } else {
                    $url = $baseUrl; // No id to append or not a route that requires it
                }
            ?>

            <a class="dropdown-item update-notification-status" data-id="<?php echo e($notification->id); ?>"
                href="<?php echo e($url); ?>">
                <div class="d-flex align-items-center">
                    <div class="h6 mb-0 me-auto text-truncate">
                        <!-- Add text-truncate class -->
                        <?php echo e($notification->title); ?>

                        <small class="text-muted mx-2"><?php echo e($notification->created_at->diffForHumans()); ?></small>
                    </div>
                    <i class="bx bx-bell me-2"></i>
                </div>
                <div class="text-truncate">
                    <small>
                    <!-- Add text-truncate class -->
                    <?php echo e(strlen($notification->message) > 50 ? substr($notification->message, 0, 50) . '...' : $notification->message); ?>

                    </small>
                </div>
            </a>
        </li>
        <li>
            <div class="dropdown-divider"></div>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <li class="d-flex align-items-center justify-content-center p-5">
        <span><?php echo e(get_label('no_unread_notifications', 'No unread notifications')); ?></span>
    </li>
    <li>
        <div class="dropdown-divider"></div>
    </li>
<?php endif; ?>
<?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\Code v1.2.1 upload this on server\resources\views/partials/unread_notifications.blade.php ENDPATH**/ ?>