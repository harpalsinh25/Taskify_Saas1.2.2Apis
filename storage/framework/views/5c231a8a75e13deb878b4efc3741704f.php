

<?php $__env->startSection('title'); ?>
    <?php echo e(get_label('candidates', 'Candidates')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="d-flex justify-content-between mb-2 mt-4">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('home.index')); ?>"><?php echo e(get_label('home', 'Home')); ?></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('interviews.index')); ?>"><?php echo e(get_label('interviews', 'Interviews')); ?></a>
                        </li>

                    </ol>
                </nav>
            </div>

            <div>
                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#createInterviewModal">
                    <button type="button" class="btn btn-sm btn-primary action_create_template" data-bs-toggle="tooltip"
                        data-bs-placement="left"
                        data-bs-original-title="<?php echo e(get_label('schedule_interview', 'Schedule Interview')); ?>">
                        <i class='bx bx-plus'></i>
                    </button>
                </a>
            </div>
        </div>
        <?php if($interviews->count() > 0): ?>
        <?php
            $visibleColumns = getUserPreferences('interviews');
        ?>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <input type="text" class="form-control" id="interview_filter_date_range"
                                placeholder="<?= get_label('date_between', 'Date Between') ?>" autocomplete="off">
                            <input type="hidden" id="interview_start_date" name="start_date" />
                            <input type="hidden" id="interview_end_date" name="end_date" />
                        </div>
                        <div class="col-md-3 mb-3">
                            <select class="form-select js-example-basic-multiple" id="sort" name="sort"
                                aria-label="Default select example"
                                data-placeholder="<?= get_label('select_sort_by', 'Select Sort By') ?>" data-allow-clear="true">
                                <option></option>
                                <option value="newest" <?= request()->sort && request()->sort == 'newest' ? 'selected' : '' ?>>
                                    <?= get_label('newest', 'Newest') ?>
                                </option>
                                <option value="oldest" <?= request()->sort && request()->sort == 'oldest' ? 'selected' : '' ?>>
                                    <?= get_label('oldest', 'Oldest') ?>
                                </option>
                                <option value="recently-updated" <?= request()->sort && request()->sort == 'recently-updated' ? 'selected' : '' ?>>
                                    <?= get_label('most_recently_updated', 'Most recently updated') ?>
                                </option>
                                <option value="earliest-updated" <?= request()->sort && request()->sort == 'earliest-updated' ? 'selected' : '' ?>>
                                    <?= get_label('least_recently_updated', 'Least recently updated') ?>
                                </option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <select class="form-select" id="interview_status" name="status" aria-label="Default select example"
                                data-placeholder="<?php echo e(get_label('filter_by_statuses', 'Filter by statuses')); ?>"
                                data-allow-clear="true">
                                <option value="">-- Select Status --</option>
                                <option value="scheduled">Scheduled</option>
                                <option value="completed">Completed</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>

                    </div>
                    <div class="table-responsive text-nowrap">
                        <input type="hidden" id="data_type" value="interviews">
                        <input type="hidden" id="save_column_visibility">

                        <table id="table" data-toggle="table" data-loading-template="loadingTemplate" data-show-columns="true"
                            data-url="<?php echo e(route('interviews.list')); ?>" data-icons-prefix="bx" data-icons="icons"
                            data-show-refresh="true" data-total-field="total" data-data-field="rows"
                            data-page-list="[5, 10, 20, 50, 100]" data-search="true" data-side-pagination="server"
                            data-pagination="true" data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true"
                            data-query-params="queryParams">
                            <thead>
                                <tr>
                                    <th data-checkbox="true"></th>
                                    <th data-field="id" data-sortable="true"><?php echo e(get_label('id', 'ID')); ?></th>
                                    <th data-field="candidate" data-sortable="true"><?php echo e(get_label('candidate', 'Candidate')); ?>

                                    </th>
                                    <th data-field="interviewer"><?php echo e(get_label('interviewer', 'Interviewer')); ?></th>
                                    <th data-field="round" data-escap="false"><?php echo e(get_label('round', 'Round')); ?></th>
                                    <th data-field="scheduled_at" data-sortable="true">
                                        <?php echo e(get_label('scheduled_at', 'Scheduled At')); ?>

                                    </th>
                                    <th data-field="status" data-sortable="true"><?php echo e(get_label('status', 'Status')); ?></th>
                                    <th data-field="location" data-sortable="true"><?php echo e(get_label('location', 'Location')); ?></th>
                                    <th data-field="mode" data-sortable="true"><?php echo e(get_label('mode', 'Mode')); ?></th>
                                    <th data-field="created_at" data-sortable="true">
                                        <?php echo e(get_label('created_at', 'Created at')); ?>

                                    </th>
                                    <th data-field="updated_at" data-sortable="true">
                                        <?php echo e(get_label('updated_at', 'Updated at')); ?>

                                    </th>
                                    <th data-field="actions"><?php echo e(get_label('actions', 'Actions')); ?></th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>
        <?php else: ?>
            <?php
            $type = 'Interviews'; ?>
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

    <script src="<?php echo e(asset('assets/js/pages/interview.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/interviews/index.blade.php ENDPATH**/ ?>