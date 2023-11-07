<?php $__env->startSection('content'); ?>
   <div class="login-register-area pb-100 pt-95">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-md-12 offset-lg-2">
               <div class="login-register-wrapper">
                  <div class="login-register-tab-list nav">
                     <a class="active" href="<?php echo e(route('login')); ?>">
                        <h4> <?php echo e(__('Login')); ?> </h4>
                     </a>
                     <a href="<?php echo e(route('register')); ?>">
                        <h4> <?php echo e(__('Register')); ?> </h4>
                     </a>
                  </div>
                  <div class="tab-content">
                     <div id="lg1" class="tab-pane active">
                        <div class="login-form-container">
                           <div class="login-register-form">

                              <form method="POST" class="login" action="<?php echo e(route('login')); ?>" id="auth_form">
                                 <?php echo csrf_field(); ?>
                                 <label for=""><?php echo e(__('Name')); ?> <?php echo e(__('or')); ?> <?php echo e(__('Phone')); ?></label>
                                 <input type="text" name="name" value="<?php echo e(old('name')); ?>"
                                        placeholder="<?php echo e(__('Jhon Wick')); ?> <?php echo e(__('or')); ?> +998 99 123 45 67" autofocus>
                                 <label for=""><?php echo e(__('Password')); ?></label>
                                 <input type="text" name="password" value="<?php echo e(old('password')); ?>"
                                        placeholder="<?php echo e(__('jhonny434')); ?>">
                                 <div class="button-box btn-hover">
                                    <button type="submit"><?php echo e(__('Login')); ?></button>
                                 </div>
                              </form>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/auth/login.blade.php ENDPATH**/ ?>