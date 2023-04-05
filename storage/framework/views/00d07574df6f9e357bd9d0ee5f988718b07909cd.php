<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><a href="<?php echo e(route('catalog', $cat->name)); ?>"><?php echo e($cat->name); ?></a></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\OSPanel\domains\lazurit.uz\resources\views/layouts/partials/header_nav.blade.php ENDPATH**/ ?>