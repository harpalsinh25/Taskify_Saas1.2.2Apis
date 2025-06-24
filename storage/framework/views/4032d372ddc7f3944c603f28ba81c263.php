<?php $__env->startSection('title'); ?>
    <?php echo e(get_label('task_details', 'Task details')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="align-items-center d-flex justify-content-between m-4">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('home.index')); ?>"><?php echo e(get_label('home', 'Home')); ?></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(getDefaultViewRoute('tasks')); ?>"><?php echo e(get_label('tasks', 'Tasks')); ?></a>
                        </li>
                        <li class="breadcrumb-item active">
                            <?php echo e($task->title); ?>

                        </li>
                    </ol>
                </nav>
            </div>
            <div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="fw-bold"><?php echo e($task->title); ?>

                                    
                                </h2>
                                <?php if($task->completion_percentage != null): ?>
                                    <div class="progress h-2vh">
                                        <?php
                                            $progressBarClass = '';
                                            if ($task->completion_percentage > 75) {
                                                $progressBarClass = 'bg-success';
                                            } elseif ($task->completion_percentage > 50) {
                                                $progressBarClass = 'bg-warning';
                                            } elseif ($task->completion_percentage > 25) {
                                                $progressBarClass = 'bg-info';
                                            } else {
                                                $progressBarClass = 'bg-danger';
                                            }
                                        ?>
                                        <div role="progressbar"
                                            class="progress-bar progress-bar-striped progress-bar-animated <?php echo e($progressBarClass); ?>"
                                            role="progressbar" style="width: <?php echo e($task->completion_percentage); ?>%;"
                                            aria-valuenow="<?php echo e($task->completion_percentage); ?>" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <?php echo e(get_label('completion_percentage', 'Completion Percentage')); ?> :
                                            <?php echo e($task->completion_percentage); ?>%
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="row">
                                    <div class="col-md-6 mb-3 mt-3">
                                        <label class="form-label"
                                            for="start_date"><?php echo e(get_label('users', 'Users')); ?></label>
                                        <?php
                                                                            $users = $task->users;
                                                                            $clients = $task->project->clients;
                                                                            if (count($users) > 0) {
                                                                            ?>
                                        <ul
                                            class="list-unstyled users-list avatar-group d-flex align-items-center m-0 flex-wrap">
                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="avatar avatar-sm pull-up"
                                                    title="<?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?>"><a
                                                        href="/master-panel/users/profile/<?php echo e($user->id); ?>"
                                                        target="_blank">
                                                        <img src="<?php echo e($user->photo ? asset('storage/' . $user->photo) : asset('storage/photos/no-image.jpg')); ?>"
                                                            class="rounded-circle"
                                                            alt="<?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?>">
                                                    </a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <a href="javascript:void(0)"
                                                class="btn btn-icon btn-sm btn-outline-primary btn-sm rounded-circle edit-task update-users-clients"
                                                data-id="<?php echo e($task->id); ?>"><span class="bx bx-edit"></span></a>
                                        </ul>
                                        <?php } else { ?>
                                        <p><span
                                                class="badge bg-primary"><?php echo e(get_label('not_assigned', 'Not assigned')); ?></span><a
                                                href="javascript:void(0)"
                                                class="btn btn-icon btn-sm btn-outline-primary btn-sm rounded-circle edit-task update-users-clients"
                                                data-id="<?php echo e($task->id); ?>"><span class="bx bx-edit"></span></a></p>
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-6 mb-3 mt-3">
                                        <label class="form-label"
                                            for="end_date"><?php echo e(get_label('clients', 'Clients')); ?></label>
                                        <?php
                                                                            if (count($clients) > 0) { ?>
                                        <ul
                                            class="list-unstyled users-list avatar-group d-flex align-items-center m-0 flex-wrap">
                                            <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="avatar avatar-sm pull-up"
                                                    title="<?php echo e($client->first_name); ?> <?php echo e($client->last_name); ?>"><a
                                                        href="/master-panel/clients/profile/<?php echo e($client->id); ?>"
                                                        target="_blank">
                                                        <img src="<?php echo e($client->photo ? asset('storage/' . $client->photo) : asset('storage/photos/no-image.jpg')); ?>"
                                                            class="rounded-circle"
                                                            alt="<?php echo e($client->first_name); ?> <?php echo e($client->last_name); ?>">
                                                    </a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                        <?php } else { ?>
                                        <p><span
                                                class="badge bg-primary"><?php echo e(get_label('not_assigned', 'Not assigned')); ?></span>
                                        </p>
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label"><?php echo e(get_label('status', 'Status')); ?></label>
                                        <div class="input-group">
                                            <select
                                                class="form-select form-select-sm select-bg-label-<?php echo e($task->status->color); ?>"
                                                id="statusSelect" data-id="<?php echo e($task->id); ?>"
                                                data-original-status-id="<?php echo e($task->status->id); ?>"
                                                data-original-color-class="select-bg-label-<?php echo e($task->status->color); ?>"
                                                data-type="task">
                                                <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php
                                                        $disabled = canSetStatus($status) ? '' : 'disabled';
                                                    ?>
                                                    <option value="<?php echo e($status->id); ?>"
                                                        class="badge bg-label-<?php echo e($status->color); ?>"
                                                        <?php echo e($task->status->id == $status->id ? 'selected' : ''); ?>

                                                        <?php echo e($disabled); ?>>
                                                        <?php echo e($status->title); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="prioritySelect"
                                            class="form-label"><?php echo e(get_label('priority', 'Priority')); ?></label>
                                        <div class="input-group">
                                            <select
                                                class="form-select form-select-sm select-bg-label-<?php echo e($task->priority ? $task->priority->color : 'secondary'); ?>"
                                                id="prioritySelect" data-id="<?php echo e($task->id); ?>"
                                                data-original-priority-id="<?php echo e($task->priority ? $task->priority->id : ''); ?>"
                                                data-original-color-class="select-bg-label-<?php echo e($task->priority ? $task->priority->color : 'secondary'); ?>"
                                                data-type="task">
                                                <?php $__currentLoopData = $priorities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $priority): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($priority->id); ?>"
                                                        class="badge bg-label-<?php echo e($priority->color); ?>"
                                                        <?php echo e($task->priority && $task->priority->id == $priority->id ? 'selected' : ''); ?>>
                                                        <?php echo e($priority->title); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="project"><?php echo e(get_label('project', 'Project')); ?></label>
                                <div class="input-group input-group-merge">
                                    <?php
                                        $project = $task->project;
                                    ?>
                                    <input class="form-control px-2" type="text" id="project"
                                        value="<?php echo e($project->title); ?>" readonly="">
                                </div>
                            </div>
                        </div>
                        <?php if(isset($task->description)): ?>
                            <div class="row">
                                <div class="mb-3">
                                    <label class="form-label"
                                        for="description"><?php echo e(get_label('description', 'Description')); ?></label>
                                    <div class="input-group input-group-merge">
                                        <div class="form-control" rows="5" readonly><?php echo $task->description; ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label"
                                    for="start_date"><?php echo e(get_label('starts_at', 'Starts at')); ?></label>
                                <div class="input-group input-group-merge">
                                    <input type="text" name="start_date" class="form-control" placeholder=""
                                        value="<?php echo e(format_date($task->start_date)); ?>" readonly />
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="due-date"><?php echo e(get_label('ends_at', 'Ends at')); ?></label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="text" name="due_date" placeholder=""
                                        value="<?php echo e(format_date($task->due_date)); ?>" readonly="">
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label"
                                    for="billing_type"><?php echo e(get_label('billing_type', 'Billing Type')); ?></label>
                                <span class="form-control" readonly
                                    value="<?php echo e($task->billing_type); ?>"><?php echo e(ucwords($task->billing_type)); ?></span>
                            </div>
                        </div>

                    </div>
                    <hr class="my-0">
                    <div>
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <label class="form-label"><?php echo e(get_label('reminder_details', 'Reminders Details')); ?></label>
                            <span class="badge <?php echo e($task->reminders->first()?->is_active ? 'bg-success' : 'bg-danger'); ?>">
                                <?php echo e($task->reminders->first()?->is_active ? get_label('active', 'Active') : get_label('inactive', 'Inactive')); ?>

                            </span>
                        </div>
                        <?php if($task->reminders->isNotEmpty()): ?>
                            <div class="card-body">
                                <?php
                                    $reminder = $task->reminders->first();
                                    $frequencyType = ucfirst($reminder->frequency_type);
                                    $timeOfDay = \Carbon\Carbon::parse($reminder->time_of_day)->format('h:i A');
                                ?>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(get_label('frequency', 'Frequency')); ?></label>
                                            <p class="form-control mb-0" readonly>
                                                <?php switch($reminder->frequency_type):
                                                    case ('daily'): ?>
                                                        <i class="bx bx-time text-dark me-1"></i>
                                                        <?php echo e(get_label('daily_at', 'Daily at')); ?> <?php echo e($timeOfDay); ?>

                                                    <?php break; ?>

                                                    <?php case ('weekly'): ?>
                                                        <i class="bx bx-calendar text-dark me-1"></i>
                                                        <?php
                                                            $dayNames = [
                                                                1 => 'Monday',
                                                                2 => 'Tuesday',
                                                                3 => 'Wednesday',
                                                                4 => 'Thursday',
                                                                5 => 'Friday',
                                                                6 => 'Saturday',
                                                                7 => 'Sunday',
                                                            ];
                                                            $dayName = $reminder->day_of_week
                                                                ? get_label(
                                                                    strtolower($dayNames[$reminder->day_of_week]),
                                                                    $dayNames[$reminder->day_of_week],
                                                                )
                                                                : get_label('any_day', 'Any Day');
                                                        ?>
                                                        <?php echo e(get_label('weekly_on', 'Weekly on')); ?> <?php echo e($dayName); ?>

                                                        <?php echo e(get_label('at', 'at')); ?> <?php echo e($timeOfDay); ?>

                                                    <?php break; ?>

                                                    <?php case ('monthly'): ?>
                                                        <i class="bx bx-calendar-alt text-dark me-1"></i>
                                                        <?php
                                                            $dayOfMonth =
                                                                $reminder->day_of_month ?:
                                                                get_label('any_day', 'Any Day');
                                                            if (is_numeric($dayOfMonth)) {
                                                                $dayOfMonth .= date(
                                                                    'S',
                                                                    mktime(0, 0, 0, 1, $dayOfMonth, 2000),
                                                                ); // Adds st, nd, rd, th
                                                            }
                                                        ?>
                                                        <?php echo e(get_label('monthly_on_the', 'Monthly on the')); ?> <?php echo e($dayOfMonth); ?>

                                                        <?php echo e(get_label('at', 'at')); ?> <?php echo e($timeOfDay); ?>

                                                    <?php break; ?>
                                                <?php endswitch; ?>
                                            </p>
                                        </div>

                                        <?php if($reminder->last_sent_at): ?>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label"><?php echo e(get_label('last_reminder_sent', 'Last Reminder Sent')); ?></label>
                                                <p class="form-control mb-0" readonly>
                                                    <i class='bx bxs-alarm-add text-primary me-1'></i>
                                                    <?php echo e(\Carbon\Carbon::parse($reminder->last_sent_at)->diffForHumans()); ?>

                                                </p>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(get_label('created_on', 'Created On')); ?></label>
                                            <p class="form-control mb-0" readonly>
                                                <i class='bx bxs-calendar-event text-danger me-1'></i>
                                                <?php echo e(format_date($reminder->created_at)); ?>

                                            </p>
                                        </div>

                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(get_label('last_updated', 'Last Updated')); ?></label>
                                            <p class="form-control mb-0" readonly>
                                                <i class='bx bx-calendar text-warning me-1'></i>
                                                <?php echo e(format_date($reminder->updated_at, true)); ?>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="card-body">
                                <p class="text-muted mb-0">
                                    <i class="fas fa-bell-slash me-2"></i>
                                    <?php echo e(get_label('no_reminders_set', 'No reminders set for this task')); ?>

                                </p>
                            </div>
                        <?php endif; ?>
                    </div>
                    <hr class="my-0">
                    <div>
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <label class="form-label"><?php echo e(get_label('recurrence_details', 'Recurrence Details')); ?></label>
                            <span class="badge <?php echo e($task->recurringTask?->is_active ? 'bg-success' : 'bg-danger'); ?>">
                                <?php echo e($task->recurringTask?->is_active ? get_label('active', 'Active') : get_label('inactive', 'Inactive')); ?>

                            </span>
                        </div>
                        <?php if($task->recurringTask): ?>
                            <div class="card-body">
                                <?php
                                    $recurringTask = $task->recurringTask;
                                    $frequencyType = ucfirst($recurringTask->frequency);

                                ?>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(get_label('frequency', 'Frequency')); ?></label>
                                            <p class="form-control mb-0" readonly>
                                                <?php switch($recurringTask->frequency):
                                                    case ('daily'): ?>
                                                        <i class="bx bx-time text-dark me-1"></i>
                                                        <?php echo e(get_label('daily_at', 'Daily at')); ?> <?php echo e('00:00'); ?>

                                                    <?php break; ?>

                                                    <?php case ('weekly'): ?>
                                                        <i class="bx bx-calendar text-dark me-1"></i>
                                                        <?php
                                                            $dayNames = [
                                                                1 => 'Monday',
                                                                2 => 'Tuesday',
                                                                3 => 'Wednesday',
                                                                4 => 'Thursday',
                                                                5 => 'Friday',
                                                                6 => 'Saturday',
                                                                7 => 'Sunday',
                                                            ];
                                                            $dayName = $recurringTask->day_of_week
                                                                ? get_label(
                                                                    strtolower($dayNames[$recurringTask->day_of_week]),
                                                                    $dayNames[$recurringTask->day_of_week],
                                                                )
                                                                : get_label('any_day', 'Any Day');
                                                        ?>
                                                        <?php echo e(get_label('weekly_on', 'Weekly on')); ?> <?php echo e($dayName); ?>

                                                        <?php echo e(get_label('at', 'at')); ?> <?php echo e('00:00'); ?>

                                                    <?php break; ?>

                                                    <?php case ('monthly'): ?>
                                                        <i class="bx bx-calendar-alt text-dark me-1"></i>
                                                        <?php
                                                            $dayOfMonth =
                                                                $recurringTask->day_of_month ?:
                                                                get_label('any_day', 'Any Day');
                                                            if (is_numeric($dayOfMonth)) {
                                                                $dayOfMonth .= date(
                                                                    'S',
                                                                    mktime(0, 0, 0, 1, $dayOfMonth, 2000),
                                                                ); // Adds st, nd, rd, th
                                                            }
                                                        ?>
                                                        <?php echo e(get_label('monthly_on_the', 'Monthly on the')); ?> <?php echo e($dayOfMonth); ?>

                                                        <?php echo e(get_label('at', 'at')); ?> <?php echo e('00:00'); ?>

                                                    <?php break; ?>

                                                    <?php case ('yearly'): ?>
                                                        <i class="bx bx-calendar-alt text-dark me-1"></i>
                                                        <?php
                                                            $dayOfMonth =
                                                                $recurringTask->day_of_month ?:
                                                                get_label('any_day', 'Any Day');
                                                            if (is_numeric($dayOfMonth)) {
                                                                $dayOfMonth .= date(
                                                                    'S',
                                                                    mktime(0, 0, 0, 1, $dayOfMonth, 2000),
                                                                ); // Adds st, nd, rd, th
                                                            }
                                                        ?>
                                                        <?php echo e(get_label('yearly_on_the', 'Yearly on the')); ?> <?php echo e($dayOfMonth); ?>

                                                        <?php echo e(get_label('of', 'of')); ?>

                                                        <?php echo e(\Carbon\Carbon::create()->month($recurringTask->month_of_year)->format('F')); ?>

                                                        <?php echo e(get_label('at', 'at')); ?> <?php echo e('00:00'); ?>

                                                    <?php break; ?>
                                                <?php endswitch; ?>
                                            </p>
                                        </div>

                                        <?php if($recurringTask->starts_from): ?>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label"><?php echo e(get_label('starts_from', 'Starts From')); ?></label>
                                                <p class="form-control mb-0" readonly>
                                                    <i class='bx bxs-alarm-add text-primary me-1'></i>
                                                    <?php echo e(format_date($recurringTask->starts_from)); ?>

                                                </p>
                                            </div>
                                        <?php endif; ?>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(get_label('completed_occurrences', 'Completed Occurrences')); ?></label>
                                            <p class="form-control mb-0" readonly>
                                                <i class='bx bxs-analyse text-success me-1'></i>
                                                <?php echo e($recurringTask->completed_occurrences ?? 0); ?>

                                                <?php echo e(get_label('completed_occurances', 'Completed Occurrences')); ?>

                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-6">


                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(get_label('created_on', 'Created On')); ?></label>
                                            <p class="form-control mb-0" readonly>
                                                <i class='bx bxs-calendar-event text-danger me-1'></i>
                                                <?php echo e(format_date($recurringTask->created_at, true)); ?>

                                            </p>
                                        </div>

                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(get_label('last_updated', 'Last Updated')); ?></label>
                                            <p class="form-control mb-0" readonly>
                                                <i class='bx bx-calendar text-warning me-1'></i>
                                                <?php echo e(format_date($recurringTask->updated_at, true)); ?>

                                            </p>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(get_label('number_of_occurrences', 'Number of Occurrences')); ?></label>
                                            <p class="form-control mb-0" readonly>
                                                <i class='bx bxs-analyse text-primary me-1'></i>
                                                <?php echo e($recurringTask->number_of_occurrences); ?>

                                                <?php echo e(get_label('number_of_occurances', 'Number of Occurrences')); ?>

                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="card-body">
                                <p class="text-muted mb-0">
                                    <i class="fas fa-bell-slash me-2"></i>
                                    <?php echo e(get_label('no_recurrence_set', 'No recurrence set for this task')); ?>

                                </p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <input type="hidden" id="media_type_id" value="<?php echo e($task->id); ?>">
            </div>
            <div class="nav-align-top mt-2">
                <ul class="nav nav-tabs" role="tablist">
                    <?php
                        $activeTab = '';
                    ?>
                    <?php if(Auth::guard('web')->check()): ?>
                        <li class="nav-item">
                            <button type="button" class="nav-link <?php echo e(empty($activeTab) ? 'active' : ''); ?>"
                                role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-discussions"
                                aria-controls="navs-top-discussions">
                                <i
                                    class="menu-icon tf-icons bx bxs-chat text-danger"></i><?php echo e(get_label('discussions', 'Discussions')); ?>

                            </button>
                        </li>
                        <?php
                            if (empty($activeTab)) {
                                $activeTab = 'discussions';
                            }
                        ?>
                    <?php endif; ?>
                    <?php if($task->project->enable_tasks_time_entries == 1): ?>
                        <li class="nav-item">
                            <button type="button" class="nav-link <?php echo e(empty($activeTab) ? 'active' : ''); ?>"
                                role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-time-entries"
                                aria-controls="navs-top-time-entries">
                                <i
                                    class="menu-icon tf-icons bx bx-time text-info"></i><?php echo e(get_label('time_entries', 'Time Entries')); ?>

                            </button>
                        </li>
                        <?php
                            if (empty($activeTab)) {
                                $activeTab = 'time_entries';
                            }
                        ?>
                    <?php endif; ?>
                    <?php if($auth_user->can('manage_media')): ?>
                        <li class="nav-item">
                            <button type="button" class="nav-link <?php echo e(empty($activeTab) ? 'active' : ''); ?>"
                                role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-media"
                                aria-controls="navs-top-media">
                                <i
                                    class="menu-icon tf-icons bx bx-image-alt text-success"></i><?php echo e(get_label('media', 'Media')); ?>

                            </button>
                        </li>
                        <?php
                            if (empty($activeTab)) {
                                $activeTab = 'media';
                            }
                        ?>
                    <?php endif; ?>
                    <li class="nav-item">
                        <button type="button" class="nav-link <?php echo e(empty($activeTab) ? 'active' : ''); ?>" role="tab"
                            data-bs-toggle="tab" data-bs-target="#navs-top-status_timeline"
                            aria-controls="navs-top-status_timeline">
                            <i
                                class="menu-icon tf-icons bx bx-align-justify text-dark"></i><?php echo e(get_label('status_timeline', 'Status Timeline')); ?>

                        </button>
                    </li>
                    <?php
                        if (empty($activeTab)) {
                            $activeTab = 'status_timeline';
                        }
                    ?>
                    <?php if($auth_user->can('manage_activity_log')): ?>
                        <li class="nav-item">
                            <button type="button" class="nav-link <?php echo e($activeTab == 'activity_log' ? 'active' : ''); ?>"
                                role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-activity-log"
                                aria-controls="navs-top-activity-log">
                                <i
                                    class="menu-icon tf-icons bx bx-line-chart text-info"></i><?php echo e(get_label('activity_log', 'Activity log')); ?>

                            </button>
                        </li>
                        <?php
                            if (empty($activeTab)) {
                                $activeTab = 'activity_log';
                            }
                        ?>
                    <?php endif; ?>
                </ul>
                <div class="tab-content">


                    <div class="tab-pane fade active show" id="navs-top-discussions" role="tabpanel">
                        <!-- Discussions content -->
                        <?php if (isset($component)) { $__componentOriginal0d2539e38bfd529daa50973893e080e5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0d2539e38bfd529daa50973893e080e5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.task-discussions-card','data' => ['task' => $task]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('task-discussions-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['task' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($task)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0d2539e38bfd529daa50973893e080e5)): ?>
<?php $attributes = $__attributesOriginal0d2539e38bfd529daa50973893e080e5; ?>
<?php unset($__attributesOriginal0d2539e38bfd529daa50973893e080e5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0d2539e38bfd529daa50973893e080e5)): ?>
<?php $component = $__componentOriginal0d2539e38bfd529daa50973893e080e5; ?>
<?php unset($__componentOriginal0d2539e38bfd529daa50973893e080e5); ?>
<?php endif; ?>
                    </div>
                    <div class="tab-pane fade" id="navs-top-media" role="tabpanel">
                        <div class="col-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <div></div>
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_media_modal">
                                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="left"
                                        data-bs-original-title="<?php echo e(get_label('add_media', 'Add Media')); ?>">
                                        <i class="bx bx-plus"></i>
                                    </button>
                                </a>
                            </div>
                            <?php
                                $visibleColumns = getUserPreferences('task_media');
                            ?>
                            <div class="table-responsive text-nowrap">
                                <input type="hidden" id="data_type" value="task-media">
                                <input type="hidden" id="data_table" value="task_media_table">
                                <input type="hidden" id="save_column_visibility">
                                <table id="task_media_table" data-toggle="table" data-loading-template="loadingTemplate"
                                    data-url="<?php echo e(route('tasks.get_media', ['id' => $task->id])); ?>"
                                    data-icons-prefix="bx" data-icons="icons" data-show-refresh="true"
                                    data-total-field="total" data-trim-on-search="false" data-data-field="rows"
                                    data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true"
                                    data-side-pagination="server" data-show-columns="true" data-pagination="true"
                                    data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true"
                                    data-query-params="queryParamsTaskMedia">
                                    <thead>
                                        <tr>
                                            <th data-checkbox="true"></th>
                                            <th data-field="id"
                                                data-visible="<?php echo e(in_array('id', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>"
                                                data-sortable="true"><?php echo e(get_label('id', 'ID')); ?></th>
                                            <th data-field="file"
                                                data-visible="<?php echo e(in_array('file', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>"
                                                data-sortable="true"><?php echo e(get_label('file', 'File')); ?></th>
                                            <th data-field="file_name" data-sortable="true"
                                                data-visible="<?php echo e(in_array('file_name', $visibleColumns) ? 'true' : 'false'); ?>">
                                                <?php echo e(get_label('file_name', 'File name')); ?></th>
                                            <th data-field="file_size"
                                                data-visible="<?php echo e(in_array('file_size', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>"
                                                data-sortable="true"><?php echo e(get_label('file_size', 'File size')); ?></th>
                                            <th data-field="created_at" data-sortable="true"
                                                data-visible="<?php echo e(in_array('created_at', $visibleColumns) ? 'true' : 'false'); ?>">
                                                <?php echo e(get_label('created_at', 'Created at')); ?></th>
                                            <th data-field="updated_at" data-sortable="true"
                                                data-visible="<?php echo e(in_array('updated_at', $visibleColumns) ? 'true' : 'false'); ?>">
                                                <?php echo e(get_label('updated_at', 'Updated at')); ?></th>
                                            <th data-field="actions"
                                                data-visible="<?php echo e(in_array('actions', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>"
                                                data-sortable="false"><?php echo e(get_label('actions', 'Actions')); ?></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php if($task->project->enable_tasks_time_entries == 1): ?>
                        <div class="tab-pane fade" id="navs-top-time-entries" role="tabpanel">
                            <?php if (isset($component)) { $__componentOriginal6933d266787e328be2ae29b71bb605db = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6933d266787e328be2ae29b71bb605db = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.task-time-entries-card','data' => ['task' => $task]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('task-time-entries-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['task' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($task)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6933d266787e328be2ae29b71bb605db)): ?>
