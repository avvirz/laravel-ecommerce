@extends('layouts.admin.app')
@section('content')
    <div class="container mt-4 mb-4">
        <div class="card ">
            <div class="card-header ">
                <h3 class="card-title ">Product List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6"></div>
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid"
                                aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <th>Category Name</th>
                                        <th>Brand Name</th>
                                        <th>Product Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $key => $product)
                                        <tr role="row">
                                            <td>
                                                @if ($product->category_id)
                                                    {{ $product->category->name }}
                                                @endif
                                            </td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->product_name }}</td>
                                            <td class=" px-4 text-center">
                                                <form method="POST" action="{{ route('product.destroy', $product->id) }}">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button class="btn btn-danger float-left" type="submit"
                                                        class="btn btn-danger"
                                                        onclick="return confirm('Want to Delete??')"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                                <button class="btn btn-success float-left text-center "><a
                                                        class="colorBtnWhite"
                                                        href="{{ route('product.show', $product->id) }}"><i
                                                            class="fa fa-eye"></i></a></button>
                                                <button class="btn btn-primary float-left text-center"><a
                                                        class="colorBtnWhite"
                                                        href="{{ route('product.edit', $product->id) }}"><i
                                                            class="fa fa-pen"></i> </a></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
