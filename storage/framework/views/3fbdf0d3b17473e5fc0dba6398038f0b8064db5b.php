<div class="footer-widget footer-list mb-40">
    <h3 class="footer-title"><?php echo e(__('Catalog')); ?></h3>
    <ul>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <li><a href="<?php echo e(route('catalog', $category->name)); ?>"><?php echo e($category->name); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php /**PATH C:\OSPanel\domains\lazurit.uz\resources\views/layouts/partials/footer_nav.blade.php ENDPATH**/ ?>