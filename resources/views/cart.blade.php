@extends('layouts.app')

@section('content')
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Discount</th>
                                    <th>Size</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
                                            <img class="img-fluid"
                                                src="{{ asset('uploads/' . $cartProduct->image) }}" alt="" />
                                        </a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
                                            {{ $cartProduct->product_name }}
                                        </a>
                                    </td>
                                    <td class="price-pr">
                                        <p><span class="fa fa-rupee"></span> {{ $cartProduct->price }}</p>
                                    </td>
                                    <td class="price-pr">
                                        <p>{{ $cartProduct->size }}</p>
                                    </td>
                                    <td class="quantity-box"><input type="number" size="4"
                                            value="{{ $cartProduct->quantity }}" min="1" step="1"
                                            class="c-input-text qty text"></td>
                                    <td class="total-pr">
                                        <p><span class="fa fa-rupee"></span> {{ $cartProduct->discount_price }}</p>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="#">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-6 col-sm-6">

                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="update-box">
                        <input value="Update Cart" type="submit">
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Order summary</h3>
                        <div class="d-flex">
                            <h4>Sub Total</h4>
                            <div class="ml-auto font-weight-bold"><span class="fa fa-rupee"></span>
                                {{ $cartProduct->price }}</div>
                        </div>
                        <div class="d-flex">
                            <h4>Discount</h4>
                            <div class="ml-auto font-weight-bold"><span class="fa fa-rupee"></span>
                                {{ $cartProduct->discount_price }}</div>
                        </div>
                        <hr class="my-1">
                        <div class="d-flex">
                            <h4>Coupon Discount</h4>
                            <div class="ml-auto font-weight-bold"><span class="fa fa-rupee"></span> 10 </div>
                        </div>
                        <div class="d-flex">
                            <h4>Tax</h4>
                            <div class="ml-auto font-weight-bold"><span class="fa fa-rupee"></span> 2 </div>
                        </div>
                        <div class="d-flex">
                            <h4>Shipping Cost</h4>
                            <div class="ml-auto font-weight-bold"> Free </div>
                        </div>
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Grand Total</h5>
                            <div class="ml-auto h5"><span class="fa fa-rupee"></span> {{ $cartProduct->price }}
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col-12 d-flex shopping-box"><a href="checkout.html" class="ml-auto btn hvr-hover">Checkout</a>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->
@endsection
@section('footer')
@endsection
