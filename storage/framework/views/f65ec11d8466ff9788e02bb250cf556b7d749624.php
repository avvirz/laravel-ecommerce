<?php $__env->startSection('content'); ?>
<style>
    .errors{
        color: red;
    }
</style>
<br>

<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php if(session('success')): ?>
<strong>Success!</strong>
<?php echo e(session('success')); ?>

<?php endif; ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <!-- <div class="card"> -->
              
                <div class="card-header"><?php echo trans('category.add-category'); ?></div>
                    <div class="card-body">
                        <form id="contact-form" class="form-horizontal" method="POST" action="<?php echo e(route('category.store')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="control-label"><?php echo trans('category.category-name'); ?></label>             
                                        <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>"  autofocus>
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="errors"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                         
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="first_name" class="control-label"><?php echo trans('category.subcategory'); ?></label>
                                        <select class="form-control" name="category_id">
                                        	<option value=""><?php echo trans('category.nosubcategory'); ?></option>
                                        	<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        		<option value="<?php echo e($categorie->id); ?>"><?php echo e($categorie->name); ?></option>
                                        	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="file" class="control-label"><?php echo trans('category.images'); ?></label>
                                        <input id="name" type="file" class="form-control<?php echo e($errors->has('image') ? ' is-invalid' : ''); ?>" name="image"   autofocus>
                                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="errors"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="submit-button text-center">
                                            <button type="submit" id="submit" class="btn btn-primary"><?php echo trans('category.add'); ?></button>
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
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\14thfeb_laravel-auth\laravel-auth\resources\views/pages/admin/category/add.blade.php ENDPATH**/ ?>