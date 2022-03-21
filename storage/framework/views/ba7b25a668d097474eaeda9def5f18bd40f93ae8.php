<?php $__env->startSection('content'); ?>
    <br>

    <div class="container mb-4">
        <?php if($message = Session::get('msg')): ?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong><?php echo e($message); ?></strong>
            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header col-md-12">
                <h3 class="card-title"><i class="fas fa-envelope"></i> User Email </h3>
            </div>
            <div class="card-header col-md-12">
                <form action='home/offers' method="post">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-success">Send Mail</a>
                </form>
            </div>
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
                                        <th style="width: 50px;">Sr. No</th>
                                        <th>Email Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $email; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $emails): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th><?php echo e($email->firstItem() + $key); ?></th>
                                            <td><?php echo e($emails->email); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <?php echo e($email->links()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/14-03-2022/abhi 14-03/Thewayshop/resources/views/pages/admin/email.blade.php ENDPATH**/ ?>