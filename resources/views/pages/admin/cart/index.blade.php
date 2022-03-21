@extends('layouts.admin.app')
@section('content')
<br>
<div class="container mb-4">
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Cart List</h3>
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
									<th>Name</th>
									<th>Size</th>
									<th>Quantity</th>
									<th>total</th>
									<!-- <th>Action</th> -->
								</tr>
							</thead>
							<tbody>
                                @foreach($cartData as $key=>$carts)
								<tr role="row">
									<td>{{$cartData->firstItem()+$key}}</td>
									<td>{{$carts->user->name}}</td>
									<td>{{$carts->product->name}}</td>
									<td>{{$carts->size}}</td>
									<td>{{$carts->quantity}}</td>
                                    <td>{{$carts->total}}</td>
									<!-- <td class="text-center">
										<a href=""><button class="btn btn-primary mb-2">Edit</button></a>
										<form method="POST" action="">
											@csrf
                            				{{ method_field('DELETE') }}
											 <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Want to Delete??')">
										</form>
									</td> -->
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					{{$cartData->links()}}
				</div>
			</div>
		</div>
	</div>
	<!-- /.card-body -->
</div>
@endsection