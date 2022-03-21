
<?php $__env->startSection('content'); ?>
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Product List</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('welcome')); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product">

                            <input class="form-control" placeholder="Search here..." type="text" id="textData">
                            <button type="button" id="search"> <i class="fa fa-search"></i></button>

                        </div>
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Categories</h3>
                            </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men"
                                data-children=".sub-men">
                                <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="#sub-men1"
                                        data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">Clothing <small
                                            class="text-muted">(100)</small>
                                    </a>
                                    <div class="collapse show" id="sub-men1" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">T-Shirts
                                                <small class="text-muted">(50)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Polo T-Shirts <small
                                                    class="text-muted">(10)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Round Neck T-Shirts
                                                <small class="text-muted">(10)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">V Neck T-Shirts
                                                <small class="text-muted">(10)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Hooded T-Shirts
                                                <small class="text-muted">(20)</small></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="#sub-men2"
                                        data-toggle="collapse" aria-expanded="false" aria-controls="sub-men2">Footwear
                                        <small class="text-muted">(50)</small>
                                    </a>
                                    <div class="collapse" id="sub-men2" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">Sports Shoes <small
                                                    class="text-muted">(10)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Sneakers <small
                                                    class="text-muted">(20)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Formal Shoes <small
                                                    class="text-muted">(20)</small></a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="list-group-item list-group-item-action"> Men <small
                                        class="text-muted">(150) </small></a>
                                <a href="#" class="list-group-item list-group-item-action">Accessories <small
                                        class="text-muted">(11)</small></a>
                                <a href="#" class="list-group-item list-group-item-action">Bags <small
                                        class="text-muted">(22)</small></a>
                            </div>
                        </div>
                        <div class="filter-price-left">
                            <div class="title-left">
                                <h3>Price</h3>
                            </div>
                            <div class="price-box-slider">
                                <div id="slider-range">

                                </div>
                                <p>
                                    <input type="text" id="amount" readonly class="filter-input">
                                    <button class="btn hvr-hover" type="button" id="getRangeProducts">Filter</button>
                                </p>
                            </div>
                        </div>
                        <div class="filter-brand-left">
                            <div class="title-left">
                                <h3>Brand</h3>
                            </div>
                            <div class="brand-box">
                                <ul>
                                    <li>
                                        <div class="radio radio-danger">
                                            <input name="survey" id="Radios1" value="Yes" type="radio">
                                            <label for="Radios1"> Supreme </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio radio-danger">
                                            <input name="survey" id="Radios2" value="No" type="radio">
                                            <label for="Radios2"> A Bathing Ape </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio radio-danger">
                                            <input name="survey" id="Radios3" value="declater" type="radio">
                                            <label for="Radios3"> The Hundreds </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio radio-danger">
                                            <input name="survey" id="Radios4" value="declater" type="radio">
                                            <label for="Radios4"> Alife </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio radio-danger">
                                            <input name="survey" id="Radios5" value="declater" type="radio">
                                            <label for="Radios5"> Neighborhood </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio radio-danger">
                                            <input name="survey" id="Radios6" value="declater" type="radio">
                                            <label for="Radios6"> CLOT </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio radio-danger">
                                            <input name="survey" id="Radios7" value="declater" type="radio">
                                            <label for="Radios7"> Acapulco Gold </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio radio-danger">
                                            <input name="survey" id="Radios8" value="declater" type="radio">
                                            <label for="Radios8"> UNDFTD </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio radio-danger">
                                            <input name="survey" id="Radios9" value="declater" type="radio">
                                            <label for="Radios9"> Mighty Healthy </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio radio-danger">
                                            <input name="survey" id="Radios10" value="declater" type="radio">
                                            <label for="Radios10"> Fiberops </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">
                                <div class="toolbar-sorter-right">
                                    <span>Sort by </span>
                                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                                        <option data-display="Select">Nothing</option>

                                        <option value="high">High Price → Low Price</option>
                                        <option value="low">Low Price → High Price</option>

                                    </select>
                                </div>
                                <p>Showing all <?php echo e($count); ?> results</p>
                            </div>
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="nav nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i
                                                class="fa fa-th"></i> </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#list-view" data-toggle="tab"> <i
                                                class="fa fa-list-ul"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row product-categorie-box" id="listView">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">
                                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $image = explode(',', $product->image);
                                            ?>
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <?php if($image): ?>
                                                            <img src="<?php echo e(asset('uploads/' . $image[0])); ?>" height="300"
                                                                width="200" alt="Image">
                                                        <?php else: ?>
                                                            <img src="<?php echo e(asset('uploads/' . $product->image)); ?>"
                                                                height="300" width="200" alt="Image">
                                                        <?php endif; ?>
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
                                                        <h5>
                                                            <del>
                                                                <span class="fa fa-inr"></span>
                                                                <?php echo e($product->price); ?>

                                                            </del>
                                                            <span class="fa fa-inr"></span>
                                                            <?php echo e($product->discount_price); ?>

                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                
                                <div role="tabpanel" class="tab-pane fade" id="list-view">
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $image = explode(',', $product->image);
                                        ?>
                                        <div class="list-view-box">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                    <div class="products-single fix">
                                                        <div class="box-img-hover">
                                                            <?php if($image): ?>
                                                                
                                                                <img src="<?php echo e(asset('uploads/' . $image[0])); ?>" alt="Image"
                                                                    height="300" width="200">
                                                            <?php else: ?>
                                                                <img src="<?php echo e(asset('uploads/' . $product->image)); ?>"
                                                                    height="300" width="200" alt="Image">
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                    <div class="why-text full-width">
                                                        <h4><?php echo e($product->product_name); ?></h4>
                                                        <h5> <del><span
                                                                    class="fa fa-inr"></span><?php echo e($product->price); ?></del>
                                                            <span class="fa fa-inr"></span>
                                                            <?php echo e($product->discount_price); ?>

                                                        </h5>
                                                        <p><?php echo e($product->description); ?>

                                                            <br />
                                                            <?php echo e($product->long_description); ?>

                                                        </p>
                                                        <a class="btn hvr-hover"
                                                            href="<?php echo e(route('product.detail', $product->id)); ?>">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
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
            $('#basic').change(function() {
                var sortby = '?sort=' + $(this).val();
                window.location.href = sortby;
            });
            $('#getRangeProducts').click(function() {
                var price = '?price=' + $('#amount').val();
                window.location.href = price;
            });
            $('#search').click(function() {
                var data = '?data=' + $('#textData').val();
                window.location.href = data;
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/uLaravel/Thewayshop/resources/views/products.blade.php ENDPATH**/ ?>