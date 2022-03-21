<?php $__env->startSection('content'); ?>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <!-- <div class="card"> -->
                <div class="card-header"><?php echo trans('category.editcategory'); ?></div>
                <div class="card-body">
                    <form id="contact-form" class="form-horizontal" method="POST"
                        action="<?php echo e(route('category.update', $category->id)); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('PUT')); ?>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name" class="control-label"><?php echo trans('category.category-name'); ?></label>
                                    <input id="name" type="text"
                                        class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name"
                                        value="<?php echo e($category->name); ?>" required autofocus>
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
                                    <label for="first_name" class="control-label"><?php echo trans('category.subcategory'); ?></label>
                                    <select class="form-control" name="category_id">
                                        <option value="" <?php if($category->category_id == null): ?> selected <?php endif; ?>>
                                            <?php echo trans('category.nosubcategory'); ?></option>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($categorie->id); ?>"
                                                <?php if($category->category_id != null && $category->category_id == $categorie->id): ?> selected <?php endif; ?>><?php echo e($categorie->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="file" class="control-label"><?php echo trans('category.images'); ?></label>
                                    <input id="name" type="file" class="form-control" name="image" multiple required
                                        autofocus><br>
                                    <img src="<?php echo e(asset('uploads/' . $category->image)); ?>" height="100" width="100">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="submit-button text-center">
                                        <button type="submit" id="submit"
                                            class="btn btn-primary float-left"><?php echo trans('category.update'); ?></button>
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

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/uLaravel/laravel-auth/resources/views/pages/admin/category/edit.blade.php ENDPATH**/ ?>