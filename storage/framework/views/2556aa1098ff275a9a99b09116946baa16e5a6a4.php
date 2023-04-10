

<?php $__env->startSection('title', "Edit Product $product->name"); ?>

<?php $__env->startSection('content'); ?>
<form style="margin: 4.2rem; padding: 3rem 0" action="<?php echo e(route('product.update', $product)); ?>"
    enctype="multipart/form-data" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="d-flex">
      <div>
        <a class="btn btn-secondary" href="<?php echo e(session('previous_page')); ?>"><i class="fa fa-angle-left"></i> Go Back </a>
      </div>
      <h1 class="ms-auto">Edit Product "<b><?php echo e($product->name); ?></b>"</h1>
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
          name="<?php echo e($locale); ?>[name]" value="<?php echo e(old($locale . '.name', $product->translate($locale)->name)); ?>">
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
      <div class="form-floating mb-4">
        <textarea class="form-control <?php $__errorArgs = [$locale . '.description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
          name="<?php echo e($locale); ?>[description]" style="height: 200px"><?php echo e(old($locale . '.description', $product->translate($locale)->description)); ?>

                            </textarea>
        <label class="form-label">Description [<?php echo e($locale); ?>]</label>
        <?php $__errorArgs = [$locale . '.description'];
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
      <select class="form-select" name="category_id">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($cat->id); ?>" <?php echo e($cat->id == $product->category_id ? 'selected' : ''); ?>>
            <?php echo e($cat->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      <label class="form-label">Category</label>
    </div>
    <div class="form-floating mb-4">
      <input type="text" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
        value="<?php echo e(old('price', $product->price)); ?>" name="price">
      <label class="form-label">Price</label>
      <?php $__errorArgs = ['price'];
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
    <div class="form-floating mb-4">
      <input type="file" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="image">
      <label class="form-label">Product Image</label>
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
      Update Product
    </button>
  </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('manager.layouts.manager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\lazurit\resources\views/manager/forms/products/edit.blade.php ENDPATH**/ ?>