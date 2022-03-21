@extends('layouts.app')
@section('content')
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Back</a></li>
                        <li class="breadcrumb-item active">Cart Details</li>
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
                                    <th>Price</th>
                                    <th>Size</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php $i=0 @endphp
                                @foreach ($cartAllData as $cartData)
                                    <form action="{{ route('cart.update', $cartData->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <tr class="cartArea" id="cartArea{{ $cartData->id }}">
                                            <input type="hidden" value="{{ $cartData->id }}" />
                                            <td class="thumbnail-img">
                                                <a href="">
                                                    @php
                                                        $image = explode(',', $cartData->image);
                                                    @endphp
                                                    <img class="img-fluid" src="{{ asset('uploads/' . $image[0]) }}"
                                                        alt="" />
                                                </a>
                                            </td>
                                            <td class="name-pr">
                                                <a href="#">
                                                    {{ $cartData->product_name }}
                                                </a>
                                            </td>
                                            <td class="price-pr">
                                                <p>{{ $cartData->discount_price }}
                                                    <input type="hidden" value="{{ $cartData->discount_price }}"
                                                        name="productPrice" class="pricee">
                                                </p>
                                            </td>
                                            <td class="price-pr">
                                                <p>{{ $cartData->size }}</p>
                                            </td>
                                            <td class="quantity-box">
                                                <input type="number" id="qty<?php echo $i; ?>" name="productQty"
                                                    onchange="subTotal()" min="1" max="{{ $cartData->available_stock }}"
                                                    step="1" class="c-input-text qty text qty"
                                                    value="{{ $cartData->quantity }}">
                                            </td>
                                            <td>
                                                <p class="totalSum"></p>
                                            </td>
                                            <td>
                                                <button type="submit" style="color:white"
                                                    class="ml-auto btn hvr-hover">Checkout</button>
                                            </td>
                                            <td class="remove-pr">
                                                <li style="border:none;">
                                                    <a href="javascript:void(0)" class="btn btn-danger" id="removeCartItem"
                                                        data-removeid={{ $cartData->id }}>
                                                        <span class="fa fa-trash"></span>
                                                    </a>
                                                </li>
                                            </td>
                                        </tr>
                                    </form>
                                    @php $i++;  @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->
@endsection
@section('footer_scripts')
    <script>
        var pricee = document.getElementsByClassName('pricee');
        var qty = document.getElementsByClassName('qty');
        var sum = document.getElementsByClassName('sum');
        var totalSum = document.getElementsByClassName('totalSum');

        function subTotal() {
            for (var i = 0; i < pricee.length; i++) {
                var price = (pricee[i].value) * (qty[i].value);

                totalSum[i].innerText = price;
            }
        }
        subTotal();
        $(document).ready(function() {
            $(document).on('click', '#removeCartItem', function() {
                var cartId = $(this).data('removeid');
                var token = $("meta[name='csrf-token']").attr("content");
                if (confirm('Are you sure you want to delete')) {
                    $.ajax({
                        url: "cart/" + cartId,
                        type: "POST",
                        data: {
                            '_method': 'DELETE',
                            cartId: cartId,
                            '_token': token,
                        },
                        success: function(data, status) {
                            $('#cartArea' + cartId).remove();
                        }
                    });
                }
            });

        });
    </script>
@endsection
