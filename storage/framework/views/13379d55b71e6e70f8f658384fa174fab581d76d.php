

<?php $__env->startSection('title', 'Users || glossy.uz'); ?>

<?php $__env->startSection('content'); ?>
   <!-- Dynamic Table Full -->
   <div class="block-rounded block">
      <div class="block-header block-header-default">
         <h3 class="block-title">
            Users table
         </h3>
      </div>
      <div class="block-content block-content-full">
         <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
         <table class=" table-striped table-vcenter js-dataTable-full table">
            <thead>
            <tr>
               <th class="text-center">ID</th>
               <th class="">Role</th>
               <th>NAME</th>
               <th>PHONE</th>
               <th class="text-center" style="width: 15%;">ACTIONS</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td class="text-center"><?php echo e($user->id); ?></td>
                  <td class="fw-semibold text-uppercase"><i
                        class="fa fa-user<?php echo e($user->is_admin ? '-shield' : ''); ?>"></i> <?php echo e($user->is_admin ? 'Admin' : 'User'); ?>

                  </td>
                  <td class="fw-semibold "><?php echo e($user->name); ?></td>
                  <td class="fw-semibold"><?php echo e($user->phone); ?></td>
                  <td>

                     <button type="button" class="btn btn-danger w-100 mb-2" data-bs-toggle="modal"
                             data-bs-target="#modal-popout-delete<?php echo e($user->id); ?>">
                        <i class="fa fa-trash"></i> Delete
                     </button>
                     <button type="button" class="btn btn-info w-100 mb-2" data-bs-toggle="modal"
                             data-bs-target="#modal-popout-make_admin<?php echo e($user->id); ?>">
                        <i class="fa fa-user-shield"></i> Make Admin
                     </button>

                  </td>

               </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
         </table>
      </div>
      <?php echo e($users->links()); ?>

   </div>
   <!-- END Dynamic Table Full -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('modals'); ?>

   <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php echo $__env->make('manager.modals.users.delete', ['user' => $user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('manager.modals.users.make_admin', ['user' => $user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('manager.layouts.manager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\lazurit\resources\views/manager/users.blade.php ENDPATH**/ ?>