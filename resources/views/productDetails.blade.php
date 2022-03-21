@extends('layouts.app')
@section('content')
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Product Detail</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ $productData->product_name }} </li>
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
                            <img class="d-block w-100" src="{{ asset('uploads/' . $img[0]) }}" alt="First slide">
                        </div>
                        @for ($i = 1; $i < $length; $i++)
                            <div class="carousel-item carousel-height"> <img class="d-block w-100"
                                    src="{{ asset('uploads/' . $img[$i]) }}" alt="Second slide"> </div>
                        @endfor
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
                        @for ($i = 0; $i < $length; $i++)
                            <li data-target="#carousel-example-1" data-slide-to="$i" class="active">
                                <img class="d-block w-100 img-fluid" src="{{ asset('uploads/' . $img[$i]) }}" alt="" />
                            </li>
                        @endfor
                    </ol>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-6">
                <div class="single-product-details">
                    <h2>{{ $productData->product_name }}</h2>
                    <h5> <del><span class="fa fa-inr"></span> {{ $productData->price }}</del> <span
                            class="fa fa-inr"></span> {{ $productData->discount_price }}</h5>
                    <p class="available-stock"><span>Available Stock {{ $productData->available_stock }} / <a
                                href="#">{{ $productData->sold_stock }} sold </a></span>
                    <p>
                    <h4>Description:</h4>
                    <p>
                        {{ $productData->description }}
                        <br />
                        {{ $productData->long_description }}
                    </p>
                    <form action="{{ route('cart.store') }}" method="POST">
                        @csrf
                        <ul>
                            <input type="hidden" name="product_id" value="{{ $productData->id }}">
                            <input type="hidden" name="discount_price" value="{{ $productData->discount_price }}">
                            <li>
                                <div class="form-group size-st">
                                    <label class="size-label">Size</label>
                                    <select id="basic" class="selectpicker show-tick form-control" name="size">
                                        @foreach ($variantData as $var)
                                            <option value="{{ $var }}">{{ $var }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="form-group quantity-box">
                                    <label class="control-label">Quantity</label>
                                    <input class="form-control" name="quantity" id="quantity" value="1" min="1"
                                        max="{{ $productData->available_stock }}" type="number">
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
                                id="addToWishlist" data-wishlistid={{ $productData->id }} title="Add to Wishlist"><i
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
                    @foreach ($product as $products)
                        <div class="item">
                            <div class="products-single fix">
                                <div class="box-img-hover product-imgbox-height">
                                    @php
                                        $image = explode(',', $products->image);
                                    @endphp
                                    <img src="{{ asset('uploads/' . $image[0]) }}" class="img-fluid" alt="Image">
                                    <div class="mask-icon">
                                        <a class="cart"
                                            href="{{ route('product.detail', $products->id) }}">Details</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4>{{ $products->product_name }}</h4>
                                    <h5>{{ $products->discount_price }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->
@endsection
@section('footer_scripts')
    <script src="{{ asset('thewayshop/js/checkOut.js') }}"></script>
@endsection
