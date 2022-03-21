<?php $__env->startSection('content'); ?>
<br>
<div class="container mb-4">
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Category List</h3>
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
									<th>Category Name</th>
									<th>Image</th>
									<th>Parent Category Name</th>
									<th>Create Date</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr role="row">
									<td><?php echo e($categories->firstItem()+$key); ?></td>
									<td><?php echo e($categorie->name); ?></td>
									<td>
										<?php if($categorie->category_id): ?>
											<?php echo e($categorie->parent->name); ?>

										<?php else: ?>
											No Parent Category
										<?php endif; ?>
									</td>
									<td><img src="<?php echo e(asset('uploads/'.$categorie->image)); ?>" height="80" width="80"></td>
									<td><?php echo e($categorie->created_at); ?></td>
									<td class="text-center">
										<a href="<?php echo e(route('category.edit',$categorie->id)); ?>"><button class="btn btn-primary mb-2">Edit</button></a>
										<form method="POST" action="<?php echo e(route('category.destroy',$categorie->id)); ?>">
											<?php echo csrf_field(); ?>
                            				<?php echo e(method_field('DELETE')); ?>

											 <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Want to Delete??')">
										</form>
									</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
					</div>
					<?php echo e($categories->links()); ?>

				</div>
			</div>
		</div>
	</div>
	<!-- /.card-body -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\14thfeb_laravel-auth\laravel-auth\resources\views/pages/admin/category/index.blade.php ENDPATH**/ ?>