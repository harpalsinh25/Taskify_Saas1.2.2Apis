<?php if($unreadAnnouncementsCount > 0): ?>
    <?php $__currentLoopData = $unreadAnnouncements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $announcement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <a class="dropdown-item update-announcement-status" data-id="<?php echo e($announcement->id); ?>"
                href="<?php echo e(route('announcements.index')); ?>">
                <div class="d-flex align-items-center">
                    <div class="fw-semibold me-auto"><?php echo e($announcement->title); ?> <small
                            class="text-muted mx-2"><?php echo e($announcement->created_at->diffForHumans()); ?></small></div>
                    <i class="bx bxs-megaphone me-2"></i>
                </div>
                <div class="mt-2">
                    <?php echo e(strlen($announcement->content) > 50 ? substr($announcement->content, 0, 50) . '...' : $announcement->content); ?>

                </div>
            </a>
        </li>
        <li>
            <div class="dropdown-divider"></div>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <li class="d-flex align-items-center justify-content-center p-5">
        <span><?php echo e(get_label('no_unread_announcements', 'No unread announcements')); ?></span>
    </li>
    <li>
        <div class="dropdown-divider"></div>
    </li>
<?php endif; ?>
<?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/partials/unread_announcements.blade.php ENDPATH**/ ?>