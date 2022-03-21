@extends('layouts.admin.app')
@section('content')
    <br>
    <div class="container mb-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Category List</h3>
            </div>
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
                                        <th>Category Name</th>
                                        <th>Parent Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $key => $categorie)
                                        <tr role="row">
                                            <td>{{ $categorie->name }}</td>
                                            <td>
                                                @if ($categorie->category_id)
                                                    {{ $categorie->parent->name }}
                                                @else
                                                    No Parent Category
                                                @endif
                                            </td>
                                            <td class="text-center px-4">
                                                <form method="POST"
                                                    action="{{ route('category.destroy', $categorie->id) }}">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button class="btn btn-danger float-left" type="submit"
                                                        class="btn btn-danger"
                                                        onclick="return confirm('Want to Delete??')"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                                <button class="btn btn-primary  text-center"><a class="colorBtnWhite"
                                                        href="{{ route('category.edit', $categorie->id) }}"><i
                                                            class="fa fa-pen"></i> </a></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <caption>
                            {{ $categories->count() }} Total Category
                        </caption>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
@section('footer_scripts')
    <script>
        $(document).ready(function() {
            $('#example2').DataTable();
        });
    </script>
@endsection
