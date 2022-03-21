<?php $__env->startSection('content'); ?>
<div class="container mt-4 mb-4">
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Product List</h3>
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
						<table id="example2" class="table table-responsive table-bordered table-hover dataTable dtr-inline" role="grid"
							aria-describedby="example2_info">
							<thead>
								<tr role="row">
									<th>Sr No</th>
									<th>Category Name</th>
									<th>Brand Name</th>
									<th>Product Name</th>
									<th>Product Price</th>
									<th>Discount Price</th>
									<th>Available Stock</th>
									<th>Sold Items</th>
									<th>Product Image</th>
									<th>Description</th>
									<th>Long Description</th>
									<th>Size</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr role="row">
									<td><?php echo e($key+1); ?></td>
									<td>
										<?php if($p->category_id): ?>
											<?php echo e($p->category->name); ?>

										<?php endif; ?>
									</td>
									<td><?php echo e($p->name); ?></td>
									<td><?php echo e($p->product_name); ?></td>
									<td><?php echo e($p->price); ?></td>
									<td><?php echo e($p->discount_price); ?></td>
									<td><?php echo e($p->available_stock); ?></td>
									<td><?php echo e($p->sold_stock); ?></td>
									<td><img height="80 px" width="80 px" src="<?php echo e(asset('uploads/'.$p->image)); ?>"></td>
									<td><?php echo e($p->description); ?></td>
									<td><?php echo e($p->long_description); ?></td>
									<td>
										<?php $__currentLoopData = $variants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<?php if($p->id == $v->product_id): ?>
												<?php echo e($v->size); ?>

											<?php endif; ?>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

										</td>
									<td class="text-center">
										<a href="<?php echo e(route('product.edit',$p->id,$p->category_id,)); ?>"><button class="btn btn-primary mb-2">Edit</button></a>
										<form method="POST" action="<?php echo e(route('product.delete',$p->id)); ?>">
											<?php echo csrf_field(); ?>
											<?php echo method_field('DELETE'); ?>
											 <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Want to Delete??')">
										</form>
									</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.card-body -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\14thfeb_laravel-auth\laravel-auth\resources\views/pages/admin/product/index.blade.php ENDPATH**/ ?>