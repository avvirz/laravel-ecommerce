<?php $__env->startSection('content'); ?>
    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-left">
                <img src="<?php echo e(asset('thewayshop/images/banner-01.jpg')); ?>" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Thewayshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br>
                                trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="<?php echo e(asset('thewayshop/images/banner-02.jpg')); ?>" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Thewayshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br>
                                trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-right">
                <img src="<?php echo e(asset('thewayshop/images/banner-03.jpg')); ?>" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Thewayshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br>
                                trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="shop-cat-box">
                            <img src="<?php echo e(asset('uploads/' . $category->image)); ?>" height="400" width="200">
                            <a class="btn hvr-hover" href="<?php echo e(route('products.getById',$category->id)); ?>"><?php echo e($category->name); ?></a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
    <!-- End Categories -->

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <a href="<?php echo e(route('products.getById')); ?>" class="btn hvr-hover">All
                                Products</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6 special-grid best-seller">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <?php
                                    $image = explode(',', $product->image);
                                ?>
                                <img src="uploads/<?php echo e($image[0]); ?>" height="300" width="200" alt="Image">
                                <div class="mask-icon">
                                    <a class="cart"
                                        href="<?php echo e(route('product.detail', $product->id)); ?>">Details</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>
                                    <a
                                        href="<?php echo e(route('product.detail', $product->id)); ?>"><?php echo e($product->product_name); ?></a>
                                </h4>

                                <h5><del><span class="fa fa-inr"></span> <?php echo e($product->price); ?></span>
                                    </del><?php echo e($product->discount_price); ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="centerBtn"><?php echo e($products->links()); ?></div>
        </div>
    </div>
    <!-- End Products  -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
<?php $__env->stopSection(); ?>

</div>
</body>

</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rajputkishor1973\Desktop\Thewayshop\resources\views/welcome.blade.php ENDPATH**/ ?>