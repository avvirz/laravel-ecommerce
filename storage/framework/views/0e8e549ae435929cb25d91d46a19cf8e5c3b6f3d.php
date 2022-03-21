<?php $__env->startSection('content'); ?>
    <br>
    <div class="container mb-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Address List</h3>
            </div>
            <!-- /.card-header -->
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
                                        <th>Sr No</th>
                                        <th>Username</th>
                                        <th>Address</th>
                                        <th>Pincode</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $addressData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr role="row">
                                            <td><?php echo e($addressData->firstItem() + $key); ?></td>
                                            <td><?php echo e($address->user->name); ?></td>
                                            <td><?php echo e($address->address); ?></td>
                                            <td><?php echo e($address->pincode); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <?php echo e($addressData->links()); ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>
    <script>
        $(document).ready(function() {
            $('#example2').DataTable();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/uLaravel/laravel-auth/resources/views/pages/admin/address/index.blade.php ENDPATH**/ ?>