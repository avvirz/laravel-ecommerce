@extends('layouts.admin.app')
@section('content')
    <br>
    <div class="container mb-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Orders List</h3>
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
                                        <th>Sr No</th>
                                        <th>Username</th>
                                        <th>Product Type</th>
                                        <th>Order Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ordersData as $key => $orders)
                                        <tr role="row">
                                            <td>{{ $ordersData->firstItem() + $key }}</td>
                                            <td>{{ $orders->user->name }}</td>
                                            <td>{{ $orders->product->product_name }}</td>
                                            <td>{{ $orders->order_status }}</td>
                                            <td class="px-4 text-center">
                                                <form method="POST" action="{{ route('orders.destroy', $orders->id) }}">
                                                    @csrf
                                                    {{ @method_field('DELETE') }}
                                                    <button class="btn btn-danger float-left" type="submit"
                                                        class="btn btn-danger"
                                                        onclick="return confirm('Want to Delete??')"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                                <button class="btn btn-success float-left"><a class="colorBtnWhite"
                                                        href="{{ route('orders.show', $orders->id) }}"><i
                                                            class="fa fa-eye"></i></a></button>
                                                <button class="btn btn-primary float-left"><a class="colorBtnWhite"
                                                        href="{{ route('orders.edit', $orders->id) }}"><i
                                                            class="fa fa-pen"></i></a></button>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $ordersData->links() }}
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
