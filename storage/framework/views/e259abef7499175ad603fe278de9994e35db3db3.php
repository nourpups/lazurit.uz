

<?php $__env->startSection('title', ''); ?>

<?php $__env->startSection('content'); ?>
   <div class="w-100 d-flex justify-content-center align-items-end"
        style="background: url(<?php echo e(asset('assets/images/cart/empty-cart.png')); ?>) center no-repeat; height:75vh">
      <a class="btn btn-dark mb-4" href="<?php echo e(route('home')); ?>"><?php echo e(__('Go to Home')); ?></a>
   </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\lazurit\resources\views/partials/empty-cart.blade.php ENDPATH**/ ?>