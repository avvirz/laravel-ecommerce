<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 mt-4">
                <div class="card">
                    <div class="container">
                        <div class="card-header">
                            Orders Details
                            <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="float-right" href="<?php echo e(route('pdfview', $orders->id)); ?>">Download
                                    PDF</a>
                        </div>

                    </div>
                    <dl class="user-info ml-4">
                        <dt>
                            Payment Mode
                        </dt>
                        <dd>
                            <?php echo e($orders->payment_mode); ?>

                        </dd>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/uLaravel/Thewayshop/resources/views/pages/admin/order/details.blade.php ENDPATH**/ ?>