<?php
    $isClient = isClient();
    $for = isset($for) && $for != '' ? $for : 'users';
?>
<label class="form-label" for="<?php echo e($name); ?>"><?php echo e($label); ?></label>
<div class="input-group">
    <select class="form-control js-example-basic-multiple" name="<?php echo e($name); ?>" multiple="multiple" data-placeholder="<?= get_label('type_to_search', 'Type to search') ?>">
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                if ($isClient) {
                    $selected = (isset($authUserId) && $authUserId == $item->id && $for == 'clients') ? 'selected' : '';
                } else {
                    $selected = (isset($authUserId) && $authUserId == $item->id) ? 'selected' : '';
                }
            ?>
            <option value="<?php echo e($item->id); ?>" <?php echo e($selected); ?>><?php echo e($item->first_name); ?> <?php echo e($item->last_name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/partials/select.blade.php ENDPATH**/ ?>