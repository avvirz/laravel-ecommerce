<!-- <div class="container">
    <div class="row">
        <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 mt-4">
            <div class="card">
                <div class="container">
                    <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
</div>
                <dl class="user-info">
                    
                    <dl class="user-info px-4">
                        <dt>
                            User Name
                        </dt>
                        <dd>
                            <?php echo e($orders->user->name); ?>

                        </dd>
                        <dt>
                            Product Name
                        </dt>
                        <dd>
                            <?php echo e($orders->product->product_name); ?>

                        </dd>
                        <dt>
                            Brand Name
                        </dt>
                        <dd>
                            <?php echo e($orders->product->name); ?>

                        </dd>
                        <dt>
                            Address
                        </dt>
                        <dd>
                            <?php echo e($orders->address->address); ?>

                        </dd>
                        <dt>
                            Pincode
                        </dt>
                        <dd>
                            <?php echo e($orders->address->pincode); ?>

                        </dd>
                        <dt>
                            Payment Mode
                        </dt>
                        <dd>
                            <?php echo e($orders->payment_mode); ?>

                        </dd>
                        <dt>
                           Order Date
                        </dt>
                        <dd>
                           <?php echo e($orders->date); ?>

                        </dd>
                        <dt>
                            Order Status
                        </dt>
                        <dd>
                            <?php echo e($orders->order_status); ?>

                        </dd>
                    </dl>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
</div> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice-<?php echo e($orders->user->name); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

    <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
        <div class="card">
            
            <div class="card-header p-4">
                <div class="float-right">
                    <h3 class="mb-0">Invoice #121212</h3>
                    <?php echo e($ldate = date('Y-m-d H:i:s')); ?>

                </div>
                <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h5 class="mb-3">From:</h5>
                        <h3 class="text-dark mb-1">The Way Shop</h3>
                        <div><b>Head Office,</b></div>
                        <div>703 - Venus Atlantis Corporate Park,</div>
                        <div>100 Feet Rd, near Shell Petrol Pump,Prahlad Nagar,</div>
                        <div>Ahmedabad, Gujarat 380015.</div>
                        <div>Email: customercare@suport.com</div>
                        <div>Phone: 1860-893-3333</div>
                    </div>
                    <div class="col-sm-6 ">
                        <h5 class="mb-3">To:</h5>
                        <h3 class="text-dark mb-1"><?php echo e($orders->user->name); ?></h3>
                        <div><?php echo e($orders->address->address); ?></div>
                        <div><?php echo e($orders->address->pincode); ?></div>
                        <div>Email: <?php echo e($orders->user->email); ?></div>
                        <div>Phone: +91 9895 398 009</div>
                    </div>
                </div>
                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Brand Name</th>
                                <th>Product Name</th>
                                <th class="right">Price</th>
                                <th class="center">Qty</th>
                                <th class="right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="center">1</td>
                                <td class="left strong"><?php echo e($orders->product->name); ?></td>
                                <td class="left"><?php echo e($orders->product->product_name); ?></td>
                                <td class="right"><?php echo e($orders->product->price); ?></td>
                                <td class="center">10</td>
                                <td class="right">1212</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-5">
                    </div>
                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">Subtotal</strong>
                                    </td>
                                    <td class="right">$28,809,00</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">Discount (20%)</strong>
                                    </td>
                                    <td class="right">$5,761,00</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">VAT (10%)</strong>
                                    </td>
                                    <td class="right">$2,304,00</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">Total</strong>
                                    </td>
                                    <td class="right">
                                        <strong class="text-dark">$20,744,00</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="card-footer bg-white">
                <p class="mb-0">Thank You For Shopping !</p>
            </div>
        </div>
    </div>

</body>

</html>
<style>
    body {
        background-color: white;
    }

    .padding {
        padding: 2rem !important
    }

    .card {
        margin-bottom: 30px;
        border: none;
        -webkit-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
        -moz-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
        box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22)
    }

    .card-header {
        background-color: #fff;
        border-bottom: 1px solid #e6e6f2
    }

    h3 {
        font-size: 20px
    }

    h5 {
        font-size: 15px;
        line-height: 26px;
        color: #3d405c;
        margin: 0px 0px 15px 0px;
        font-family: 'Circular Std Medium'
    }

    .text-dark {
        color: #3d405c !important
    }

</style> --}}
<?php /**PATH /var/www/html/uLaravel/laravel-auth/resources/views/pages/admin/order/invoice.blade.php ENDPATH**/ ?>