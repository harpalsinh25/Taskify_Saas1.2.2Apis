<?php $__env->startSection('title'); ?>
    <?php echo e(get_label('dashboard', 'Dashboard')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if (auth('web')->check() || auth('client')->check()): ?>
    <div class="container-fluid">
        <div class="col-lg-12 col-md-12 order-1">
            <?php
                $tiles = [
                    'manage_projects' => [
                        'permission' => 'manage_projects',
                        'icon' => 'bx bx-briefcase-alt-2 text-success',
                        'icon-bg' => 'bg-label-success',
                        'label' => get_label('total_projects', 'Total projects'),
                        'count' => is_countable($projects) && count($projects) > 0 ? count($projects) : 0,
                        'url' => getDefaultViewRoute('projects'),
                        'link_color' => 'text-success',
                    ],
                    'manage_tasks' => [
                        'permission' => 'manage_tasks',
                        'icon' => 'bx bx-task text-primary',
                        'icon-bg' => 'bg-label-primary',
                        'label' => get_label('total_tasks', 'Total tasks'),
                        'count' => $tasks,
                        'url' => getDefaultViewRoute('tasks'),
                        'link_color' => 'text-primary',
                    ],
                    'manage_users' => [
                        'permission' => 'manage_users',
                        'icon' => 'bx bxs-user-detail text-warning',
                        'icon-bg' => 'bg-label-warning',
                        'label' => get_label('total_users', 'Total users'),
                        'count' => is_countable($users) && count($users) > 0 ? count($users) : 0,
                        'url' => route('users.index'),
                        'link_color' => 'text-warning',
                    ],
                    'manage_clients' => [
                        'permission' => 'manage_clients',
                        'icon' => 'bx bxs-user-detail text-info',
                        'icon-bg' => 'bg-label-info',
                        'label' => get_label('total_clients', 'Total clients'),
                        'count' => is_countable($clients) && count($clients) > 0 ? count($clients) : 0,
                        'url' => route('clients.index'),
                        'link_color' => 'text-info',
                    ],
                    'manage_meetings' => [
                        'permission' => 'manage_meetings',
                        'icon' => 'bx bx-shape-polygon text-warning',
                        'icon-bg' => 'bg-label-warning',
                        'label' => get_label('total_meetings', 'Total meetings'),
                        'count' => is_countable($meetings) && count($meetings) > 0 ? count($meetings) : 0,
                        'url' => route('meetings.index'),
                        'link_color' => 'text-warning',
                    ],
                    'total_todos' => [
                        'permission' => null, // No specific permission required
                        'icon' => 'bx bx-list-check text-info',
                        'icon-bg' => 'bg-label-info',
                        'label' => get_label('total_todos', 'Total todos'),
                        'count' => is_countable($total_todos) && count($total_todos) > 0 ? count($total_todos) : 0,
                        'url' => route('todos.index'),
                        'link_color' => 'text-info',
                    ],
                ];

                // Filter tiles based on user permissions
                $filteredTiles = array_filter($tiles, function ($tile) use ($auth_user) {
                    return !$tile['permission'] || $auth_user->can($tile['permission']);
                });

                // Get the first 4 tiles
                $filteredTiles = array_slice($filteredTiles, 0, 4);
            ?>

            <div class="row mt-4">
                <?php $__currentLoopData = $filteredTiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6 col-6 mb-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body d-flex align-items-start justify-content-between">
                                <!-- Text Content -->
                                <div>
                                    <h6 class="mb-1"><?php echo e($tile['label']); ?></h6>
                                    <h3 class="fw-bold my-2"><?php echo e($tile['count']); ?></h3>
                                    <a href="<?php echo e($tile['url']); ?>" class="text-decoration-none <?php echo e($tile['link_color']); ?>">
                                        <small><i class="bx bx-right-arrow-alt"></i>
                                            <?php echo e(get_label('view_more', 'View more')); ?></small>
                                    </a>
                                </div>

                                <!-- Icon Wrapper -->

                                <div class="avatar">
                                    <span class="avatar-initial <?php echo e($tile['icon-bg']); ?> rounded">
                                        <i class="icon-base bx-sm <?php echo e($tile['icon']); ?>"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="row">
                
                <?php if($auth_user->can('manage_projects')): ?>
                    <div class="col-md-4 col-sm-12">
                        <div class="card statisticsDiv mb-4 overflow-hidden">
                            <div class="card-header pb-1 pt-3">
                                <div class="card-title mb-0">
                                    <h5 class="m-0 me-2"><?php echo e(get_label('project_statistics', 'Project statistics')); ?></h5>
                                </div>
                                <div class="my-3">
                                    <div id="projectStatisticsChart"></div>
                                </div>
                            </div>
                            <div class="card-body" id="project-statistics">
                                <?php
                                // Calculate status counts and total projects count
                                $statusCounts = [];
                                $total_projects_count = 0;
                                foreach ($statuses as $status) {
                                    $projectCount = isAdminOrHasAllDataAccess() ? count($status->projects) : $auth_user->status_projects($status->id)->count();
                                    $statusCounts[$status->id] = $projectCount;
                                    $total_projects_count += $projectCount; // Accumulate the count of projects
                                }
                                // Sort statuses by count in descending order
                                arsort($statusCounts);
                                ?>
                                <ul class="m-0 p-0">
                                    <?php $__currentLoopData = $statusCounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statusId => $count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $status = $statuses->where('id', $statusId)->first(); ?>
                                        <li class="d-flex mb-4 pb-1">
                                            <div class="avatar me-3 flex-shrink-0">
                                                <span class="avatar-initial bg-label-primary rounded"><i
                                                        class="bx bx-briefcase-alt-2 text-<?php echo e($status->color); ?>"></i></span>
                                            </div>
                                            <div
                                                class="d-flex w-100 align-items-center justify-content-between flex-wrap gap-2">
                                                <div class="me-2">
                                                    <a
                                                        href="<?php echo e(url(getUserPreferences('projects', 'default_view') . '?status=' . $status->id)); ?>">
                                                        <h6 class="mb-0"><?php echo e($status->title); ?></h6>
                                                    </a>
                                                </div>
                                                <div class="user-progress">
                                                    <small class="fw-semibold"><?php echo e($count); ?></small>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="avatar me-3 flex-shrink-0">
                                            <span class="avatar-initial bg-label-primary rounded"><i
                                                    class="bx bx-menu"></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 align-items-center justify-content-between flex-wrap gap-2">
                                            <div class="me-2">
                                                <h5 class="mb-0"> <?php echo e(get_label('total', 'Total')); ?></h5>
                                            </div>
                                            <div class="user-progress">
                                                <div class="status-count">
                                                    <h5 class="mb-0"><?php echo e($total_projects_count); ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                
                <?php if($auth_user->hasRole('admin') || $auth_user->can('manage_tasks')): ?>
                    <div class="col-md-6 col-lg-4 col-xl-4 order-0">
                        <div class="card statisticsDiv mb-4 overflow-hidden">
                            <div class="card-header pb-1 pt-3">
                                <div class="card-title mb-0">
                                    <h5 class="m-0 me-2"><?php echo e(get_label('task_statistics', 'Task statistics')); ?></h5>
                                </div>
                                <div class="my-3">
                                    <div id="taskStatisticsChart"></div>
                                </div>
                            </div>
                            <div class="card-body" id="task-statistics">
                                <?php
                                // Calculate status counts and total tasks count
                                $statusCounts = [];
                                $total_tasks_count = 0;
                                foreach ($statuses as $status) {
                                    $statusCount = isAdminOrHasAllDataAccess() ? count($status->tasks) : $auth_user->status_tasks($status->id)->count();
                                    $statusCounts[$status->id] = $statusCount;
                                    $total_tasks_count += $statusCount; // Accumulate the count of tasks
                                }
                                // Sort statuses by count in descending order
                                arsort($statusCounts);
                                ?>
                                <ul class="m-0 p-0">
                                    <?php $__currentLoopData = $statusCounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statusId => $count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $status = $statuses->where('id', $statusId)->first(); ?>
                                        <li class="d-flex mb-4 pb-1">
                                            <div class="avatar me-3 flex-shrink-0">
                                                <span class="avatar-initial bg-label-primary rounded"><i
                                                        class="bx bx-task text-<?php echo e($status->color); ?>"></i></span>
                                            </div>
                                            <div
                                                class="d-flex w-100 align-items-center justify-content-between flex-wrap gap-2">
                                                <div class="me-2">
                                                    <a
                                                        href="<?php echo e(url(getUserPreferences('tasks', 'default_view') . '?status=' . $status->id)); ?>">
                                                        <h6 class="mb-0"><?php echo e($status->title); ?></h6>
                                                    </a>
                                                </div>
                                                <div class="user-progress">
                                                    <small class="fw-semibold"><?php echo e($count); ?></small>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <li class="d-flex mb-4 pb-1">
                                        <div class="avatar me-3 flex-shrink-0">
                                            <span class="avatar-initial bg-label-primary rounded"><i
                                                    class="bx bx-menu"></i></span>
                                        </div>
                                        <div
                                            class="d-flex w-100 align-items-center justify-content-between flex-wrap gap-2">
                                            <div class="me-2">
                                                <h5 class="mb-0"><?php echo e(get_label('total', 'Total')); ?></h5>
                                            </div>
                                            <div class="user-progress">
                                                <div class="status-count">
                                                    <h5 class="mb-0"><?php echo e($total_tasks_count); ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                
                <div class="col-md-6 col-lg-4 col-xl-4 order-0">
                    <div class="card statisticsDiv mb-4 overflow-hidden">
                        <div class="card-header pb-1 pt-3">
                            <div class="card-title d-flex justify-content-between mb-0">
                                <h5 class="m-0 me-2"><?php echo e(get_label('todos_overview', 'Todos overview')); ?></h5>
                                <div>
                                    <span data-bs-toggle="modal" data-bs-target="#create_todo_modal"><a
                                            href="javascript:void(0);" class="btn btn-sm btn-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                            data-bs-original-title="<?php echo e(get_label('create_todo', 'Create todo')); ?>"><i
                                                class='bx bx-plus'></i></a></span>
                                    <a href="<?php echo e(url('todos')); ?>"><button type="button" class="btn btn-sm btn-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="right"
                                            data-bs-original-title="<?php echo e(get_label('view_more', 'View more')); ?>"><i
                                                class="bx bx-list-ul"></i></button></a>
                                </div>
                            </div>
                            <div class="my-3">
                                <div id="todoStatisticsChart"></div>
                            </div>
                        </div>
                        <div class="card-body" id="todos-statistics">
                            <?php $total_tasks_count = 0; ?>
                            <ul class="m-0 p-0">
                                <?php if(is_countable($todos) && count($todos) > 0): ?>
                                    <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="d-flex mb-4 pb-1">
                                            <div class="avatar flex-shrink-0">
                                                <input type="checkbox" id="<?php echo e($todo->id); ?>"
                                                    onclick='update_status(this)' name="<?php echo e($todo->id); ?>"
                                                    class="form-check-input mt-0"
                                                    <?php echo e($todo->is_completed ? 'checked' : ''); ?>>
                                            </div>
                                            <div
                                                class="d-flex w-100 align-items-center justify-content-between flex-wrap gap-2">
                                                <div class="me-2">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="<?php echo e($todo->is_completed ? 'striked' : ''); ?> mb-0"
                                                            id="<?php echo e($todo->id); ?>_title"><?php echo e($todo->title); ?></h6>
                                                        <div class="user-progress d-flex align-items-center gap-1">
                                                            <a href="javascript:void(0);" class="edit-todo"
                                                                data-bs-toggle="modal" data-bs-target="#edit_todo_modal"
                                                                data-id="<?php echo e($todo->id); ?>"
                                                                title="<?php echo e(get_label('update', 'Update')); ?>"><i
                                                                    class='bx bx-edit mx-1'></i></a>
                                                            <a href="javascript:void(0);" class="delete"
                                                                data-id="<?php echo e($todo->id); ?>" data-type="todos"
                                                                title="<?php echo e(get_label('delete', 'Delete')); ?>"><i
                                                                    class='bx bx-trash text-danger mx-1'></i></a>
                                                        </div>
                                                    </div>
                                                    <small
                                                        class="text-muted d-block my-1"><?php echo e(format_date($todo->created_at, true)); ?></small>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <div class="h-100 d-flex justify-content-center align-items-center">
                                        <div>
                                            <?php echo e(get_label('todos_not_found', 'Todos not found!')); ?>

                                        </div>
                                    </div>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <?php if($auth_user->hasRole('admin')): ?>
                    <div class="col-md-6 mb-4 mt-0">
                        <input type="hidden" id="filter_date_range_from">
                        <input type="hidden" id="filter_date_range_to">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title"><?php echo e(get_label('income_vs_expense', 'Income vs Expense')); ?></h5>
                            </div>
                            <div class="card-body">
                                <div class="col-md-6 mb-md-0 mb-2">
                                    <input type="text" id="filter_date_range_income_expense" class="form-control"
                                        placeholder="<?php echo e(get_label('date_between', 'Date Between')); ?>" autocomplete="off">
                                </div>
                                <div id="income-expense-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 mt-0">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title d-flex justify-content-between align-items-center">
                                    <?php echo e(get_label('recent_activities', 'Recent Activities')); ?>

                                    <i class='bx bx-bar-chart-alt-2 bx-sm text-body me-4'></i>
                                </h5>
                            </div>

                            <!-- Bootstrap 5 Utility Classes for Scrollable Content -->
                            <div class="card-body max-height-450 p-3" id="recent-activity">
                                <ul class="timeline mb-0">
                                    <?php $__empty_1 = true; $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <li class="timeline-item timeline-item-transparent">
                                            <span class="timeline-point
                                                <?php switch($activity->activity):
                                                case ('created'): ?> timeline-point-success <?php break; ?>
                                                <?php case ('updated'): ?> timeline-point-info <?php break; ?>
                                                <?php case ('deleted'): ?> timeline-point-danger <?php break; ?>
                                                <?php case ('updated status'): ?> timeline-point-warning <?php break; ?>
                                                <?php default: ?> timeline-point-primary
                                                <?php endswitch; ?>">
                                            </span>

                                            <div class="timeline-event">
                                                <div
                                                    class="timeline-header d-flex justify-content-between align-items-center">
                                                    <h6 class="fw-semibold mb-1"><?php echo e($activity->message); ?></h6>
                                                    <small
                                                        class="text-muted"><?php echo e($activity->created_at->diffForHumans()); ?></small>
                                                </div>
                                                <div class="timeline-body">
                                                    <p class="text-muted"><?php echo e(format_date($activity->created_at,true)); ?></p>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <li class="timeline-item timeline-item-transparent text-center">
                                            <span class="timeline-point timeline-point-primary"></span>
                                            <div class="timeline-event">
                                                <div class="timeline-header">
                                                    <h6 class="text-muted mb-0">
                                                        <?php echo e(get_label('no_activities', 'No recent activities')); ?>

                                                    </h6>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <div class="text-start text-sm">
                                    <a href="<?php echo e(route('activity_log.index')); ?>" class="btn btn-outline-primary btn-sm mt-3">
                                        <?php echo e(get_label('view_all', 'View All')); ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if(!isClient() && $auth_user->can('manage_users')): ?>
            <div class="nav-align-top">
                <ul class="nav nav-tabs" role="tablist">

                    <li class="nav-item">
                        <button type="button" class="nav-link parent-link active" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-top-upcoming-birthdays" aria-controls="navs-top-upcoming-birthdays"
                            aria-selected="true">
                            <i class="menu-icon tf-icons bx bx-cake text-success"></i>
                            <?php echo e(get_label('upcoming_birthdays', 'Upcoming birthdays')); ?>

                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link parent-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-top-upcoming-work-anniversaries"
                            aria-controls="navs-top-upcoming-work-anniversaries" aria-selected="false">
                            <i class="menu-icon tf-icons bx bx-star text-warning"></i>
                            <?php echo e(get_label('upcoming_work_anniversaries', 'Upcoming work anniversaries')); ?>

                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link parent-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-top-members-on-leave" aria-controls="navs-top-members-on-leave"
                            aria-selected="false">
                            <i class="menu-icon tf-icons bx bx-home text-danger"></i>
                            <?php echo e(get_label('members_on_leave', 'Members on leave')); ?>

                        </button>
                    </li>

                </ul>
                <div class="tab-content">

                    <div class="tab-pane fade active show" id="navs-top-upcoming-birthdays" role="tabpanel">
                        <ul class="nav nav-tabs justify-content-start rounded-pill mb-3 gap-2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button type="button"
                                    class="nav-link active rounded-2 bg-primary list-button px-4 py-2 text-white"
                                    role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-upcoming-birthdays-list"
                                    aria-controls="navs-top-upcoming-birthdays-list" aria-selected="true">
                                    <?php echo e(get_label('list', 'List')); ?>

                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link rounded-2 calendar-button px-4 py-2"
                                    role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-upcoming-birthdays-calendar"
                                    aria-controls="navs-top-upcoming-birthdays-calendar" aria-selected="false">
                                    <?php echo e(get_label('calendar', 'Calendar')); ?>

                                </button>
                            </li>
                        </ul>

                        <div class="tab-content p-0 shadow-none">
                            <div class="tab-pane fade active show" id="navs-top-upcoming-birthdays-list" role="tabpanel">
                                <?php if(!$auth_user->dob): ?>
                                    <div class="alert alert-primary alert-dismissible" role="alert">
                                        <?php echo e(get_label('dob_not_set_alert', 'Your DOB is not set')); ?>,
                                        <a href="<?php echo e(route('users.edit', ['id' => $auth_user->id])); ?>">
                                            <?php echo e(get_label('click_here_to_set_it_now', 'Click here to set it now')); ?></a>.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                                <?php if (isset($component)) { $__componentOriginald8884e4e982d2edfeafacac0bd35dfd7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8884e4e982d2edfeafacac0bd35dfd7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upcoming-birthdays-card','data' => ['users' => $users]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('upcoming-birthdays-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['users' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($users)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8884e4e982d2edfeafacac0bd35dfd7)): ?>
<?php $attributes = $__attributesOriginald8884e4e982d2edfeafacac0bd35dfd7; ?>
<?php unset($__attributesOriginald8884e4e982d2edfeafacac0bd35dfd7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8884e4e982d2edfeafacac0bd35dfd7)): ?>
<?php $component = $__componentOriginald8884e4e982d2edfeafacac0bd35dfd7; ?>
<?php unset($__componentOriginald8884e4e982d2edfeafacac0bd35dfd7); ?>
<?php endif; ?>
                            </div>
                            <div class="tab-pane fade" id="navs-top-upcoming-birthdays-calendar" role="tabpanel">
                                <div id="upcomingBirthdaysCalendar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="navs-top-upcoming-work-anniversaries" role="tabpanel">
                        <ul class="nav nav-tabs justify-content-start rounded-pill mb-3 gap-2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button type="button"
                                    class="nav-link active rounded-2 bg-primary list-button px-4 py-2 text-white"
                                    role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-upcoming-work-anniversaries-list"
                                    aria-controls="navs-top-upcoming-work-anniversaries-list" aria-selected="true">
                                    <?php echo e(get_label('list', 'List')); ?>

                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link rounded-2 calendar-button px-4 py-2"
                                    role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-upcoming-work-anniversaries-calendar"
                                    aria-controls="navs-top-upcoming-work-anniversaries-calendar" aria-selected="false">
                                    <?php echo e(get_label('calendar', 'Calendar')); ?>

                                </button>
                            </li>
                        </ul>
                        <div class="tab-content p-0 shadow-none">
                            <div class="tab-pane fade active show" id="navs-top-upcoming-work-anniversaries-list"
                                role="tabpanel">
                                <?php if(!$auth_user->doj): ?>
                                    <div class="alert alert-primary alert-dismissible" role="alert">
                                        <?php echo e(get_label('doj_not_set_alert', 'Your DOJ is not set')); ?>, <a
                                            href="<?php echo e(route('users.edit', ['id' => $auth_user->id])); ?>"><?php echo e(get_label('click_here_to_set_it_now', 'Click here to set it now')); ?></a>.<button
                                            type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                                <?php if (isset($component)) { $__componentOriginal6cc43fb5368b6514afccba7aec3b5b9c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6cc43fb5368b6514afccba7aec3b5b9c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upcoming-work-anniversaries-card','data' => ['users' => $users]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('upcoming-work-anniversaries-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['users' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($users)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6cc43fb5368b6514afccba7aec3b5b9c)): ?>
