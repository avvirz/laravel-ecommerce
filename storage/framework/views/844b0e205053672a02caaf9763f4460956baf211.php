<?php $__env->startSection('content'); ?>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <!-- <div class="card"> -->
                <div class="card-header">Edit Product</div>
                    <div class="card-body">
                        <form id="contact-form" class="form-horizontal" method="POST" action="<?php echo e(route('product.update',$product->id)); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>                  
                             <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Category Name</label>  
                                        <select class="form-control" name="category_id" required="">
                                            <option value="">Category Name</option>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($c->id); ?>" 
                                                    <?php if($product->category_id == $c->id): ?> 
                                                        selected 
                                                    <?php endif; ?>><?php echo e($c->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Brand Name</label>
                                         <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e($product->name); ?>" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Product Name</label>
                                         <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="product_name" value="<?php echo e($product->product_name); ?>" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Product Price</label>
                                         <input id="name" type="text" class="form-control" name="price" value="<?php echo e($product->price); ?>" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Discount Price</label>
                                         <input id="name" type="text" class="form-control" name="discount_price" value="<?php echo e($product->discount_price); ?>" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Available Stock</label>
                                         <input id="name" type="text" class="form-control" name="available_stock" value="<?php echo e($product->available_stock); ?>" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Sold Items</label>
                                         <input id="name" type="text" class="form-control" name="sold_stock" value="<?php echo e($product->sold_stock); ?>" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Product Image</label>
                                         <input id="name" type="file" class="form-control" name="image" value="<?php echo e(old('image')); ?>" ><br>
                                         <img height="80 px" width="80 px" src="<?php echo e(asset('uploads/'.$product->image)); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Description</label>
                                         <input id="name" type="text" class="form-control" name="description" value="<?php echo e($product->description); ?>" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Long Description</label>
                                        <textarea class="form-control" name="long_description" rows="3" cols="12"><?php echo e($product->long_description); ?></textarea>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label mr-2">Size&nbsp</label>
                                        <input type="checkbox" class="text mr-2" name="size[]" value="XS" 
                                            <?php if(in_array("XS",$values)): ?> 
                                                <?php echo e("checked"); ?>

                                            <?php endif; ?> >
                                        <label class="control-label mr-2">XS</label>
                                        <input type="checkbox" class="text mr-2" name="size[]" value="S"
                                            <?php if(in_array("S",$values)): ?> 
                                                <?php echo e("checked"); ?>

                                            <?php endif; ?> >
                                        <label class="control-label mr-2">S</label>
                                        <input type="checkbox" class="text mr-2" name="size[]" value="M"
                                            <?php if(in_array("M",$values)): ?> 
                                                <?php echo e("checked"); ?>

                                            <?php endif; ?> >
                                        <label class="control-label mr-2">M</label>
                                        <input type="checkbox" class="text mr-2" name="size[]" value="L"
                                            <?php if(in_array("L",$values)): ?> 
                                                <?php echo e("checked"); ?>

                                            <?php endif; ?> >
                                        <label class="control-label mr-2">L</label>
                                        <input type="checkbox" class="text mr-2" name="size[]" value="XL"
                                            <?php if(in_array("XL",$values)): ?> 
                                                <?php echo e("checked"); ?>

                                            <?php endif; ?> >
                                        <label class="control-label mr-2">XL</label>
                                        <input type="checkbox" class="text mr-2" name="size[]" value="2XL"
                                            <?php if(in_array("2XL",$values)): ?> 
                                                <?php echo e("checked"); ?>

                                            <?php endif; ?> >
                                        <label class="control-label mr-2">2XL</label>
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
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\14thfeb_laravel-auth\laravel-auth\resources\views/pages/admin/product/edit.blade.php ENDPATH**/ ?>