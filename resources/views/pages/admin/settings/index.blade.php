@extends('layouts.admin.app')
@section('content')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card-header">Settings</div>
                <div class="card-body">

                    <form id="contact-form" class="form-horizontal" method="POST"
                        action="{{ route('settings.update', $settings->id) }}" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name" class="control-label">Logo</label><br>
                                    <img src="{{ asset('imagesuser/' . $settings->logo) }}" height="100" width="200">
                                    <input id="name" type="file" class="form-control mt-3" name="logo"
                                        value="{{ old('logo') }}" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="first_name" class="control-label">Address</label>
                                    <input type="text" class="form-control" name="address"
                                        value="{{ $settings->address }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="first_name" class="control-label">Phone No</label>
                                    <input type="text" class="form-control" name="phone" value="{{ $settings->phone }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="first_name" class="control-label">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $settings->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="first_name" class="control-label">About Site</label>
                                    <textarea class="form-control"
                                        name="about_site">{{ $settings->about_site }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="first_name" class="control-label">Facebook Link</label>
                                    <input type="text" class="form-control" name="fb_link"
                                        value="{{ $settings->fb_link }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="submit-button text-center">
                                        <button type="submit" id="submit"
                                            class="btn btn-primary">{!! trans('category.update') !!}</button>
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
@endsection
