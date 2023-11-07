<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <li><a href="<?php echo e(route('catalog', $category)); ?>"><?php echo e($category->name); ?></a></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/resources/views/partials/footer_nav.blade.php ENDPATH**/ ?>