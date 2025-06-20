<div class="kanban-board d-flex bg-body gap-3 overflow-auto p-3">
    <?php $__currentLoopData = $stages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="kanban-column card" data-stage-id="<?php echo e($stage->id); ?>">
            <div
                class="kanban-column-header card-header bg-label-<?php echo e($stage->color); ?> d-flex justify-content-between align-items-center p-3">
                <div class="fw-semibold">
                    <?php echo e($stage->name); ?>

                </div>
                <div class="column-count badge text-<?php echo e($stage->color); ?> bg-white">
                    <?php echo e($leads->where('stage_id', $stage->id)->count()); ?>/<?php echo e($leads->count()); ?>

                </div>
            </div>
            <div class="kanban-column-body card-body bg-body p-3">
                <?php $__currentLoopData = $leads->where('stage_id', $stage->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lead): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="kanban-card card mb-3" data-card-id="<?php echo e($lead->id); ?>">
                        <div class="card-body p-3 py-0 pb-3">
                            <div class="d-flex justify-content-end align-items-end">
                                <!-- Actions Dropdown -->
                                <div class="dropdown">
                                    <button class="btn btn-link text-dark p-0" type="button" id="actionsDropdown"
                                        data-bs-toggle="dropdown" aria-expanded="false" title="Actions">
                                        <i class="bx bx-dots-horizontal-rounded fs-4"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="actionsDropdown">
                                        <li>
                                            <a class="dropdown-item text-info"
                                                href="<?php echo e(route('leads.show', ['id' => $lead->id])); ?>" data-id="<?php echo e($lead->id); ?>">
                                                <i class="bx bx-show-alt"></i>
                                                <?php echo e(get_label('quick_view', 'Quick View')); ?>

                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item text-primary edit-lead"
                                                href="<?php echo e(route('leads.edit', ['id' => $lead->id])); ?>" data-id="<?php echo e($lead->id); ?>">
                                                <i class="bx bx-edit"></i> <?php echo e(get_label('edit', 'Edit')); ?>

                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item text-danger delete" href="javascript:void(0);"
                                                data-reload="true" data-type="leads" data-id="<?php echo e($lead->id); ?>">
                                                <i class="bx bx-trash"></i> <?php echo e(get_label('delete', 'Delete')); ?>

                                            </a>
                                        </li>
                                        <?php if($lead->is_converted == 0): ?>
                                            <li>
                                                <a class="dropdown-item text-primary convert-to-client" href="javascript:void(0);"
                                                    data-id="<?php echo e($lead->id); ?>"><i
                                                        class="bx bxs-analyse me-1"></i><?php echo e(get_label('convert_to_client', 'Convert To Client')); ?>

                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <!-- Avatar -->
                                <div class="avatar avatar-md me-2">
                                    <span class="avatar-initial rounded-circle bg-primary text-white">
                                        <?php echo e(substr($lead->first_name, 0, 1) . substr($lead->last_name, 0, 1)); ?>

                                    </span>
                                </div>
                                <!-- Lead Source Badge -->
                                <span class="small badge bg-label-<?php echo e($lead->stage->color); ?> text-uppercase fw-medium px-2 py-1">
                                    <?php echo e($lead->source->name ?? 'N/A'); ?>

                                </span>
                            </div>
                            <h6 class="fw-semibold text-truncate mb-1">
                                <?php echo e(ucfirst($lead->first_name)); ?> <?php echo e(ucfirst($lead->last_name)); ?>

                            </h6>
                            <p class="small text-muted mb-1">
                                <?php echo e($lead->job_title); ?> @ <?php echo e($lead->company); ?>

                            </p>
                            <?php if($lead->phone): ?>
                                <p class="small mb-1">
                                    <i class="bx bx-phone text-primary"></i>
                                    <a href="tel:<?php echo e($lead->country_code); ?><?php echo e($lead->phone); ?>"><?php echo e($lead->country_code); ?>

                                        <?php echo e($lead->phone); ?></a>
                                </p>
                            <?php endif; ?>
                            <?php if($lead->email): ?>
                                <p class="small mb-1">
                                    <i class="bx bx-envelope text-info"></i>
                                    <a href="mailto:<?php echo e($lead->email); ?>"><?php echo e($lead->email); ?></a>
                                </p>
                            <?php endif; ?>
                            <div class="d-flex mt-2 gap-2">
                                <?php if($lead->linkedin): ?>
                                    <a href="<?php echo e($lead->linkedin); ?>" target="_blank" class="text-secondary" title="LinkedIn">
                                        <i class="bx bxl-linkedin-square fs-5"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if($lead->facebook): ?>
                                    <a href="<?php echo e($lead->facebook); ?>" target="_blank" class="text-secondary" title="Facebook">
                                        <i class="bx bxl-facebook-circle fs-5"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if($lead->instagram): ?>
                                    <a href="<?php echo e($lead->instagram); ?>" target="_blank" class="text-secondary" title="Instagram">
                                        <i class="bx bxl-instagram fs-5"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if($lead->pinterest): ?>
                                    <a href="<?php echo e($lead->pinterest); ?>" target="_blank" class="text-secondary" title="Pinterest">
                                        <i class="bx bxl-pinterest fs-5"></i>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <?php if($lead->is_converted == 1): ?>
                                <div class="small text-black-50 mb-0">
                                    <?php echo e(get_label('converted_to_client_at', 'Converted to Client At')); ?> :
                                    <?php echo e(format_date($lead->converted_at, true)); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/components/leads-kanban-card.blade.php ENDPATH**/ ?>