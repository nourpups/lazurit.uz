<?php $__env->startSection('title', 'Products'); ?>

<?php $__env->startSection('content'); ?>

   <!-- Dynamic Table Full -->
   <div class="block-rounded block">
      <div class="block-header block-header-default">
         <h3 class="block-title">
            Products table
         </h3>
         <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal"
                 data-bs-target="#modal-popout-store">
            <i class="fa fa-plus-circle"></i> Add Product
         </button>
      </div>
      <div class="block-content block-content-full">
         <table class=" table-striped table-vcenter js-dataTable-full table">
            <thead>
            <tr>
               <th style="width: 20%;" class="text-center">ID | ART.</th>
               <th>NAME</th>
               <th class="text-center" style="width: 25%;">PRICE | IMAGE</th>
               <th style="width: 13%;">ACTIONS</th>
            </tr>
            </thead>
            <tbody>

            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td class="text-center"><b><?php echo e($product->id); ?></b>
                     <br>
                     <br>
                     <code><?php echo e($product->art); ?></code></td>
                  <td>
                     <span class="fw-semibold"><?php echo e($product->name); ?></span>
                  </td>
                  <td class="text-center">
                     <img class="img-fluid options-item" src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="">
                     <b><?php echo e($product->price); ?> sum</b>
                  </td>
                  <td>

                     <a class="btn btn-alt-primary w-100 mb-2" href="<?php echo e(route('products.edit', $product)); ?>">
                        <i class="fa fa-pen"></i> Edit
                     </a>

                     <button type="button" class="btn btn-danger w-100 mb-2" data-bs-toggle="modal"
                             data-bs-target="#modal-popout-delete<?php echo e($product->id); ?>"><i class="fa fa-trash"></i>
                        Delete
                     </button>

                  </td>

               </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
         </table>
      </div>
      <?php echo e($products->links()); ?>

   </div>
   <!-- END Dynamic Table Full -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('modals'); ?>
   <?php echo $__env->make('manager.modals.products.store', ['categories' => $categories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
      <?php echo $__env->make('manager.modals.products.delete', ['product' => $product], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('manager.layouts.manager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\lazurit\resources\views/manager/products.blade.php ENDPATH**/ ?>