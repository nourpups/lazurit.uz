

<?php $__env->startSection('title', 'Orders || glossy.uz'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Dynamic Table Full -->
    <div class="block block-rounded" >
        <div class="block-header block-header-default">
            <h3 class="block-title">
                Orders table
            </h3>
        </div>
        <div class="block-content block-content-full">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>NAME</th>
                        <th class="d-none d-sm-table-cell">PHONE</th>
                        <th class="d-none d-sm-table-cell">TOTAL PRICE</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">CONFIRMED AT</th>
                        <th class="text-center" style="width: 15%;">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center"><?php echo e($order->id); ?></td>
                            <td class="fw-semibold text-uppercase"><?php echo e($order->user->name); ?></td>
                            <td class="d-none d-sm-table-cell"><?php echo e($order->user->phone); ?></td>
                            <td class=""><?php echo e(number_format($order->total_sum(),0,'',' ')); ?> sum</td>
                            <td class="fw-semibold">
                                <?php echo e($order->created_at->timezone('Asia/Tashkent')->format('H:i d/m/Y')); ?>

                            </td>
                            <td class="d-none d-sm-table-cell">

                                <button type="button" class="btn btn-alt-primary mb-2 w-100" data-bs-toggle="modal"
                                    data-bs-target="#modal-popout-show<?php echo e($order->id); ?>"> <i class="fa fa-eye"></i> Show details
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