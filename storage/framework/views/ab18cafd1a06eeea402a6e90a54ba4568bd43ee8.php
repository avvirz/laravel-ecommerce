<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 mt-4">
            <div class="card">
                <div class="container">
                    <div class="card-header">
                        <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="float-right btn btn-dark" href="<?php echo e(route('pdfview', "$orders->id")); ?>">Download
                            PDF</a>
                            <h5> Orders Details</h5>
                    </div>
                </div>
                    <dl class="user-info px-4 mt-4">

                        <dt>
                            User Name
                        </dt>

                        <dd>
                            <?php echo e($orders->user->first_name); ?>

                        </dd>
                        <hr>
                        <dt>
                            Product Name
                        </dt>
                        <dd>
                            <?php echo e($orders->product->product_name); ?>

                        </dd>
                        <hr>
                        <dt>
                            Brand Name
                        </dt>
                        <dd>
                            <?php echo e($orders->product->name); ?>

                        </dd>
                        <hr>
                        <dt>
                            Address
                        </dt>
                        <dd>
                            <?php echo e($orders->address->address); ?>

                        </dd>
                        <hr>
                        <dt>
                            Pincode
                        </dt>
                        <dd>
                            <?php echo e($orders->address->pincode); ?>

                        </dd>
                        <hr>
                        <dt>
                            Payment Mode
                        </dt>
                        <dd>
                            <?php echo e($orders->payment_mode); ?>

                        </dd>
                        <hr>
                        <dt>
                            Quantity
                        </dt>
                        <dd>
                            <?php echo e($orders->quantity); ?>

                        </dd>
                        <hr>
                        <dt>
                            Order Date
                        </dt>
                        <dd>
                            <?php echo e($orders->date); ?>

                        </dd>
                        <hr>
                        <dt>
                            Order Status
                        </dt>
                        <dd>
                            <?php echo e($orders->order_status); ?>

                        </dd>
                    </dl>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/14-03-2022/abhi 14-03/Thewayshop/resources/views/pages/admin/order/details.blade.php ENDPATH**/ ?>