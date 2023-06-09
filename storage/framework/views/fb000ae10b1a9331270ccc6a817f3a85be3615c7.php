<?php $__env->startSection('title', 'Categories'); ?>

<?php $__env->startSection('content'); ?>
   <!-- Dynamic Table Full -->
   <div class="block block-rounded">
      <div class="block-header block-header-default">
         <h3 class="block-title">
            Categories table
         </h3>
         <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal"
                 data-bs-target="#modal-popout-store">
            <i class="fa fa-plus-circle"></i> Add Category
         </button>
      </div>
      <div class="block-content block-content-full">
         <table class="table  table-striped table-vcenter js-dataTable-full">
            <thead>
            <tr>
               <th class="text-center">ID</th>
               <th>NAME</th>
               <th style="width: 25%;">IMAGE</th>
               <th class="text-center" style="width: 15%;">ACTIONS</th>
            </tr>
            </thead>
            <tbody>

            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td class="text-center"><?php echo e($cat->id); ?></td>
                  <td class="fw-semibold"><?php echo e($cat->name); ?></td>
                  <td class="text-center">
                     <img class="img-fluid options-item" src="<?php echo e(asset('storage/'.$cat->image)); ?>" alt="">
                  </td>
                  <td>

                     <a class="btn btn-alt-primary mb-2 w-100" href="<?php echo e(route('categories.edit', $cat)); ?>">
                        <i class="fa fa-pen"></i> Edit
                     </a>

                     <button type="button" class="btn btn-danger mb-2 w-100" data-bs-toggle="modal"
                             data-bs-target="#modal-popout-delete<?php echo e($cat->id); ?>"><i class="fa fa-trash"></i>
                        Delete
                     </button>

                  </td>

               </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
         </table>
      </div>
      <?php echo e($categories->links()); ?>

   </div>
   <!-- END Dynamic Table Full -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('modals'); ?>
   <?php echo $__env->make('manager.modals.categories.store', ['categories' => $categories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php echo $__env->make('manager.modals.categories.delete',['cat' => $cat], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('manager.layouts.manager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\lazurit\resources\views/manager/categories.blade.php ENDPATH**/ ?>