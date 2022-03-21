@extends('layouts.admin.app')
@section('content')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card-header">Edit Product</div>
                <div class="card-body">
                    <form id="contact-form" class="form-horizontal" method="POST"
                        action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
                        @csrf
                        {{ @method_field('PUT') }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name" class="control-label">Category Name</label>
                                    <select class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}"
                                        name="category_id" required="">
                                        <option value="">Category Name</option>
                                        @foreach ($categories as $categorie)
                                            <option value="{{ $categorie->id }}"
                                                @if ($product->category_id == $categorie->id) selected @endif>{{ $categorie->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name" class="control-label">Brand Name</label>
                                    <input id="name" type="text"
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                        value="{{ $product->name }}" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name" class="control-label">Product Name</label>
                                    <input id="name" type="text"
                                        class="form-control{{ $errors->has('product_name') ? ' is-invalid' : '' }}"
                                        name="product_name" value="{{ $product->product_name }}" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name" class="control-label">Product Price</label>
                                    <input id="name" type="text"
                                        class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price"
                                        value="{{ $product->price }}" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name" class="control-label">Discount Price</label>
                                    <input id="name" type="text"
                                        class="form-control{{ $errors->has('discount_price') ? ' is-invalid' : '' }}"
                                        name="discount_price" value="{{ $product->discount_price }}" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name" class="control-label">Available Stock</label>
                                    <input id="name" type="text"
                                        class="form-control{{ $errors->has('available_stock') ? ' is-invalid' : '' }}"
                                        name="available_stock" value="{{ $product->available_stock }}" required
                                        autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name" class="control-label">Sold Items</label>
                                    <input id="name" type="text"
                                        class="form-control{{ $errors->has('sold_stock') ? ' is-invalid' : '' }}"
                                        name="sold_stock" value="{{ $product->sold_stock }}" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name" class="control-label">Product Image</label>
                                    <input id="name" type="file" multiple
                                        class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}"
                                        name="image[]" value="{{ old('image') }}" autofocus><br>
                                    @foreach (explode(',', $product->image) as $picture)
                                        <img class="mt-2 mr-2" height="50px" width="50px"
                                            src="{{ asset('uploads/' . $picture) }}">
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name" class="control-label">Description</label>
                                    <input id="name" type="text"
                                        class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                        name="description" value="{{ $product->description }}" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name" class="control-label">Long Description</label>
                                    <textarea
                                        class="form-control{{ $errors->has('long_description') ? ' is-invalid' : '' }}"
                                        name="long_description" rows="3"
                                        cols="12">{{ $product->long_description }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name" class="control-label mr-2">Size&nbsp</label>
                                    <input type="checkbox" class="text mr-2" name="size[]" value="XS"
                                        @if (in_array('XS', $values)) {{ 'checked' }} @endif>
                                    <label class="control-label mr-2">XS</label>
                                    <input type="checkbox" class="text mr-2" name="size[]" value="S"
                                        @if (in_array('S', $values)) {{ 'checked' }} @endif>
                                    <label class="control-label mr-2">S</label>
                                    <input type="checkbox" class="text mr-2" name="size[]" value="M"
                                        @if (in_array('M', $values)) {{ 'checked' }} @endif>
                                    <label class="control-label mr-2">M</label>
                                    <input type="checkbox" class="text mr-2" name="size[]" value="L"
                                        @if (in_array('L', $values)) {{ 'checked' }} @endif>
                                    <label class="control-label mr-2">L</label>
                                    <input type="checkbox" class="text mr-2" name="size[]" value="XL"
                                        @if (in_array('XL', $values)) {{ 'checked' }} @endif>
                                    <label class="control-label mr-2">XL</label>
                                    <input type="checkbox" class="text mr-2" name="size[]" value="2XL"
                                        @if (in_array('2XL', $values)) {{ 'checked' }} @endif>
                                    <label class="control-label mr-2">2XL</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="submit-button text-center">
                                        <button type="submit" id="submit"
                                            class="btn btn-primary float-left">{!! trans('category.update') !!}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br>
@endsection
