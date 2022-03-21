<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>ThewayShop - Ecommerce </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo e(asset('dist/images/favicon.ico')); ?>" type="dist/image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo e(asset('dist/images/apple-touch-icon.png')); ?>">

    <!-- Bootstrap CSS -->
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
   
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
                            <li><a href="#">My Account</a></li>
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
                <a class="navbar-brand" href="/"><img src="dist/images/logo.png" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="dropdown megamenu-fw">
                        <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Product</a>
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
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="shop-detail.html">Shop Detail</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="service">Our Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="contectUs">Contact Us</a></li>
                    <li class="dropdown">
                        <?php if(auth()->guard()->check()): ?>
                        <a  class="nav-link dropdown-toggle arrow" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><img src="<?php echo e(Auth::user()->profile->avatar); ?>" height='30px' width="30px" style="border-radius: 50%" alt="" class="user-avatar-nav"><span> <?php echo e(Auth::user()->name); ?></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="<?php echo e(Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'active' : null); ?>" href="<?php echo e(url('/profile/'.Auth::user()->name)); ?>">Profile</a></li>
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
                    <li class="side-menu"><a href="#">
                    <i class="fa fa-shopping-bag"></i>
                        <span class="badge">3</span>
                </a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <li class="cart-box">
                <ul class="cart-list">
                    <li>
                        <a href="#" class="photo"><img src="dist/images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Delica omtantur </a></h6>
                        <p>1x - <span class="price">$80.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="dist/images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Omnes ocurreret</a></h6>
                        <p>1x - <span class="price">$60.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="dist/images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Agam facilisis</a></h6>
                        <p>1x - <span class="price">$40.00</span></p>
                    </li>
                    <li class="total">
                        <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                        <span class="float-right"><strong>Total</strong>: $180.00</span>
                    </li>
                </ul>
            </li>
        </div>
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
    </div><?php /**PATH C:\xampp\htdocs\laravel\14thfeb_laravel-auth\laravel-auth\resources\views/partials/header.blade.php ENDPATH**/ ?>