<?php $__env->startSection('content'); ?>
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
                                <?php $__currentLoopData = $cartData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$carts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr role="row">
									<td><?php echo e($cartData->firstItem()+$key); ?></td>
									<td><?php echo e($carts->user->name); ?></td>
									<td><?php echo e($carts->product->name); ?></td>
									<td><?php echo e($carts->size); ?></td>
									<td><?php echo e($carts->quantity); ?></td>
                                    <td><?php echo e($carts->total); ?></td>
									<!-- <td class="text-center">
										<a href=""><button class="btn btn-primary mb-2">Edit</button></a>
										<form method="POST" action="">
											<?php echo csrf_field(); ?>
                            				<?php echo e(method_field('DELETE')); ?>

											 <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Want to Delete??')">
										</form>
									</td> -->
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
					</div>
					<?php echo e($cartData->links()); ?>

				</div>
			</div>
		</div>
	</div>
	<!-- /.card-body -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/14-03-2022/abhi 14-03/Thewayshop/resources/views/pages/admin/cart/index.blade.php ENDPATH**/ ?>