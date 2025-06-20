<?php $__env->startSection('title'); ?>
    <?php echo e(get_label('update_lead', 'Update Lead')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="d-flex justify-content-between mb-2 mt-4">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(url('home')); ?>">
                                <?php echo e(get_label('home', 'Home')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <?php echo e(get_label('leads_management', 'Leads Management')); ?>

                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('leads.index')); ?>">
                                <?php echo e(get_label('leads', 'Leads')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            <?php echo e(get_label('update', 'Update')); ?>

                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="<?php echo e(route('leads.update', ['id' => $lead->id])); ?>" method="POST" class="form-submit-event"
                    enctype="multipart/form-data">
                    <input type="hidden" name="redirect_url" value="<?php echo e(route('leads.index')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <!-- Personal Details -->
                        <div class="col-md-12">
                            <h5><?php echo e(get_label('personal_details', 'Personal Details')); ?></h5>
                            <hr>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="first_name" class="form-label"><?php echo e(get_label('first_name', 'First Name')); ?> <span
                                    class="text-danger">*</span></label>
                            <input type="text" name="first_name" class="form-control" required
                                placeholder="<?php echo e(get_label('enter_first_name', 'Enter first name')); ?>"
                                value="<?php echo e($lead->first_name); ?>">
                            <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="last_name" class="form-label"><?php echo e(get_label('last_name', 'Last Name')); ?> <span
                                    class="text-danger">*</span></label>
                            <input type="text" name="last_name" class="form-control" required
                                placeholder="<?php echo e(get_label('enter_last_name', 'Enter last name')); ?>"
                                value="<?php echo e($lead->last_name); ?>">
                            <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label"><?php echo e(get_label('email', 'Email')); ?> <span
                                    class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" required
                                placeholder="<?php echo e(get_label('enter_email', 'Enter email address')); ?>"
                                value="<?php echo e($lead->email); ?>">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        
                        <div class="mb-3 col-md-6">
                        <label class="form-label"><?= get_label('country_code_and_phone_number', 'Country code and phone number') ?></label>
                        <div class="input-group">
                               <input type="tel" class="form-control" id="phone-input-edit" value="<?php echo e($lead->phone); ?>" name="phone">
                                    <input type="hidden" name="country_code" id="country_code" value="<?php echo e($lead->country_code); ?>" >
                                    <input type="hidden" name="phone" id="phone_number">
                                    <input type="hidden" name="country_iso_code" id="country_iso_code" value="<?php echo e($lead->country_iso_code); ?>">
                        </div>
                    </div>

                        <div class="col-md-4 mb-3">
                            <label for="lead_sources"
                                class="form-label"><?php echo e(get_label('lead_sources', 'Lead Sources')); ?></label>
                            <select class="form-select" name="source_id" id="select_lead_source" data-single-select="true"
                                data-allow-clear="false" data-consider-workspace="true">
                                
                                <option value="<?php echo e($lead->source->id); ?>"><?php echo e(ucwords($lead->source->name)); ?></option>
                            </select>
                            <?php $__errorArgs = ['source_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>


                        <div class="col-md-4 mb-3">
                            <label for="lead_stages" class="form-label"><?php echo e(get_label('lead_stages', 'Lead Stages')); ?> <span
                                    class="text-danger">*</span></label>
                            <select class="form-select" name="stage_id" id="selected_stages" data-single-select="true"
                                data-allow-clear="false" data-consider-workspace="true" required>
                                <option value="<?php echo e($lead->stage->id); ?>"><?php echo e(ucwords($lead->stage->name)); ?></option>

                            </select>
                            <?php $__errorArgs = ['stage_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="assign_to" class="form-label"><?php echo e(get_label('assigned_to', 'Assign To')); ?> <span
                                    class="text-danger">*</span></label>
                            <select name="assigned_to" class="form-select" id="select_lead_assignee"
                                data-single-select="true" data-allow-clear="false" data-consider-workspace="true" required>
                                <option value="<?php echo e($lead->assigned_user->id); ?>">
                                    <?php echo e(ucwords($lead->assigned_user->first_name . ' ' . $lead->assigned_user->last_name)); ?>

                                </option>

                            </select>
                            <?php $__errorArgs = ['assigned_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>



                        <!-- Professional Details -->
                        <div class="col-md-12 mt-4">
                            <h5><?php echo e(get_label('professional_details', 'Professional Details')); ?></h5>
                            <hr>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="job_title" class="form-label"><?php echo e(get_label('job_title', 'Job Title')); ?></label>
                            <input type="text" name="job_title" class="form-control"
                                placeholder="<?php echo e(get_label('enter_job_title', 'Enter job title')); ?>"
                                value="<?php echo e($lead->job_title); ?>">
                            <?php $__errorArgs = ['job_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="industry" class="form-label"><?php echo e(get_label('industry', 'Industry')); ?></label>
                            <input type="text" name="industry" class="form-control"
                                placeholder="<?php echo e(get_label('enter_industry', 'Enter industry')); ?>"
                                value="<?php echo e($lead->industry); ?>">
                            <?php $__errorArgs = ['industry'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="company" class="form-label"><?php echo e(get_label('company', 'Company')); ?> <span
                                    class="text-danger">*</span></label>
                            <input type="text" name="company" class="form-control" required
                                placeholder="<?php echo e(get_label('enter_company', 'Enter company name')); ?>"
                                value="<?php echo e($lead->company); ?>">
                            <?php $__errorArgs = ['company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="website" class="form-label"><?php echo e(get_label('website', 'Website')); ?></label>
                            <input type="text" name="website" class="form-control"
                                placeholder="<?php echo e(get_label('enter_website', 'Enter company website')); ?>"
                                value="<?php echo e($lead->website); ?>">
                            <?php $__errorArgs = ['website'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- Social Links -->
                        <div class="col-md-12 mt-4">
                            <h5><?php echo e(get_label('social_links', 'Social Links')); ?></h5>
                            <hr>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="linkedin" class="form-label"><?php echo e(get_label('linkedin', 'LinkedIn')); ?></label>
                            <input type="url" name="linkedin" class="form-control"
                                placeholder="<?php echo e(get_label('enter_linkedin_url', 'Enter LinkedIn URL')); ?>"
                                value="<?php echo e($lead->linkedin); ?>">
                            <?php $__errorArgs = ['linkedin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="instagram" class="form-label"><?php echo e(get_label('instagram', 'Instagram')); ?></label>
                            <input type="url" name="instagram" class="form-control"
                                placeholder="<?php echo e(get_label('enter_instagram_url', 'Enter Instagram URL')); ?>"
                                value="<?php echo e($lead->instagram); ?>">
                            <?php $__errorArgs = ['instagram'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="facebook" class="form-label"><?php echo e(get_label('facebook', 'Facebook')); ?></label>
                            <input type="url" name="facebook" class="form-control"
                                placeholder="<?php echo e(get_label('enter_facebook_url', 'Enter Facebook URL')); ?>"
                                value="<?php echo e($lead->facebook); ?>">
                            <?php $__errorArgs = ['facebook'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="pinterest" class="form-label"><?php echo e('Pinterest'); ?></label>
                            <input type="url" name="pinterest" class="form-control"
                                placeholder="<?php echo e(get_label('enter_pinterest_url', 'Enter Pinterest URL')); ?>"
                                value="<?php echo e($lead->pinterest); ?>">
                            <?php $__errorArgs = ['pinterest'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- Address -->
                        <div class="col-md-12 mt-4">
                            <h5><?php echo e(get_label('address', 'Address')); ?></h5>
                            <hr>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="city" class="form-label"><?php echo e(get_label('city', 'City')); ?></label>
                            <input type="text" name="city" class="form-control"
                                placeholder="<?php echo e(get_label('please_enter_city', 'Please enter city')); ?>"
                                value="<?php echo e($lead->city); ?>">
                            <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="state" class="form-label"><?php echo e(get_label('state', 'State')); ?></label>
                            <input type="text" name="state" class="form-control"
                                placeholder="<?php echo e(get_label('please_enter_state', 'Please enter state')); ?>"
                                value="<?php echo e($lead->state); ?>">
                            <?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="zip" class="form-label"><?php echo e(get_label('zip_code', 'Zip Code')); ?></label>
                            <input type="number" name="zip" class="form-control"
                                placeholder="<?php echo e(get_label('please_enter_zip_code', 'Please enter ZIP code')); ?>"
                                value="<?php echo e($lead->zip); ?>">
                            <?php $__errorArgs = ['zip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="country" class="form-label"><?php echo e(get_label('country', 'Country')); ?></label>
                            <input type="text" name="country" class="form-control"
                                placeholder="<?php echo e(get_label('please_enter_country', 'Please enter country')); ?>"
                                value="<?php echo e($lead->country); ?>">
                            <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>


                    </div>
                    <!-- Submit Button -->
                    <div class="mt-4 text-start">
                        <button type="submit" class="btn btn-primary me-2"
                            id="submit_btn"><?= get_label('update', 'Update') ?></button>
                        <button type="reset" class="btn btn-outline-secondary"><?= get_label('cancel', 'Cancel') ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="<?php echo e(asset('assets/js/pages/lead.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/leads/edit.blade.php ENDPATH**/ ?>