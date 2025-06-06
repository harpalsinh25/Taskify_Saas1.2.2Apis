<?php
    $currentRoute = Route::currentRouteName();
    $projectId = $project->id ?? request('project', '');
    $status = request('status');
    $baseUrl = $projectId ? route('projects.tasks.index', ['id' => $projectId]) : route('tasks.index');
    $url = $status ? "{$baseUrl}?status={$status}" : $baseUrl;


    $buttons = [
        [
            'icon' => 'bx bx-plus',
            'title' => get_label('create_task', 'Create task'),
            'link' => 'javascript:void(0);',
            'attributes' => 'data-bs-toggle="modal" data-bs-target="#create_task_modal"',
            'route' => '',
            'toggle'=>'tooltip',
        ],
        [
            'icon' => 'bx bx-list-ul',
            'title' => get_label('list_view', 'List view'),
            'link' => $url,
            'route' => 'tasks.index',
            'toggle'=>'tooltip',
        ],
        [
            'icon' => 'bx bxs-dashboard',
            'title' => get_label('draggable', 'Draggable'),
            'link' => $projectId ? route('projects.tasks.draggable', ['id' => $projectId]) : route('tasks.draggable'),
            'route' => 'tasks.draggable',
            'toggle'=>'tooltip',
        ],
        [
            'icon' => 'bx bxs-calendar',
            'title' => get_label('calendar_view', 'Calendar View'),
            'link' => route('tasks.calendar_view'),
            'route' => 'tasks.calendar_view',
            'toggle'=>'tooltip',
        ],
        // New button for Group by Task List
        [

            'icon' => 'bx bx-align-middle',
            'title' => get_label('group_by_task_list', 'Group by Task List'),
            'link' => route('tasks.groupByTaskList'),
            'route' => 'tasks.groupByTaskList',
            'toggle'=>'tooltip',
        ],
    ];
?>

<div>
    <?php $__currentLoopData = $buttons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($button['route'] !== $currentRoute): ?>
            <a href="<?php echo e($button['link']); ?>" <?php echo $button['attributes'] ?? ''; ?>>
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="<?php echo e($button['toggle']); ?>" data-bs-placement="left" data-bs-original-title="<?php echo e($button['title']); ?>">
                    <i class="<?php echo e($button['icon']); ?>"></i>
                </button>
            </a>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\Code v1.2.1 upload this on server\resources\views/partials/tasks-views-buttons.blade.php ENDPATH**/ ?>