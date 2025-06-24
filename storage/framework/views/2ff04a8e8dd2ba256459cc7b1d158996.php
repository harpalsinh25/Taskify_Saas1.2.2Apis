<?php $__env->startSection('title'); ?>
    <?= get_label('subscriptions', 'Subscriptions') ?>
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
                        <li class="breadcrumb-item active">
                            <?= get_label('subscriptions', 'Subscriptions') ?>
                        </li>
                    </ol>
                </nav>
            </div>
            <div>
                <a href="<?php echo e(route('subscriptions.create')); ?>"><button type="button" class="btn btn-sm btn-primary"
                        data-bs-toggle="tooltip" data-bs-placement="left"
                        data-bs-original-title=" <?= get_label('create_subscription', 'Create Subscription') ?>"><i
                            class="bx bx-plus"></i></button></a>

            </div>
        </div>
        <?php if(is_countable($subscriptions) && count($subscriptions) > 0): ?>
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0"><?php echo e(get_label('subscriptions', 'Subscriptions')); ?></h4>
                    <input type="hidden" id="data_type" value="subscriptions">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label"><?php echo e(get_label('filter_by_plans', 'Filter by plans')); ?></label>
                            <select class="form-select" name="filter_plans" id="filter_plans">
                                <option value=""><?php echo e(get_label('select_plans', 'Select Plans')); ?></option>
                                <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($plan->id); ?>"><?php echo e(ucfirst($plan->name)); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><?php echo e(get_label('filter_by_status', 'Filter by status')); ?></label>
                            <select class="form-select" id="status">
                                <option value=""><?php echo e(get_label('select_status', 'Select Status')); ?></option>
                                <option value="active"><?php echo e(get_label('active', 'Active')); ?></option>
                                <option value="inactive"><?php echo e(get_label('inactive', 'Inactive')); ?></option>
                                <option value="pending"><?php echo e(get_label('pending', 'Pending')); ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table id="table" data-toggle="table" data-loading-template="loadingTemplate"
                            data-url="<?php echo e(route('subscriptions.list')); ?>" data-icons-prefix="bx" data-icons="icons"
                            data-show-refresh="true" data-total-field="total" data-trim-on-search="false"
                            data-data-field="rows" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true"
                            data-side-pagination="server" data-show-columns="true" data-pagination="true"
                            data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true"
                            data-query-params="queryParams">
                            <thead>
                                <tr>

                                    <th data-visible="false" data-sortable="true" data-field="id">
                                        <?php echo e(get_label('id', 'ID')); ?></th>
                                    <th data-field="user_name"><?php echo e(get_label('user_name', 'User Name')); ?></th>
                                    <th data-field="plan_name"><?php echo e(get_label('plan_name', 'Plan Name')); ?></th>
                                    <th data-field="tenure"><?php echo e(get_label('tenure', 'Tenure')); ?></th>
                                    <th data-field="start_date"><?php echo e(get_label('starts_at', 'Start Date')); ?></th>
                                    <th data-field="end_date"><?php echo e(get_label('end_date', 'End Date')); ?></th>
                                    <th data-field="payment_method"><?php echo e(get_label('payment_method', 'Payment Method')); ?>

                                    </th>
                                    <th data-field="features"><?php echo e(get_label('features', 'Features')); ?></th>
                                    <th data-sortable="true" data-field="charging_price">
                                        <?php echo e(get_label('charging_price', 'Charging Price')); ?></th>
                                    <th data-visible="false" data-field="charging_currency">
                                        <?php echo e(get_label('charging_currency', 'Charging Currency')); ?></th>
                                    <th data-field="status"><?php echo e(get_label('status', 'Status')); ?></th>
                                    <th data-formatter="actionFormatter"><?php echo e(get_label('actions', 'Actions')); ?></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Bootstrap Modal -->
            <div class="modal fade" id="subscriptionModal" tabindex="-1"  data-bs-keyboard="false"
                role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                <div class="modal-dialog  modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-body">
                            <h5 class="modal-title text-capitalize" id="modalTitleId">
                                <i
                                    class="bx bx-info-circle me-2"></i><?php echo e(get_label('subscription_detail', 'Subscription Detail')); ?>

                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body bg-body text-capitalize">
                            <div class="row g-4">
                                <div class="col-lg-8">
                                    <div class="card mb-4 shadow-lg">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-6 mb-3">
                                                    <h6 class="text-muted">
                                                        <?php echo e(get_label('basic_info', 'Basic Information')); ?></h6>
                                                    <p><strong><?php echo e(get_label('id', 'ID')); ?>:</strong> <span
                                                            id="subscriptionId" class="badge bg-label-primary"></span></p>
                                                    <p><strong><?php echo e(get_label('user', 'User')); ?>:</strong> <span
                                                            id="subscriptionUser"></span></p>
                                                    <p><strong><?php echo e(get_label('plan', 'Plan')); ?>:</strong> <span
                                                            id="subscriptionPlan" class="badge bg-label-info"></span></p>
                                                    <p><strong><?php echo e(get_label('status', 'Status')); ?>:</strong> <span
                                                            id="subscriptionStatus" class=""></span></p>
                                                </div>
                                                <div class="col-sm-6 mb-3">
                                                    <h6 class="text-muted">
                                                        <?php echo e(get_label('payment_info', 'Payment Information')); ?></h6>
                                                    <p><strong><?php echo e(get_label('payment_method', 'Payment Method')); ?>:</strong>
                                                        <span id="subscriptionPaymentMethod"></span></p>
                                                    <p><strong><?php echo e(get_label('tenure', 'Tenure')); ?>:</strong> <span
                                                            id="subscriptionTenure"></span></p>
                                                    <p><strong><?php echo e(get_label('price', 'Price')); ?>:</strong> <span
                                                            id="subscriptionPrice" class="text-primary fw-bold"></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6 class="text-muted">
                                                        <?php echo e(get_label('subscription_period', 'Subscription Period')); ?></h6>
                                                    <p><strong><?php echo e(get_label('starts_at', 'Starts At')); ?>:</strong> <span
                                                            id="subscriptionStartsAt"></span></p>
                                                    <p><strong><?php echo e(get_label('ends_at', 'Ends At')); ?>:</strong> <span
                                                            id="subscriptionEndsAt"></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow-lg">
                                        <div class="card-body">
                                            <h6 class="card-subtitle text-muted mb-3">
                                                <?php echo e(get_label('transactions', 'Transactions')); ?></h6>
                                            <div class="table-responsive">
                                                <table class="table-bordered table-striped table">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th><?php echo e(get_label('id', 'ID')); ?></th>
                                                            <th><?php echo e(get_label('amount', 'Amount')); ?></th>
                                                            <th><?php echo e(get_label('status', 'Status')); ?></th>
                                                            <th><?php echo e(get_label('payment_method', 'Payment Method')); ?></th>
                                                            <th><?php echo e(get_label('transaction_id', 'Transaction ID')); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="subscriptionTransactions"></tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card mb-4 shadow-lg">
                                        <div class="card-body">
                                            <h6 class="card-subtitle text-muted mb-3">
                                                <?php echo e(get_label('features', 'Features')); ?></h6>
                                            <ul id="subscriptionFeatures" class="list-group list-group-flush"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php else: ?>
    <?php
    $type = 'Subscriptions'; ?>
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
    <?php
        $routePrefix = Route::getCurrentRoute()->getPrefix();
    ?>
    <script>
        var label_update = '<?= get_label('upgrade ', 'Upgrade') ?>';
        var label_delete = '<?= get_label('delete', 'Delete') ?>';
        var label_view = '<?= get_label('view ', 'View ') ?>';
        var routePrefix = '<?php echo e($routePrefix); ?>';
    </script>
    <script src="<?php echo e(asset('assets/js/pages/subscriptions.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/superadmin/subscriptions/list.blade.php ENDPATH**/ ?>