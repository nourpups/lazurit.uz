<?php if($results->isEmpty()): ?>
   <div class="fs-5 text-center mt-md-3 mt-1">
      <i><?php echo e(__('Nothing found...')); ?></i>
   </div>
<?php else: ?>
   <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      <div class="col-sm-6 col-lg-6 col-12 p-1">
         <a href="<?php echo e(route('product', [$result->category, $result])); ?>">
            <div class="search-product-box d-flex">
               <div class="search-image">
                  <img src="<?php echo e(asset('storage/'.$result->image)); ?>" alt="<?php echo e($result->name); ?>">
               </div>
               <div class="search-description">
                  <div class="search-product-name">
                     <?php echo e($result->name); ?>

                  </div>
                  <div class="search-product-art">
                     <span class="text-muted small"> Art. <?php echo e($result->art); ?></span>
                  </div>



               </div>
            </div>
         </a>
      </div>

   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

   <?php echo e($results->links('pagination::bootstrap-4-search')); ?>


<?php endif; ?>
<?php /**PATH C:\OSPanel\domains\lazurit\resources\views/partials/search_results.blade.php ENDPATH**/ ?>