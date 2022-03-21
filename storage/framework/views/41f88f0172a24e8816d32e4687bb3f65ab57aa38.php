<?php $__env->startSection('content'); ?>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- <div class="card"> -->
                <div class="card-header"><?php echo e(__('Register')); ?></div>
                    <div class="card-body">
                        <form id="contact-form" class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="control-label"><?php echo e(__('Username')); ?></label>             
                                        <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                                        <?php if($errors->has('name')): ?>
                                            <span class="invalid-feedback">
                                                <strong><?php echo e($errors->first('name')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="first_name" class="control-label"><?php echo e(__('First Name')); ?></label>
                                        <input id="first_name" type="text" class="form-control<?php echo e($errors->has('first_name') ? ' is-invalid' : ''); ?>" name="first_name" value="<?php echo e(old('first_name')); ?>" required autofocus>
                                        <?php if($errors->has('first_name')): ?>
                                            <span class="invalid-feedback">
                                                <strong><?php echo e($errors->first('first_name')); ?></strong>
                                            </span>
                                        <?php endif; ?>   
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="last_name" class="control-label"><?php echo e(__('Last Name')); ?></label>
                                        <input id="last_name" type="text" class="form-control<?php echo e($errors->has('last_name') ? ' is-invalid' : ''); ?>" name="last_name" value="<?php echo e(old('last_name')); ?>" required autofocus>
                                        <?php if($errors->has('last_name')): ?>
                                            <span class="invalid-feedback">
                                                <strong><?php echo e($errors->first('last_name')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email" class="control-label"><?php echo e(__('E-Mail Address')); ?></label>
                                        <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>
                                        <?php if($errors->has('email')): ?>
                                            <span class="invalid-feedback">
                                                <strong><?php echo e($errors->first('email')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password" class="control-label"><?php echo e(__('Password')); ?></label>
                                        <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
                                        <?php if($errors->has('password')): ?>
                                            <span class="invalid-feedback">
                                                <strong><?php echo e($errors->first('password')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password-confirm" class="control-label"><?php echo e(__('Confirm Password')); ?></label><input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>                                    
                                    </div>
                                </div>
                            </div>

                            <!--  -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="submit-button text-center">
                                            <button type="submit" id="submit" class="btn hvr-hover">
                                                <?php echo e(__('Register')); ?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <!-- -->
                        </form>
                    </div>
                </div>
            <!-- </div> -->
        </div>
    </div>
</div>
<br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/uLaravel/laravel-auth/resources/views/auth/register.blade.php ENDPATH**/ ?>