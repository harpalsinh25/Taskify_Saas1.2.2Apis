<?php
    $title = get_label('chat','Chat');
    if (isset($type)) {
        if ($type == 'project') {
            $title = get_label('project_discussion','Project Discussion');
        } elseif ($type == 'task') {
            $title = get_label('task_discussion','Task Discussion');
        }
    }
?>
<title><?php echo e($title); ?> - <?php echo e($general_settings['company_title']); ?></title>
<link rel="icon" type="image/x-icon" href="/<?php echo e($general_settings['favicon']); ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="id" content="<?php echo e(Auth::user()->id); ?>">
<meta name="messenger-color" content="<?php echo e($messengerColor); ?>">
<meta name="messenger-theme" content="<?php echo e($dark_mode); ?>">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<meta name="url" content="<?php echo e(url('').'/'.config('chatify.routes.prefix')); ?>" data-user="<?php echo e(Auth::user()->id); ?>">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?php echo e(asset('js/chatify/font.awesome.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/chatify/autosize.js')); ?>"></script>
<!-- <script type="module" src="<?php echo e(asset('js/app.js')); ?>"></script> -->
<script src='https://unpkg.com/nprogress@0.2.0/nprogress.js'></script>

<link rel='stylesheet' href='https://unpkg.com/nprogress@0.2.0/nprogress.css' />
<link href="<?php echo e(asset('css/chatify/style.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(asset('css/chatify/'.$dark_mode.'.mode.css')); ?>" rel="stylesheet" />
<!-- <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" /> -->

<style>
    :root {
        --primary-color: <?php echo e($messengerColor); ?>;
    }
</style>
<?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\Code v1.2.1 upload this on server\resources\views/vendor/Chatify/layouts/headLinks.blade.php ENDPATH**/ ?>