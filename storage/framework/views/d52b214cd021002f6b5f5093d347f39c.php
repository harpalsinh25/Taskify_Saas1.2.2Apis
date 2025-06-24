<?php $__env->startSection('title'); ?>
    <?= get_label('user_profile', 'User profile') ?>
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
                            <a href="<?php echo e(route('users.index')); ?>"><?= get_label('users', 'Users') ?></a>
                        </li>
                        <li class="breadcrumb-item">
                            <?= $user->first_name . ' ' . $user->last_name ?>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">

                    <!-- Account -->
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="<?php echo e($user->photo ? asset('storage/' . $user->photo) : asset('/photos/1.png')); ?>"
                                alt="user-avatar" class="d-block rounded" height="100" width="100"
                                id="uploadedAvatar" />
                            <h4 class="card-header fw-bold"><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></h4>
                            <?= $user->status == 1 ? '<span class="badge bg-success">' . get_label('active', 'Active') . '</span>' : '<span class="badge bg-danger">' . get_label('deactive', 'Deactive') . '</span>' ?>
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <div class="row">

                            <div class="mb-3 col-md-6">
                                <label class="form-label"
                                    for="phone"><?= get_label('phone_number', 'Phone number') ?></label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder=""
                                        value="<?php echo e($user->country_code); ?><?php echo e($user->phone); ?>" readonly />
                                </div>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="email"><?= get_label('email', 'E-mail') ?></label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="text" id="exampleFormControlReadOnlyInput1"
                                        placeholder="" value="<?php echo e($user->email); ?>" readonly="">
                                </div>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="role"><?= get_label('role', 'Role') ?></label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control text-capitalize" type="text" id="role" placeholder=""
                                        value="<?php echo e($user->getRoleNames()->first()); ?>" readonly="">
                                </div>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="address"><?= get_label('address', 'Address') ?></label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="text" id="address" placeholder=""
                                        value="<?php echo e($user->address); ?>" readonly="">
                                </div>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="city"><?= get_label('city', 'City') ?></label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="text" id="city" placeholder=""
                                        value="<?php echo e($user->city); ?>" readonly="">
                                </div>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="state"><?= get_label('state', 'State') ?></label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="text" id="state" placeholder=""
                                        value="<?php echo e($user->state); ?>" readonly="">
                                </div>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="country"><?= get_label('country', 'Country') ?></label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="text" id="country" placeholder=""
                                        value="<?php echo e($user->country); ?>" readonly="">
                                </div>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="zip"><?= get_label('zip_code', 'Zip code') ?></label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="text" id="zip" placeholder=""
                                        value="<?php echo e($user->zip); ?>" readonly="">
                                </div>
                            </div>




                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="dob"><?= get_label('dob', 'Date of birth') ?></label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="text" placeholder="" value="<?php echo e(($user->dob) ? format_date($user->dob) : ''); ?>" readonly>


                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label"
                                    for="doj"><?= get_label('date_of_join', 'Date of joining') ?></label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="text" placeholder="" value="<?php echo e(($user->doj) ? format_date($user->doj) : ''); ?>" readonly>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabs -->
        <?php if($auth_user->can('manage_projects') || $auth_user->can('manage_tasks')): ?>
            <div class="nav-align-top my-4">
                <ul class="nav nav-tabs" role="tablist">
                    <?php if($auth_user->can('manage_projects')): ?>
                        <li class="nav-item">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-projects" aria-controls="navs-top-projects"
                                aria-selected="true">
                                <i
                                    class="menu-icon tf-icons bx bx-briefcase-alt-2 text-success"></i><?= get_label('projects', 'Projects') ?>
                            </button>
                        </li>
                    <?php endif; ?>
                    <?php if($auth_user->can('manage_tasks')): ?>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-tasks" aria-controls="navs-top-tasks" aria-selected="false">
                                <i
                                    class="menu-icon tf-icons bx bx-task text-primary"></i><?= get_label('tasks', 'Tasks') ?>
                            </button>
                        </li>
                    <?php endif; ?>
                </ul>
                <div class="tab-content">
                    <?php if($auth_user->can('manage_projects')): ?>
                        <div class="tab-pane fade active show" id="navs-top-projects" role="tabpanel">

                            <div class=" text-nowrap">

                                <div class="d-flex justify-content-between">
                                    <h4 class="fw-bold"><?php echo e($user->first_name); ?>'s <?= get_label('projects', 'Projects') ?>
                                    </h4>
                                </div>
                                <?php if(is_countable($projects) && count($projects) > 0): ?>
                                    <?php
                                    $id = isAdminOrHasAllDataAccess() ? '' : 'user_' . $user->id;
                                    ?>
                                    <?php if (isset($component)) { $__componentOriginalca6d693a608f33d88584be89bf68c49d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalca6d693a608f33d88584be89bf68c49d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.projects-card','data' => ['projects' => $projects,'id' => $id,'users' => $users,'clients' => $clients]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('projects-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['projects' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($projects),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($id),'users' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($users),'clients' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($clients)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalca6d693a608f33d88584be89bf68c49d)): ?>
<?php $attributes = $__attributesOriginalca6d693a608f33d88584be89bf68c49d; ?>
<?php unset($__attributesOriginalca6d693a608f33d88584be89bf68c49d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalca6d693a608f33d88584be89bf68c49d)): ?>
<?php $component = $__componentOriginalca6d693a608f33d88584be89bf68c49d; ?>
<?php unset($__componentOriginalca6d693a608f33d88584be89bf68c49d); ?>
<?php endif; ?>
                                <?php else: ?>
                                    <?php
                                    $type = 'Projects'; ?>
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

                        </div>
                    <?php endif; ?>

                    <?php if($auth_user->can('manage_tasks')): ?>
                        <div class="tab-pane fade <?php echo e(!$auth_user->can('manage_projects') ? 'active show' : ''); ?>"
                            id="navs-top-tasks" role="tabpanel">

                            <div class=" text-nowrap">

                                <div class="d-flex justify-content-between">
                                    <h4 class="fw-bold"><?php echo e($user->first_name); ?>'s <?= get_label('tasks', 'Tasks') ?></h4>
                                </div>
                                <?php if($tasks > 0): ?>
                                    <?php
                                    $id = isAdminOrHasAllDataAccess() ? '' : 'user_' . $user->id;
                                    ?>
                                    <?php if (isset($component)) { $__componentOriginal6e07742d54bdaa8ecbb34c156d7ec080 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6e07742d54bdaa8ecbb34c156d7ec080 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tasks-card','data' => ['tasks' => $tasks,'id' => $id,'users' => $users,'clients' => $clients,'projects' => $projects]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tasks-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tasks' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tasks),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($id),'users' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($users),'clients' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($clients),'projects' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($projects)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6e07742d54bdaa8ecbb34c156d7ec080)): ?>
<?php $attributes = $__attributesOriginal6e07742d54bdaa8ecbb34c156d7ec080; ?>
<?php unset($__attributesOriginal6e07742d54bdaa8ecbb34c156d7ec080); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6e07742d54bdaa8ecbb34c156d7ec080)): ?>
<?php $component = $__componentOriginal6e07742d54bdaa8ecbb34c156d7ec080; ?>
<?php unset($__componentOriginal6e07742d54bdaa8ecbb34c156d7ec080); ?>
<?php endif; ?>
                                <?php else: ?>
                                    <?php
                                    $type = 'Tasks'; ?>
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

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/users/user_profile.blade.php ENDPATH**/ ?>