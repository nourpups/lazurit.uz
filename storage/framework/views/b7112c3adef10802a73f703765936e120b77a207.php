

<?php $__env->startSection('title', "Edit Category $cat->name"); ?>

<?php $__env->startSection('content'); ?>
  <form style="margin: 4.2rem; padding: 3rem 0" action="<?php echo e(route('category.update', $cat)); ?>" enctype="multipart/form-data"
    method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="d-flex">
      <div>
        <a class="btn btn-secondary" href="<?php echo e(session('previous_page')); ?>"><i class="fa fa-angle-left"></i> Go Back </a>
      </div>
      <h1 class="ms-auto">Edit Category "<b><?php echo e($cat->name); ?></b>"</h1>
    </div>
    <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="form-floating mb-4">
        <input type="text" class="form-control <?php $__errorArgs = [$locale . '.name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
          name="<?php echo e($locale); ?>[name]" value="<?php echo e(old($locale . '.name', $cat->translate($locale)->name)); ?>">
        <label class="form-label">Name [<?php echo e($locale); ?>]</label>
        <?php $__errorArgs = [$locale . '.name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div id="val-password-error" class="invalid-feedback animated fadeIn">
            <?php echo e($message); ?>

          </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="form-floating mb-4">
      <input type="file" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="image"
        placeholder="Category Image">
      <label class="form-label">Category Image</label>
      <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div id="val-password-error" class="invalid-feedback animated fadeIn">
          <?php echo e($message); ?>

        </div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <button type="submit" class="btn btn-alt-primary">
      Update
    </button>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('manager.layouts.manager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\lazurit\resources\views/manager/forms/categories/edit.blade.php ENDPATH**/ ?>