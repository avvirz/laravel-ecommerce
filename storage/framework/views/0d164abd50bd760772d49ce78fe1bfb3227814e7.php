<?php $__env->startSection('content'); ?>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- <div class="card"> -->
                <div class="card-header"><?php echo e(__('Login')); ?></div>
                <div class="card-body">
                    <form id="contact-form" class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email" class="control-label"><?php echo e(__('E-Mail Address')); ?></label>         
                                    <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

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
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="form-control1" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> <?php echo e(__('Remember Me')); ?>

                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="submit-button text-center">
                                        <button type="submit" class="btn hvr-hover">
                                            <?php echo e(__('Login')); ?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group text-center">
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('auth.forgot')); ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            <!-- </div> -->
        </div>
    </div>
</div>
<br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel-auth\resources\views/auth/login.blade.php ENDPATH**/ ?>