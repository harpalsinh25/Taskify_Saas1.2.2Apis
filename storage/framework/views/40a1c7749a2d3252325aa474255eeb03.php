<?php $__env->startSection('title'); ?>
<?= get_label('notifications', 'Notifications') ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="d-flex justify-content-between m-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('home.index')); ?>"><?= get_label('home', 'Home') ?></a>
                    </li>
                    <li class="breadcrumb-item active">
                        <?= get_label('notifications', 'Notifications') ?>
                    </li>

                </ol>
            </nav>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <div class="table-responsive text-nowrap">


                <div class="row mt-4 mx-2">
                    <?php if(isAdminOrHasAllDataAccess()): ?>
                    <div class="col-md-4 mb-3">
                        <select class="form-select" id="user_filter" aria-label="Default select example">
                            <option value=""><?= get_label('select_user', 'Select user') ?></option>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($user->id); ?>" <?php echo e(!isClient() && auth()->id()==$user->id?'selected':''); ?>><?php echo e($user->first_name.' '.$user->last_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <select class="form-select" id="client_filter" aria-label="Default select example">
                            <option value=""><?= get_label('select_client', 'Select client') ?></option>
                            <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($client->id); ?>" <?php echo e(isClient() && auth()->id()==$client->id?'selected':''); ?>><?php echo e($client->first_name.' '.$client->last_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <?php endif; ?>
                    <div class="col-md-4 mb-3">
                        <select class="form-select" id="type_filter" aria-label="Default select example">
                            <option value=""><?= get_label('select_type', 'Select type') ?></option>
                            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($type); ?>"><?php echo e(get_label($type, ucfirst(str_replace('_', ' ', $type)))); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select" id="status_filter" aria-label="Default select example">
                            <option value=""><?= get_label('select_status', 'Select status') ?></option>
                            <option value="read"><?= get_label('read', 'Read') ?></option>
                            <option value="unread"><?= get_label('unread', 'Unread') ?></option>
                        </select>
                    </div>
                </div>

                <input type="hidden" id="data_type" value="notifications">
                <div class="mx-2 mb-2">
                    <table id="table" data-toggle="table" data-loading-template="loadingTemplate" data-url="<?php echo e(route('notifications.list')); ?>" data-icons-prefix="bx" data-icons="icons" data-show-refresh="true" data-total-field="total" data-trim-on-search="false" data-data-field="rows" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-side-pagination="server" data-show-columns="true" data-pagination="true" data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true" data-query-params="queryParams">
                        <thead>
                            <tr>
                                <th data-checkbox="true"></th>
                                <th data-sortable="true" data-field="id"><?= get_label('id', 'ID') ?></th>
                                <th data-sortable="true" data-field="title"><?= get_label('title', 'Title') ?></th>
                                <th data-sortable="true" data-field="message"><?= get_label('message', 'Message') ?></th>
                                <?php if(isAdminOrHasAllDataAccess()): ?>
                                <th data-field="users" data-formatter="UserFormatter"><?= get_label('users', 'Users') ?></th>
                                <th data-field="clients" data-formatter="ClientFormatter"><?= get_label('clients', 'Clients') ?></th>
                                <?php endif; ?>
                                <th data-sortable="true" data-field="type"><?= get_label('type', 'Type') ?></th>
                                <th data-sortable="true" data-field="status"><?= get_label('status', 'Status') ?></th>
                                <th data-sortable="true" data-field="created_at" data-visible="false"><?= get_label('created_at', 'Created at') ?></th>
                                <th data-sortable="true" data-field="updated_at" data-visible="false"><?= get_label('updated_at', 'Updated at') ?></th>
                                <th data-sortable="false" data-field="actions"><?= get_label('actions', 'Actions') ?></th>
                            </tr>
                        </thead>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="<?php echo e(asset('assets/js/pages/notifications.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/notifications/list.blade.php ENDPATH**/ ?>