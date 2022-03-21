@extends('layouts.app')
@section('content')
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Wishlist</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                        <li class="breadcrumb-item active">Wishlist</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
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
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($wishlist as $wishlistData)
                                    <tr id="wishArea{{ $wishlistData->id }}">
                                        <td class="thumbnail-img">
                                            <a href="#">
                                                <img class="img-fluid"
                                                @php
                                                $image = explode(',', $wishlistData->image);
                                            @endphp
                                                    src="{{ asset('uploads/' .  $image[0]) }}" alt=""
                                                    height="50px" width="50px" />
                                            </a>

                                        </td>
                                        <td class="name-pr">
                                            <a href="#">
                                                {{ $wishlistData->product_name }}
                                            </a>
                                        </td>
                                        <td class="total-pr">
                                            <p class="fa fa-rupee">
                                                {{ $wishlistData->discount_price }}
                                            </p>
                                        </td>
                                        <form action="{{ route('cart.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" id="Id" name="Id" value="{{ $wishlistData->id }}">
                                            <input type="hidden" id="qty" name="qty" value="1">
                                            <input type="hidden" id="product_id" name="product_id"
                                                value="{{ $wishlistData->product_id }}">
                                            <input type="hidden" id="discount_price" name="discount_price"
                                                value="{{ $wishlistData->discount_price }}">
                                            <input type="hidden" id="size" name="size" value="{{ $wishlistData->size }}">
                                            <td>

                                                <button type="submit" name="submit" class="btn btn-danger"><span
                                                        class="fa fa-shopping-bag"></span></button> |
                                                <a href="javascript:void(0)" class="btn btn-danger" id="removeItem"
                                                    data-removeid={{ $wishlistData->id }}>
                                                    <span class="fa fa-trash"></span>
                                                </a>
                                        </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div style="margin-left:45%">{{ $wishlist->links() }}</div>
        </div>
    </div>
@endsection
@section('footer_scripts')
    <script>
        $(document).ready(function() {
            $(document).on('click', '#removeItem', function() {
                var Id = $(this).data('removeid');
                var token = $("meta[name='csrf-token']").attr("content");
                // if (confirm('Are you sure you want to delete')) {
                $.ajax({
                    url: "wishlist/" + Id,
                    type: "POST",
                    data: {
                        '_method': 'DELETE',
                        Id: Id,
                        '_token': token,
                    },
                    success: function(data, status) {
                        $('#wishArea' + Id).remove();
                    }
                });
                // }
            });

            // $(document).on('click', '#addToCartItem', function() {
            //     var Id = $(this).data('addToCartId');
            //     var size = $('#size').val();
            //     var quantity = $('#quantity').val();
            //     var productId = $('#productId').val();
            //     var token1 = $("meta[name='csrf-token']").attr("content");
            //     $.ajax({
            //         url: "{{ route('cart.store') }}",
            //         type: "POST",
            //         processData: false,
            //         contentType: false,
            //         cache: false,
            //         data: {
            //             Id: Id,
            //             size: size,
            //             quantity: quantity,
            //             price: price,
            //             productId: productId,
            //             '_token' : token1
            //         },
            //         success: function(data, status) {

            //         }
            //     });
            // });

        });
    </script>
@endsection
