@extends('layouts.admin.app')
@section('content')

<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <!-- <div class="card"> -->
                <div class="card-header">Add Product</div>
                    <div class="card-body">
                        <form id="product-form" class="form-horizontal" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Category Name</label>  
                                        <select class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}" name="category_id" >
                                        	<option value="">Category Name</option>
                                        	@foreach($categories as $categorie)
                                        		<option value="{{$categorie->id}}">{{$categorie->name}}</option>
                                        	@endforeach
                                        </select>
                                        @error('category_id')
                                        <span class="errors">{{$message}}</span>
                                        @enderror 
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Brand Name</label>
                                         <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"  autofocus>
                                        @error('name')
                                        <span class="errors">{{$message}}</span>
                                        @enderror 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Product Name</label>
                                         <input id="name" type="text" class="form-control{{ $errors->has('product_name') ? ' is-invalid' : '' }}" name="product_name" value="{{ old('product_name') }}"  autofocus>
                                         @error('product_name')
                                        <span class="errors">{{$message}}</span>
                                        @enderror 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Product Price</label>
                                         <input id="name" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('name') }}"  autofocus>
                                         @error('price')
                                        <span class="errors">{{$message}}</span>
                                        @enderror 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Discount Price</label>
                                         <input id="name" type="text" class="form-control{{ $errors->has('discount_price') ? ' is-invalid' : '' }}" name="discount_price" value="{{ old('discount_price') }}"  autofocus>
                                         @error('discount_price')
                                        <span class="errors">{{$message}}</span>
                                        @enderror 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Available Stock</label>
                                         <input id="name" type="text" class="form-control{{ $errors->has('available_stock') ? ' is-invalid' : '' }}" name="available_stock" value="{{ old('available_stock') }}"  autofocus>
                                         @error('available_stock')
                                        <span class="errors">{{$message}}</span>
                                        @enderror 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Sold Items</label>
                                         <input id="name" type="text" class="form-control{{ $errors->has('sold_stock') ? ' is-invalid' : '' }}" name="sold_stock" value="{{ old('sold_stock') }}"  autofocus>
                                         @error('sold_stock')
                                        <span class="errors">{{$message}}</span>
                                        @enderror 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Product Image</label>
                                         <input id="name" type="file" multiple class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image[]" value="{{ old('image') }}"  autofocus>
                                         @error('image')
                                        <span class="errors">{{$message}}</span>
                                        @enderror 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Description</label>
                                         <input id="name" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}"  autofocus>
                                         @error('description')
                                        <span class="errors">{{$message}}</span>
                                        @enderror 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Long Description</label>
                                        <textarea class="form-control{{ $errors->has('long_description') ? ' is-invalid' : '' }}" name="long_description" rows="10" cols="12"  autofocus>{{{ old('long_description') }}}</textarea>
                                        @error('long_description')
                                        <span class="errors">{{$message}}</span>
                                        @enderror 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label mr-2">Size&nbsp</label>
                                        <input type="checkbox" class="text mr-2" name="size[]" id="checkboxes" value="XS">
                                        <label class="control-label mr-2">XS</label>
                                        <input type="checkbox" class="text mr-2" name="size[]" id="checkboxes" value="S">
                                        <label class="control-label mr-2">S</label>
                                        <input type="checkbox" class="text mr-2" name="size[]" id="checkboxes" value="M">
                                        <label class="control-label mr-2">M</label>
                                        <input type="checkbox" class="text mr-2" name="size[]" id="checkboxes" value="L">
                                        <label class="control-label mr-2">L</label>
                                        <input type="checkbox" class="text mr-2" name="size[]" id="checkboxes" value="XL">
                                        <label class="control-label mr-2">XL</label>
                                        <input type="checkbox" class="text mr-2" name="size[]" id="checkboxes" value="2XL">
                                        <label class="control-label mr-2">2XL</label>
                                    </div>
                                    @error('size')
                                    <span class="errors">{{$message}}</span>
                                    @enderror 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="submit-button text-center">
                                            <button type="submit" id="submit" class="btn btn-primary">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <!-- </div> -->
        </div>
    </div>
</div>
<br>
@endsection
@section('footer_scripts')

@endsection