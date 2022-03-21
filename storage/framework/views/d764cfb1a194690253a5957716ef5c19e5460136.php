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
                            <img class="img-fluid" src="<?php echo e(asset('thewayshop/images/men_category.jpg')); ?>" alt="" />
                            <a class="btn hvr-hover" href="#"><?php echo e($category->name); ?></a>
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
                    <div class="title-all text-center">
                        <h1>Featured Products</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" id="productsAllBtn">All Products</button>
                             <button data-filter=".top-featured">Top featured</button>
                                    <button data-filter=".best-seller">Best seller</button> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6 special-grid best-seller">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                </div>
                                <img src="uploads/<?php echo e($product->image); ?>" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="javascript:void(0)" id="addToWishlist"
                                                data-wishlistid=<?php echo e($product->id); ?> data-toggle="tooltip"
                                                data-placement="right" title="Add to Wishlist"><i
                                                    class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>
                                    <a
                                        href="<?php echo e(route('product.detail', $product->id)); ?>"><?php echo e($product->product_name); ?></a>
                                </h4>
                                <p><?php echo e($product->description); ?> </p>
                                <h5><del><span class="fa fa-inr"></span> <?php echo e($product->price); ?></span>
                                    </del><?php echo e($product->discount_price); ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div style="margin-left:45%"><?php echo e($products->links()); ?></div>
        </div>
    </div>
    <!-- End Products  -->
    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>latest blog</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="<?php echo e(asset('thewayshop/images/blog-img.jpg')); ?>" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Fusce in augue non nisi fringilla</h3>
                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna
                                    dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis.
                                    Praesent laoreet lacinia elit id lobortis.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Likes"><i
                                            class="far fa-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Views"><i
                                            class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comments"><i
                                            class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="<?php echo e(asset('thewayshop/images/blog-img-01.jpg')); ?>" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Fusce in augue non nisi fringilla</h3>
                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna
                                    dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis.
                                    Praesent laoreet lacinia elit id lobortis.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Likes"><i
                                            class="far fa-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Views"><i
                                            class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comments"><i
                                            class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="<?php echo e(asset('thewayshop/images/blog-img-02.jpg')); ?>" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Fusce in augue non nisi fringilla</h3>
                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna
                                    dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis.
                                    Praesent laoreet lacinia elit id lobortis.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Likes"><i
                                            class="far fa-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Views"><i
                                            class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comments"><i
                                            class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog  -->
    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?php echo e(asset('thewayshop/images/instagram-img-01.jpg')); ?>" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?php echo e(asset('thewayshop/images/instagram-img-02.jpg')); ?>" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?php echo e(asset('thewayshop/images/instagram-img-03.jpg')); ?>" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?php echo e(asset('thewayshop/images/instagram-img-04.jpg')); ?>" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?php echo e(asset('thewayshop/images/instagram-img-05.jpg')); ?>" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?php echo e(asset('thewayshop/images/instagram-img-06.jpg')); ?>" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?php echo e(asset('thewayshop/images/instagram-img-07.jpg')); ?>" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?php echo e(asset('thewayshop/images/instagram-img-09.jpg')); ?>" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?php echo e(asset('thewayshop/images/instagram-img-05.jpg')); ?>" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
    <script>
        $(document).ready(function() {

            $("#productsAllBtn").on('click', function() {

                $.ajax({
                    type: "GET",
                    data: {},
                    success: function(data, status) {
                        window.location.href = '/products';
                    }

                })
            });


            $(document).on('click', '#addToWishlist', function() {
                var wishlistId = $(this).data('wishlistid');
                var token = $("meta[name='csrf-token']").attr("content");
                    $.ajax({
                        url: "<?php echo e(route('wishlist.store')); ?>",
                        type: "POST",
                        data: {
                            wishlistId: wishlistId,
                            '_token': token,
                        },
                        success: function(data, status) {
                            
                        }
                    });
            });


        });
    </script>
<?php $__env->stopSection(); ?>

</div>
</body>

</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/uLaravel/laravel-auth (1)/resources/views/welcome.blade.php ENDPATH**/ ?>