<?php $__env->startSection('content'); ?>
    <br>
    <div class="container mb-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-pen"></i> Blogs</h3>
            </div>
        </div>
        <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">


                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-11">
                            <!-- <div class="card"> -->


                            <div class="card-body">
                                <form id="contact-form" class="form-horizontal" method="POST"
                                    action="<?php echo e(route('blogs.store')); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name" class="control-label">Name</label>
                                                <input id="name" type="text" class="form-control" name="name" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input id="slug" type="hidden" class="form-control" name="slug">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name" class="control-label">Description</label>
                                                <textarea name="title"></textarea>
                                                <script>
                                                    CKEDITOR.replace('title');
                                                </script>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>

                                    </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>



    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/uLaravel/Thewayshop/resources/views/pages/admin/blogs/create.blade.php ENDPATH**/ ?>