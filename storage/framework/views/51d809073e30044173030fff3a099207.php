<div class="d-flex justify-content-between">
    <h5 class="card-title">
        <?php echo e(get_label('discussions', 'Discussions')); ?> : <?php echo e($task->title); ?>

    </h5>
    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#task_commentModal">
        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right"
            data-bs-original-title="<?php echo e(get_label('add_comment', 'Add Comment')); ?>">
            <i class="bx bx-plus"></i>
        </button>
    </a>
</div>
<div id="comment-thread-container">
    <div class="comment-thread">
        <?php if(isset($task->comments) && $task->comments->isNotEmpty()): ?>
            <?php $__currentLoopData = $task->comments->whereNull('parent_id')->reverse(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <details open class="comment" id="comment-<?php echo e($comment->id); ?>">
                    <a href="#comment-<?php echo e($comment->id); ?>" class="comment-border-link">
                        <span class="sr-only">Jump to comment-<?php echo e($comment->id); ?></span>
                    </a>
                    <summary>
                        <div class="comment-heading">
                            <div class="comment-avatar">
                                <img src="<?php echo e(isset($comment->user->photo) ? asset('storage/' . $comment->user->photo) : asset('storage/photos/no-image.jpg')); ?>"
                                    class="bg-footer-theme rounded-circle border"
                                    alt="<?php echo e(isset($comment->user->first_name) && isset($comment->user->last_name) ? $comment->user->first_name . ' ' . $comment->user->last_name : 'User'); ?>">
                            </div>
                            <div class="comment-info">
                                <a href="<?php echo e(isset($comment->user->id) ? route('users.show', [$comment->user->id]) : '#'); ?>"
                                    class="comment-author fw-semibold text-body"><?php echo e(isset($comment->user->first_name) && isset($comment->user->last_name) ? $comment->user->first_name . ' ' . $comment->user->last_name : 'Unknown User'); ?></a>
                                <p class="m-0">
                                    <?php echo e(isset($comment->created_at) ? $comment->created_at->diffForHumans() : ''); ?>

                                    <?php if(isset($comment->created_at) && $comment->created_at != $comment->updated_at): ?>
                                        <span class="text-muted">(<?php echo e(get_label('edited', 'Edited')); ?>)</span>
                                    <?php endif; ?>
                                </p>
                            </div>
                            <?php if(isAdminOrHasAllDataAccess()): ?>
                                <div class="comment-actions d-flex ms-5 p-0">
                                    <a href="javascript:void(0);" data-comment-id="<?php echo e($comment->id); ?>"
                                        class="btn btn-sm text-primary edit-task-comment p-0" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="<?php echo e(get_label('edit', 'Edit')); ?>">
                                        <i class="bx bx-edit"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-comment-id="<?php echo e($comment->id); ?>"
                                        class="btn btn-sm text-danger delete-task-comment p-0" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="<?php echo e(get_label('delete', 'Delete')); ?>">
                                        <i class="bx bx-trash"></i>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </summary>
                    <div class="comment-body">
                        <p><?php echo isset($comment->content) ? $comment->content : ''; ?></p>
                        <!-- Attachments Section -->
                        <?php if(isset($comment->attachments) && $comment->attachments->isNotEmpty()): ?>
                            <div class="attachments mt-2">
                                <?php $__currentLoopData = $comment->attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="attachment-item d-flex align-items-center gap-3">
                                        <!-- File Preview and Name Section -->
                                        <div class="attachment-preview-container flex-grow-1">
                                            <a href="<?php echo e(asset('storage/' . $attachment->file_path)); ?>" target="_blank"
                                                class="attachment-link text-decoration-none"
                                                data-preview-url="<?php echo e(asset('storage/' . $attachment->file_path)); ?>">
                                                <?php echo e(isset($attachment->file_name) ? $attachment->file_name : 'Attachment'); ?>

                                            </a>
                                            <div class="attachment-preview"></div>
                                        </div>
                                        <!-- Action Buttons Group -->
                                        <div class="attachment-actions d-flex gap-2">
                                            <!-- Download Button -->
                                            <a href="<?php echo e(asset('storage/' . $attachment->file_path)); ?>"
                                                download="<?php echo e(isset($attachment->file_name) ? $attachment->file_name : 'file'); ?>"
                                                class="text-primary" title="Download">
                                                <i class="bx bx-download fs-4"></i>
                                            </a>
                                            <!-- Delete Icon -->
                                            <a href="javascript:void(0);" class="text-danger delete-attachment"
                                                data-attachment-id="<?php echo e($attachment->id); ?>" title="Delete">
                                                <i class="bx bx-trash fs-4"></i>
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                        <button type="button" class="open-task-reply-modal mt-3"
                            data-comment-id="<?php echo e($comment->id); ?>">Reply</button>
                    </div>
                    <?php if(isset($comment->children) && $comment->children->count() > 0): ?>
                        <div class="replies">
                            <?php $__currentLoopData = $comment->children->reverse(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <details open class="comment" id="comment-<?php echo e($reply->id); ?>">
                                    <a href="#comment-<?php echo e($reply->id); ?>" class="comment-border-link">
                                        <span class="sr-only">Jump to comment-<?php echo e($reply->id); ?></span>
                                    </a>
                                    <summary>
                                        <div class="comment-heading">
                                            <div class="comment-avatar">
                                                <img src="<?php echo e(isset($reply->user->photo) ? asset('storage/' . $reply->user->photo) : asset('storage/photos/no-image.jpg')); ?>"
                                                    class="bg-footer-theme rounded-circle border"
                                                    alt="<?php echo e(isset($reply->user->first_name) && isset($reply->user->last_name) ? $reply->user->first_name . ' ' . $reply->user->last_name : 'User'); ?>">
                                            </div>
                                            <div class="comment-info">
                                                <a href="<?php echo e(isset($reply->user->id) ? route('users.show', [$reply->user->id]) : '#'); ?>"
                                                    class="comment-author text-body fw-light"><?php echo e(isset($reply->user->first_name) && isset($reply->user->last_name) ? $reply->user->first_name . ' ' . $reply->user->last_name : 'Unknown User'); ?></a>
                                                <p class="m-0">
                                                    <?php echo e(isset($reply->created_at) ? $reply->created_at->diffForHumans() : ''); ?>

                                                    <?php if(isset($reply->created_at) && $reply->created_at != $reply->updated_at): ?>
                                                        <span
                                                            class="text-muted">(<?php echo e(get_label('edited', 'Edited')); ?>)</span>
                                                    <?php endif; ?>
                                                </p>
                                            </div>
                                            <?php if(isAdminOrHasAllDataAccess()): ?>
                                                <div class="comment-actions d-flex ms-5 p-0">
                                                    <a href="javascript:void(0);" data-comment-id="<?php echo e($reply->id); ?>"
                                                        class="btn btn-sm text-primary edit-task-comment p-0"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="<?php echo e(get_label('edit', 'Edit')); ?>">
                                                        <i class="bx bx-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" data-comment-id="<?php echo e($reply->id); ?>"
                                                        class="btn btn-sm text-danger delete-task-comment p-0"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="<?php echo e(get_label('delete', 'Delete')); ?>">
                                                        <i class="bx bx-trash"></i>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </summary>
                                    <div class="comment-body">
                                        <p class="text-secondary"><?php echo isset($reply->content) ? $reply->content : ''; ?></p>
                                        <!-- Attachments Section -->
                                        <?php if(isset($reply->attachments) && $reply->attachments->isNotEmpty()): ?>
                                            <div class="attachments mt-2">
                                                <?php $__currentLoopData = $reply->attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="attachment-item d-flex align-items-center gap-3">
                                                        <!-- File Preview and Name Section -->
                                                        <div class="attachment-preview-container flex-grow-1">
                                                            <a href="<?php echo e(asset('storage/' . $attachment->file_path)); ?>"
                                                                target="_blank"
                                                                class="attachment-link text-decoration-none"
                                                                data-preview-url="<?php echo e(asset('storage/' . $attachment->file_path)); ?>">
                                                                <?php echo e(isset($attachment->file_name) ? $attachment->file_name : 'Attachment'); ?>

                                                            </a>
                                                            <div class="attachment-preview"></div>
                                                        </div>
                                                        <!-- Action Buttons Group -->
                                                        <div class="attachment-actions d-flex gap-2">
                                                            <!-- Download Button -->
                                                            <a href="<?php echo e(asset('storage/' . $attachment->file_path)); ?>"
                                                                download="<?php echo e(isset($attachment->file_name) ? $attachment->file_name : 'file'); ?>"
                                                                class="text-primary" title="Download">
                                                                <i class="bx bx-download fs-4"></i>
                                                            </a>
                                                            <!-- Delete Icon -->
                                                            <a href="javascript:void(0);"
                                                                class="text-danger delete-attachment"
                                                                data-attachment-id="<?php echo e($attachment->id); ?>"
                                                                title="Delete">
                                                                <i class="bx bx-trash fs-4"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </details>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                </details>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <p class="text-muted no_comments text-center"><?php echo e(get_label('no_comments', 'No Comments')); ?></p>
        <?php endif; ?>
    </div>
    <?php if(isset($task->comments) && $task->comments->count() > 5): ?>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="text-center">
                <button id="load-more-comments" class="btn btn-link text-body">
                    <i class="bx bx-chevron-down"></i>
                    <?php echo e(get_label('load_more', 'Load More')); ?>

                </button>
                <button id="hide-comments" class="btn btn-link text-body">
                    <i class="bx bx-chevron-up"></i>
                    <?php echo e(get_label('hide', 'Hide')); ?>

                </button>
            </div>
        </div>
    <?php endif; ?>
</div>
<script>
    var isAdminOrHasAllDataAccess = <?php echo e(isAdminOrHasAllDataAccess() ? 'true' : 'false'); ?>;
</script>
<?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/components/task-discussions-card.blade.php ENDPATH**/ ?>