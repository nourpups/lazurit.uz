<div class="row">
   <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-sm-3 col-6" style="padding: 10px">
         <div class="banner-wrap" data-aos="fade-up" data-aos-delay="200">
            <a href="<?php echo e(route('catalog', $category)); ?>">
               <img src="<?php echo e(asset('storage/' . $category->image)); ?>" style="object-fit: cover; height: 100%;" alt="<?php echo e($category->name); ?>">
            </a>
            <div class="banner-content-11">
               <h3><?php echo e($category->name); ?></h3>
            </div>
         </div>
      </div>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php /**PATH /home/nour751/lazurit/resources/views/partials/home_categories_list.blade.php ENDPATH**/ ?>