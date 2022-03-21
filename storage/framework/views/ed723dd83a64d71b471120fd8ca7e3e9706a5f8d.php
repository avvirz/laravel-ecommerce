<?php $__env->startSection('content'); ?>
    <br>

    <!-- /.card-body -->
    <div class="container mb-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-pen"></i> Blogs</h3>
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
                                        <th>Sr.No</th>
                                        <th>Name</th>
                                        
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $blogList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr role="row">
                                            <td><?php echo e($blogList->firstItem()+$key); ?></td>
                                            <td><?php echo e($blog->name); ?></td>
                                            
                                            <td>
                                                <div>

                                                    <a class="btn btn-primary float-left mx-3 d-inline"
                                                        href="<?php echo e(route('blogs.edit', $blog->id)); ?>"><i
                                                            class="fas fa-pen"></i>
                                                    </a>
                                                </div>

                                                <form method="POST" action="<?php echo e(route('blogs.destroy', $blog->id)); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo e(method_field('DELETE')); ?>

                                                    <button type="submit" value="Delete" class="btn btn-danger "
                                                        onclick="return confirm('Want to Delete??')"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <?php echo e($blogList->links()); ?>

                    </div>
                </div>
                
            </div>

        </div>
    </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
    <script>
        $(document).ready(function() {
            $('#example2').DataTable();
        });
    </script>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel-auth\resources\views/pages/admin/blogs/index.blade.php ENDPATH**/ ?>