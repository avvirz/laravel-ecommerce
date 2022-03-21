<?php $__env->startSection('content'); ?>
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Product Detail</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('welcome')); ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?php echo e($productData->product_name); ?> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-6">
                <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active carousel-height">
                            <img class="d-block w-100" src="<?php echo e(asset('uploads/' . $img[0])); ?>" alt="First slide">
                        </div>
                        <?php for($i = 1; $i < $length; $i++): ?>
                            <div class="carousel-item carousel-height"> <img class="d-block w-100"
                                    src="<?php echo e(asset('uploads/' . $img[$i])); ?>" alt="Second slide"> </div>
                        <?php endfor; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                    <ol class="carousel-indicators">
                        <?php for($i = 0; $i < $length; $i++): ?>
                            <li data-target="#carousel-example-1" data-slide-to="$i" class="active">
                                <img class="d-block w-100 img-fluid" src="<?php echo e(asset('uploads/' . $img[$i])); ?>" alt="" />
                            </li>
                        <?php endfor; ?>
                    </ol>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-6">
                <div class="single-product-details">
                    <h2><?php echo e($productData->product_name); ?></h2>
                    <h5> <del><span class="fa fa-inr"></span> <?php echo e($productData->price); ?></del> <span
                            class="fa fa-inr"></span> <?php echo e($productData->discount_price); ?></h5>
                    <p class="available-stock"><span>Available Stock <?php echo e($productData->available_stock); ?> / <a
                                href="#"><?php echo e($productData->sold_stock); ?> sold </a></span>
                    <p>
                    <h4>Description:</h4>
                    <p>
                        <?php echo e($productData->description); ?>

                        <br />
                        <?php echo e($productData->long_description); ?>

                    </p>
                    <form action="<?php echo e(route('cart.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <ul>
                            <input type="hidden" name="product_id" value="<?php echo e($productData->id); ?>">
                            <input type="hidden" name="discount_price" value="<?php echo e($productData->discount_price); ?>">
                            <li>
                                <div class="form-group size-st">
                                    <label class="size-label">Size</label>
                                    <select id="basic" class="selectpicker show-tick form-control" name="size">
                                        <?php $__currentLoopData = $variantData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($var); ?>"><?php echo e($var); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="form-group quantity-box">
                                    <label class="control-label">Quantity</label>
                                    <input class="form-control" name="quantity" id="quantity" value="1" min="1"
                                        max="<?php echo e($productData->available_stock); ?>" type="number">
                                </div>
                            </li>
                        </ul>
                        <div class="price-box-bar">
                            <div class="cart-and-bay-btn">
                                <button type="submit" class="btn hvr-hover btn-color" data-fancybox-close="">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="add-to-btn">
                        <div class="add-comp">
                            <a class="btn hvr-hover" href="javascript:void(0)" data-toggle="tooltip" data-placement="right"
                                id="addToWishlist" data-wishlistid=<?php echo e($productData->id); ?> title="Add to Wishlist"><i
                                    class="fas fa-heart"></i> Add to wishlist</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Featured Products</h1>
                </div>
                <div class="featured-products-box owl-carousel owl-theme">
                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <div class="products-single fix">
                                <div class="box-img-hover product-imgbox-height">
                                    <?php
                                        $image = explode(',', $products->image);
                                    ?>
                                    <img src="<?php echo e(asset('uploads/' . $image[0])); ?>" class="img-fluid" alt="Image">
                                    <div class="mask-icon">
                                        <a class="cart"
                                            href="<?php echo e(route('product.detail', $products->id)); ?>">Details</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4><?php echo e($products->product_name); ?></h4>
                                    <h5><?php echo e($products->discount_price); ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>
    <script src="<?php echo e(asset('thewayshop/js/checkOut.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/14-03-2022/abhi 14-03/Thewayshop/resources/views/productDetails.blade.php ENDPATH**/ ?>