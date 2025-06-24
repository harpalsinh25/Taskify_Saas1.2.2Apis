<?php $__env->startSection('title'); ?>
<?= get_label('priorities', 'Priorities') ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="d-flex justify-content-between mb-2 mt-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('home.index')); ?>"><?= get_label('home', 'Home') ?></a>
                    </li>
                    <li class="breadcrumb-item active">
                        <?= get_label('priorities', 'Priorities') ?>
                    </li>

                </ol>
            </nav>
        </div>
        <div>
            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#create_priority_modal"><button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_priority', 'Create Priority') ?>"><i class="bx bx-plus"></i></button></a>
        </div>
    </div>
    
    <?php if (isset($component)) { $__componentOriginal264a2a6e289bfbd3b054eb29a6b543f4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal264a2a6e289bfbd3b054eb29a6b543f4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.priority-card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('priority-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal264a2a6e289bfbd3b054eb29a6b543f4)): ?>
<?php $attributes = $__attributesOriginal264a2a6e289bfbd3b054eb29a6b543f4; ?>
<?php unset($__attributesOriginal264a2a6e289bfbd3b054eb29a6b543f4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal264a2a6e289bfbd3b054eb29a6b543f4)): ?>
<?php $component = $__componentOriginal264a2a6e289bfbd3b054eb29a6b543f4; ?>
<?php unset($__componentOriginal264a2a6e289bfbd3b054eb29a6b543f4); ?>
<?php endif; ?>
</div>
<script src="<?php echo e(asset('assets/js/pages/priority.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/priority/list.blade.php ENDPATH**/ ?>