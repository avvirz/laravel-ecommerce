@extends('layouts.admin.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 mt-4">
            <div class="card">
                <div class="container">
                    <div class="card-header">
                        @foreach ($order as $orders)
                        <a class="float-right btn btn-dark" href="{{ route('pdfview', "$orders->id") }}">Download
                            PDF</a>
                            <h5> Orders Details</h5>
                    </div>
                </div>
                    <dl class="user-info px-4 mt-4">

                        <dt>
                            User Name
                        </dt>

                        <dd>
                            {{$orders->user->first_name}}
                        </dd>
                        <hr>
                        <dt>
                            Product Name
                        </dt>
                        <dd>
                            {{$orders->product->product_name}}
                        </dd>
                        <hr>
                        <dt>
                            Brand Name
                        </dt>
                        <dd>
                            {{$orders->product->name}}
                        </dd>
                        <hr>
                        <dt>
                            Address
                        </dt>
                        <dd>
                            {{$orders->address->address}}
                        </dd>
                        <hr>
                        <dt>
                            Pincode
                        </dt>
                        <dd>
                            {{$orders->address->pincode}}
                        </dd>
                        <hr>
                        <dt>
                            Payment Mode
                        </dt>
                        <dd>
                            {{$orders->payment_mode}}
                        </dd>
                        <hr>
                        <dt>
                            Quantity
                        </dt>
                        <dd>
                            {{ $orders->quantity }}
                        </dd>
                        <hr>
                        <dt>
                            Order Date
                        </dt>
                        <dd>
                            {{$orders->date}}
                        </dd>
                        <hr>
                        <dt>
                            Order Status
                        </dt>
                        <dd>
                            {{$orders->order_status}}
                        </dd>
                    </dl>
                    @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
