<div class="kanban-board d-flex bg-body gap-3 overflow-auto p-3">
    <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="kanban-column card" data-status-id="<?php echo e($status->id); ?>">
            <div
                class="kanban-column-header card-header bg-label-<?php echo e($status->color); ?> d-flex justify-content-between align-items-center p-3">
                <div class="fw-semibold">
                    <?php echo e($status->title); ?>

                </div>
                <div class="column-count badge text-<?php echo e($status->color); ?> bg-white">
                    <?php echo e($projects->where('status_id', $status->id)->count()); ?>/<?php echo e($projects->count()); ?>

                </div>
            </div>
            <div class="kanban-column-body card-body bg-body p-3">
                <?php $__currentLoopData = $projects->where('status_id', $status->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="kanban-card card mb-3" data-card-id="<?php echo e($project->id); ?>">
                        <div class="card-body">
                            <div class="card-tags mb-2">
                                <?php $__currentLoopData = $project->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span
                                        class="tag-border fs-small text-uppercase text-<?php echo e($tag->color); ?> tag-color-<?php echo e($tag->color); ?> me-1"><?php echo e(ucfirst($tag->title)); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="card-title mb-0">
                                    <a href="<?php echo e(url('/master-panel/projects/information/' . $project->id)); ?>"
                                        class="text-body" target="_blank">
                                        <?php echo e(ucfirst(Str::limit($project->title, 20))); ?>

                                    </a>
                                </h5>
                                <span class="badge bg-label-<?php echo e($project->priority ? $project->priority->color : ''); ?>">
                                    <?php echo e($project->priority ? $project->priority->title : ''); ?>

                                </span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-light">
                                    <i class='bx bx-calendar me-1'></i><?php echo e(get_label('start_date', 'Start Date')); ?>:
                                    <?php echo e(format_date($project->start_date)); ?>

                                </small>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-light">
                                    <i class='bx bx-calendar me-1'></i><?php echo e(get_label('end_date', 'End Date')); ?>:
                                    <?php echo e(format_date($project->end_date)); ?>

                                </small>
                            </div>
                            <div class="align-items-center card-actions d-flex justify-content-evenly mt-2">
                                <a href="javascript:void(0);" class="quick-view" data-id="<?php echo e($project->id); ?>"
                                    data-type="project">
                                    <i class='bx bx bx-info-circle text-info' data-bs-toggle="tooltip"
                                        data-bs-placement="right"
                                        data-bs-original-title="<?php echo e(get_label('quick_view', 'Quick View')); ?>"></i>
                                </a>
                                <a href="javascript:void(0);" class="mx-2">
                                    <i class='bx <?php echo e($project->is_favorite ? 'bxs' : 'bx'); ?>-star favorite-icon text-warning'
                                        data-id="<?php echo e($project->id); ?>" data-bs-toggle="tooltip"
                                        data-bs-placement="right"
                                        data-bs-original-title="<?php echo e($project->is_favorite ? get_label('remove_favorite', 'Click to remove from favorite') : get_label('add_favorite', 'Click to mark as favorite')); ?>"
                                        data-favorite="<?php echo e($project->is_favorite); ?>"></i>
                                </a>
                                <a href="<?php echo e(route('projects.info', ['id' => $project->id])); ?>#navs-top-discussions" target="_blank">
                                    <i class='bx bx-message-rounded-dots text-danger' data-bs-toggle="tooltip"
                                        data-bs-placement="right"
                                        data-bs-original-title="<?php echo e(get_label('discussion', 'Discussion')); ?>"></i>
                                </a>
                                <?php if($showSettings): ?>
                                    <div class="">
                                        <a href="javascript:void(0);" class="mx-2" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class='bx bx-cog' id="settings-icon"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <?php if($canEditProjects): ?>
                                                <a href="javascript:void(0);" class="edit-project"
                                                    data-id="<?php echo e($project->id); ?>">
                                                    <li class="dropdown-item">
                                                        <i
                                                            class='menu-icon tf-icons bx bx-edit text-primary'></i><?= get_label('update', 'Update') ?>
                                                    </li>
                                                </a>
                                            <?php endif; ?>
                                            <?php if($canDeleteProjects): ?>
                                                <a href="javascript:void(0);" class="delete" data-reload="true"
                                                    data-type="projects" data-id="<?php echo e($project->id); ?>">
                                                    <li class="dropdown-item">
                                                        <i
                                                            class='menu-icon tf-icons bx bx-trash text-danger'></i><?= get_label('delete', 'Delete') ?>
                                                    </li>
                                                </a>
                                            <?php endif; ?>
                                            <?php if($canDuplicateProjects): ?>
                                                <a href="javascript:void(0);" class="duplicate" data-type="projects"
                                                    data-id="<?php echo e($project->id); ?>" data-title="<?php echo e($project->title); ?>"
                                                    data-reload="true">
                                                    <li class="dropdown-item">
                                                        <i
                                                            class='menu-icon tf-icons bx bx-copy text-warning'></i><?= get_label('duplicate', 'Duplicate') ?>
                                                    </li>
                                                </a>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <a href="javascript:void(0);" class="btn btn-outline-secondary btn-sm d-block create-project-btn"
                    data-bs-toggle="modal" data-bs-target="#create_project_modal">
                    <i class='bx bx-plus me-1'></i><?php echo e(get_label('create_project', 'Create project')); ?>

                </a>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/components/project-card.blade.php ENDPATH**/ ?>