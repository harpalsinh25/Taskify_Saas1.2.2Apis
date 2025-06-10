<?php $__env->startSection('title'); ?>
    <?= get_label('update_workspace', 'Update workspace') ?>
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
                            <a href="<?php echo e(route('workspaces.index')); ?>"><?= get_label('workspaces', 'Workspaces') ?></a>
                        </li>
                        <li class="breadcrumb-item">
                            <?= $workspace->title ?>
                        </li>
                        <li class="breadcrumb-item active">
                            <?= get_label('update', 'Update') ?>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="<?php echo e(route('workspaces.update', ['id' => $workspace->id])); ?>" class="form-submit-event"
                    method="POST">
                    <input type="hidden" name="redirect_url" value="<?php echo e(route('workspaces.index')); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="row">
                        <div class="mb-3">
                            <label for="title" class="form-label"><?= get_label('title', 'Title') ?> <span
                                    class="asterisk">*</span></label>
                            <input class="form-control" type="text" id="title" name="title"
                                placeholder="Enter Title" value="<?php echo e($workspace->title); ?>">
                            <?php $__errorArgs = ['title'];
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
                    </div>

                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label"
                                for="user_id"><?= get_label('select_users', 'Select users') ?></label>
                            <div class="input-group">
                                <select id="" class="form-control js-example-basic-multiple" name="user_ids[]"
                                    multiple="multiple"
                                    data-placeholder="<?= get_label('type_to_search', 'Type to search') ?>">
                                    <?php
                                    $workspace_users = $workspace->users;
                                    ?>
                                    <?php $__currentLoopData = $admin->teamMembers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teamMember): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($teamMember->user->id); ?>" <?php if ($workspace_users->contains($teamMember->user)) {


                                            echo 'selected';
                                        } ?>><?php echo e($teamMember->user->first_name); ?>


                                        <?php echo e($teamMember->user->last_name); ?></option>


                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($admin->user->id); ?>" <?php echo e($workspace_users->contains($admin->user) ? 'selected' : ''); ?>>

                                        <?php echo e($admin->user->first_name); ?> <?php echo e($admin->user->last_name); ?>

                                    </option>


                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label"
                                for="client_id"><?= get_label('select_clients', 'Select clients') ?></label>
                            <div class="input-group">

                                <select id="" class="form-control js-example-basic-multiple" name="client_ids[]"
                                    multiple="multiple"
                                    data-placeholder="<?= get_label('type_to_search', 'Type to search') ?>">
                                    <?php
                                    $workspace_clients = $workspace->clients;
                                    ?>
                                    <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($client->id); ?>" <?php if ($workspace_clients->contains($client)) {
                                            echo 'selected';
                                        } ?>><?php echo e($client->first_name); ?>

                                            <?php echo e($client->last_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                            </div>
                        </div>
                    </div>

                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2"
                            id="submit_btn"><?= get_label('update', 'Update') ?></button>
                        <button type="reset"
                            class="btn btn-outline-secondary"><?= get_label('cancel', 'Cancel') ?></button>
                    </div>

                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/workspaces/update_workspace.blade.php ENDPATH**/ ?>