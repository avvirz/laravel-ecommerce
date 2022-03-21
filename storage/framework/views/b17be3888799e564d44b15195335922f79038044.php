<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 mt-4">
                <div class="card">
                    <div class="container">
                        <div class="card-header">
                            <div class="pull-right">
                                <a href="<?php echo e(url('home/product')); ?>" class="btn btn-light btn-sm float-right"
                                    data-toggle="tooltip" data-placement="left"
                                    title="<?php echo e(trans('usersmanagement.tooltips.back-users')); ?>">
                                    <i class="fa fa-fw fa-reply" aria-hidden="true"></i>
                                </a>
                            </div>
                            Products Details
                        </div>
                        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <dl class="user-info px-4">
                        <dt>
                            Brand Name
                        </dt>
                        <dd>
                            <?php echo e($products->name); ?>

                        </dd>
                        <dt>
                            Product Name
                        </dt>
                        <dd>
                            <?php echo e($products->product_name); ?>

                        </dd>
                        <dt>
                            Price
                        </dt>
                        <dd>
                            <?php echo e($products->price); ?>

                        </dd>
                        <dt>
                            Discount price
                        </dt>
                        <dd>
                            <?php echo e($products->discount_price); ?>

                        </dd>
                        <dt>
                            Availabel Stock
                        </dt>
                        <dd>
                            <?php echo e($products->available_stock); ?>

                        </dd>
                        <dt>
                            Sold Stock
                        </dt>
                        <dd>
                            <?php echo e($products->sold_stock); ?>

                        </dd>
                        <dt>
                            Image
                        </dt>
                        <dd>
                            <?php $__currentLoopData = explode(',', $products->image); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $picture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <img class="mt-2" height="50px" width="50px"
                                    src="<?php echo e(asset('uploads/' . $picture)); ?>">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </dd>
                        <dt>
                            Description
                        </dt>
                        <dd>
                            <?php echo e($products->description); ?>

                        </dd>
                        <dt>
                            Long Description
                        </dt>
                        <dd>
                            <?php echo e($products->long_description); ?>

                        </dd>
                        <dt>
                            Status
                        </dt>
                        <dd>
                            <?php echo e($products->status); ?>

                        </dd>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/uLaravel/Thewayshop/resources/views/pages/admin/product/details.blade.php ENDPATH**/ ?>