<?php $attributes = $__attributesOriginal6933d266787e328be2ae29b71bb605db; ?>
<?php unset($__attributesOriginal6933d266787e328be2ae29b71bb605db); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6933d266787e328be2ae29b71bb605db)): ?>
<?php $component = $__componentOriginal6933d266787e328be2ae29b71bb605db; ?>
<?php unset($__componentOriginal6933d266787e328be2ae29b71bb605db); ?>
<?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <div class="tab-pane fade <?php echo e($activeTab == 'status_timeline' ? 'active show' : ''); ?>"
                        id="navs-top-status_timeline" role="tabpanel">
                        <!-- Status timeline content -->
                        <?php if (isset($component)) { $__componentOriginalef80e5f220e8a07198756c3c6d5e6f55 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalef80e5f220e8a07198756c3c6d5e6f55 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.status-timeline','data' => ['timelines' => $task->statusTimelines->sortByDesc('changed_at')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status-timeline'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['timelines' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($task->statusTimelines->sortByDesc('changed_at'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalef80e5f220e8a07198756c3c6d5e6f55)): ?>
<?php $attributes = $__attributesOriginalef80e5f220e8a07198756c3c6d5e6f55; ?>
<?php unset($__attributesOriginalef80e5f220e8a07198756c3c6d5e6f55); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalef80e5f220e8a07198756c3c6d5e6f55)): ?>
<?php $component = $__componentOriginalef80e5f220e8a07198756c3c6d5e6f55; ?>
<?php unset($__componentOriginalef80e5f220e8a07198756c3c6d5e6f55); ?>
<?php endif; ?>
                    </div>
                    <?php if($auth_user->can('manage_activity_log')): ?>
                        <div class="tab-pane fade" id="navs-top-activity-log" role="tabpanel">
                            <div class="col-12">
                                <div class="row mt-4">
                                    <div class="col-md-4 mb-3">
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="activity_log_between_date" class="form-control"
                                                placeholder="<?php echo e(get_label('date_between', 'Date between')); ?>"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <?php if(isAdminOrHasAllDataAccess()): ?>
                                        <div class="col-md-4 mb-3">
                                            <select class="form-select" id="user_filter"
                                                aria-label="Default select example">
                                                <option value=""><?php echo e(get_label('select_user', 'Select user')); ?>

                                                </option>
                                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($user->id); ?>">
                                                        <?php echo e($user->first_name . ' ' . $user->last_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <select class="form-select" id="client_filter"
                                                aria-label="Default select example">
                                                <option value=""><?php echo e(get_label('select_client', 'Select client')); ?>

                                                </option>
                                                <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($client->id); ?>">
                                                        <?php echo e($client->first_name . ' ' . $client->last_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    <?php endif; ?>
                                    <div class="col-md-4 mb-3">
                                        <select class="form-select" id="activity_filter"
                                            aria-label="Default select example">
                                            <option value=""><?php echo e(get_label('select_activity', 'Select activity')); ?>

                                            </option>
                                            <option value="created"><?php echo e(get_label('created', 'Created')); ?></option>
                                            <option value="updated"><?php echo e(get_label('updated', 'Updated')); ?></option>
                                            <option value="duplicated"><?php echo e(get_label('duplicated', 'Duplicated')); ?>

                                            </option>
                                            <option value="uploaded"><?php echo e(get_label('uploaded', 'Uploaded')); ?></option>
                                            <option value="deleted"><?php echo e(get_label('deleted', 'Deleted')); ?></option>
                                        </select>
                                    </div>
                                </div>
                                <?php
                                    $visibleColumns = getUserPreferences('activity_log');
                                ?>
                                <div class="table-responsive text-nowrap">
                                    <input type="hidden" id="activity_log_between_date_from">
                                    <input type="hidden" id="activity_log_between_date_to">
                                    <input type="hidden" id="data_type" value="activity-log">
                                    <input type="hidden" id="data_table" value="activity_log_table">
                                    <input type="hidden" id="type_id" value="<?php echo e($task->id); ?>">
                                    <input type="hidden" id="save_column_visibility">
                                    <table id="activity_log_table" data-toggle="table"
                                        data-loading-template="loadingTemplate"
                                        data-url="<?php echo e(route('activity_log.list')); ?>" data-icons-prefix="bx"
                                        data-icons="icons" data-show-refresh="true" data-total-field="total"
                                        data-trim-on-search="false" data-data-field="rows"
                                        data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true"
                                        data-side-pagination="server" data-show-columns="true" data-pagination="true"
                                        data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true"
                                        data-query-params="queryParams">
                                        <thead>
                                            <tr>
                                                <th data-checkbox="true"></th>
                                                <th data-field="id"
                                                    data-visible="<?php echo e(in_array('id', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>"
                                                    data-sortable="true"><?php echo e(get_label('id', 'ID')); ?></th>
                                                <th data-field="actor_id"
                                                    data-visible="<?php echo e(in_array('actor_id', $visibleColumns) ? 'true' : 'false'); ?>"
                                                    data-sortable="true"><?php echo e(get_label('actor_id', 'Actor ID')); ?></th>
                                                <th data-field="actor_name"
                                                    data-visible="<?php echo e(in_array('actor_name', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>"
                                                    data-sortable="true"><?php echo e(get_label('actor_name', 'Actor name')); ?></th>
                                                <th data-field="actor_type"
                                                    data-visible="<?php echo e(in_array('actor_type', $visibleColumns) ? 'true' : 'false'); ?>"
                                                    data-sortable="true"><?php echo e(get_label('actor_type', 'Actor type')); ?></th>
                                                <th data-field="type_id"
                                                    data-visible="<?php echo e(in_array('type_id', $visibleColumns) ? 'true' : 'false'); ?>"
                                                    data-sortable="true"><?php echo e(get_label('type_id', 'Type ID')); ?></th>
                                                <th data-field="parent_type_id"
                                                    data-visible="<?php echo e(in_array('parent_type_id', $visibleColumns) ? 'true' : 'false'); ?>"
                                                    data-sortable="true">
                                                    <?php echo e(get_label('parent_type_id', 'Parent type ID')); ?></th>
                                                <th data-field="activity"
                                                    data-visible="<?php echo e(in_array('activity', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>"
                                                    data-sortable="true"><?php echo e(get_label('activity', 'Activity')); ?></th>
                                                <th data-field="type"
                                                    data-visible="<?php echo e(in_array('type', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>"
                                                    data-sortable="true"><?php echo e(get_label('type', 'Type')); ?></th>
                                                <th data-field="parent_type"
                                                    data-visible="<?php echo e(in_array('parent_type', $visibleColumns) ? 'true' : 'false'); ?>"
                                                    data-sortable="true"><?php echo e(get_label('parent_type', 'Parent type')); ?>

                                                </th>
                                                <th data-field="type_title"
                                                    data-visible="<?php echo e(in_array('type_title', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>"
                                                    data-sortable="true"><?php echo e(get_label('type_title', 'Type title')); ?></th>
                                                <th data-field="parent_type_title"
                                                    data-visible="<?php echo e(in_array('parent_type_title', $visibleColumns) ? 'true' : 'false'); ?>"
                                                    data-sortable="true">
                                                    <?php echo e(get_label('parent_type_title', 'Parent type title')); ?></th>
                                                <th data-field="message"
                                                    data-visible="<?php echo e(in_array('message', $visibleColumns) ? 'true' : 'false'); ?>"
                                                    data-sortable="true"><?php echo e(get_label('message', 'Message')); ?></th>
                                                <th data-field="created_at"
                                                    data-visible="<?php echo e(in_array('created_at', $visibleColumns) ? 'true' : 'false'); ?>"
                                                    data-sortable="true"><?php echo e(get_label('created_at', 'Created at')); ?></th>
                                                <th data-field="updated_at"
                                                    data-visible="<?php echo e(in_array('updated_at', $visibleColumns) ? 'true' : 'false'); ?>"
                                                    data-sortable="true"><?php echo e(get_label('updated_at', 'Updated at')); ?></th>
                                                <th data-field="actions"
                                                    data-visible="<?php echo e(in_array('actions', $visibleColumns) || empty($visibleColumns) ? 'true' : 'false'); ?>">
                                                    <?php echo e(get_label('actions', 'Actions')); ?></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="modal fade" id="add_media_modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <form class="modal-content form-horizontal" id="media-upload"
                        action="<?php echo e(route('tasks.upload_media')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel1"><?php echo e(get_label('add_media', 'Add Media')); ?>

                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-primary alert-dismissible" role="alert">
                                <?php echo e($media_storage_settings['media_storage_type'] == 's3' ? get_label('storage_type_set_as_aws_s3', 'Storage type is set as AWS S3 storage') : get_label('storage_type_set_as_local', 'Storage type is set as local storage')); ?>,
                                <a href="/settings/media-storage"
                                    target="_blank"><?php echo e(get_label('click_here_to_change', 'Click here to change.')); ?></a>
                            </div>
                            <div class="dropzone dz-clickable" id="media-upload-dropzone">
                            </div>
                            <div class="form-group mt-4 text-center">
                                <button class="btn btn-primary"
                                    id="upload_media_btn"><?php echo e(get_label('upload', 'Upload')); ?></button>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="form-group" id="error_box">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                <?php echo e(get_label('close', 'Close')); ?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal fade" id="add_task_time_entries" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <form class="modal-content form-submit-event" id="time-entries"
                        action="<?php echo e(route('tasks.time_entries.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="task_id" value="<?php echo e($task->id); ?>">
                        <input type="hidden" name="dnr">
                        <input type="hidden" name="table" value="task-time-entries">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel1">
                                <?php echo e(get_label('add_task_time_entry', 'Add Task Time Entry')); ?>

                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3">
                                <!-- Entry Date -->
                                <div class="col-md-6">
                                    <label for="entry_date"
                                        class="form-label"><?php echo e(get_label('entry_date', 'Entry Date')); ?></label>
                                    <span class="asterisk">*</span>
                                    <input type="text" name="entry_date" class="form-control" id="entry_date"
                                        required>
                                    <?php $__errorArgs = ['entry_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <!-- Entry Type -->
                                <div class="col-md-6">
                                    <label for="entry_type"
                                        class="form-label"><?php echo e(get_label('entry_type', 'Entry Type')); ?></label>
                                    <span class="asterisk">*</span>
                                    <select name="entry_type" id="entry_type" class="form-select" required>
                                        <option value="standard"><?php echo e(get_label('standard', 'Standard')); ?></option>
                                        <option value="flexible"><?php echo e(get_label('flexible', 'Flexible')); ?></option>
                                    </select>
                                </div>
                                <!-- Standard Hours -->
                                <div class="col-md-12" id="standard_hours_div">
                                    <label for="standard_hours"
                                        class="form-label"><?php echo e(get_label('standard_hours', 'Standard Hours')); ?></label>
                                    <span class="asterisk">*</span>
                                    <input type="time" name="standard_hours" class="form-control" id="standard_hours"
                                        required>
                                    <?php $__errorArgs = ['standard_hours'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <!-- Start Time -->
                                <div class="col-md-6" id="start_time_div">
                                    <label for="start_time"
                                        class="form-label"><?php echo e(get_label('start_time', 'Start Time')); ?></label>
                                    <span class="asterisk">*</span>
                                    <input type="time" name="start_time" class="form-control" id="start_time"
                                        required>
                                    <?php $__errorArgs = ['start_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <!-- End Time -->
                                <div class="col-md-6" id="end_time_div">
                                    <label for="end_time"
                                        class="form-label"><?php echo e(get_label('end_time', 'End Time')); ?></label>
                                    <span class="asterisk">*</span>
                                    <input type="time" name="end_time" class="form-control" id="end_time" required>
                                    <?php $__errorArgs = ['end_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <!-- Billable Checkbox -->
                                <input type="hidden" name="is_billable" value="0">
                                <?php if($task->billing_type == 'billable'): ?>
                                    <div class="col-md-6">
                                        <label for="is_billable"
                                            class="form-label"><?php echo e(get_label('billable', 'Billable')); ?></label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="is_billable"
                                                name="is_billable" value="1">
                                            <label class="form-check-label"
                                                for="is_billable"><?php echo e(get_label('yes', 'Yes')); ?></label>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <!-- Description -->
                                <div class="col-md-12">
                                    <label for="description"
                                        class="form-label"><?php echo e(get_label('description', 'Description')); ?></label>
                                    <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <?php echo e(get_label('close', 'Close')); ?>

                            </button>
                            <button type="submit" class="btn btn-primary">
                                <?php echo e(get_label('save', 'Save')); ?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            var label_delete = '<?php echo e(get_label('delete', 'Delete')); ?>';
        </script>
        <script src="<?php echo e(asset('assets/js/pages/task-information.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/tasks/task_information.blade.php ENDPATH**/ ?>