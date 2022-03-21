<?php $__env->startSection('content'); ?>
    <script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>

    <form method="post">

    </form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>
    <script>
        CKEDITOR.replace('editor');
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/uLaravel/laravel-auth/resources/views/pages/admin/ckeditor/index.blade.php ENDPATH**/ ?>