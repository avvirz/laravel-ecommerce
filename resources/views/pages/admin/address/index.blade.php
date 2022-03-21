@extends('layouts.admin.app')
@section('content')
    <br>
    <div class="container mb-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Address List</h3>
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
                                        <th>Address</th>
                                        <th>Pincode</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($addressData as $key => $address)
                                        <tr role="row">
                                            <td>{{ $addressData->firstItem() + $key }}</td>
                                            <td>{{ $address->user->name }}</td>
                                            <td>{{ $address->address }}</td>
                                            <td>{{ $address->pincode }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $addressData->links() }}
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
