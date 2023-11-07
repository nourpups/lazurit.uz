<?php $__env->startSection('content'); ?>

   <div class="container py-3">
      <div class="block-rounded bg-gd-default block text-white">
         <div class="block-content">
            <div class="py-3 text-center">
               <h1 class="h2 fw-bold mb-2">Dashboard</h1>
               <h2 class="h5 fw-medium">Analytics</h2>
            </div>
         </div>
      </div>
      <style>
          @media only screen and (max-width: 576px) {
              .block-content {
                  padding: .6rem;
              }
          }
      </style>
      <div class="row">
         <!-- Row #1 -->
         <div class="col-6 col-xl-3">
            <a class="block-rounded bg-gd-emerald block shadow-none" href="<?php echo e(route('products.index')); ?>">
               <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                  <div class="me-1">
                     <p class="fs-lg fw-semibold mb-0 text-white">
                        <?php echo e($totalProductsCount); ?> Products
                     </p>
                     <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
                        Total Products
                     </p>
                  </div>
                  <div class="p-3">
                     <i class="fa fa-2x fa-gem text-white-75"></i>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-6 col-xl-3">
            <a class="block-rounded bg-gd-cherry block shadow-none" href="<?php echo e(route('categories.index')); ?>">
               <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                  <div class="me-1">
                     <p class="fs-lg fw-semibold mb-0 text-white">
                        <?php echo e($categories->count()); ?> Categories
                     </p>
                     <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
                        Total Categories
                     </p>
                  </div>
                  <div class="p-3">
                     <i class="fa fa-2x fa-list-alt text-white-75"></i>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-6 col-xl-3">
            <a class="block-rounded bg-black-90 block shadow-none" href="<?php echo e(route('orders')); ?>">
               <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                  <div class="me-1">
                     <p class="fs-lg fw-semibold mb-0 text-white">
                        <?php echo e($totalOrdersCount); ?> Orders
                     </p>
                     <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
                        Total Orders
                     </p>
                  </div>
                  <div class="p-3">
                     <i class="fa fa-2x fa-pencil-square text-white-75"></i>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-6 col-xl-3">
            <a class="block-rounded bg-gd-dusk block shadow-none" href="<?php echo e(route('users.index')); ?>">
               <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                  <div class="me-1">
                     <p class="fs-lg fw-semibold mb-0 text-white">
                        <?php echo e($totalUsersCount); ?> Users
                     </p>
                     <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
                        Total Users
                     </p>
                  </div>
                  <div class="p-3">
                     <i class="fa fa-2x fa-user text-white-75"></i>
                  </div>
               </div>
            </a>
         </div>
         <!-- END Row #1 -->
      </div>
      <div class="row">
         <div class="col-12 col-sm-6">
            <div class="block-rounded bg-gd-emerald block text-white">
               <div class="block-content">
                  <div class="py-3 text-center">
                     <h1 class="h2 fw-bold mb-2">Products</h1>
                     <h2 class="h5 fw-medium">Total Products: <?php echo e($totalProductsCount); ?></h2>
                  </div>
               </div>
            </div>
            <div class="row justify-content-center">
               <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-6 col-md-4 col-xl-3">
                     <a class="block-rounded bg-image block text-center"
                        style="background-image: url(<?php echo e(asset("storage/$category->image")); ?>); "
                        href="javascript:void(0)">
                        <div class="block-content text-white"
                             style="backdrop-filter: blur(2px); background-color: rgb(0 0 0 / 30%)">

                  <span class="fs-2">
                    <?php echo e($category->products_count); ?>

                  </span>
                           <p><?php echo e($category->name); ?></p>

                        </div>
                     </a>
                  </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
         </div>
         <div class="col-12 col-sm-6">
            <div class="block-rounded bg-gd-dusk block text-white">
               <div class="block-content">
                  <div class="py-3 text-center">
                     <h1 class="h2 fw-bold mb-2">Users</h1>
                     <h2 class="h5 fw-medium">Total Users: <?php echo e($totalUsersCount); ?></h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-6">
                  <a class="block-rounded block" href="javascript:void(0)">
                     <div class="block-content block-content-full d-flex justify-content-between align-items-center"
                          style="background-color: #0284c7">
                        <div class="me-1">
                           <p class="fs-lg fw-semibold mb-0 text-white">
                              <?php echo e($totalCustomersCount); ?>

                           </p>
                           <p class="fs-sm text-uppercase fw-semibold text-white mb-0">
                              Total Customers
                           </p>
                        </div>
                        <div class="p-3">
                           <i class="fa fa-2x fa-user text-white-75"></i>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-6">
                  <a class="block-rounded block" href="javascript:void(0)">
                     <div class="block-content block-content-full d-flex justify-content-between align-items-center"
                          style="background-color: #8f55f2">
                        <div class="me-1">
                           <p class="fs-lg fw-semibold mb-0 text-white">
                              <?php echo e($totalAdminsCount); ?>

                           </p>
                           <p class="fs-sm text-uppercase fw-semibold text-white mb-0">
                              Total Admins
                           </p>
                        </div>
                        <div class="p-3">
                           <i class="fa fa-2x fa-user-shield text-white-75"></i>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="block-rounded bg-black-90 block text-white">
         <div class="block-content">
            <div class="py-3 text-center">
               <h1 class="h2 fw-bold mb-2">Orders</h1>
               <h2 class="h5 fw-medium">Total Orders: <?php echo e($totalOrdersCount); ?></h2>
            </div>
         </div>
      </div>
      <div class="row justify-content-center">
         <!-- Row #1 -->
         <div class="col-6 col-xl-3">
            <a class="block-rounded bg-black-50 block shadow-none" href="javascript:void(0)">
               <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                  <div class="me-1">
                     <p class="fs-lg fw-semibold mb-0 text-white">
                        <?php echo e($todayOrdersCount); ?> Orders
                     </p>
                     <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
                        Today Orders
                     </p>
                  </div>
                  <div class="p-3">
                     <i class="fa fa-2x fa-gem text-white-75"></i>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-6 col-xl-3">
            <a class="block-rounded bg-black-75 block shadow-none" href="javascript:void(0)">
               <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                  <div class="me-1">
                     <p class="fs-lg fw-semibold mb-0 text-white">
                        <?php echo e($thisWeekOrdersCount); ?> Orders
                     </p>
                     <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
                        This Week Orders
                     </p>
                  </div>
                  <div class="p-3">
                     <i class="fa fa-2x fa-gem text-white-75"></i>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-6 col-xl-3">
            <a class="block-rounded block bg-black shadow-none" href="javascript:void(0)">
               <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                  <div class="me-1">
                     <p class="fs-lg fw-semibold mb-0 text-white">
                        <?php echo e($thisMonthOrdersCount); ?> Orders
                     </p>
                     <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
                        This Month Orders
                     </p>
                  </div>
                  <div class="p-3">
                     <i class="fa fa-2x fa-gem text-white-75"></i>
                  </div>
               </div>
            </a>
         </div>
      </div>


   </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('manager.layouts.manager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/manager/index.blade.php ENDPATH**/ ?>