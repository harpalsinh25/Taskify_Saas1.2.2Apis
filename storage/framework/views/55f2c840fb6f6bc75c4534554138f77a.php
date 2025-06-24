<h5 class="card-header"><?php echo e(get_label('status_timeline', 'Status Timeline')); ?></h5>
<div class="card-body">
    <ul class="timeline mb-0">
        <?php if($timelines->count() > 0): ?>
        <?php $__currentLoopData = $timelines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timeline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-<?php echo e($timeline->new_color); ?>"></span>
            <div class="timeline-event">
                <div class="timeline-header mb-3">
                    <h5 class="mb-0"> <?php echo e(format_date($timeline->created_at ,true)); ?></h5>
                    <small class="text-muted"><?php echo e($timeline->created_at->diffForHumans()); ?></small>
                </div>
                <div class="d-flex align-items-center mb-2 ">
                    <p class="mb-2">
                        <?php echo e(get_label('status_changed_from','Status changed from')); ?>

                        <span class="fw-bold badge bg-label-<?php echo e($timeline->old_color ?? 'primary'); ?>"><?php echo e($timeline->previous_status == '-' ? get_label('initial_status', 'Initial Status') : $timeline->previous_status); ?></span>
                        <span class="text-dark"><i class='bx bxs-chevrons-right'></i></span>
                        <span class="fw-bold badge bg-label-<?php echo e($timeline->new_color); ?>"><?php echo e($timeline->status); ?></span </div>
                    </p>
                </div>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-info"></span>
            <div class="timeline-event">
                <div class="timeline-header mb-3">
                    <h5 class="mb-0"> <?php echo e(get_label('no_status_change','No Status Change')); ?></h5>
                </div>
            </div>
        </li>
        <?php endif; ?>
    </ul>
</div>

<?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/components/status-timeline.blade.php ENDPATH**/ ?>