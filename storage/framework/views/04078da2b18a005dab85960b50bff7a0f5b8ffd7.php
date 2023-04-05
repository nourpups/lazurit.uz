<?php if(empty($search_result)): ?>
    <div class="fs-5 text-center mt-md-3 mt-1">
        <i><?php echo e(__('Nothing found...')); ?></i>
    </div>
<?php else: ?>
<?php $__currentLoopData = $search_result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="col-sm-6 col-lg-6 col-12 p-1">
        <a href="<?php echo e(route('product', $item->id)); ?>">
            <div class="search-product-box d-flex">
                <div class="search-image">
                    <img src="<?php echo e(asset('storage/'.$item->image)); ?>" alt="<?php echo e($item->name); ?>">
                </div>
                <div class="search-description">
                    <div class="search-product-name">
                        <?php echo e($item->name); ?>

                    </div>
                    <div class="search-product-price new-price">
                        <?php echo e(number_format($item->price, 0, '', ' ')); ?> sum
                    </div>
                </div>
            </div>
        </a>
    </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php echo e($search_result->links('pagination::bootstrap-4')); ?>


<?php endif; ?>
<?php /**PATH C:\OSPanel\domains\lazurit.uz\resources\views/components/search_results.blade.php ENDPATH**/ ?>