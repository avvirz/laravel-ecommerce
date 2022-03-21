@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 mt-4">
                <div class="card">
                    <div class="container">
                        <div class="card-header">
                            <div class="pull-right">
                                <a href="{{ url('home/product') }}" class="btn btn-light btn-sm float-right"
                                    data-toggle="tooltip" data-placement="left"
                                    title="{{ trans('usersmanagement.tooltips.back-users') }}">
                                    <i class="fa fa-fw fa-reply" aria-hidden="true"></i>
                                </a>
                            </div>
                            Products Details
                        </div>
                        @foreach ($product as $products)
                    </div>
                    <dl class="user-info px-4">
                        <dt>
                            Brand Name
                        </dt>
                        <dd>
                            {{ $products->name }}
                        </dd>
                        <dt>
                            Product Name
                        </dt>
                        <dd>
                            {{ $products->product_name }}
                        </dd>
                        <dt>
                            Price
                        </dt>
                        <dd>
                            {{ $products->price }}
                        </dd>
                        <dt>
                            Discount price
                        </dt>
                        <dd>
                            {{ $products->discount_price }}
                        </dd>
                        <dt>
                            Availabel Stock
                        </dt>
                        <dd>
                            {{ $products->available_stock }}
                        </dd>
                        <dt>
                            Sold Stock
                        </dt>
                        <dd>
                            {{ $products->sold_stock }}
                        </dd>
                        <dt>
                            Image
                        </dt>
                        <dd>
                            @foreach (explode(',', $products->image) as $picture)
                                <img class="mt-2" height="50px" width="50px"
                                    src="{{ asset('uploads/' . $picture) }}">
                            @endforeach
                        </dd>
                        <dt>
                            Description
                        </dt>
                        <dd>
                            {{ $products->description }}
                        </dd>
                        <dt>
                            Long Description
                        </dt>
                        <dd>
                            {{ $products->long_description }}
                        </dd>
                        <dt>
                            Status
                        </dt>
                        <dd>
                            {{ $products->status }}
                        </dd>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
