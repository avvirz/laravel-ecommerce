<!-- Start Footer  -->
<footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-widget">
                        <?php
                            use App\Http\Controllers\admin\SettingsController;
                            use App\Models\Settings;
                            $dynamicData = SettingsController::dynamicContent();
                        ?>
                        <?php $__currentLoopData = $dynamicData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <h4>About ThewayShop</h4>
                            <p><?php echo e($data->about_site); ?></p>
                            <ul>
                                <li><a href="<?php echo e($data->fb_link); ?>"><i class="fab fa-facebook"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link">
                        <h4>Information</h4>
                        <ul>
                            <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(route('blogs.show', $items->id)); ?>"><?php echo e($items->name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link-contact">
                        <h4>Contact Us</h4>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address:<?php echo e($data->address); ?> </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone:<a
                                        href="tel:<?php echo e($data->phone); ?>"><?php echo e($data->phone); ?></a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a
                                        href="mailto:<?php echo e($data->email); ?>"><?php echo e($data->email); ?></a></p>
                            </li>
                        </ul>
                        <form method="post" class="form-inline" action="<?php echo e(route('newsletter.store')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" name="email" placeholder="E-mail Address">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-outline-danger"
                                        type="button">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php if(session()->has('msg')): ?>
                        <div class="alert alert-success">
                        <?php echo e(session()->get('msg')); ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer  -->

<!-- Start copyright  -->
<div class="footer-copyright">
    <p class="footer-company"><?php echo e($data->footer); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<!-- End copyright  -->

<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
<?php /**PATH /var/www/html/14-03-2022/abhi 14-03/Thewayshop/resources/views/partials/footer.blade.php ENDPATH**/ ?>