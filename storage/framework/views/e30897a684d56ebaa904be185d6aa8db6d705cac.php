<!-- Pop Out Modal -->
<div class="modal fade" id="modal-popout-show<?php echo e($order->id); ?>" tabindex="-1" aria-labelledby="modal-popout" style="display: none;"
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

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th>NAME</th>
                                <th class="d-none d-sm-table-cell">PRICE</th>
                                <th>COUNT</th>
                                <th class="d-none d-sm-table-cell">TOTAL</th>
                                <th class="text-center" style="width: 15%;">IMAGE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <div class="mb-3">
                            <div style="font-size:30px"><span style="font-size:22px">Customer name:  </span><span class="fw-bold text-uppercase"><?php echo e($order->user->name); ?></span></div>
                            <div style="font-size:30px"><span style="font-size:22px">Customer phone:  </span><span class="fw-bold text-uppercase"><?php echo e($order->user->phone); ?></span></div>
                            <div style="font-size:30px"><span style="font-size:22px">Confirmed at:  </span><span class="fw-bold text-uppercase"><?php echo e($order->created_at->timezone('Asia/Tashkent')->format('H:i d/m/Y')); ?></span></div>
                            <div style="font-size:30px"><span style="font-size:22px">Total sum:  </span><span class="fw-bold text-uppercase">$<?php echo e($order->total_sum()); ?></span></div>
                        </div>
                            <h4>Order Products:</h4>
                            <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($product->id); ?></td>
                                    <td class="fw-semibold"><?php echo e($product->name); ?></td>
                                    <td class="d-none d-sm-table-cell">$<?php echo e($product->price); ?></td>
                                    <td class="d-none d-sm-table-cell"><?php echo e($product->pivot->count); ?></td>
                                    <td class="d-none d-sm-table-cell">$<?php echo e($product->price_for_count()); ?></td>
                                    <td class="text-center">
                                        <img class="img-fluid options-item" src="<?php echo e(asset('storage/'.$product->image)); ?>" alt="">
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