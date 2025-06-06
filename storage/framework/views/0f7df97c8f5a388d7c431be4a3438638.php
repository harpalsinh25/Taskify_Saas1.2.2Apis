<!-- meetings -->

<div class="card ">
    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <?php echo e($slot); ?>

            <?php if(is_countable($statuses) && count($statuses) > 0): ?>
                <input type="hidden" id="data_type" value="status">

                    <table id="table" data-toggle="table" data-loading-template="loadingTemplate"
                        data-url="<?php echo e(route('status.list')); ?>" data-icons-prefix="bx" data-icons="icons"
                        data-show-refresh="true" data-total-field="total" data-trim-on-search="false"
                        data-data-field="rows" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true"
                        data-side-pagination="server" data-show-columns="true" data-pagination="true"
                        data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true"
                        data-query-params="queryParams" data-route-prefix="<?php echo e(Route::getCurrentRoute()->getPrefix()); ?>">

                        <thead>
                            <tr>
                                <th data-checkbox="true"></th>
                                <th data-sortable="true" data-field="id"><?= get_label('id', 'ID') ?></th>
                                <th data-sortable="true" data-field="title"><?= get_label('title', 'Title') ?></th>
                                <th data-sortable="true" data-field="color"><?= get_label('preview', 'Preview') ?></th>
                                 <?php if(isAdminOrHasAllDataAccess()): ?>
                        <th data-field="roles_has_access" data-visible="true"><?= get_label('allowed_roles', 'Allowed Roles') ?> <i class='bx bx-info-circle text-primary' title="<?php echo e(get_label('roles_can_set_status_info_1', 'Including Admin and Roles with All Data Access Permission, Roles That Can Set This Status.')); ?>"></i></th>
                        <?php endif; ?>
                               <th data-sortable="true" data-field="created_at" data-visible="false"><?= get_label('created_at', 'Created at') ?></th>
                        <th data-sortable="true" data-field="updated_at" data-visible="false"><?= get_label('updated_at', 'Updated at') ?></th>
                        <th data-formatter="actionsFormatter"><?= get_label('actions', 'Actions') ?></th>
                            </tr>
                        </thead>
                    </table>

            <?php else: ?>
                <?php
                $type = 'Status'; ?>
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

<?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/components/status-card.blade.php ENDPATH**/ ?>