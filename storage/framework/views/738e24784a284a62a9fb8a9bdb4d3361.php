<?php $__env->startSection('title'); ?>
    <?= get_label('permissions', 'Permissions') ?>
<?php $__env->stopSection(); ?>
<?php

use Spatie\Permission\Models\Permission; ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="d-flex justify-content-between mt-4">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('home.index')); ?>"><?= get_label('home', 'Home') ?></a>
                        </li>
                        <li class="breadcrumb-item ">
                            <a href="<?php echo e(route('users.index')); ?>"><?= get_label('users', 'Users') ?></a>
                        </li>
                        <li class="breadcrumb-item active">
                            <?php echo e(get_label('permissions', 'Permissions')); ?>

                        </li>
                    </ol>
                </nav>
            </div>
            <div>

            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <?php echo e(get_label('user_permissions', 'User Permissions')); ?> - <?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?>

            </div>
            <div class="card-body">

                <?php if($role->name == 'admin'): ?>
                    <div class="alert alert-primary alert-dismissible">
                        <span class="text-primary">
                            <?php echo e(get_label('admin_has_all_permissions', 'Admin has all the permissions')); ?>

                        </span>
                    </div>
                <?php else: ?>
                    <div class="alert alert-primary alert-dismissible">
                        <span class="text-primary">
                            <?php echo e(get_label('permissions_alert', 'Default Checked Permissions Are Those Assigned to the User\'s Role')); ?>

                        </span>
                    </div>

                    <div class="table-responsive text-nowrap">
                        <form id = "UserPermissions" method = "POST"
                            action= "<?php echo e(route('users.update_permissions', ['user' => $user->id])); ?>">
                            <?php echo method_field('put'); ?>
                            <?php echo csrf_field(); ?>
                            <table class="table my-2">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input type="checkbox" id="selectAllColumnPermissions"
                                                    class="form-check-input">
                                                <label class="form-check-label" for="selectAllColumnPermissions">
                                                    <?= get_label('select_all', 'Select all') ?>
                                                </label>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = config('taskify.permissions'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module => $permissions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" id="selectRow<?php echo e($module); ?>"
                                                        class="form-check-input row-permission-checkbox"
                                                        data-module="<?php echo e($module); ?>">
                                                    <label class="form-check-label"
                                                        for="selectRow<?php echo e($module); ?>"><?php echo e($module); ?></label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex flex-wrap justify-content-between">
                                                    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="form-check mx-4">
                                                            <?php if($role->guard_name == 'client'): ?>
                                                                <?php
                                                                $permissionModel = Permission::where('name', $permission)->where('guard_name', 'client')->first();
                                                                ?>
                                                                <input type="checkbox" name="permissions[]"
                                                                    value="<?php echo e($permissionModel ? $permissionModel->id : ''); ?>"
                                                                    class="form-check-input permission-checkbox"
                                                                    data-module="<?php echo e($module); ?>"
                                                                    <?php echo e($mergedPermissions->contains('name', $permission) ? 'checked' : ''); ?>>
                                                                <label
                                                                    class="form-check-label text-capitalize"><?php echo e($permissionModel ? substr($permissionModel->name, 0, strpos($permissionModel->name, '_')) : ''); ?></label>
                                                            <?php else: ?>
                                                                <input type="checkbox" name="permissions[]"
                                                                    value="<?php print_r(Permission::findByName($permission)->id); ?>"
                                                                    class="form-check-input permission-checkbox"
                                                                    data-module="<?php echo e($module); ?>"
                                                                    <?php echo e($mergedPermissions->contains('name', $permission) ? 'checked' : ''); ?>>
                                                                <label
                                                                    class="form-check-label text-capitalize"><?php print_r(substr($permission, 0, strpos($permission, '_'))); ?></label>
                                                            <?php endif; ?>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary"><?= get_label('save', 'Save') ?></button>
                            </div>
                        </form>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/users/permissions.blade.php ENDPATH**/ ?>