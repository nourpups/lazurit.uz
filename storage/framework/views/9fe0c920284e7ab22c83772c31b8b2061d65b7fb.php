
<?php if(session('success')): ?>
  <div class="alert alert-success fade show modal-position text-center">
    <?php echo e(session('success')); ?>

  </div>
<?php endif; ?>
<?php if(session('warning')): ?>
  <div class="alert alert-warning fade show modal-position text-center">
    <?php echo e(session('warning')); ?>

  </div>
<?php endif; ?>
<?php if(session('danger')): ?>

  <div class="alert alert-danger fade show modal-position text-center">
    <?php echo e(session('danger')); ?>

  </div>
<?php endif; ?>
<?php if(session('login')): ?>
  <div class="alert alert-success fade show modal-position text-center">
    <?php echo e(session('login')); ?>

  </div>
<?php endif; ?>
<?php /**PATH C:\OSPanel\domains\lazurit\resources\views/partials/flash.blade.php ENDPATH**/ ?>