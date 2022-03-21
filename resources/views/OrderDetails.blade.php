@extends('layouts.app')
@section('content')
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Order Details</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                        <li class="breadcrumb-item active">Order Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Address</th>
                                    <th>Payment Mode</th>
                                    <th>Order Status</th>
                                    <th>Grand Total</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orderData as $orderDetails)
                                    <tr>
                                        <td class="thumbnail-img">
                                            <a href="">
                                                @php
                                                    $image = explode(',', $orderDetails->image);
                                                @endphp
                                                <img class="img-fluid" src="{{ asset('uploads/' . $image[0]) }}"
                                                    alt="" height="50px" width="50px" />
                                            </a>
                                        </td>
                                        <td class="name-pr">
                                            <a href="">
                                                {{ $orderDetails->product_name }}
                                            </a>
                                        </td>
                                        <td class="">
                                            <p> {{ $orderDetails->quantity }} </p>
                                        </td>
                                        <td class="">
                                            <p> {{ $address->address }}</p>
                                        </td>
                                        <td class="total-pr">
                                            <p class="">
                                                {{ $orderDetails->payment_mode }}
                                            </p>
                                        </td>
                                        <td class="">
                                            <p>
                                                {{ $orderDetails->order_status }}
                                            </p>
                                        </td>
                                        <td class="total-pr">
                                            <p class="fa fa-rupee">
                                                {{ $orderDetails->grand_total }}
                                            </p>
                                        </td>
                                        <td>
                                            <a
                                                href="{{ route('pdfView', "$orderDetails->id", ['download' => 'pdf']) }}">Download</a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="links">{{ $orderData->links() }}</div>
        </div>
    </div>
    <!-- End Cart -->
@endsection
