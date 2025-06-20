

<?php $__env->startSection('title'); ?>
    <?= get_label('email_history', 'Email History') ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-3 mt-4">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home.index')); ?>"><?php echo e(get_label('home', 'Home')); ?></a>
                        </li>
                        <li class="breadcrumb-item active"><?php echo e(get_label('email', 'Email')); ?></li>
                    </ol>
                </nav>
            </div>
            <div>
                <a href="<?php echo e(route('emails.send')); ?>"><button type="button" class="btn btn-sm btn-primary"
                        data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-original-title=" <?= get_label('send_email', 'Send Email') ?>"><i
                            class="bx bx-plus"></i></button></a>
                </a>
            </div>
        </div>
        
        <?php if($emails->count() > 0): ?>
        
        <div class="card">
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <input type="hidden" id="data_type" value="emails">
                    <input type="hidden" id="data_reload" value="1">
                    <table id="table" data-toggle="table" data-url="<?php echo e(route('emails.historyList')); ?>"
                        data-icons-prefix="bx" data-icons="icons" data-show-refresh="true" data-total-field="total"
                        data-loading-template="loadingTemplate" data-data-field="rows" data-page-list="[5, 10, 20, 50, 100]"
                        data-search="true" data-show-columns="true" data-side-pagination="server" data-pagination="true"
                        data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true"
                        data-query-params="queryParamsEmailHistory">
                        <thead>
                            <tr>
                                <th data-checkbox="true"></th>
                                <th data-field="id" data-sortable="true"><?php echo e(get_label('id', 'ID')); ?></th>
                                <th data-field="to_email" data-sortable="true">
                                    <?php echo e(get_label('recipient_email', 'Recipient Email')); ?>

                                </th>
                                <th data-field="subject"><?php echo e(get_label('subject', 'Subject')); ?></th>
                                <th data-field="status"><?php echo e(get_label('status', 'Status')); ?></th>
                                <th data-field="scheduled_at"><?php echo e(get_label('scheduled_at', 'Scheduled At')); ?></th>
                                <th data-field="user_name"><?php echo e(get_label('created_by', 'Created By')); ?></th>
                                <th data-field="" data-formatter="emailHistoryActionsFormatter">
                                    <?php echo e(get_label('view', 'View')); ?>

                                </th>
                                <th data-field="created_at" data-sortable="true"><?php echo e(get_label('created_at', 'Created At')); ?>

                                </th>
                                <th data-field="updated_at" data-sortable="true">
                                    <?php echo e(get_label('upadted_at', 'Updated At')); ?>

                                </th>
                                <th data-field="actions"><?php echo e(get_label('actions', 'Actions')); ?></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <script>
            var label_update = '<?= get_label('update', 'Update') ?>';
            var label_delete = '<?= get_label('delete', 'Delete') ?>';
            var label_duplicate = '<?= get_label('duplicate', 'Duplicate') ?>';
            const previewUrl = "";
        </script>
        <?php else: ?>
        <?php    $type = 'Emails'; ?>
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

    </div>


    <script src="<?php echo e(asset('assets/js/pages/email-history.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/emails/index.blade.php ENDPATH**/ ?>