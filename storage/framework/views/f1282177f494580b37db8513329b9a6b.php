<div class="card">
    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <?php echo e($slot); ?>

            <?php if(is_countable($tags) && count($tags) > 0): ?>
                <input type="hidden" id="data_type" value="tags">

                <table id="table" data-toggle="table" data-loading-template="loadingTemplate"
                    data-url="<?php echo e(route('tags.list')); ?>" data-icons-prefix="bx" data-icons="icons"
                    data-show-refresh="true" data-total-field="total" data-trim-on-search="false" data-data-field="rows"
                    data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-side-pagination="server"
                    data-show-columns="true" data-pagination="true" data-sort-name="id" data-sort-order="desc"
                    data-mobile-responsive="true" data-query-params="queryParams"
                    data-route-prefix="<?php echo e(Route::getCurrentRoute()->getPrefix()); ?>">

                    <thead>
                        <tr>
                            <th data-checkbox="true"></th>
                            <th data-sortable="true" data-field="id"><?= get_label('id', 'ID') ?></th>
                            <th data-sortable="true" data-field="title"><?= get_label('title', 'Title') ?></th>
                            <th data-sortable="true" data-field="color"><?= get_label('preview', 'Preview') ?></th>
                            <th data-formatter="actionsFormatter"><?= get_label('actions', 'Actions') ?></th>
                        </tr>
                    </thead>
                </table>
            <?php else: ?>
                <?php
                $type = 'Tags'; ?>
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
</div>
<?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\Code v1.2.1 upload this on server\resources\views/components/tags-card.blade.php ENDPATH**/ ?>