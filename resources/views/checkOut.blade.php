@extends('layouts.app')
@section('content')
    <div class="cart-box-main">
        <div class="container">
            <div class="row new-account-login">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>{{ isset($address) ? 'EDIT Address' : 'Address' }}</h3>
                    </div>
                    <h5><a data-toggle="collapse" href="#formAddress" role="button" aria-expanded="false"
                            class="collapsed">Click here For Billing Address</a></h5>
                <form class="needs-validation collapse" action="{{ route('paymentView') }}" id="formAddress"
                        method="POST">
                        @csrf
                        <input type="hidden" name="quantity" id="quantity" value="{{ $cartData->quantity }}">
                        <input type="hidden" name="productId" id="productId" value="{{ $cartData->product_id }}">
                        <input type="hidden" name="grandTotal" id="" value="{{ $cartData->total }}">
                        @if (isset($address))
                            <input type="hidden" name="addressId" id="addressId" value="{{ $address->id }}" />
                        @endif
                        <div class="mb-3">
                            <label for="address">Address *</label>
                            <textarea type="textarea" class="form-control" name="address" id="address" placeholder=""
                                max="50" required>{{ isset($address) ? $address->address : '' }}</textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="pincode">Pincode *</label>
                                <input type="text" class="form-control"
                                    value="{{ isset($address) ? $address->pincode : '' }}" name="pincode" id="pincode"
                                    placeholder="" pattern="[0-9]" required>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                            @if (isset($address))
                                <input type="checkbox" class="custom-control-input" id="update-info" name="updateAddress">
                                <label class="custom-control-label" for="update-info">Save Address
                                    information</label>
                                <div class="AddressBoxErr" ></div>
                            @else
                                <input type="checkbox" class="custom-control-input" id="save-info" name="saveAddress">
                                <label class="custom-control-label" for="save-info">Save Address information</label>
                                <div class="AddressBoxErr"></div>
                            @endif
                        </div>
                        <hr class="mb-4">
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Payment</h3>
                        </div>
                        <div class="title"> <span>Payment</span> </div>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="codPayment" name="paymentMethod" type="radio" value="cod"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="codPayment">COD(Cash On Delivery)</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="stripePayment" name="paymentMethod" type="radio" value="stripe"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="stripePayment">Stripe
                                    Payment(Debit Card,Credit Card)</label>
                            </div>
                            <div class="paymentBoxErr" ></div>
                        </div>
                        <hr class="mb-1">
                        </form>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="odr-box">
                        <div class="title-left">
                            <h3>Shopping cart</h3>
                        </div>
                        <div class="rounded p-2 bg-light">
                            <div class="media mb-2 border-bottom">
                                <div class="media-body"> <a href="detail.html">
                                        {{ $cartData->product->product_name }}
                                    </a>
                                    <div class="small text-muted">Price: {{ $cartData->product->discount_price }}
                                        <span class="mx-2">|</span> Qty: {{ $cartData->quantity }}
                                        <span class="mx-2">|</span> Subtotal: {{ $cartData->total }}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="order-box">
                        <div class="title-left">
                            <h3>Your order</h3>
                        </div>
                        <div class="d-flex">
                            <div class="font-weight-bold">Product</div>
                            <div class="ml-auto font-weight-bold">Total</div>
                        </div>
                        <hr class="my-1">
                        <div class="d-flex">
                            <h4>Sub Total</h4>
                            <input type="hidden" id="quantity" name="quantity" value="{{ $cartData->quantity }}">
                            <input type="hidden" id="grandTotal" name="grandTotal" value="{{ $cartData->total }}">
                            <div class="ml-auto font-weight-bold"> ₹ {{ $cartData->total }} </div>
                        </div>
                        <hr class="my-1">
                        <div class="d-flex">
                            <h4>Shipping Cost</h4>
                            <div class="ml-auto font-weight-bold"> Free </div>
                        </div>
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Grand Total</h5>
                            <div class="ml-auto h5"> ₹ {{ $cartData->total }} </div>
                        </div>
                        <hr>
                    </div>
                    <div class="col-12 d-flex shopping-box">
                        <button class="ml-auto btn hvr-hover btn-color" id="placeOrderBtn">Place
                            Order</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

    <!-- End Cart -->
@endsection
@section('footer_scripts')
    <script src="https://js.stripe.com/v2/"></script>
    <script src="{{ asset('thewayshop/js/checkOut.js') }}"></script>
@endsection
