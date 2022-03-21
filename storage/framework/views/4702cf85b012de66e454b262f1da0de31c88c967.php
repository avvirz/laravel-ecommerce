<?php $__env->startSection('content'); ?>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card-header">Settings</div>
                <div class="card-body">

                    <form id="contact-form" class="form-horizontal" method="POST"
                        action="<?php echo e(route('settings.update', $settings->id)); ?>" enctype=" multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('PATCH')); ?>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name" class="control-label">Logo</label><br>
                                    <img src="<?php echo e(asset('imagesuser/' . $settings->logo)); ?>" height="100" width="200">
                                    <input id="name" type="file" class="form-control mt-3" name="logo"
                                        value="<?php echo e(old('logo')); ?>" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="first_name" class="control-label">Address</label>
                                    <input type="text" class="form-control" name="address"
                                        value="<?php echo e($settings->address); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="first_name" class="control-label">Phone No</label>
                                    <input type="text" class="form-control" name="phone" value="<?php echo e($settings->phone); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="first_name" class="control-label">Email</label>
                                    <input type="text" class="form-control" name="email" value="<?php echo e($settings->email); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="first_name" class="control-label">About Site</label>
                                    <textarea class="form-control"
                                        name="about_site"><?php echo e($settings->about_site); ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="first_name" class="control-label">Facebook Link</label>
                                    <input type="text" class="form-control" name="fb_link"
                                        value="<?php echo e($settings->fb_link); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="submit-button text-center">
                                        <button type="submit" id="submit"
                                            class="btn btn-primary"><?php echo trans('category.update'); ?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/uLaravel/laravel-auth/resources/views/pages/admin/settings/index.blade.php ENDPATH**/ ?>