<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

    <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
        <div class="card">
            <!-- <img src="<?php echo e(asset('dist/img/Fashionvalleylogo.png')); ?>" alt="AdminLTE Logo" 
            style="width:300px; position: absolute;
            top: -20px;"> -->
            <div class="card-header p-4">
                <div class="float-right">
                    <h3 class="mb-0">Invoice #<?php echo e($orders->id); ?></h3>
                    <?php echo e($ldate = date('Y-m-d H:i:s')); ?>

                </div>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h5 class="mb-3">From:</h5>
                        <h3 class="text-dark mb-1">TheWayShop</h3>
                        <div><b>Head Office,</b></div>
                        <div>703 - Venus Atlantis Corporate Park,</div>
                        <div>100 Feet Rd, near Shell Petrol Pump,Prahlad Nagar,</div>
                        <div>Ahmedabad, Gujarat 380015.</div>
                        <div>Email: mailto:customercare@suport.com</div>
                        <div>Phone: 1860-893-3333</div>
                    </div>
                    <div class="col-sm-6 ">
                        To:<h3 class="text-dark mb-1"><?php echo e($orders->user->name); ?></h3>
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
                                <td class="right"><?php echo e($orders->grand_total); ?></td>
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
                                        <strong class="text-dark">Total</strong>
                                    </td>
                                    <td class="right">
                                        <strong class="text-dark"><?php echo e($orders->grand_total); ?></strong>
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
</style> <?php /**PATH E:\laravel-auth\resources\views/pdfInvoice.blade.php ENDPATH**/ ?>