<?php $__env->startSection('title'); ?>
    <?= get_label('meetings', 'Meetings') ?>
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
                        <li class="breadcrumb-item active">
                            <?= get_label('meetings', 'Meetings') ?>
                        </li>

                    </ol>
                </nav>
            </div>
            <div>
            <?php
                    $meetingsDefaultView = getUserPreferences('meetings', 'default_view');
                    // dd($meetingsDefaultView);
                ?>
                <?php if($meetingsDefaultView === 'list'): ?>
                    <span class="badge bg-primary"><?= get_label('default_view', 'Default View') ?></span>
                <?php else: ?>
                    <a href="javascript:void(0);"><span class="badge bg-secondary" id="set-default-view" data-type="meetings"
                            data-view="list"><?= get_label('set_as_default_view', 'Set as Default View') ?></span></a>
                <?php endif; ?>
            </div>    
            <div>
            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#createMeetingModal"><button type="button" class="btn btn-sm btn-primary action_create_meetings" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="<?= get_label('create_meeting', 'Create meeting') ?>"><i class='bx bx-plus'></i></button></a>
            <a href="<?php echo e(route('meetings.calendar_view')); ?>"><button type="button" class="btn btn-sm btn-primary"
                        data-bs-toggle="tooltip" data-bs-placement="left"
                        data-bs-original-title="<?= get_label('calendar_view', 'Calendar view') ?>"><i
                            class='bx bx-calendar'></i></button></a>
        </div>
        </div>
        <?php if (isset($component)) { $__componentOriginal1997f7d28d28da72eac490cdaa335c95 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1997f7d28d28da72eac490cdaa335c95 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.meetings-card','data' => ['meetings' => $meetings,'users' => $users,'clients' => $clients]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('meetings-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['meetings' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($meetings),'users' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($users),'clients' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($clients)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1997f7d28d28da72eac490cdaa335c95)): ?>
<?php $attributes = $__attributesOriginal1997f7d28d28da72eac490cdaa335c95; ?>
<?php unset($__attributesOriginal1997f7d28d28da72eac490cdaa335c95); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1997f7d28d28da72eac490cdaa335c95)): ?>
<?php $component = $__componentOriginal1997f7d28d28da72eac490cdaa335c95; ?>
<?php unset($__componentOriginal1997f7d28d28da72eac490cdaa335c95); ?>
<?php endif; ?>
    </div>
    <script>
        var label_update = '<?= get_label('update', 'Update') ?>';
        var label_delete = '<?= get_label('delete', 'Delete') ?>';
        var label_duplicate = '<?= get_label('duplicate', 'Duplicate') ?>';
        var label_not_assigned = '<?= get_label('not_assigned', 'Not assigned') ?>';
    </script>
    <script src="<?php echo e(asset('assets/js/pages/meetings.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/meetings/meetings.blade.php ENDPATH**/ ?>