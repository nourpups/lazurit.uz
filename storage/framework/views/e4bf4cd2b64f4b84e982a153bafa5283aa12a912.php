

<?php $__env->startSection('title', 'Orders || glossy.uz'); ?>

<?php $__env->startSection('content'); ?>
   <!-- Dynamic Table Full -->
   <div class="block block-rounded">
      <div class="block-header block-header-default">
         <h3 class="block-title">
            Orders table
         </h3>
      </div>
      <div class="block-content block-content-full">
         <table class="table  table-striped table-vcenter js-dataTable-full">
            <thead>
            <tr>
               <th class="text-center">ID</th>
               <th class="text-center text-sm-start">NAME | PHONE</th>
               <th>TOTAL SUM</th>
               <th style="width: 15%;">CONFIRMED AT</th>
               <th class="text-center" style="width: 15%;">ACTIONS</th>
            </tr>
            </thead>
            <tbody>

            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td class="text-center"><?php echo e($order->id); ?></td>
                  <td class="fw-semibold text-center text-sm-start"><?php echo e($order->user->name); ?>

                     <hr>
                     <a href="tel:<?php echo e($order->user->phone); ?>"><?php echo e($order->user->phone); ?></a></td>
                  <td class=""><?php echo e($order->formattedSum()); ?> sum</td>
                  <td class="fw-semibold">
                     <?php echo e($order->createdAt()); ?>

                  </td>
                  <td>

                     <button type="button" class="btn btn-alt-primary mb-2 w-100" data-bs-toggle="modal"
                             data-bs-target="#modal-popout-show<?php echo e($order->id); ?>"><i class="fa fa-eye"></i> Show
                        details
                     </button>

                  </td>

               </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
         </table>
      </div>
      <?php echo e($orders->links()); ?>

   </div>
   <!-- END Dynamic Table Full -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('modals'); ?>
   <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php echo $__env->make('manager.modals.orders.show',['order' => $order], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('manager.layouts.manager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\lazurit\resources\views/manager/orders.blade.php ENDPATH**/ ?>