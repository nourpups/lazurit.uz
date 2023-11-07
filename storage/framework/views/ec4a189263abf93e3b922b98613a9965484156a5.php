<?php $__currentLoopData = config('app.available_locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale_name => $available_locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <?php if(app()->getLocale() !== $available_locale): ?>
      <a style="color: #000;" href="<?php echo e(route('language', $available_locale)); ?>">
         <?php if($locale_name == 'English'): ?>
            English <img src="<?php echo e(asset('assets/images/flags/uk32.png')); ?>" alt="united kingdom flag icon">
         <?php else: ?>
            Русский <img src="<?php echo e(asset('assets/images/flags/rus32.png')); ?>" alt="russia flag icon">
         <?php endif; ?>
      </a>
   <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/resources/views/partials/locales.blade.php ENDPATH**/ ?>