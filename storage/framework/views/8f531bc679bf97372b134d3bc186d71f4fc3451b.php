<?php if(config('settings.googleanalyticsId')): ?>
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e(config('settings.googleanalyticsId')); ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '<?php echo e(config('settings.googleanalyticsId')); ?>');
    </script>
<?php endif; ?>
<?php /**PATH /var/www/html/uLaravel/laravel-auth (1)/resources/views/scripts/ga-analytics.blade.php ENDPATH**/ ?>