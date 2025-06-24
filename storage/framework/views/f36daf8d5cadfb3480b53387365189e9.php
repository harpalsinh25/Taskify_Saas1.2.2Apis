<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['fields','isEdit']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['fields','isEdit']); ?>
<?php foreach (array_filter((['fields','isEdit']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if(isset($fields) && count($fields) > 0): ?>

    <div class="row">
        <div class="col-md-12">
            <label class="form-label fw-semibold mb-2 fs-5">
                <?= get_label('custom_fields', 'Custom Fields') ?>
            </label>
            
            <div class="row row-cols-1 row-cols-md-2 g-3">
                <?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col">
                        <label 
                        class="form-label small mb-1 d-block text-truncate w-100" 
                        for="cf_<?php echo e($field->id); ?>" 
                        title="<?php echo e($field->field_label); ?>"
                    >
                        <?php echo e($field->field_label); ?>

                        <?php if($field->required == '1'): ?>
                            <span class="asterisk text-danger">*</span>
                        <?php endif; ?>
                    </label>
                    


                        <?php
                            $fieldValue = $values[$field->id] ?? old('custom_fields.'.$field->id);
                            $isRequired = $field->required == '1';
                        ?>

                        <?php switch($field->field_type):

                            case ('text'): ?>
                            <?php case ('password'): ?>
                            <?php case ('number'): ?>
                            <input 
                                type="<?php echo e($field->field_type); ?>" 
                                id="<?php echo e($isEdit ? 'edit_cf_' . $field->id : 'cf_' . $field->id); ?>" 
                                name="custom_fields[<?php echo e($field->id); ?>]" 
                                class="form-control form-control-md" 
                                placeholder="<?php echo e($field->field_label); ?>" 
                                value="<?php echo e($fieldValue); ?>"
                                <?php if($isRequired): ?> required <?php endif; ?>
                            >
                            <?php break; ?>

                            <?php case ('textarea'): ?>
                            <textarea 
                                id="<?php echo e($isEdit ? 'edit_cf_' . $field->id : 'cf_' . $field->id); ?>" 
                                name="custom_fields[<?php echo e($field->id); ?>]" 
                                class="form-control form-control-md" 
                                rows="2" 
                                placeholder="<?php echo e($field->field_label); ?>"
                                <?php if($isRequired): ?> required <?php endif; ?>
                            ><?php echo e($fieldValue); ?></textarea>
                            <?php break; ?>
                        
                            <?php case ('date'): ?>
                            <input 
                                type="text" 
                                id="<?php echo e($isEdit ? 'edit_cf_' . $field->id : 'cf_' . $field->id); ?>" 
                                name="custom_fields[<?php echo e($field->id); ?>]" 
                                class="form-control form-control-md custom-datepicker" 
                                placeholder="<?php echo e($field->field_label); ?>"
                                value="<?php echo e($fieldValue); ?>"
                                autocomplete="off"
                                <?php if($isRequired): ?> required <?php endif; ?>
                            >
                            <?php break; ?>

                            <?php case ('select'): ?>
                            <select 
                               id="<?php echo e($isEdit ? 'edit_cf_' . $field->id : 'cf_' . $field->id); ?>" 
                               name="custom_fields[<?php echo e($field->id); ?>]" 
                               class="form-select form-select-md"
                                
                               <?php if($isRequired): ?> required <?php endif; ?>
                            >
                                <option value="<?php echo e($field->field_label); ?>"><?php echo e($field->field_label); ?></option>
                                <?php $__currentLoopData = json_decode($field->options, true) ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($option); ?>" <?php echo e($fieldValue == $option ? 'selected' : ''); ?>>
                                        <?php echo e($option); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php break; ?>

                            <?php case ('radio'): ?>
                            <div class="d-flex flex-wrap gap-2">
                                <?php $__currentLoopData = json_decode($field->options, true) ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="form-check me-3">
                                        <input 
                                            type="radio" 
                                            id="<?php echo e($isEdit ? 'edit_cf_' . $field->id . '_' . $index : 'cf_' . $field->id . '_' . $index); ?>"
                                            name="custom_fields[<?php echo e($field->id); ?>]" 
                                            value="<?php echo e($option); ?>" 
                                            class="form-check-input"
                                            <?php echo e($fieldValue == $option ? 'checked' : ''); ?>

                                            <?php if($isRequired): ?> required <?php endif; ?>
                                        >
                                        <label class="form-check-label medium" for="<?php echo e($isEdit ? 'edit_cf_' . $field->id . '_' . $index : 'cf_' . $field->id . '_' . $index); ?>"
                                            >
                                            <?php echo e($option); ?>

                                        </label>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php break; ?>

                            <?php case ('checkbox'): ?>
                            <?php
                                $checkboxValues = is_string($fieldValue) && $fieldValue ? json_decode($fieldValue, true) : [];
                                $checkboxValues = is_array($checkboxValues) ? $checkboxValues : [];
                            ?>
                            <div class="d-flex flex-wrap gap-2">
                                <?php $__currentLoopData = json_decode($field->options, true) ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="form-check">
                                        <input 
                                            class="form-check-input" 
                                            type="checkbox" 
                                            name="custom_fields[<?php echo e($field->id); ?>][]" 
                                            id="customCheck_<?php echo e($field->id); ?>_<?php echo e($index); ?>" 
                                            value="<?php echo e($option); ?>"
                                            <?php echo e(in_array($option, $checkboxValues) ? 'checked' : ''); ?>

                                            <?php if($isRequired && $index == 0): ?> required <?php endif; ?>
                                        >
                                        <label class="form-check-label medium" for="customCheck_<?php echo e($field->id); ?>_<?php echo e($index); ?>">
                                            <?php echo e($option); ?>

                                        </label>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php break; ?>

                            <?php default: ?>
                            <p class="text-muted small">Unsupported field type</p>
                            <?php break; ?>

                        <?php endswitch; ?>

                        <?php $__errorArgs = ['custom_fields.'.$field->id];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger small"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php endif; ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/components/custom-fields.blade.php ENDPATH**/ ?>