<?php $attributes = $__attributesOriginal6cc43fb5368b6514afccba7aec3b5b9c; ?>
<?php unset($__attributesOriginal6cc43fb5368b6514afccba7aec3b5b9c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6cc43fb5368b6514afccba7aec3b5b9c)): ?>
<?php $component = $__componentOriginal6cc43fb5368b6514afccba7aec3b5b9c; ?>
<?php unset($__componentOriginal6cc43fb5368b6514afccba7aec3b5b9c); ?>
<?php endif; ?>
                            </div>
                            <div class="tab-pane fade" id="navs-top-upcoming-work-anniversaries-calendar"
                                role="tabpanel">
                                <div id="upcomingWorkAnniversariesCalendar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="navs-top-members-on-leave" role="tabpanel">
                        <ul class="nav nav-tabs justify-content-start rounded-pill mb-3 gap-2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button type="button"
                                    class="nav-link active rounded-2 bg-primary list-button px-4 py-2 text-white"
                                    role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-members-on-leave-list"
                                    aria-controls="navs-top-members-on-leave-list" aria-selected="true">
                                    <?php echo e(get_label('list', 'List')); ?>

                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button type="button" class="nav-link rounded-2 calendar-button px-4 py-2"
                                    role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-members-on-leave-calendar"
                                    aria-controls="navs-top-members-on-leave-calendar" aria-selected="false">
                                    <?php echo e(get_label('calendar', 'Calendar')); ?>

                                </button>
                            </li>
                        </ul>
                        <div class="tab-content p-0 shadow-none">
                            <div class="tab-pane fade active show" id="navs-top-members-on-leave-list" role="tabpanel">
                                <?php if (isset($component)) { $__componentOriginalf0a0a8a1acb23775c9beae4c084517a5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf0a0a8a1acb23775c9beae4c084517a5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.members-on-leave-card','data' => ['users' => $users]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('members-on-leave-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['users' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($users)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf0a0a8a1acb23775c9beae4c084517a5)): ?>
