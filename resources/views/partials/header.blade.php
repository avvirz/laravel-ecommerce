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
                @php
                    use App\Http\Controllers\admin\SettingsController;
                    use App\Models\Settings;
                    $dynamicData = SettingsController::dynamicContent();
                @endphp
                @foreach ($dynamicData as $data)
                    <div class="right-phone-box mt-2">
                        <p>Call US : <a href="tel:{{ $data->phone }}"> {{ $data->phone }}</a></p>
                    </div>
                @endforeach
                <div class="our-link">
                    <ul>
                        @auth
                            <li class="mt-3"><a href="{{ url('profile/' . Auth::user()->name) }}"><span
                                        class="user-color">Welcome</span> {{ Auth::user()->name }}</a></li>
                        @else
                            <li class="mt-3"><a href="/login">Login</a></li>
                            <li><a href="/register">register</a></li>
                        @endauth
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
                    @foreach ($dynamicData as $logo)
                        <img src="{{ asset('imagesuser/' . $logo->logo) }}" class="logo" alt="" height="100"
                            width="200">
                    @endforeach
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item {{ Request::is('/')?'active':'' }}"><a class="nav-link" href="/">Home</a></li>
                    <li class="dropdown megamenu-fw">
                        <a href="" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">
                            Product
                        </a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <ul>
                                            @foreach ($categories as $category)
                                                @include('partials.categories', [
                                                    'category' => $category,
                                                ])
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown {{ Request::is('cart')||Request::is('wishlist')||Request::is('OrderDetails')?'active':'' }}">
                        <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('cart.index') }}">Cart</a></li>
                            <li class="side-menu">

                                <a href="{{ route('wishlist.index') }}">Wishlist
                            </li>
                            <li><a href="{{ route('OrderDetails') }}">Orders</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        @auth
                            @if (Auth::User()->profile && Auth::user()->profile->avatar_status == 1)
                                <a class="nav-link dropdown-toggle arrow" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" v-pre><img
                                        src="{{ Auth::user()->profile->avatar }}" height='30px' width="30px" alt=""
                                        class="rounded-circle user-avatar-nav img-border"><span>
                                        {{ Auth::user()->name }}</span></a>
                            @else
                                <a class="nav-link dropdown-toggle arrow" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" v-pre><img
                                        src="{{ asset('dist/img/avtar.png') }}" height='30px' width="30px" alt=""
                                        class="rounded-circle user-avatar-nav img-border"><span>
                                        {{ Auth::user()->name }}</span></a>
                            @endif
                            <ul class="dropdown-menu">
                                <li><a class="{{ Request::is('profile/' . Auth::user()->name, 'profile/' . Auth::user()->name . '/edit') ? 'active' : null }}"
                                        href="{{ url('/profile/' . Auth::user()->name) }}">Profile</a></li>
                                @role('admin')
                                    <li><a href="{{ url('/home') }}">Back to Admintheme</a></li>
                                @endrole
                                <li><a href="/logout">Logout</a></li>
                            </ul>
                        @else
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">My Account</a>
                            <ul class="dropdown-menu">
                                <li><a href="/login">Login</a></li>
                                <li><a href="/register">Register</a></li>
                            @endauth
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- navbar-collapse -->
            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    @auth
                        <li class="side-menu"><a href="#">
                                <i class="fa fa-shopping-bag"></i>
                                <span class="badge">{{ $cartData->count() }}</span>
                            </a></li>
                    @endauth
                </ul>
            </div>
            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
        @auth
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        @foreach ($cartData as $cartData)
                            <li>
                                @php
                                    $image = explode(',', $cartData->product->image);
                                @endphp
                                <a href="#" class="photo"><img src="{{ asset('uploads/' . $image[0]) }}"
                                        height="60px" width="36px" class="cart-thumb" alt="" /></a>
                                <h6><a href="{{ route('cart.index') }}">{{ $cartData->product->product_name }} </a>
                                </h6>
                                <p>Qty - {{ $cartData->quantity }} <span class="price"> <strong> | </strong>
                                        ₹{{ $cartData->total }}</span></p>
                            </li>
                        @endforeach
                        <li class="total">
                            <a href="{{ route('cart.index') }}" class="btn btn-default btn-sm hvr-hover btn-cart">VIEW
                                CART</a>
                        </li>
                    </ul>
                </li>
            </div>
        @endauth
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
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong> {{ session()->get('success') }} </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
</div>
@endif
</div>
<div class="container">
    @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong> {{ session()->get('error') }} </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
</div>
@endif
</div>
