<?php $__env->startSection('content'); ?>

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <!-- <div class="card"> -->
                <div class="card-header">Edit Category or Subcategory</div>
                    <div class="card-body">
                        <form id="contact-form" class="form-horizontal" method="POST" action="<?php echo e(route('category.update',$category->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo e(@method_field('PUT')); ?>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Category Name</label>             
                                        <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e($category->name); ?>" required autofocus>
                                       <!--  <?php if($errors->has('name')): ?>
                                            <span class="invalid-feedback">
                                                <strong><?php echo e($errors->first('name')); ?></strong>
                                            </span>
                                        <?php endif; ?> -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="first_name" class="control-label">SubCategory Of</label>
                                        <select class="form-control" name="category_id">
                                        	<option value="" <?php if($category->category_id==null): ?> selected <?php endif; ?>>No SubCategory</option>
                                        	<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        		<option value="<?php echo e($c->id); ?>"<?php if($category->category_id!=null && $category->category_id==$c->id): ?> selected <?php endif; ?>><?php echo e($c->name); ?></option>
                                        	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\14thfeb_laravel-auth\laravel-auth\resources\views/pages/admin/category/edit.blade.php ENDPATH**/ ?>