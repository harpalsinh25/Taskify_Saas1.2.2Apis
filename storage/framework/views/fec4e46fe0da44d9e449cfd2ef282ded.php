<?php $__env->startSection('title'); ?>
<?php echo e(get_label('settings', 'Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
        <div class="d-flex justify-content-between mt-4">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('home.index')); ?>"><?= get_label('home', 'Home') ?></a>
                        </li>
                        <li class="breadcrumb-item">
                            <?= get_label('settings', 'Settings') ?>
                        </li>
                        <li class="breadcrumb-item active">
                            <?= get_label('admin_settings', 'Admin Settings') ?>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="<?php echo e(route('admin_settings.update')); ?>" class="form-submit-event" method="POST"
                    enctype="multipart/form-data">
                    <input type="hidden" name="redirect_url" value="<?php echo e(route('admin_settings.index')); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label for="company_title" class="form-label"><?= get_label('company_title', 'Company title') ?>
                                <span class="asterisk">*</span></label>
                            <input class="form-control" type="text" id="company_title" name="company_title"
                                placeholder="Enter company title" value="<?php echo e($general_settings['company_title']); ?>">

                            <?php $__errorArgs = ['company_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger text-xs mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="full_logo" class="form-label"><?= get_label('full_logo', 'Full logo') ?> <a
                                    data-bs-toggle="tooltip" data-bs-placement="right"
                                    data-bs-original-title="<?= get_label('view_current_full_logo', 'View current full logo') ?>"
                                    href="<?php echo e(asset($general_settings['full_logo'])); ?>" data-lightbox="full logo"
                                    data-title="<?= get_label('current_full_logo', 'Current full logo') ?>"> <i
                                        class='bx bx-show-alt'></i></a></label>
                            <input type="file" accept="image/*" class="form-control" id="inputGroupFile02" name="full_logo">
                            <?php $__errorArgs = ['full_logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger text-xs mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="half_logo" class="form-label"><?= get_label('half_logo', 'Half logo') ?> <a
                                    data-bs-toggle="tooltip" data-bs-placement="right"
                                    data-bs-original-title="<?= get_label('view_current_half_logo', 'View current half logo') ?>"
                                    href="<?php echo e(asset($general_settings['half_logo'])); ?>" data-lightbox="half_logo"
                                    data-title="<?= get_label('current_half_logo', 'Current half logo') ?>"> <i
                                        class='bx bx-show-alt'></i></a></label>
                            <input type="file" accept="image/*" class="form-control" id="inputGroupFile02" name="half_logo">
                            <?php $__errorArgs = ['half_logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger text-xs mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>


                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2"
                                id="submit_btn"><?= get_label('update', 'Update') ?></button>
                            <button type="reset"
                                class="btn btn-outline-secondary"><?= get_label('cancel', 'Cancel') ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/settings/admin_settings.blade.php ENDPATH**/ ?>