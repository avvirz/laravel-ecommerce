@extends('layouts.admin.app')
@section('content')
    <br>
    <div class="container mb-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Blog</h3>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <!-- <div class="card"> -->


                    <div class="card-body">
                        <form id="contact-form" class="form-horizontal" method="POST"
                            action="{{ route('blogs.update', $blog->id) }}" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Name</label>
                                        <input id="name" type="text" class="form-control" name="name"
                                            value="{{ $blog->name }}" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="slug" type="hidden" class="form-control" name="slug">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Description</label>
                                        <textarea name="title">{{ $blog->title }}</textarea>
                                        <script>
                                            CKEDITOR.replace('title');
                                        </script>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                                {{-- @endforeach --}}

                            </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>

    </div>

    </div>

    </div>


    </div>

    </div>
@endsection
