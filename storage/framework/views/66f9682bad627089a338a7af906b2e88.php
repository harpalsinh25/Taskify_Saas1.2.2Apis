<?php $__env->startSection('title'); ?>
    <?php echo e(get_label('kanban_view', 'Kanban View')); ?> - <?php echo e(get_label('leads', 'Leads')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="d-flex justify-content-between mb-2 mt-4">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(url('home')); ?>"><?= get_label('home', 'Home') ?></a>
                        </li>
                        <li class="breadcrumb-item">
                            <?= get_label('leads_management', 'Leads Management') ?>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('leads.index')); ?>"><?= get_label('leads', 'Leads') ?></a>
                        </li>
                        <li class="breadcrumb-item active">
                            <?= get_label('kanban_view', 'Kanban View') ?>
                        </li>
                    </ol>
                </nav>
            </div>
            <div>
                <?php
                    $leadsDefaultView = getUserPreferences('leads', 'default_view');
                ?>
                <?php if($leadsDefaultView === 'kanban'): ?>
                    <span class="badge bg-primary"><?= get_label('default_view', 'Default View') ?></span>
                <?php else: ?>
                    <a href="javascript:void(0);"><span class="badge bg-secondary" id="set-default-view" data-type="leads"
                            data-view="kanban"><?= get_label('set_as_default_view', 'Set as Default View') ?></span></a>
                <?php endif; ?>
            </div>
            <div>
                <a href="<?php echo e(route('leads.create')); ?>"><button type="button" class="btn btn-sm btn-primary"
                        data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-original-title=" <?= get_label('create_lead', 'Create Lead') ?>"><i
                            class="bx bx-plus"></i></button></a>
                <a href="<?php echo e(route('leads.index')); ?>"><button type="button" class="btn btn-sm btn-primary"
                        data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-original-title=" <?= get_label('list_view', 'List View') ?>"><i
                            class="bx bx-list-ul"></i></button></a>
                             <a href="<?php echo e(route('leads.upload')); ?>"><button type="button" class="btn btn-sm btn-primary"
                        data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-original-title=" <?= get_label('bulk_upload', 'Bulk Upload') ?>"><i
                            class="bx bx-upload"></i></button></a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 mb-3">
                <select class="form-select js-example-basic-multiple" id="sort" aria-label="Default select example"
                    data-placeholder="<?= get_label('select_sort_by', 'Select Sort By') ?>" data-allow-clear="true">
                    <option></option>
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
            <?php
                // Get selected statuses and tags from the request
                $selectedSources = request()->input('sources', []);

                $filterSources = \App\Models\LeadSource::whereIn('id', $selectedSources)->get();
            ?>
            <div class="col-md-3 mb-3">
                <select class="form-select" id="selected_sources" name="sources[]"
                    aria-label="Default select example"
                    data-placeholder="<?php echo e(get_label('filter_by_sources', 'Filter by sources')); ?>"
                    data-allow-clear="true" multiple>
                </select>
            </div>
            <div class="col-md-4 mb-3">
               <input type="text" name="date_range" id="filter_date_range" class="form-control"
                         placeholder="<?= get_label('filter_by_date_range', 'Filter by date range') ?>"
                       value="<?php if(request('start_date') && request('end_date')): ?><?php echo e(format_date(request('start_date'))); ?> To <?php echo e(format_date(request('end_date'))); ?><?php endif; ?>">

                <input type="hidden" name="start_date" id="lead_kanban_start_date" value="<?php echo e(request('start_date')); ?>">
                <input type="hidden" name="end_date" id="lead_kanban_end_date" value="<?php echo e(request('end_date')); ?>">
            </div>


            <div class="col-md-1">
                <div>
                    <button type="button" id="leads-kanban-filter" class="btn btn-sm btn-primary" data-bs-toggle="tooltip"
                        data-bs-placement="left" data-bs-original-title="<?= get_label('filter', 'Filter') ?>"><i
                            class='bx bx-filter-alt'></i></button>
                </div>
            </div>
        </div>
        <?php if(is_countable($leads) && count($leads) > 0): ?>
            <?php
                $showSettings = true;
                $canEditLeads = true;
                $canDeleteLeads = true;
                $webGuard = Auth::guard('web')->check();
            ?>
           <?php if (isset($component)) { $__componentOriginalaf0d0262ce2173cf4ffa076633aff596 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaf0d0262ce2173cf4ffa076633aff596 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.leads-kanban-card','data' => ['leads' => $leads,'stages' => $lead_stages,'showSettings' => $showSettings,'canEditLeads' => $canEditLeads,'canDeleteLeads' => $canDeleteLeads,'webGuard' => $webGuard]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('leads-kanban-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['leads' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($leads),'stages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($lead_stages),'showSettings' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($showSettings),'canEditLeads' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($canEditLeads),'canDeleteLeads' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($canDeleteLeads),'webGuard' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($webGuard)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaf0d0262ce2173cf4ffa076633aff596)): ?>
<?php $attributes = $__attributesOriginalaf0d0262ce2173cf4ffa076633aff596; ?>
<?php unset($__attributesOriginalaf0d0262ce2173cf4ffa076633aff596); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaf0d0262ce2173cf4ffa076633aff596)): ?>
<?php $component = $__componentOriginalaf0d0262ce2173cf4ffa076633aff596; ?>
<?php unset($__componentOriginalaf0d0262ce2173cf4ffa076633aff596); ?>
<?php endif; ?>
        <?php else: ?>
            <?php $type = 'leads'; ?>
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

    <script src="<?php echo e(asset('assets/js/pages/leads-kanban.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/leads/kanban.blade.php ENDPATH**/ ?>