<?php $__env->startComponent('mail::message'); ?>
# Introduction

This is your offer mail !

The Clothing store is opening latest deals for public 
upto 50% off on Shirts and Trousers ..

So , Hurry up Limited edition 
<?php $__env->startComponent('mail::button', ['url' => '']); ?>
Button Text
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /var/www/html/14-03-2022/abhi 14-03/Thewayshop/resources/views/emails/offers.blade.php ENDPATH**/ ?>