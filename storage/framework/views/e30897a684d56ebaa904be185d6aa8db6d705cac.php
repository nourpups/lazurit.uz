<!-- Pop Out Modal -->
<div class="modal fade" id="modal-popout-show<?php echo e($order->id); ?>" tabindex="-1" aria-labelledby="modal-popout"
     style="display: none;"
     aria-hidden="true">
   <div class="modal-dialog modal-dialog-popout modal-lg" role="document">
      <div class="modal-content">
         <div class="block block-rounded shadow-none mb-0">
            <div class="block-header block-header-default">
               <h3 class="block-title">Order № <?php echo e($order->id); ?></h3>
               <div class="block-options">
                  <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                     <i class="fa fa-times"></i>
                  </button>
               </div>
            </div>
            <div class="block-content fs-sm">

               <table class="table  table-striped table-vcenter js-dataTable-full">
                  <thead>
                  <tr>
                     <th class="text-center">ID | NAME</th>
                     <th>PRICE</th>
                     <th>COUNT</th>
                     <th>TOTAL</th>
                     <th class="text-center" style="width: 15%;">IMAGE</th>
                  </tr>
                  </thead>
                  <tbody>
                  <div class="mb-3 p-3">
                     Customer Name: <h3><?php echo e($order->user->name); ?></h3>
                     Customer Phone: <h3><a href="tel:<?php echo e($order->user->phone); ?>"><?php echo e($order->user->phone); ?></a></h3>
                     Confirmed At: <h3><?php echo e($order->created_at); ?></h3>
                     Total Sum: <h3><?php echo e($order->formattedSum()); ?> sum</h3>
                  </div>
                  <h4>Order Products:</h4>
                  <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                     <tr>
                        <td class="text-center"><?php echo e($product->id); ?>

                           <hr> <?php echo e($product->name); ?> <code> <?php echo e($product->art); ?></code></td>
                        <td><?php echo e($product->price); ?> sum</td>
                        <td><?php echo e($product->pivot->count); ?></td>
                        <td><?php echo e($product->pivot->amount); ?> sum</td>
                        <td class="text-center">
                           <img class="img-fluid options-item" src="<?php echo e(asset('storage/'.$product->image)); ?>"
                                alt="">
                        </td>

                     </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
               </table>
            </div>
            <div class="block-content block-content-full block-content-sm text-end border-top">
               <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
                  Close
               </button>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>

<?php /**PATH C:\OSPanel\domains\lazurit\resources\views/manager/modals/orders/show.blade.php ENDPATH**/ ?>