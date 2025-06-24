<?php $__env->startSection('title'); ?>
    <?= get_label('upgrade_subscriptions', 'Upgrade Subscriptions') ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="d-flex justify-content-between mt-4">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('superadmin.panel')); ?>"><?= get_label('home', 'Home') ?></a>
                        </li>
                          <li class="breadcrumb-item">
                            <a href="<?php echo e(route('subscriptions.index')); ?>"><?= get_label('subscriptions', 'Subscriptions') ?></a>
                        </li>

                        <li class="breadcrumb-item active">
                            <?= get_label('upgrade_subscription', 'Upgrade Subscription') ?>
                        </li>

                    </ol>
                </nav>
            </div>

            <div>
                <a href="<?php echo e(route('subscriptions.create')); ?>"><button type="button" class="btn btn-sm btn-primary"
                        data-bs-toggle="tooltip" data-bs-placement="left"
                        data-bs-original-title=" <?= get_label('create_subscriptions', 'Create Subscriptions') ?>"><i
                            class="bx bx-plus"></i></button></a>
                <a href="<?php echo e(route('subscriptions.index')); ?>"><button type="button" class="btn btn-sm btn-primary"
                        data-bs-toggle="tooltip" data-bs-placement="left"
                        data-bs-original-title="<?= get_label('subscriptions', 'Subscriptions') ?>"><i
                            class='bx bx-list-ul'></i></button></a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <h1><?= get_label('upgrade_subscription', 'Upgrade Subscription') ?></h1>
                    <form id="upgrade_subscription_form" method="POST"
                        action="<?php echo e(route('subscriptions.update', ['id' => $subscription->id])); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row mb-3">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <label class="form-label" for="plan_id"><?= get_label('select_plan', 'Select Plan:') ?></label>
                                <select name="plan_id" id="plan_id" class="form-control">
                                    <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($plan->id); ?>"
                                            <?php echo e($plan->id == $subscription->plan_id ? 'selected' : ''); ?>>
                                            <?php echo e($plan->name); ?>

                                            <?php echo e($plan->id == $subscription->plan_id ? '(Current Active Plan)' : ''); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <label class="form-label" for="user_id"><?= get_label('select_user', 'Select User:') ?></label>
                                <select disabled name="user_id" id="user_id" class="form-control">
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <label class="form-label" for="tenure"><?= get_label('select_tenure', 'Select Tenure:') ?></label>
                                <select name="tenure" id="tenure" class="form-control">
                                    <option value="monthly">Monthly</option>
                                    <option value="yearly">Yearly</option>
                                    <option value="lifetime">Lifetime</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-2 col-md-3 col-sm-6">
                                <label class="form-label" for="price"><?= get_label('price', 'Price:') ?></label>
                                <input type="text" name="price" id="price" class="form-control" disabled>
                            </div>
                            <div class="form-group col-lg-2 col-md-3 col-sm-6">
                                <label class="form-label"
                                    for="discounted_price"><?= get_label('discounted_price', 'Discounted Price:') ?></label>
                                <input type="text" name="discounted_price" id="discounted_price" class="form-control"
                                    disabled>
                            </div>
                            <div class="form-group col-lg-2 col-md-3 col-sm-6">
                                <label class="form-label" for="charging_price"><?= get_label('charging_price', 'Charging Price:') ?></label>
                                <p class="display-5 text-primary" id="charging_price"></p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <label class="form-label" for="start_date"><?= get_label('starts_at', 'Starts at') ?> <span
                                        class="asterisk">*</span></label>
                                <input disabled type="text" id="subscription_start_date" name="start_date"
                                    class="form-control">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <label class="form-label" for="end_date"><?= get_label('ends_at', 'Ends at') ?> <span
                                        class="asterisk">*</span></label>
                                <input type="text" id="subscription_end_date" name="end_date" class="form-control"
                                    disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <label class="form-label" for="payment_method"><?= get_label('payment_method', 'Payment Method') ?></label>
                                <select class="form-control" name="payment_method" id="payment_method">
                                    <option value="offline"><?= get_label('offline', 'Offline') ?></option>
                                    <option value="bank_transfer"><?= get_label('bank_transfer', 'Bank Transfer') ?>
                                    </option>
                                    <option value="payment_gateway"><?= get_label('payment_gateway', 'Payment Gateway') ?>
                                    </option>
                                </select>
                            </div>
                               <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <label class="form-label"><?php echo e(get_label('transaction_id' , 'Transaction Id')); ?><span
                                        class="asterisk">*</span></label>
                                <input type="text" name="transaction_id" id="transaction_id" class="form-control">
                                <?php $__errorArgs = ['transaction_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                         <p class="text-danger error-message text-xs mt-1"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <label class="form-label" ><?= get_label('plan_features', 'Plan Features') ?></label>
                                <div id="plan_features" class="form-control"></div>
                            </div>
                        </div>
                        <button type="submit"
                            class="btn btn-primary mt-3 mb-3"><?php echo e(get_label('update', 'Update')); ?></button>
                    </form>

                </div>
            </div>

        </div>
        <script>
            var plans = JSON.parse('<?php echo addslashes(json_encode($plans)); ?>');
            var currency_symbol = '<?php echo e($currency_symbol); ?>';
        </script>
        <script src="<?php echo e(asset('assets/js/pages/subscriptions.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/superadmin/subscriptions/upgrade.blade.php ENDPATH**/ ?>