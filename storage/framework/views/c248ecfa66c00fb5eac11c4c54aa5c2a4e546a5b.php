
<?php $__env->startSection('content'); ?>
    <div class="cart-box-main">
        <div class="container">
            <div class="row new-account-login">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3><?php echo e(isset($address) ? 'EDIT Address' : 'Address'); ?></h3>
                    </div>
                    <h5><a data-toggle="collapse" href="#formAddress" role="button" aria-expanded="false">Click here For
                            Billing Address</a></h5>
                    <form class="needs-validation" id="formAddress" novalidate>
                        <div class="row">
                        </div>
                        <?php if(isset($address)): ?>
                            <input type="hidden" name="addressId" id="addressId" value="<?php echo e($address->id); ?>">
                        <?php endif; ?>
                        <div class="mb-3">
                            <label for="address">Address *</label>
                            <textarea type="textarea" class="form-control" name="address" id="address" placeholder=""
                                max="50" required><?php echo e(isset($address) ? $address->address : ''); ?></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="pincode">Pincode *</label>
                                <input type="text" class="form-control"
                                    value="<?php echo e(isset($address) ? $address->pincode : ''); ?>" name="pincode" id="pincode"
                                    placeholder="" pattern="[0-9]" required>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                            <?php if(isset($address)): ?>
                                <input type="checkbox" class="custom-control-input" id="update-info" name="updateAddress">
                                <label class="custom-control-label" for="update-info">Save Address information</label>
                                <div class="AddressBoxErr" style="color:red;"></div>
                            <?php else: ?>
                                <input type="checkbox" class="custom-control-input" id="save-info" name="saveAddress">
                                <label class="custom-control-label" for="save-info">Save Address information</label>
                                <div class="AddressBoxErr" style="color:red;"></div>
                            <?php endif; ?>
                        </div>
                        <hr class="mb-4">
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Payment</h3>
                        </div>
                        <div class="title"> <span>Payment</span> </div>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="codPayment" name="paymentMethod" type="radio" value="cod"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="codPayment">COD(Cash On Delivery)</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="stripePayment" name="paymentMethod" type="radio" value="stripe" class="custom-control-input">
                                <label class="custom-control-label" for="stripePayment">Stripe Payment(Debit Card,Credit
                                    Card)</label>
                            </div>
                          
                            <div class="paymentBoxErr" style="color:red;"></div>
                        </div>
                        <hr class="mb-1">
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">

                
                <div class="col-md-6 col-lg-6">
                    <div class="odr-box">
                        <div class="title-left">
                            <h3>Shopping cart</h3>
                        </div>
                        <div class="rounded p-2 bg-light">
                            <div class="media mb-2 border-bottom">
                                <div class="media-body"> <a href="detail.html">
                                        <?php echo e($cartData->product->product_name); ?>

                                    </a>
                                    <div class="small text-muted">Price: <?php echo e($cartData->product->discount_price); ?>

                                        <span class="mx-2">|</span> Qty: <?php echo e($cartData->quantity); ?> <span
                                            class="mx-2">|</span> Subtotal: <?php echo e($cartData->total); ?>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="order-box">
                        <div class="title-left">
                            <h3>Your order</h3>
                        </div>
                        <div class="d-flex">
                            <div class="font-weight-bold">Product</div>
                            <div class="ml-auto font-weight-bold">Total</div>
                        </div>
                        <hr class="my-1">
                        <div class="d-flex">
                            <h4>Sub Total</h4>
                            <input type="hidden" id="grandTotal" name="grandTotal" value="<?php echo e($cartData->total); ?>">
                            <div class="ml-auto font-weight-bold"> ₹ <?php echo e($cartData->total); ?> </div>
                        </div>
                        <hr class="my-1">

                        
                        <div class="d-flex">
                            <h4>Shipping Cost</h4>
                            <div class="ml-auto font-weight-bold"> Free </div>
                        </div>
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Grand Total</h5>
                            <div class="ml-auto h5"> ₹ <?php echo e($cartData->total); ?> </div>
                        </div>
                        <hr>
                    </div>
                    
                    <input type="hidden" name="productId" id="productId" value="<?php echo e($cartData->product_id); ?>">
                    <div class="col-12 d-flex shopping-box">
                        <button class="ml-auto btn hvr-hover" style="color:white;" id="placeOrderBtn">Place Order</button>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>
    <script>
        $('#placeOrderBtn').on('click', function() {
            validateaddress();
            validatepaymentMethod();
            if ($("input[name = 'paymentMethod']").is(':checked') && ($("input[name = 'updateAddress']").is(
                    ':checked')) || ($("input[name = 'saveAddress']").is(':checked'))) {
                var productId = $('#productId').val();
                var payment = $('input[name="paymentMethod"]:checked').val();
                var grandTotal = $('#grandTotal').val();
                var token = $("meta[name='csrf-token']").attr("content");
                $.ajax({
                    url: '/home/orders',
                    type: 'POST',
                    data: {
                        '_token': token,
                        productId: productId,
                        payment: payment,
                        grandTotal: grandTotal
                    },
                    success: function(data, status) {
                        window.location.href = '/OrderDetails';
                    },
                    error: function(message) {}
                });
            } else {
                alert('Please Select Mandotary Information for your Order');
            }
        });
        //onchange address checkbox
        $(document).on('change', '#update-info', function() {
            if (!$('input[name="updateAddress"]').is(':checked')) {
                $('.AddressBoxErr').text('*Please Select the Checkbox');
            } else {
                $('.AddressBoxErr').text('');
            }
        });
        //onchange address checkbox
        $(document).on('change', '#save-info', function() {
            if (!$('input[name="saveAddress"]').is(':checked')) {
                $('.AddressBoxErr').text('*Please Select the Checkbox');
            } else {
                $('.AddressBoxErr').text('');
            }
        });
        //onchange Payment checkbox
        $(document).on('change', 'input[name="paymentMethod"]', function() {
            if (!$('input[name="paymentMethod"]').is(':checked')) {
                $('.paymentBoxErr').text('*Please Select the Payment Option');
            } else {
                $('.paymentBoxErr').text('');
            }
        });
        //validate address checkbox
        function validateaddress() {
            if (!$('input[name="updateAddress"]').is(':checked')) {
                $('.AddressBoxErr').text('*Please Select the Checkbox');
            } else {
                $('.AddressBoxErr').text('');
            }
        }
        //validate payement radio button
        function validatepaymentMethod() {
            if (!$('input[name="paymentMethod"]').is(':checked')) {
                $('.paymentBoxErr').text('*Please Select the Payment Option');
            } else {
                $('.paymentBoxErr').text('');
            }
        }
        $(document).ready(function() {
            //Update Info 
            $('input[name="updateAddress"]').click(function() {
                var address = $('#address').val();
                var pincode = $('#pincode').val();
                var addressId = $('#addressId').val();

                $("#address, #pincode").each(function() {
                    var data = $(this).val();
                    if ($(this).val() == '') {
                        $(this).after(
                            "<li class='sw-field__error' style='color: red;'>This field must not be empty.</li>"
                        );
                    }
                });
                var token = $("meta[name='csrf-token']").attr("content");
                if ($(this).prop("checked") == true) {
                    $.ajax({
                        url: '/admin/address/' + addressId,
                        type: 'POST',
                        data: {
                            '_method': 'PUT',
                            '_token': token,
                            address: address,
                            pincode: pincode
                        },
                        success: function(data, status) {},
                        error: function(message) {}
                    });
                }
                // $(this).prop('checked')
            });
            //Save info 
            $('input[name="saveAddress"]').click(function() {
                var address = $('#address').val();
                var pincode = $('#pincode').val();
                $("#address, #pincode").each(function() {
                    var data = $(this).val();
                    if ($(this).val() == '') {
                        $(this).after(
                            "<li class='sw-field__error' style='color: red;'>This field must not be empty.</li>"
                        );
                    }
                });

                var token = $("meta[name='csrf-token']").attr("content");
                if ($(this).prop("checked") == true) {
                    $.ajax({
                        url: '/admin/address',
                        type: 'POST',
                        data: {
                            '_token': token,
                            address: address,
                            pincode: pincode
                        },
                        success: function(data, status) {},
                        error: function(message) {}
                    });
                }
            });
            //remove emailerror on keyup on update
            $(document).on('keyup', '#address', function() {
                $("#save-info").prop("checked", false);
                var emailError = $(this).siblings('.sw-field__error').text();
                if (emailError) {
                    $(this).siblings('.sw-field__error').text('');
                    $(this).siblings('.sw-field__error').remove();
                    $("#save-info").prop("checked", false);
                }
            });
            //remove nameerror on keyup on update
            $(document).on('keyup', '#pincode', function() {
                $("#save-info").prop("checked", false);
                var nameError = $(this).siblings('.sw-field__error').text();
                if (nameError) {
                    $(this).siblings('.sw-field__error').text('');
                    $(this).siblings('.sw-field__error').remove();
                    $("#save-info").prop("checked", false);
                }
            });

            //remove emailerror on keyup on update
            $(document).on('keyup', '#address', function() {
                $("#update-info").prop("checked", false);
                var emailError = $(this).siblings('.sw-field__error').text();
                if (emailError) {
                    $(this).siblings('.sw-field__error').text('');
                    $(this).siblings('.sw-field__error').remove();
                    $("#update-info").prop("checked", false);
                }
            });

            //remove nameerror on keyup on update
            $(document).on('keyup', '#pincode', function() {
                $("#update-info").prop("checked", false);
                var nameError = $(this).siblings('.sw-field__error').text();
                if (nameError) {
                    $(this).siblings('.sw-field__error').text('');
                    $(this).siblings('.sw-field__error').remove();
                    $("#save-info").prop("checked", false);
                }
            });

          
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel-auth\resources\views/checkout.blade.php ENDPATH**/ ?>