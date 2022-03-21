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
<?php /**PATH C:\Users\rajputkishor1973\Desktop\Thewayshop\resources\views/emails/offers.blade.php ENDPATH**/ ?>