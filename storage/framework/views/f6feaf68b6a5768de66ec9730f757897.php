<?php $__env->startSection('title'); ?>
    <?php echo e(get_label('lead_information', 'Lead Information')); ?> - <?php echo e($lead->id); ?>

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
                            <?php echo e(ucwords($lead->first_name . ' ' . $lead->last_name)); ?>

                        </li>
                    </ol>
                </nav>
            </div>
            <div>
                <div class="btn-group">
                    <a href="<?php echo e(route('leads.edit', $lead->id)); ?>" class="btn btn-primary btn-sm">
                        <i class="bx bx-edit-alt"></i> <?php echo e(get_label('update', 'Update')); ?>

                    </a>

                </div>
            </div>
        </div>
        <div class="row">
            <!-- Lead Profile Card -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <div class="avatar avatar-xl mb-3">
                                <span class="avatar-initial rounded-circle bg-primary text-white">
                                    <?php echo e(substr($lead->first_name, 0, 1) . substr($lead->last_name, 0, 1)); ?>

                                </span>
                            </div>
                            <h4><?php echo e(ucwords($lead->first_name . ' ' . $lead->last_name)); ?></h4>
                            <p class="text-muted mb-1"><?php echo e($lead->job_title); ?></p>
                            <p class="text-muted"><?php echo e($lead->company); ?></p>
                            <div class="d-flex mb-3 gap-2">
                                <?php if($lead->email): ?>
                                    <a href="mailto:<?php echo e($lead->email); ?>"
                                        class="btn btn-sm btn-outline-primary rounded-pill hover-action">
                                        <i class="bx bx-envelope"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if($lead->phone): ?>
                                    <a href="tel:<?php echo e($lead->phone); ?>"
                                        class="btn btn-sm btn-outline-success rounded-pill hover-action">
                                        <i class="bx bx-phone"></i>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <hr class="my-3">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="fw-semibold"><?php echo e(get_label('lead_stage','Lead Stage')); ?></span>
                            <span class="badge bg-label-<?php echo e($lead->stage->color); ?>"><?php echo e($lead->stage->name); ?></span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="fw-semibold"><?php echo e(get_label('lead_source','Lead Source')); ?></span>
                            <span><?php echo e($lead->source->name ?? 'N/A'); ?></span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="fw-semibold"><?php echo e(get_label('industry','Industry')); ?></span>
                            <span><?php echo e($lead->industry); ?></span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="fw-semibold"><?php echo e(get_label('created','Created')); ?></span>
                            <span><?php echo e(format_date($lead->created_at, true)); ?></span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-semibold"><?php echo e(get_label('assigned_to','Assigned To')); ?></span>
                            <span><?php echo formatUserHtml($lead->assigned_user); ?></span>
                        </div>
                    </div>
                </div>
                <!-- Social Links Card -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0"><?php echo e(get_label('social_links','Social Links')); ?></h5>
                    </div>
                    <div class="card-body">
                        <?php if($lead->website): ?>
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0">
                                    <span class="avatar avatar-xs">
                                        <i class="bx bx-globe text-primary"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <a href="<?php echo e($lead->website); ?>" target="_blank" class="text-body"><?php echo e(get_label('website','Website')); ?></a>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if($lead->linkedin): ?>
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0">
                                    <span class="avatar avatar-xs">
                                        <i class="bx bxl-linkedin-square text-primary"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <a href="<?php echo e($lead->linkedin); ?>" target="_blank" class="text-body"><?php echo e(get_label('linkedin','LinkedIn')); ?></a>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if($lead->facebook): ?>
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0">
                                    <span class="avatar avatar-xs">
                                        <i class="bx bxl-facebook-circle text-primary"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <a href="<?php echo e($lead->facebook); ?>" target="_blank" class="text-body"><?php echo e(get_label('facebook','Facebook')); ?></a>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if($lead->instagram): ?>
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0">
                                    <span class="avatar avatar-xs">
                                        <i class="bx bxl-instagram text-danger"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <a href="<?php echo e($lead->instagram); ?>" target="_blank" class="text-body"><?php echo e(get_label('instagram','Instagram')); ?></a>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if($lead->pinterest): ?>
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <span class="avatar avatar-xs">
                                        <i class="bx bxl-pinterest text-danger"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <a href="<?php echo e($lead->pinterest); ?>" target="_blank" class="text-body"><?php echo e(get_label('pinterest','Pinterest')); ?></a>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- Lead Details Card -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0"><?php echo e(get_label('lead_details','Lead Details')); ?></h5>
                        <ul class="nav nav-tabs card-header-tabs" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#info"
                                    role="tab"> <i class="bx bx-info-circle me-1"></i> <?php echo e(get_label('info','Info')); ?></button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#follow-ups"
                                    role="tab"> <i class="bx bx-calendar-event me-1"></i> <?php echo e(get_label('follow_ups','Follow Ups')); ?></button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <!-- Info Tab -->
                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="card border">
                                            <div class="card-header bg-transparent">
                                                <h6 class="card-title mb-0">
                                                    <i class="bx bx-user me-2"></i><?php echo e(get_label('contact_information','Contact Information')); ?>

                                                </h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <small class="text-muted d-block"><?php echo e(get_label('name','Name')); ?></small>
                                                    <span><?php echo e(ucwords($lead->first_name . ' ' . $lead->last_name)); ?></span>
                                                </div>
                                                <div class="mb-3">
                                                    <small class="text-muted d-block"><?php echo e(get_label('email','Email')); ?></small>
                                                    <span>
                                                        <a href="mailto:<?php echo e($lead->email); ?>"><?php echo e($lead->email); ?></a>
                                                    </span>
                                                </div>
                                                <div>
                                                    <small class="text-muted d-block"><?php echo e(get_label('phone_number','Phone Number')); ?></small>
                                                    <span>
                                                        <a href="tel:<?php echo e($lead->country_code); ?><?php echo e($lead->phone); ?>">
                                                            <img src="https://flagcdn.com/16x12/<?php echo e(strtolower($lead->country_iso_code)); ?>.png"
                                                                alt="<?php echo e($lead->country_iso_code); ?>" class="me-1 w-auto">
                                                            <?php echo e($lead->country_code); ?> <?php echo e($lead->phone); ?>

                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="card border">
                                            <div class="card-header bg-transparent">
                                                <h6 class="card-title mb-0">
                                                    <i class="bx bx-building me-2"></i><?php echo e(get_label('company_info', 'Company Information')); ?>

                                                </h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <small class="text-muted d-block"><?php echo e(get_label('company','Company')); ?></small>
                                                    <span><?php echo e($lead->company); ?></span>
                                                </div>
                                                <div class="mb-3">
                                                    <small class="text-muted d-block"><?php echo e(get_label('job_title','Job Title')); ?></small>
                                                    <span><?php echo e($lead->job_title); ?></span>
                                                </div>
                                                <div>
                                                    <small class="text-muted d-block"><?php echo e(get_label('industry','Industry')); ?></small>
                                                    <span><?php echo e($lead->industry); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card border">
                                            <div class="card-header bg-transparent">
                                                <h6 class="card-title mb-0">
                                                    <i class="bx bx-map me-2"></i><?php echo e(get_label('address_information','Address Information')); ?>

                                                </h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <small class="text-muted d-block"><?php echo e(get_label('city','City')); ?></small>
                                                        <span><?php echo e($lead->city); ?></span>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <small class="text-muted d-block"><?php echo e(get_label('state','State')); ?></small>
                                                        <span><?php echo e($lead->state); ?></span>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <small class="text-muted d-block"><?php echo e(get_label('zip_code','Zip Code')); ?></small>
                                                        <span><?php echo e($lead->zip); ?></span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <small class="text-muted d-block"><?php echo e(get_label('country','Country')); ?></small>
                                                        <span><?php echo e($lead->country); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Follow Ups Tab -->
                            <div class="tab-pane fade" id="follow-ups" role="tabpanel">
                                <div class="mb-3 text-end">
                                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#create_lead_follow_up_modal">
                                        <i class="bx bx-plus me-1"></i>
                                        <?php echo e(get_label('create_lead_follow_up', 'Create Follow Up')); ?>

                                    </button>
                                </div>
                                

                                <?php $__empty_1 = true; $__currentLoopData = $lead->follow_ups()->orderBy('follow_up_at', 'desc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $followUp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div
                                    class="card <?php if($followUp->status === 'completed'): ?> border-success
                                        <?php elseif($followUp->status === 'rescheduled'): ?> border-info
                                        <?php else: ?> border-warning <?php endif; ?> border-bottom-0 border-end-0 border-top-0 mb-3 border-4">

                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <div>
                                                <h6 class="fw-semibold text-primary text-uppercase mb-1">
                                                    <?php echo e(get_label('follow_up_on', 'Follow-up on')); ?> :
                                                    <?php echo e(format_date($followUp->follow_up_at, true)); ?>

                                                </h6>
                                                <div class="d-flex align-items-center small text-muted">
                                                    <i
                                                        class="bx <?php if($followUp->type === 'call'): ?> bx-phone
                                                                    <?php elseif($followUp->type === 'email'): ?> bx-envelope
                                                                    <?php elseif($followUp->type === 'sms'): ?> bx-message
                                                                    <?php elseif($followUp->type === 'meeting'): ?> bx-calendar
                                                                    <?php else: ?> bx-clipboard <?php endif; ?> me-1">
                                                    </i>
                                                    <?php echo e(ucfirst($followUp->type)); ?>

                                                    <span
                                                        class="badge <?php if($followUp->status === 'completed'): ?> bg-label-success
                                                                        <?php elseif($followUp->status === 'rescheduled'): ?> bg-label-info
                                                                        <?php else: ?> bg-label-warning <?php endif; ?> ms-2">
                                                        <?php echo e(ucfirst($followUp->status)); ?>

                                                    </span>
                                                </div>
                                            </div>

                                            <div class="align-items-center d-flex">
                                                <a href="javascript:void(0);" class="edit-lead-follow-up"
                                                    data-id="<?php echo e($followUp->id); ?>"
                                                    title="<?php echo e(get_label('update', 'Update')); ?>"><i
                                                        class="bx bx-edit mx-1"></i></a>
                                                <button title="<?php echo e(get_label('delete', 'Delete')); ?>" type="button"
                                                    class="btn delete" data-id="<?php echo e($followUp->id); ?>"
                                                    data-reload="true"
                                                    data-type="leads/follow-up" data-table="table"><i
                                                        class="bx bx-trash text-danger mx-1"></i></button>
                                            </div>
                                        </div>

                                        <?php if($followUp->note): ?>
                                            <div class="small text-body mt-2">
                                                <?php echo $followUp->note; ?>

                                            </div>
                                        <?php endif; ?>

                                        <div class="d-flex small text-muted mt-3 flex-wrap gap-3">
                                            <div class="d-flex align-items-center">
                                                <i class="bx bx-user me-1"></i>
                                                <span><?php echo e(get_label('assigned_to', 'Assigned To')); ?>:
                                                    <?php echo e(ucwords($followUp->assignedTo->first_name . ' ' . $followUp->assignedTo->last_name)); ?></span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i class="bx bx-calendar-check me-1"></i>
                                                <span><?php echo e(get_label('created_at', 'Created At')); ?>:
                                                    <?php echo e(format_date($followUp->created_at, true)); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="bg-light rounded p-5 text-center">
                                    <i class="bx bx-calendar-exclamation fs-1 text-secondary mb-3"></i>
                                    <h6 class="mb-2"><?php echo e(get_label('no_follow_ups_found','No follow-ups found')); ?></h6>
                                    <p class="text-muted mb-3">
                                        <?php echo e(get_label('create_your_first_follow_up_to_track_interactions_with_this_lead','Create your first follow-up to track interactions with this lead.')); ?>

                                    </p>
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#create_lead_follow_up_modal">
                                        <i class="bx bx-plus me-1"></i> <?php echo e(get_label('create_follow_up','Create Follow-up')); ?>

                                    </button>
                                </div>
                            <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- Follow Ups Modal -->
    <div class="modal fade" id="create_lead_follow_up_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form class="modal-content form-submit-event" action="<?php echo e(route('lead_follow_up.store')); ?>" method="POST">
                
                <input type="hidden" name="lead_id" value="<?php echo e($lead->id); ?>" />
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(get_label('create_lead_follow_up', 'Create Lead Follow Up')); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="assign_to" class="form-label"><?php echo e(get_label('assigned_to', 'Assign To')); ?> <span
                                    class="asterisk">*</span></label>
                            <select name="assigned_to" class="form-select" id="create_follow_up_assigned_to"
                                data-single-select="true" data-allow-clear="false" data-consider-workspace="true"
                                required>
                                <option value=""><?php echo e(get_label('assigned_to', 'Assigned To')); ?></option>
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
                        <div class="col-md-6 mb-3">
                            <label for="follow_up_at"
                                class="form-label"><?php echo e(get_label('follow_up_date', 'Follow Up Date')); ?> <span
                                    class="asterisk">*</span></label>
                            <input type="datetime-local" name="follow_up_at" class="form-control" required>
                            <small
                                class="text-muted"><?php echo e(get_label('follow_up_date_info', 'This date will help you record when the follow-up is taken.')); ?></small>
                            <?php $__errorArgs = ['follow_up_at'];
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
                            <label for="type" class="form-label"><?php echo e(get_label('follow_up_type', 'Follow Up Type')); ?>

                                <span class="asterisk">*</span></label>
                            <select class="form-select" name="type">
                                <option value="call"><?php echo e(get_label('call', 'Call')); ?></option>
                                <option value="email"><?php echo e(get_label('email', 'Email')); ?></option>
                                <option value="meeting"><?php echo e(get_label('meeting', 'Meeting')); ?></option>
                                <option value="sms"><?php echo e(get_label('sms', 'SMS')); ?></option>
                                <option value="other"><?php echo e(get_label('other', 'Other')); ?></option>
                            </select>
                            <small
                                class="text-muted"><?php echo e(get_label('follow_up_type_info', 'Categorize the follow-up, for example: call, email, etc.')); ?></small>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="status" class="form-label"><?php echo e(get_label('status', 'Status')); ?></label>
                            <select name="status" class="form-select">
                                <option value="pending"><?php echo e(get_label('pending', 'Pending')); ?></option>
                                <option value="completed"><?php echo e(get_label('completed', 'Completed')); ?></option>
                                <option value="rescheduled"><?php echo e(get_label('rescheduled', 'Rescheduled')); ?></option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-lable" for="note"><?php echo e(get_label('note', 'Note')); ?></label>
                            <textarea name="note" class="form-control" id="follow_up_note"></textarea>
                            <small
                                class="text-muted"><?php echo e(get_label('follow_up_note_info', 'Add any notes that you want to keep for this follow-up.')); ?></small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <?php echo e(get_label('close', 'Close')); ?>

                    </button>
                    <button type="submit" id="submit_btn" class="btn btn-primary">
                        <?php echo e(get_label('create', 'Create')); ?>

                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="edit_lead_follow_up_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form class="modal-content form-submit-event" action="<?php echo e(route('lead_follow_up.update')); ?>" method="POST">
                
                <input type="hidden" name="id" />
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(get_label('edit_lead_follow_up', 'Edit Lead Follow Up')); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="assign_to" class="form-label"><?php echo e(get_label('assigned_to', 'Assign To')); ?> <span
                                    class="asterisk">*</span></label>
                            <select name="assigned_to" class="form-select" id="edit_follow_up_assigned_to"
                                data-single-select="true" data-allow-clear="false" data-consider-workspace="true"
                                required>
                                <option value=""><?php echo e(get_label('assigned_to', 'Assigned To')); ?></option>
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
                        <div class="col-md-6 mb-3">
                            <label for="follow_up_at"
                                class="form-label"><?php echo e(get_label('follow_up_date', 'Follow Up Date')); ?> <span
                                    class="asterisk">*</span></label>
                            <input type="datetime-local" name="follow_up_at" class="form-control" required>
                            <small
                                class="text-muted"><?php echo e(get_label('follow_up_date_info', 'This date will help you record when the follow-up is taken.')); ?></small>
                            <?php $__errorArgs = ['follow_up_at'];
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
                            <label for="type" class="form-label"><?php echo e(get_label('follow_up_type', 'Follow Up Type')); ?>

                                <span class="asterisk">*</span></label>
                            <select class="form-select" name="type">
                                <option value="call"><?php echo e(get_label('call', 'Call')); ?></option>
                                <option value="email"><?php echo e(get_label('email', 'Email')); ?></option>
                                <option value="meeting"><?php echo e(get_label('meeting', 'Meeting')); ?></option>
                                <option value="sms"><?php echo e(get_label('sms', 'SMS')); ?></option>
                                <option value="other"><?php echo e(get_label('other', 'Other')); ?></option>
                            </select>
                            <small
                                class="text-muted"><?php echo e(get_label('follow_up_type_info', 'Categorize the follow-up, for example: call, email, etc.')); ?></small>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="status" class="form-label"><?php echo e(get_label('status', 'Status')); ?></label>
                            <select name="status" class="form-select">
                                <option value="pending"><?php echo e(get_label('pending', 'Pending')); ?></option>
                                <option value="completed"><?php echo e(get_label('completed', 'Completed')); ?></option>
                                <option value="rescheduled"><?php echo e(get_label('rescheduled', 'Rescheduled')); ?></option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-lable" for="note"><?php echo e(get_label('note', 'Note')); ?></label>
                            <textarea name="note" class="form-control" id="edit_follow_up_note"></textarea>
                            <small
                                class="text-muted"><?php echo e(get_label('follow_up_note_info', 'Add any notes that you want to keep for this follow-up.')); ?></small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <?php echo e(get_label('close', 'Close')); ?>

                    </button>
                    <button type="submit" id="submit_btn" class="btn btn-primary">
                        <?php echo e(get_label('create', 'Create')); ?>

                    </button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/leads/show.blade.php ENDPATH**/ ?>