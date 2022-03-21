
<?php $__env->startSection('content'); ?>
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Order Details</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('welcome')); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Order Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Address</th>
                                    <th>Payment Mode</th>
                                    <th>Order Status</th>
                                    <th>Grand Total</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $orderData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderDetails): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="thumbnail-img">
                                            <a href="#">
                                                <img class="img-fluid" src="<?php echo e(asset('uploads/'.$orderDetails->image)); ?>" alt="" height="50px" width="50px" />
                                            </a>
                                        </td>
                                        <td class="name-pr">
                                            <a href="#">
                                                <?php echo e($orderDetails->product_name); ?>

                                            </a>
                                        </td>
                                        <td class="">
                                            <p> <?php echo e($orderDetails->quantity); ?> 5</p>
                                        </td>
                                        <td class="">
                                            <p> <?php echo e($address->address); ?></p>
                                        </td>
                                        <td class="total-pr">
                                            <p class="">
                                                <?php echo e($orderDetails->payment_mode); ?>

                                            </p>
                                        </td>
                                        <td class="">
                                            <p>
                                                <?php echo e($orderDetails->order_status); ?>

                                            </p>
                                        </td>
                                        <td class="total-pr">
                                            <p class="fa fa-rupee">
                                                <?php echo e($orderDetails->grand_total); ?>

                                            </p>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('pdfView',"$orderDetails->id",['download' => 'pdf'])); ?>">Download</a>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div style="margin-left:45%"><?php echo e($orderData->links()); ?></div>
        </div>
    </div>
    <!-- End Cart -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel-auth\resources\views/OrderDetails.blade.php ENDPATH**/ ?>