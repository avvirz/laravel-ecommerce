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
                url: '/home/address/' + addressId,
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
                url: '/home/address',
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
//Place Order Button
$('#placeOrderBtn').on('click', function() {
    validateaddress();
    validatepaymentMethod();
    if ($("input[name = 'paymentMethod']").is(':checked') && ($("input[name = 'updateAddress']").is(
            ':checked')) || ($("input[name = 'saveAddress']").is(':checked'))) {
        var productId = $('#productId').val();
        var payment = $('input[name="paymentMethod"]:checked').val();
        var quantity = $('#quantity').val();
        var grandTotal = $('#grandTotal').val();
        var token = $("meta[name='csrf-token']").attr("content");

        console.log(quantity);

        if (payment == 'stripe') {
            $('#formAddress').submit();
        } else {
            $.ajax({
                url: '/home/orders',
                type: 'POST',
                data: {
                    '_token': token,
                    productId: productId,
                    payment: payment,
                    quantity: quantity,
                    grandTotal: grandTotal
                },
                success: function(data, status) {
                    window.location.href = '/OrderDetails';
                },
                error: function(message) {}
            });
        }
    } else {
        alert('Please Select mandatory Information for your Order');
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
$(document).on('click', '#addToWishlist', function(event) {
    $('.loaderimg').show();
    event.preventDefault();
    var wishlistId = $(this).data('wishlistid');
    var size = $('#basic').val();
    var quantity = $('#quantity').val();
    var token = $("meta[name='csrf-token']").attr("content");
    console.log(size);
    console.log(quantity);
    $.ajax({
        url: "/wishlist",
        type: "POST",
        data: {
            wishlistId: wishlistId,
            size: size,
            quantity: quantity,
            '_token': token,
        },
        success: function(data, status) {

        }
    });
});
