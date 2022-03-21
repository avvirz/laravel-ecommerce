@extends('layouts.admin.app')
@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <!-- <div class="card"> -->
                <div class="card-header">Edit Order</div>
                    <div class="card-body">
                        <form id="contact-form" class="form-horizontal" method="POST" action="{{route('orders.update',$orders->id)}}" enctype="multipart/form-data">
                            @csrf     
                            {{@method_field('PUT')}}             

                             <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">UserId</label>
                                         <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="user_id" value="{{$orders->user_id}}" readonly autofocus>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">User Name</label>
                                         <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="username" value="{{$orders->user->name}}" readonly autofocus>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label mr-3">Order Status </label>
                                        <input type="radio" class="form-control1" name="status" value="pending" @if($orders->order_status == "pending") checked @endif >
                                        <label class="control-label">pending</label>
                                        <input type="radio" class="form-control1" name="status" value="completed" @if($orders->order_status == "completed") checked @endif>
                                        <label class="control-label">completed</label>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Date</label>
                                         <input id="name" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{$orders->date}}" autofocus>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="submit-button text-center">
                                            <button type="submit" id="submit" class="btn btn-primary">Update</button>
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