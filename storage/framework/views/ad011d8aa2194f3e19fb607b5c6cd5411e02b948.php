<?php $__env->startSection('content'); ?>
<br>
<div class="container mb-4">
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
								<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr role="row">
									<td><?php echo e($products->firstItem()+$key); ?></td>
									<td>
										<?php if($product->category_id): ?>
											<?php echo e($product->category->name); ?>

										<?php endif; ?>
									</td>
									<td><?php echo e($product->name); ?></td>
									<td><?php echo e($product->product_name); ?></td>
									<td><?php echo e($product->price); ?></td>
									<td><?php echo e($product->discount_price); ?></td>
									<td><?php echo e($product->available_stock); ?></td>
									<td><?php echo e($product->sold_stock); ?></td>
									<td class="text-center">
										<?php $__currentLoopData = explode(',',$product->image); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $picture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<img class="mt-2" height="50px" width="50px" src="<?php echo e(asset('uploads/'.$picture)); ?>"> 
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</td> 	
									<td><?php echo e($product->description); ?></td>
									<td><?php echo e($product->long_description); ?></td>
									<td>
										<?php $__currentLoopData = $variants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$variant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<?php if($product->id == $variant->product_id): ?>
												<?php echo e($variant->size); ?>

											<?php endif; ?>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

										</td>
									<td class="text-center">
										<a href="<?php echo e(route('product.edit',$product->id,$product->category_id)); ?>"><button class="btn btn-primary mb-2">Edit</button></a>
										<form method="POST" action="<?php echo e(route('product.destroy',$product->id)); ?>">
											<?php echo csrf_field(); ?>
											<?php echo e(@method_field('DELETE')); ?>

											 <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Want to Delete??')">
										</form>
									</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
					</div>
					<?php echo e($products->links()); ?>

				</div>
			</div>
		</div>
	</div>
	<!-- /.card-body -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\14thfeb_laravel-auth\laravel-auth\resources\views/pages/admin/product/index.blade.php ENDPATH**/ ?>