<?php $__env->startSection('title'); ?>
    <?= get_label('kanban_view', 'Kanban View') ?>
<?php $__env->stopSection(); ?>
<?php
    $user = getAuthenticatedUser();
?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="d-flex justify-content-between mb-2 mt-4">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('home.index')); ?>"><?= get_label('home', 'Home') ?></a>
                        </li>
                        <?php if(!($is_favorite == 1)): ?>
                            <li class="breadcrumb-item"><a
                                    href="<?php echo e(getDefaultViewRoute('projects')); ?>"><?= get_label('projects', 'Projects') ?></a>
                            </li>
                        <?php else: ?>
                            <li class="breadcrumb-item active"><a
                                    href="<?php echo e(route('projects.index', ['type' => 'favorite'])); ?>"><?= get_label('favorite', 'Favorite') ?></a>
                            </li>
                        <?php endif; ?>
                        <li class="breadcrumb-item active"><?= get_label('kanban_view', 'Kanban View') ?></li>
                    </ol>
                </nav>
            </div>
            <div>
                <?php
                    $projectDefaultView = getUserPreferences('projects', 'default_view');
                ?>
                <?php if(!$projectDefaultView || $projectDefaultView === 'kanban_view'): ?>
                    <span class="badge bg-primary"><?= get_label('default_view', 'Default View') ?></span>
                <?php else: ?>
                    <a href="javascript:void(0);"><span class="badge bg-secondary" id="set-default-view"
                            data-type="projects"
                            data-view="kanban_view"><?= get_label('set_as_default_view', 'Set as Default View') ?></span></a>
                <?php endif; ?>
            </div>
            <div>
                <?php
                    $url =
                        $is_favorite == 1
                            ? url('/master-panel/projects/list/favorite')
                            : url('/master-panel/projects/list');
                    $additionalParams = request()->has('status')
                        ? '/master-panel/projects/list?status=' . request()->status
                        : '';
                    $finalUrl = url($additionalParams ?: $url);
                    $currentPath = request()->path();
                    $showCreateButton = !in_array($currentPath, ['projects/list/favorite', 'projects/favorite']);
                ?>
                <?php if($showCreateButton): ?>
                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#create_project_modal"><button
                            type="button" class="btn btn-sm btn-primary action_create_projects" data-bs-toggle="tooltip"
                            data-bs-placement="left"
                            data-bs-original-title="<?= get_label('create_project', 'Create project') ?>"><i
                                class='bx bx-plus'></i></button></a>
                <?php endif; ?>
                <a href="<?php echo e($finalUrl); ?>"><button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                        data-bs-placement="left" data-bs-original-title="<?= get_label('list_view', 'List view') ?>"><i
                            class='bx bx-list-ul'></i></button></a>
                <a
                    href="<?php echo e(url(request()->has('status') ? route('projects.index', ['status' => request()->status]) : route('projects.index'))); ?>">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="left"
                        data-bs-original-title="<?= get_label('grid_view', 'Grid view') ?>">
                        <i class='bx bxs-grid-alt'></i>
                    </button>
                </a>
                <a href="<?php echo e(route('projects.gantt_chart')); ?>"><button type="button" class="btn btn-sm btn-primary"
                        data-bs-toggle="tooltip" data-bs-placement="left"
                        data-bs-original-title="<?= get_label('gantt_chart_view', 'Gantt Chart View') ?>"><i
                            class='bx bxs-collection'></i></button></a>
                            <a href="<?php echo e(route('projects.calendar_view')); ?>"><button type="button" class="btn btn-sm btn-primary"
                            data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-original-title="<?php echo e(get_label('calendar_view', 'Calendar log')); ?>"><i
                                class='bx bx-calendar'></i></button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-3">
                <select class="form-select" id="status_filter" aria-label="Default select example">
                    <option value=""><?= get_label('filter_by_status', 'Filter by status') ?></option>
                    <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $selected = isset($_REQUEST['status']) && $_REQUEST['status'] !== '' && $_REQUEST['status'] == $status->id ? 'selected' : '';
                        ?>
                        <option value="<?php echo e($status->id); ?>" <?php echo e($selected); ?>><?php echo e($status->title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="col-md-3 mb-3">
                <select class="form-select" id="sort" aria-label="Default select example">
                    <option value=""><?= get_label('sort_by', 'Sort by') ?></option>
                    <option value="newest" <?= request()->sort && request()->sort == 'newest' ? 'selected' : '' ?>>
                        <?= get_label('newest', 'Newest') ?></option>
                    <option value="oldest" <?= request()->sort && request()->sort == 'oldest' ? 'selected' : '' ?>>
                        <?= get_label('oldest', 'Oldest') ?></option>
                    <option value="recently-updated"
                        <?= request()->sort && request()->sort == 'recently-updated' ? 'selected' : '' ?>>
                        <?= get_label('most_recently_updated', 'Most recently updated') ?></option>
                    <option value="earliest-updated"
                        <?= request()->sort && request()->sort == 'earliest-updated' ? 'selected' : '' ?>>
                        <?= get_label('least_recently_updated', 'Least recently updated') ?></option>
                </select>
            </div>
            <div class="col-md-5 mb-3">
                <select id="selected_tags" class="form-control js-example-basic-multiple" name="tag[]" multiple="multiple"
                    data-placeholder="<?= get_label('filter_by_tags', 'Filter by tags') ?>">
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($tag->id); ?>" <?php if(in_array($tag->id, $selectedTags)): ?> selected <?php endif; ?>>
                            <?php echo e($tag->title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="col-md-1">
                <div>
                    <button type="button" id="tags_filter" class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                        data-bs-placement="left" data-bs-original-title="<?= get_label('filter', 'Filter') ?>"><i
                            class='bx bx-filter-alt'></i></button>
                </div>
            </div>
        </div>
        <?php if(is_countable($projects) && count($projects) > 0): ?>
            <?php
                $showSettings =
                    $user->can('edit_projects') || $user->can('delete_projects') || $user->can('create_projects');
                $canEditProjects = $user->can('edit_projects');
                $canDeleteProjects = $user->can('delete_projects');
                $canDuplicateProjects = $user->can('create_projects');
            ?>
            <?php if (isset($component)) { $__componentOriginaldbcceabf4a99a34f9999233ae1fef693 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldbcceabf4a99a34f9999233ae1fef693 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.project-card','data' => ['projects' => $projects,'statuses' => $statuses,'showSettings' => $showSettings,'canEditProjects' => $canEditProjects,'canDeleteProjects' => $canDeleteProjects,'canDuplicateProjects' => $canDuplicateProjects]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('project-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['projects' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($projects),'statuses' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($statuses),'showSettings' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($showSettings),'canEditProjects' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($canEditProjects),'canDeleteProjects' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($canDeleteProjects),'canDuplicateProjects' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($canDuplicateProjects)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldbcceabf4a99a34f9999233ae1fef693)): ?>
<?php $attributes = $__attributesOriginaldbcceabf4a99a34f9999233ae1fef693; ?>
<?php unset($__attributesOriginaldbcceabf4a99a34f9999233ae1fef693); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldbcceabf4a99a34f9999233ae1fef693)): ?>
<?php $component = $__componentOriginaldbcceabf4a99a34f9999233ae1fef693; ?>
<?php unset($__componentOriginaldbcceabf4a99a34f9999233ae1fef693); ?>
<?php endif; ?>
        <?php else: ?>
            <?php $type = 'projects'; ?>
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
    <script>
        var add_favorite = '<?= get_label('add_favorite', 'Click to mark as favorite') ?>';
        var remove_favorite = '<?= get_label('remove_favorite', 'Click to remove from favorite') ?>';
    </script>
    <script src="<?php echo e(asset('assets/js/pages/project-grid.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/projects/kanban.blade.php ENDPATH**/ ?>