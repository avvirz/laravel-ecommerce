<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Site Metas -->
    <title>
    <?php if (! empty(trim($__env->yieldContent('template_title')))): ?><?php echo $__env->yieldContent('template_title'); ?> | <?php endif; ?>
    <?php echo e(config('app.name', Lang::get('titles.app'))); ?>

</title>
<meta name="description" content="">
<meta name="author" content="Jeremy Kenedy">

<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->


<!-- Custom CSS -->
<!-- Site Icons and Images -->



<!-- Bootstrap CSS -->

<link rel="stylesheet" href="<?php echo e(asset('thewayshop/css/bootstrap.min.css')); ?>">
<!-- Site CSS -->
<link rel="stylesheet" href="<?php echo e(asset('thewayshop/css/style.css')); ?>">
<!-- Responsive CSS -->
<link rel="stylesheet" href="<?php echo e(asset('thewayshop/css/responsive.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('thewayshop/css/custom.css')); ?>">



<!-- datatable css -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js" defer></script>

<?php echo $__env->yieldContent('template_linked_fonts'); ?>
<?php echo $__env->yieldContent('template_linked_css'); ?>

<style type="text/css">
    nav.navbar.bootsnav li.dropdown ul.dropdown-menu>li>a:hover {
        background-color: transparent;
        color: #d33b33;
    }

    .dropdown-item.active,
    .dropdown-item:active {
        color: #fff;
        text-decoration: none;
        background-color: transparent;
    }

    <?php echo $__env->yieldContent('template_fastload_css'); ?> <?php if(Auth::User() && Auth::User()->profile && Auth::User()->profile->avatar_status == 0): ?>.user-avatar-nav {
        background: url(<?php echo e(Gravatar::get(Auth::user()->email)); ?>) 50% 50% no-repeat;
        background-size: auto 100%;
    }

    <?php endif; ?>

</style>


<script>
    window.Laravel = <?php echo json_encode([
    'csrfToken' => csrf_token(),
]); ?>;
</script>

<?php if(Auth::User() && Auth::User()->profile && $theme->link != null && $theme->link != 'null'): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e($theme->link); ?>">
<?php endif; ?>

<?php echo $__env->yieldContent('head'); ?>
<?php echo $__env->make('scripts.ga-analytics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




<script src="<?php echo e(asset('thewayshop/js/jquery-3.2.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('thewayshop/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('thewayshop/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('thewayshop/js/jquery.superslides.min.js')); ?>"></script>
<script src="<?php echo e(asset('thewayshop/js/bootstrap-select.js')); ?>"></script>
<script src="<?php echo e(asset('thewayshop/js/inewsticker.js')); ?>"></script>



<script src="<?php echo e(asset('thewayshop/js/bootsnav.js')); ?>"></script>
<script src="<?php echo e(asset('thewayshop/js/images-loded.min.js')); ?>"></script>
<script src="<?php echo e(asset('thewayshop/js/isotope.min.js')); ?>"></script>
<script src="<?php echo e(asset('thewayshop/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('thewayshop/js/baguetteBox.min.js')); ?>"></script>
<script src="<?php echo e(asset('thewayshop/js/form-validator.min.js')); ?>"></script>
<script src="<?php echo e(asset('thewayshop/js/jquery-ui.js')); ?>"></script>
<script src="<?php echo e(asset('thewayshop/js/jquery.nicescroll.min.js')); ?>"></script>
<script src="<?php echo e(asset('thewayshop/js/contact-form-script.js')); ?>"></script>
<script src="<?php echo e(asset('thewayshop/js/custom.js')); ?>"></script>

<?php echo $__env->yieldContent('footer_scripts'); ?>
</body>

</html>
<?php /**PATH /var/www/html/uLaravel/laravel-auth/resources/views/layouts/app.blade.php ENDPATH**/ ?>