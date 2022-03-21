<?php $__env->startSection('content'); ?>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <!-- <div class="card"> -->
                <div class="card-header">Add Product</div>
                    <div class="card-body">
                        <form id="contact-form" class="form-horizontal" method="POST" action="<?php echo e(route('product.store')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Category Name</label>  
                                        <select class="form-control" name="category_id" required="">
                                        	<option value="">Category Name</option>
                                        	<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                
                                        		<option value="<?php echo e($c->id); ?>"><?php echo e($c->name); ?></option>
                                                
                                        	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Brand Name</label>
                                         <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Product Name</label>
                                         <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="product_name" value="<?php echo e(old('product_name')); ?>" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Product Price</label>
                                         <input id="name" type="text" class="form-control" name="price" value="<?php echo e(old('name')); ?>" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Discount Price</label>
                                         <input id="name" type="text" class="form-control" name="discount_price" value="<?php echo e(old('discount_price')); ?>" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Available Stock</label>
                                         <input id="name" type="text" class="form-control" name="available_stock" value="<?php echo e(old('available_stock')); ?>" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Sold Items</label>
                                         <input id="name" type="text" class="form-control" name="sold_stock" value="<?php echo e(old('sold_stock')); ?>" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Product Image</label>
                                         <input id="name" type="file" class="form-control" name="image" value="<?php echo e(old('image')); ?>" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Description</label>
                                         <input id="name" type="text" class="form-control" name="description" value="<?php echo e(old('description')); ?>" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Long Description</label>
                                        <textarea class="form-control" name="long_description"  rows="3" cols="12"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label mr-2">Size&nbsp</label>
                                        <input type="checkbox" class="text mr-2" name="size[]" value="XS">
                                        <label class="control-label mr-2">XS</label>
                                        <input type="checkbox" class="text mr-2" name="size[]" value="S">
                                        <label class="control-label mr-2">S</label>
                                        <input type="checkbox" class="text mr-2" name="size[]" value="M">
                                        <label class="control-label mr-2">M</label>
                                        <input type="checkbox" class="text mr-2" name="size[]" value="L">
                                        <label class="control-label mr-2">L</label>
                                        <input type="checkbox" class="text mr-2" name="size[]" value="XL">
                                        <label class="control-label mr-2">XL</label>
                                        <input type="checkbox" class="text mr-2" name="size[]" value="2XL">
                                        <label class="control-label mr-2">2XL</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="submit-button text-center">
                                            <button type="submit" id="submit" class="btn btn-primary">Add</button>
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
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\14thfeb_laravel-auth\laravel-auth\resources\views/pages/admin/product/add.blade.php ENDPATH**/ ?>