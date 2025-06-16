<title>Forgot password - <?php echo e($general_settings['company_title']); ?></title>
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
                            <a href="/home" class="app-brand-link">
                                <span class="app-brand-logo demo">
                                    <img src="<?php echo e(asset($general_settings['full_logo'])); ?>" width="300px" alt="" />
                                </span>
                                <!-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Taskify</span> -->
                            </a>
                        </div>
                        <h3 class="text-center display-5 fw-semi-bold mt-5">
                            <?php echo e(get_label('forgot_password', 'Forgot Password?')); ?> 🔒
                        </h3>
                        <p class="text-center mb-4">
                            <?php echo e(get_label('enter_your_emailDesc', 'Enter your email and we will send you password reset link')); ?>

                        </p>

                        <form id="formAuthentication" class="mb-3 form-submit-event"
                            action="<?php echo e(route('forgot-password-mail')); ?>" method="POST">
                            <input type="hidden" name="redirect_url" value="<?php echo e(route('forgot-password')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="email" class="form-label"><?php echo e(get_label('email', 'Email')); ?> <span
                                        class="asterisk">*</span></label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="<?php echo e(get_label('enter_your_email', 'Enter your email')); ?>"
                                    value="<?php echo e(old('email')); ?>" autofocus />
                            </div>
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
                            <button type="submit" id="submit_btn"
                                class="btn btn-primary d-grid w-100"><?php echo e(get_label('submit', 'Submit')); ?></button>
                        </form>
                        <div class="text-center">
                            <a href="<?php echo e(url('/login')); ?>" class="d-flex align-items-center justify-content-center">
                                <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                                Back to login
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Forgot Password -->
            </div>
        </div>
    </div>
    <script>
        var label_please_wait = 'Please wait';
    </script>
    <!-- / Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/auth/forgot-password.blade.php ENDPATH**/ ?>