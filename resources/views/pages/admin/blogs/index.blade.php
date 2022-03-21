@extends('layouts.admin.app')
@section('content')
    <br>

    <!-- /.card-body -->
    <div class="container mb-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-pen"></i> Blogs</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6"></div>
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid"
                                aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <th>Sr.No</th>
                                        <th>Name</th>
                                        {{-- <th>Description</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogList as $key => $blog)
                                        <tr role="row">
                                            <td>{{ $blogList->firstItem() + $key }}</td>
                                            <td>{{ $blog->name }}</td>
                                            <td>
                                                <div>

                                                    <a class="btn btn-primary float-left mx-3 d-inline"
                                                        href="{{ route('blogs.edit', $blog->id) }}"><i
                                                            class="fas fa-pen"></i>
                                                    </a>
                                                </div>

                                                <form method="POST" action="{{ route('blogs.destroy', $blog->id) }}">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" value="Delete" class="btn btn-danger "
                                                        onclick="return confirm('Want to Delete??')"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $blogList->links() }}
                    </div>
                </div>
                {{-- {{count($count)}} --}}
            </div>

        </div>
    </div>
    </div>
    </div>
@endsection

@section('footer_scripts')
    <script>
        $(document).ready(function() {
            $('#example2').DataTable();
        });
    </script>
    </div>
@endsection
