<div class="main-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="text-slid-box">
                    <div id="offer-box" class="carouselTicker">
                        <ul class="offer-box">
                            <li>
                                <i class="fab fa-opencart"></i> Off 10%! Shop Now Man
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 50% - 80% off on Fashion
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT20
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 50%! Shop Now
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 10%! Shop Now Man
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 50% - 80% off on Fashion
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT20
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 50%! Shop Now
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                
                <div class="right-phone-box">
                    <p>Call US :- <a href="#"> +11 900 800 100</a></p>
                </div>
                <div class="our-link">
                    <ul>
                        <?php if(auth()->guard()->check()): ?>
                        <li><a href="#"><span style="color:red;">Welcome</span> <?php echo e(Auth::user()->name); ?></a></li>
                            <li><a href="/logout">Logout</a></li>
                        <?php else: ?>
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">register</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Top -->

<!-- Start Main Top -->
<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
        <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                    aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <?php
                        use App\Http\Controllers\admin\SettingsController;
                        use App\Models\Settings;
                        $dynamicData = SettingsController::dynamicContent();
                    ?>
                    <?php $__currentLoopData = $dynamicData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $logo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img src="<?php echo e(asset('imagesuser/' . $logo->logo)); ?>" class="logo" alt=""
                            height="100" width="200">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </a>
                </div>
                <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="dropdown megamenu-fw">
                        <a href="" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">
                            Product
                        </a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                           <li>
                            <div class="row">
                                <div class="col-menu col-md-3">
                                    <ul>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo $__env->make('partials.categories', ['category' => $category], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo e(route('cart.index')); ?>">Cart</a></li>
                            <li class="side-menu">
                               
                                <a href="<?php echo e(route('wishlist.index')); ?>">Wishlist
                            </li>
                            <li><a href="<?php echo e(route('OrderDetails')); ?>">Orders</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="service">Our Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="contectUs">Contact Us</a></li>
                    <li class="dropdown">
                        <?php if(auth()->guard()->check()): ?>
                        <a  class="nav-link dropdown-toggle arrow" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><img src="<?php echo e(Auth::user()->profile->avatar); ?>" height='30px' width="30px" style="border-radius: 50%" alt="" class="user-avatar-nav"><span> <?php echo e(Auth::user()->name); ?></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="<?php echo e(Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'active' : null); ?>" href="<?php echo e(url('/profile/'.Auth::user()->name)); ?>">Profile</a></li>
                            <?php if (Auth::check() && Auth::user()->hasRole('admin')): ?>
                                <li><a href="<?php echo e(url('/home')); ?>">Back to Admintheme</a></li>
                            <?php endif; ?>
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                            <?php else: ?>
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">My Account</a>
                        <ul class="dropdown-menu">
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Register</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- navbar-collapse -->
            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    <?php if(auth()->guard()->check()): ?>
                    <li class="side-menu"><a href="#">
                    <i class="fa fa-shopping-bag"></i>
                        <span class="badge"><?php echo e($cartData->count()); ?></span>
                        </a></li>
                        <?php endif; ?>
                </ul>
            </div>
            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
        <?php if(auth()->guard()->check()): ?>
        <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <li class="cart-box">
                <ul class="cart-list">
                    <?php $__currentLoopData = $cartData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="#" class="photo"><img src="<?php echo e(asset('uploads/'.$cartData->product->image)); ?>" height="60px" width="36px" class="cart-thumb" alt="" /></a>
                        <h6><a href="<?php echo e(route('cart.index')); ?>"><?php echo e($cartData->product->product_name); ?> </a></h6>
                        <p>Qty - <?php echo e($cartData->quantity); ?> <span class="price"> <strong> | </strong> ₹<?php echo e($cartData->total); ?></span></p>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <li class="total">
                        <a href="<?php echo e(route('cart.index')); ?>" class="btn btn-default btn-sm hvr-hover btn-cart">VIEW CART</a>
                    </li>
                </ul>
            </li>
        </div>
        <?php endif; ?>
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Main Top -->
<!-- Start Top Search -->
<div class="top-search">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
        </div>
    </div>
</div>
<!-- End Top Search -->
<div class="container">
<?php if(session()->has('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong> <?php echo e(session()->get('success')); ?> </strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>
<?php endif; ?>
</div>
<div class="container">
    <?php if(session()->has('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong> <?php echo e(session()->get('error')); ?> </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
    <?php endif; ?>
</div><?php /**PATH /var/www/html/uLaravel/laravel-auth (1)/resources/views/partials/header.blade.php ENDPATH**/ ?>