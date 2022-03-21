<?php $__env->startSection('content'); ?>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <!-- <div class="card"> -->
                <div class="card-header">Edit Order</div>
                    <div class="card-body">
                        <form id="contact-form" class="form-horizontal" method="POST" action="<?php echo e(route('orders.update',$orders->id)); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>     
                            <?php echo e(@method_field('PUT')); ?>             

                             <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">UserId</label>
                                         <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="user_id" value="<?php echo e($orders->user_id); ?>" readonly autofocus>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">User Name</label>
                                         <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="username" value="<?php echo e($orders->user->name); ?>" readonly autofocus>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label mr-3">Order Status </label>
                                        <input type="radio" class="form-control1" name="status" value="pending" <?php if($orders->order_status == "pending"): ?> checked <?php endif; ?> disabled>
                                        <label class="control-label">pending</label>
                                        <input type="radio" class="form-control1" name="status" value="completed" <?php if($orders->order_status == "completed"): ?> checked <?php endif; ?>>
                                        <label class="control-label">completed</label>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name" class="control-label">Date</label>
                                         <input id="name" type="date" class="form-control<?php echo e($errors->has('date') ? ' is-invalid' : ''); ?>" name="date" value="<?php echo e($orders->date); ?>" autofocus>
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
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\14thfeb_laravel-auth\laravel-auth\resources\views/pages/admin/order/edit.blade.php ENDPATH**/ ?>