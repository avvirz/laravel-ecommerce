@extends('layouts.admin.app')
@section('content')
    <br>

    <div class="container mb-4">
        @if ($message = Session::get('msg'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="card">
            <div class="card-header col-md-12">
                <h3 class="card-title"><i class="fas fa-envelope"></i> User Email </h3>
            </div>
            <div class="card-header col-md-12">
                <form action='home/offers' method="post">
                    @csrf
                    <button type="submit" class="btn btn-success">Send Mail</a>
                </form>
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
                                        <th style="width: 50px;">Sr. No</th>
                                        <th>Email Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($email as $key => $emails)
                                        <tr>
                                            <th>{{ $email->firstItem() + $key }}</th>
                                            <td>{{ $emails->email }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                {{ $email->links() }}
            </div>
        </div>
    </div>
@endsection
