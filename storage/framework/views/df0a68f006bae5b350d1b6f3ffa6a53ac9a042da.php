
<?php $__env->startSection('content'); ?>
 <!-- Start All Title Box -->
 <div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Cart</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(url()->previous()); ?>">Back</a></li>
                    <li class="breadcrumb-item active">Cart Details</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Cart  -->
<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Images</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Size</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0 ?>
                            <?php $__currentLoopData = $cartAllData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <tr class="cartArea" id="cartArea<?php echo e($cartData->id); ?>">
                                <input type="hidden" value="<?php echo e($cartData->id); ?>" />
                                <td class="thumbnail-img">
                                    <a href="#">
                                        <img class="img-fluid" src="<?php echo e(asset('uploads/'.$cartData->image)); ?>" alt="" />
                                    </a>
                                </td>
                                <td class="name-pr">
                                    <a href="#">
                                            <?php echo e($cartData->product_name); ?>

                                    </a>
                                </td>
                                <td class="price-pr">
                                    <p><?php echo e($cartData->discount_price); ?>

                                    <input type="hidden" value="<?php echo e($cartData->discount_price); ?>" class="pricee">
                                    </p>
                                </td>
                                <td class="price-pr">
                                    <p><?php echo e($cartData->size); ?></p>
                                </td>
                                <td class="quantity-box">
                                    <input type="number" id="qty<?php echo $i; ?>" onchange="subTotal()" min="1" max="<?php echo e($cartData->available_stock); ?>" step="1" class="c-input-text qty text qty" value="<?php echo e($cartData->quantity); ?>">
                                </td>
                                
                               
                                
                                 <td>
                                     <p class="totalSum"></p>
                                </td>
                                <td>
                                    <a href="checkout.html" style="color:white" class="ml-auto btn hvr-hover">Checkout</a>
                                </td>
                                <td class="remove-pr">
                                    <button style="border:none;">
                                        <a href ="javascript:void(0)" class="btn btn-danger" id="removeCartItem" data-removeid=<?php echo e($cartData->id); ?>>
                                            <span class="fa fa-trash"></span>
                                        </a>
                                    </button>
                                </form> 
                                </td>
                            </tr>
                            <?php $i++;  ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row my-5">
            
            <div class="col-lg-6 col-sm-6">
                <div class="update-box">
                    <input value="Update Cart" type="submit">
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-8 col-sm-12"></div>
            <div class="col-lg-4 col-sm-12">
                <div class="order-box">
                    <h3>Order summary</h3>
                    <div class="d-flex">
                        <h4>Sub Total</h4>
                        <div class="ml-auto font-weight-bold"> $ 130 </div>
                    </div>
                    <div class="d-flex">
                        <h4>Discount</h4>
                        <div class="ml-auto font-weight-bold"> $ 40 </div>
                    </div>
                    <hr class="my-1">
                    <div class="d-flex">
                        <h4>Coupon Discount</h4>
                        <div class="ml-auto font-weight-bold"> $ 10 </div>
                    </div>
                    <div class="d-flex">
                        <h4>Tax</h4>
                        <div class="ml-auto font-weight-bold"> $ 2 </div>
                    </div>
                    <div class="d-flex">
                        <h4>Shipping Cost</h4>
                        <div class="ml-auto font-weight-bold"> Free </div>
                    </div>
                    <hr>
                    <div class="d-flex gr-total">
                        <h5>Grand Total</h5>
                        <div class="ml-auto h5"> $ 388 </div>
                    </div>
                    <hr> </div>
            </div>
            <div class="col-12 d-flex shopping-box"><a href="checkout.html" class="ml-auto btn hvr-hover">Checkout</a> </div>
        </div>

    </div>
</div>
<!-- End Cart -->

<!-- Start Instagram Feed  -->
<div class="instagram-box">
    <div class="main-instagram owl-carousel owl-theme">
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-01.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-02.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-03.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-04.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-05.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-06.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-07.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-08.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-09.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-05.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Instagram Feed  -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>
<script>
   
        var pricee = document.getElementsByClassName('pricee');
        var qty = document.getElementsByClassName('qty');
        var sum = document.getElementsByClassName('sum');
        var totalSum = document.getElementsByClassName('totalSum');
        function subTotal()
        {
            for(var i=0;i<pricee.length;i++)
            {
                var price = (pricee[i].value) * (qty[i].value);
            
                totalSum[i].innerText = price;
            }
            // sum[i].value = pr;
        }
        subTotal();
        $(document).ready(function(){
        $(document).on('click','#removeCartItem',function(){

            var cartId = $(this).data('removeid');
            var token = $("meta[name='csrf-token']").attr("content");
            if(confirm('Are you sure you want to delete'))
            {
            $.ajax({
                url : "cart/" + cartId,
                type : "POST",
                data : {
                    '_method' : 'DELETE',
                    cartId : cartId,
                    '_token' : token,
                },
                success: function(data,status){
                   $('#cartArea'+cartId).remove();
                //    window.location.href = "cart";
                }
            });
        }
        });

    });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\14thfeb_laravel-auth\laravel-auth\resources\views/cart/index.blade.php ENDPATH**/ ?>