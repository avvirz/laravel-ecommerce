@extends('layouts.admin.app')
@section('content')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <!-- <div class="card"> -->
                <div class="card-header">{!! trans('category.editcategory') !!}</div>
                <div class="card-body">
                    <form id="contact-form" class="form-horizontal" method="POST"
                        action="{{ route('category.update', $category->id) }}" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name" class="control-label">{!! trans('category.category-name') !!}</label>
                                    <input id="name" type="text"
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                        value="{{ $category->name }}" required autofocus>
                                    <!--  @if ($errors->has('name'))
    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
    @endif -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="first_name" class="control-label">{!! trans('category.subcategory') !!}</label>
                                    <select class="form-control" name="category_id">
                                        <option value="" @if ($category->category_id == null) selected @endif>
                                            {!! trans('category.nosubcategory') !!}</option>
                                        @foreach ($categories as $categorie)
                                            <option value="{{ $categorie->id }}"
                                                @if ($category->category_id != null && $category->category_id == $categorie->id) selected @endif>{{ $categorie->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="file" class="control-label">{!! trans('category.images') !!}</label>
                                    <input id="name" type="file" class="form-control" name="image" multiple required
                                        autofocus><br>
                                    <img src="{{ asset('uploads/' . $category->image) }}" height="100" width="100">
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
            <!-- </div> -->
        </div>
    </div>
    </div>
    <br>
@endsection
