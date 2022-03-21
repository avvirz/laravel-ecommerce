
<!-- Displaying the current category -->
<li class="ml-3" value="">
    <a href="<?php echo e(route('products.getById',$category->id)); ?>"><?php echo e($category->name); ?></a>
    <!-- If category has children -->
    <?php if(count($category->children) > 0): ?>

        <!-- Create a nested unordered list -->
        <ul>

            <!-- Loop through this category's children -->
            <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <!-- Call this blade file again (recursive) and pass the current subcategory to it -->
                <?php echo $__env->make('partials.categories', ['category' => $sub], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
</li>




















</li><?php /**PATH C:\xampp\htdocs\laravel\14thfeb_laravel-auth\laravel-auth\resources\views/partials/categories.blade.php ENDPATH**/ ?>