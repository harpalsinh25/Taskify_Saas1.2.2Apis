<title>Reset password - <?php echo e($general_settings['company_title']); ?></title>
<?php $__env->startSection('content'); ?>
    <!-- Content -->

    <div class="container-fluid">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Forgot Password -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="<?php echo e(route('home.index')); ?>" class="app-brand-link">
                                <span class="app-brand-logo demo">
                                    <img src="<?php echo e(asset($general_settings['full_logo'])); ?>" width="300px" alt="" />
                                </span>
                                <!-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Taskify</span> -->
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2">Reset Password 🔒</h4>
                        <p class="mb-4">Enter details and hit submit to reset your password</p>
                        <form id="formAuthentication" class="mb-3 form-submit-event" action="/reset-password"
                            method="POST">
                            <input type="hidden" name="token" value="<?php echo e($token); ?>" />
                            <input type="hidden" name="redirect_url" value="<?php echo e(route('login')); ?>">

                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email <span class="asterisk">*</span></label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter your email" value="<?php echo e(old('email')); ?>" autofocus />
                                <?php $__errorArgs = ['email'];
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
                            <div class="mb-3">
                                <label for="" class="form-label">New password <span
                                        class="asterisk">*</span></label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Enter new password" />
                                <?php $__errorArgs = ['password'];
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
                            <div class="mb-3">
                                <label for="" class="form-label">Confirm new password <span
                                        class="asterisk">*</span></label>
                                <input type="password" class="form-control" name="password_confirmation"
                                    placeholder="Confirm new password" />
                                <?php $__errorArgs = ['password_confirmation'];
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
                            <button class="btn btn-primary d-grid w-100" id="submit_btn">Submit</button>
                        </form>
                        <div class="text-center">
                            <a href="<?php echo e(route('forgot-password')); ?>"
                                class="d-flex align-items-center justify-content-center">
                                <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                                Back to forgot password
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Forgot Password -->
            </div>
        </div>
    </div>

    <!-- / Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/auth/reset-password.blade.php ENDPATH**/ ?>