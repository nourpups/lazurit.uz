<?php $__env->startSection('title', "Edit Category $category->name"); ?>

<?php $__env->startSection('content'); ?>
   <form class="p-4" action="<?php echo e(route('categories.update', $category)); ?>"
         enctype="multipart/form-data"
         method="POST">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>
      <div class="row gap-3">
         <div class="col-12 col-sm-6">
            <a class="btn btn-secondary" href="<?php echo e(session('previous_page')); ?>">
               <i class="fa fa-angle-left"></i> Go Back
            </a>
         </div>
         <div class="col-12 col-sm-6 text-sm-end">
            <h1 class="ms-auto">Edit Category "<b><?php echo e($category->name); ?></b>"</h1>
         </div>

      </div>
      <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="form-floating mb-4">
            <input type="text" class="form-control "
                   name="<?php echo e($locale); ?>[name]" value="<?php echo e(old($locale . '.name', $category->translate($locale)->name)); ?>">
            <label class="form-label">Name [<?php echo e($locale); ?>]</label>

         </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <div class="mb-4">
         <label class="form-label">Category Image</label>
         <input type="file" class="form-control " name="image">
      </div>
      <button type="submit" class="btn btn-alt-primary">
         Update Category
      </button>
   </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('manager.layouts.manager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/manager/forms/categories/edit.blade.php ENDPATH**/ ?>