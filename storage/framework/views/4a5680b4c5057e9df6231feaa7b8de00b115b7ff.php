<?php $__env->startSection('template_title'); ?>
    <?php echo e(trans('titles.activeUsers')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <users-count :registered=<?php echo e($users); ?> ></users-count>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/uLaravel/laravel-auth/resources/views/pages/admin/active-users.blade.php ENDPATH**/ ?>