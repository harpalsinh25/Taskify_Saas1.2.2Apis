<?php $__env->startSection('title'); ?>
<?php echo e(get_label('holiday_calendar', 'Holiday Calendar')); ?> - <?php echo e(get_label('calendars', 'Calendars')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-2 mt-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(url('home')); ?>"><?php echo e(get_label('home', 'Home')); ?></a>
                    </li>
                    <li class="breadcrumb-item">
                        <?php echo e(get_label('calendars', 'Calendars')); ?>

                    </li>
                    <li class="breadcrumb-item active">
                        <?php echo e(get_label('holiday_calendar', 'Holiday Calendar')); ?>

                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <?php if(empty($google_calendar_settings['calendar_id']) || empty($google_calendar_settings['api_key'])): ?>
                    <div class="alert alert-primary" role="alert">
                        <?php echo e(get_label('google_calendar_not_configured', 'Google Calendar is Not Configured Properly.')); ?>

                        <a href="<?php echo e(url('/master-panel/settings/google-calendar')); ?>" class="ms-2 text-decoration">
                            <?php echo e(get_label('click_here_to_configure', 'Click Here to Configure')); ?>

                        </a>
                    </div>

                    <?php endif; ?>

                    <div id="color-legend">
                        <strong class="legend-title"><?php echo e(get_label('event_type','Event Type')); ?>:</strong>
                        <div class="legend-container">
                            <div class="legend-item">
                                <span class="legend-box bg-primary"></span>
                                <span>
                                    <?php if(isset($google_calendar_settings['custom_holiday_name']) && !empty($google_calendar_settings['custom_holiday_name'])): ?>
                                    <?php echo e($google_calendar_settings['custom_holiday_name']); ?>

                                    <?php else: ?>
                                    <?php echo e(get_label('public_holidays','Public Holidays')); ?>

                                    <?php endif; ?>
                                </span>
                            </div>
                            <div class="legend-item">
                                <span class="legend-box bg-success"></span> <span><?php echo e(get_label('leave_accepted','Leave Accepted')); ?></span>
                            </div>
                            <div class="legend-item">
                                <span class="legend-box bg-warning"></span> <span><?php echo e(get_label('leave_pending','Leave Pending')); ?></span>
                            </div>
                            <div class="legend-item">
                                <span class="legend-box bg-danger"></span> <span><?php echo e(get_label('leave_rejected','Leave Rejected')); ?></span>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="card-body">


                    <div class="" id="googleCalendarDiv"></div>

                </div>
            </div>
        </div>

        <script>
            var google_calendar_id = '<?php echo e($google_calendar_settings['calendar_id']); ?>';
            var google_calendar_api_key = '<?php echo e($google_calendar_settings['api_key']); ?>';
        </script>


        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/calendars/index.blade.php ENDPATH**/ ?>