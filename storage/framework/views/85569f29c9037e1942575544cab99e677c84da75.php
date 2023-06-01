<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <li><a href="<?php echo e(route('catalog', $category)); ?>"><?php echo e($category->name); ?></a></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\OSPanel\domains\lazurit\resources\views/partials/header_nav.blade.php ENDPATH**/ ?>