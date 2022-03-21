<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css"
        integrity="sha512-8Vtie9oRR62i7vkmVUISvuwOeipGv8Jd+Sur/ORKDD5JiLgTGeBSkI3ISOhc730VGvA5VVQPwKIKlmi+zMZ71w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" src="<?php echo e(asset('thewayshop/css/userpdfinvoice.css')); ?>">
</head>

<body class="body-bg-color">

    <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
        <div class="card">
            <?php
                use App\Http\Controllers\admin\SettingsController;
                use App\Models\Settings;
                $dynamicData = SettingsController::dynamicContent();
            ?>
            <div class="card-header p-4">
                <div class="float-right">
                    <h3 class="mb-0">Invoice #<?php echo e($orders->id); ?></h3>
                    <?php echo e($ldate = date('Y-m-d H:i:s')); ?>

                </div>
            </div>
            <?php $__currentLoopData = $dynamicData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-sm-6">
                            <h5 class="mb-3">From:</h5>
                            <h3 class="text-dark mb-1">TheWayShop</h3>
                            <div><b>Head Office:</b></div>
                            <div><?php echo e($data->address); ?></div>
                            <div>Email: <?php echo e($data->email); ?></div>
                            <div>Phone: <?php echo e($data->phone); ?></div>
                        </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6 ">
                To:<h3 class="text-dark mb-1"><?php echo e($orders->user->name); ?></h3>
                <div><?php echo e($orders->address->address); ?></div>
                <div><?php echo e($orders->address->pincode); ?></div>
                <div>Email: <?php echo e($orders->user->email); ?></div>
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
                        <td class="right"> Rs.<?php echo e($orders->product->discount_price); ?></td>
                        <td class="center"><?php echo e($orders->quantity); ?></td>
                        <td class="right">Rs. <?php echo e($orders->grand_total); ?></td>
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
                                <strong class="text-dark">Total : </strong>
                            </td>
                            <td class="right">
                                <strong class="text-dark">Rs. <?php echo e($orders->grand_total); ?></strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer bg-white">
        <p class="mb-0">Thank You For Shopping !</p>
    </div>
    </div>
    </div>

</body>


</html>
<?php /**PATH /var/www/html/14-03-2022/abhi 14-03/Thewayshop/resources/views/pdfInvoice.blade.php ENDPATH**/ ?>