<?php $attributes = $__attributesOriginalf0a0a8a1acb23775c9beae4c084517a5; ?>
<?php unset($__attributesOriginalf0a0a8a1acb23775c9beae4c084517a5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf0a0a8a1acb23775c9beae4c084517a5)): ?>
<?php $component = $__componentOriginalf0a0a8a1acb23775c9beae4c084517a5; ?>
<?php unset($__componentOriginalf0a0a8a1acb23775c9beae4c084517a5); ?>
<?php endif; ?>
                            </div>
                            <div class="tab-pane fade" id="navs-top-members-on-leave-calendar" role="tabpanel">
                                <div id="membersOnLeaveCalendar"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php endif; ?>
        <?php if($auth_user->can('manage_projects') || $auth_user->can('manage_tasks')): ?>
            <div class="nav-align-top my-4">
                <ul class="nav nav-tabs" role="tablist">
                    <?php if($auth_user->can('manage_projects')): ?>
                        <li class="nav-item">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-projects" aria-controls="navs-top-projects"
                                aria-selected="true">
                                <i
                                    class="menu-icon tf-icons bx bx-briefcase-alt-2 text-success"></i><?php echo e(get_label('projects', 'Projects')); ?>

                            </button>
                        </li>
                    <?php endif; ?>
                    <?php if($auth_user->can('manage_tasks')): ?>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-tasks" aria-controls="navs-top-tasks" aria-selected="false">
                                <i class="menu-icon tf-icons bx bx-task text-primary"></i><?php echo e(get_label('tasks', 'Tasks')); ?>

                            </button>
                        </li>
                    <?php endif; ?>
                </ul>
                <div class="tab-content">
                    <?php if($auth_user->can('manage_projects')): ?>
                        <div class="tab-pane fade active show" id="navs-top-projects" role="tabpanel">
                            <div class="">
                                <div class="d-flex justify-content-between">
                                    <h4 class="fw-bold"><?php echo e($auth_user->first_name); ?>'s
                                        <?php echo e(get_label('projects', 'Projects')); ?></h4>
                                </div>
                                <?php if(is_countable($projects) && count($projects) > 0): ?>
                                    <?php
                                    $type = isUser() ? 'user' : 'client';
                                    $id = isAdminOrHasAllDataAccess() ? '' : $type . '_' . $auth_user->id;
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
                            <div class="">
                                <div class="d-flex justify-content-between">
                                    <h4 class="fw-bold"><?php echo e($auth_user->first_name); ?>'s <?php echo e(get_label('tasks', 'Tasks')); ?>

                                    </h4>
                                </div>
                                <?php if($tasks > 0): ?>
                                    <?php
                                    $type = isUser() ? 'user' : 'client';
                                    $id = isAdminOrHasAllDataAccess() ? '' : $type . '_' . $auth_user->id;
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
        <!-- ------------------------------------------- -->
        <?php
        $titles = [];
        $project_counts = [];
        $task_counts = [];
        $bg_colors = [];
        $total_projects = 0;
        $total_tasks = 0;
        $total_todos = count($todos);
        $done_todos = 0;
        $pending_todos = 0;
        $todo_counts = [];
        $ran = [
            '#63ed7a',
            '#ffa426',
            '#fc544b',
            '#6777ef',
            '#FF00FF',
            '#53ff1a',
            '#ff3300',
            '#0000ff',
            '#00ffff',
            '#99ff33',
            '#003366',
            '#cc3300',
            '#ffcc00',
            '#ff9900',
            '#3333cc',
            '#ffff00',
            '#FF5733',
            '#33FF57',
            '#5733FF',
            '#FFFF33',
            '#A6A6A6',
            '#FF99FF',
            '#6699FF',
            '#666666',
            '#FF6600',
            '#9900CC',
            '#FF99CC',
            '#FFCC99',
            '#99CCFF',
            '#33CCCC',
            '#CCFFCC',
            '#99CC99',
            '#669999',
            '#CCCCFF',
            '#6666FF',
            '#FF6666',
            '#99CCCC',
            '#993366',
            '#339966',
            '#99CC00',
            '#CC6666',
            '#660033',
            '#CC99CC',
            '#CC3300',
            '#FFCCCC',
            '#6600CC',
            '#FFCC33',
            '#9933FF',
            '#33FF33',
            '#FFFF66',
            '#9933CC',
            '#3300FF',
            '#9999CC',
            '#0066FF',
            '#339900',
            '#666633',
            '#330033',
            '#FF9999',
            '#66FF33',
            '#6600FF',
            '#FF0033',
            '#009999',
            '#CC0000',
            '#999999',
            '#CC0000',
            '#CCCC00',
            '#00FF33',
            '#0066CC',
            '#66FF66',
            '#FF33FF',
            '#CC33CC',
            '#660099',
            '#663366',
            '#996666',
            '#6699CC',
            '#663399',
            '#9966CC',
            '#66CC66',
            '#0099CC',
            '#339999',
            '#00CCCC',
            '#CCCC99',
            '#FF9966',
            '#99FF00',
            '#66FF99',
            '#336666',
            '#00FF66',
            '#3366CC',
            '#CC00CC',
            '#00FF99',
            '#FF0000',
            '#00CCFF',
            '#000000',
            '#FFFFFF',
        ];
        foreach ($statuses as $status) {
            $project_count = isAdminOrHasAllDataAccess() ? count($status->projects) : $auth_user->status_projects($status->id)->count();
            array_push($project_counts, $project_count);
            $task_count = isAdminOrHasAllDataAccess() ? count($status->tasks) : $auth_user->status_tasks($status->id)->count();
            array_push($task_counts, $task_count);
            array_push($titles, "'" . $status->title . "'");
            $v = array_shift($ran);
            array_push($bg_colors, "'" . $v . "'");
            $total_projects += $project_count;
            $total_tasks += $task_count;
        }
        $titles = implode(',', $titles);
        $project_counts = implode(',', $project_counts);
        $task_counts = implode(',', $task_counts);
        $bg_colors = implode(',', $bg_colors);
        foreach ($todos as $todo) {
            $todo->is_completed ? ($done_todos += 1) : ($pending_todos += 1);
        }
        array_push($todo_counts, $done_todos);
        array_push($todo_counts, $pending_todos);
        $todo_counts = implode(',', $todo_counts);
        ?>
    </div>
    <script>
        var labels = [<?= $titles ?>];
        var project_data = [<?= $project_counts ?>];
        var task_data = [<?= $task_counts ?>];
        var bg_colors = [<?= $bg_colors ?>];
        var total_projects = [<?= $total_projects ?>];
        var total_tasks = [<?= $total_tasks ?>];
        var total_todos = [<?= $total_todos ?>];
        var todo_data = [<?= $todo_counts ?>];
        //labels
        var done = '<?= get_label('done ', 'Done ') ?>';
        var pending = '<?= get_label(' pending ', 'Pending ') ?>';
        var total = '<?= get_label('total ', 'Total ') ?>';
    </script>
    <script src="<?php echo e(asset('assets/js/apexcharts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/pages/dashboard.js')); ?>"></script>
<?php else: ?>
    <div class="w-100 h-100 d-flex align-items-center justify-content-center"><span>You must <a href="/login">Log in</a>
            or <a href="/register">Register</a> to access <?php echo e($general_settings['company_title']); ?>!</span></div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\Code v1.2.1 upload this on server\resources\views/dashboard.blade.php ENDPATH**/ ?>