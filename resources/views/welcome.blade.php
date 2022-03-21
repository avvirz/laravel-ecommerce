@extends('layouts.app')
@section('content')
    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-left">
                <img src="{{ asset('thewayshop/images/banner-01.jpg') }}" alt="">
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
                <img src="{{ asset('thewayshop/images/banner-02.jpg') }}" alt="">
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
                <img src="{{ asset('thewayshop/images/banner-03.jpg') }}" alt="">
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
                @foreach ($categories as $category)
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="shop-cat-box">
                            <img src="{{ asset('uploads/' . $category->image) }}" height="400" width="200">
                            <a class="btn hvr-hover" href="{{route('products.getById',$category->id)}}">{{ $category->name }}</a>
                        </div>
                    </div>
                @endforeach

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
                            <a href="{{ route('products.getById') }}" class="btn hvr-hover">All
                                Products</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-6 special-grid best-seller">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                @php
                                    $image = explode(',', $product->image);
                                @endphp
                                <img src="uploads/{{ $image[0] }}" height="300" width="200" alt="Image">
                                <div class="mask-icon">
                                    <a class="cart"
                                        href="{{ route('product.detail', $product->id) }}">Details</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>
                                    <a
                                        href="{{ route('product.detail', $product->id) }}">{{ $product->product_name }}</a>
                                </h4>

                                <h5><del><span class="fa fa-inr"></span> {{ $product->price }}</span>
                                    </del>{{ $product->discount_price }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="centerBtn">{{ $products->links() }}</div>
        </div>
    </div>
    <!-- End Products  -->
@endsection

@section('footer_scripts')
@endsection

</div>
</body>

</html>
