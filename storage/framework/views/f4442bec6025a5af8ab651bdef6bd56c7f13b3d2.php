<?php $__env->startSection('content'); ?>
    <div class="container mt-4 mb-4">
        <div class="card ">
            <div class="card-header ">
                <h3 class="card-title ">Product List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6"></div>
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid"
                                aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <th>Category Name</th>
                                        <th>Brand Name</th>
                                        <th>Product Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr role="row">
                                            <td>
                                                <?php if($product->category_id): ?>
                                                    <?php echo e($product->category->name); ?>

                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo e($product->name); ?></td>
                                            <td><?php echo e($product->product_name); ?></td>
                                            <td class=" px-4 text-center">
                                                <form method="POST" action="<?php echo e(route('product.destroy', $product->id)); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo e(method_field('DELETE')); ?>

                                                    <button class="btn btn-danger float-left" type="submit"
                                                        class="btn btn-danger"
                                                        onclick="return confirm('Want to Delete??')"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                                <button class="btn btn-success float-left text-center "><a
                                                        class="colorBtnWhite"
                                                        href="<?php echo e(route('product.show', $product->id)); ?>"><i
                                                            class="fa fa-eye"></i></a></button>
                                                <button class="btn btn-primary float-left text-center"><a
                                                        class="colorBtnWhite"
                                                        href="<?php echo e(route('product.edit', $product->id)); ?>"><i
                                                            class="fa fa-pen"></i> </a></button>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
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

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/14-03-2022/abhi 14-03/Thewayshop/resources/views/pages/admin/product/index.blade.php ENDPATH**/ ?>