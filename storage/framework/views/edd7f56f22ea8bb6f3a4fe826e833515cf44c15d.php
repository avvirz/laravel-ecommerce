<?php $__env->startSection('title'); ?>
    Welcome <?php echo e(Auth::user()->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <br>
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3 id="category" value="<?php echo e($categorys); ?>"><?php echo e($categorys); ?></h3>
                            <p>Total category</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="<?php echo e(route('category.index')); ?>" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3 id="product" value="<?php echo e($products); ?>"><?php echo e($products); ?></h3>
                            <p>Total Product</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="<?php echo e(route('product.index')); ?>" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3 id="user" value="<?php echo e($users); ?>"><?php echo e($users); ?></h3>

                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="<?php echo e(url('/users')); ?>" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3 id="order" value="<?php echo e($order); ?>"><?php echo e($order); ?></h3>

                            <p>Pending Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="<?php echo e(route('orders.index')); ?>" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div><!-- /.container-fluid -->
        
        <div class="card col-md-11 ml-5">
            <div id="chart-div"></div>
            
            <?= $lava->render('PieChart', 'products', 'chart-div') ?>
        </div>
        
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <canvas id="myChart" height="400" width="400"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="myChart1" height="400" width="400"></canvas>
            </div>
        </div>
    </div>
    <br>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>
    <script>
        $(document).ready(function() {
            // var a = $('#category').val();
            // console.log(a);
            var category = $("#category").attr('value');
            var product = $("#product").attr('value');
            var user = $("#user").attr('value');
            var order = $("#order").attr('value');

            var chart = document.getElementById("myChart");
            var myChart = new Chart(chart, {
                type: "pie",
                data: {
                    labels: ["category", "product", "alluser", "pending orders"],
                    datasets: [{

                        data: [category, product, user, order],
                        backgroundColor: ["#078694", "#a10808", "#e8aa0c", "#0f7a0a"],
                    }, ],
                },
                options: {
                    responsive: false,
                },
            });
        });

        $(document).ready(function() {
            // var a = $('#category').val();
            // console.log(a);
            var category = $("#category").attr('value');
            var product = $("#product").attr('value');
            var user = $("#user").attr('value');
            var order = $("#order").attr('value');

            var chart = document.getElementById("myChart1");
            var myChart = new Chart(chart, {
                type: "bar",
                title: "Chart",
                data: {
                    labels: ["category", "product", "user", "pending order"],
                    datasets: [{
                        data: [category, product, user, order],
                        backgroundColor: ["#078694", "#a10808", "#e8aa0c", "#0f7a0a"],
                    }, ],
                },
                options: {
                    responsive: false,
                },
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/uLaravel/laravel-auth/resources/views/pages/admin/home.blade.php ENDPATH**/ ?>