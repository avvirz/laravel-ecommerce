@extends('layouts.admin.app')
@section('content')
    <br>
    @foreach ($errors->all() as $error)
    @endforeach
    @if (session('success'))
        <strong>Success!</strong>
        {{ session('success') }}
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card-header">{!! trans('category.add-category') !!}</div>
                <div class="card-body">
                    <form id="contact-form" class="form-horizontal" method="POST" action="{{ route('category.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name" class="control-label">{!! trans('category.category-name') !!}</label>
                                    <input id="name" type="text"
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                        value="{{ old('name') }}" autofocus>
                                    @error('name')
                                        <span class="errors">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="first_name" class="control-label">{!! trans('category.subcategory') !!}</label>
                                    <select class="form-control" name="category_id">
                                        <option value="">{!! trans('category.nosubcategory') !!}</option>
                                        @foreach ($categories as $categorie)
                                            <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="file" class="control-label">{!! trans('category.images') !!}</label>
                                    <input id="name" type="file"
                                        class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image"
                                        autofocus>
                                    @error('image')
                                        <span class="errors">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="submit-button text-center">
                                        <button type="submit" id="submit"
                                            class="btn btn-primary">{!! trans('category.add') !!}</button>
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
