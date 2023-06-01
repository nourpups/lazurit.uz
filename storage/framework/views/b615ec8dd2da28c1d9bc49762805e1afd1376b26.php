

<?php $__env->startSection('content'); ?>
  <div class="login-register-area pb-100 pt-95">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12 offset-lg-2">
          <div class="login-register-wrapper">
            <div class="login-register-tab-list nav">
              <a href="<?php echo e(route('login')); ?>">
                <h4> <?php echo e(__('Login')); ?> </h4>
              </a>
              <a class="active" href="<?php echo e(route('register')); ?>">
                <h4> <?php echo e(__('Register')); ?> </h4>
              </a>
            </div>
            <div class="tab-content">
              <div id="lg2" class="tab-pane active">
                <div class="login-form-container">
                  <div class="login-register-form">
                    <form method="POST" class="register" action="<?php echo e(route('register')); ?>" id="auth_form">
                      <?php echo csrf_field(); ?>
                      <label for=""><?php echo e(__('Name')); ?></label>
                      <input type="text" name="name" value="<?php echo e(old('name')); ?>" placeholder="<?php echo e(__('Jhon Wick')); ?>"
                        autofocus>
                      <label for=""><?php echo e(__('Phone')); ?></label>
                      <input type="text" name="phone" value="<?php echo e(old('phone')); ?>" placeholder="+998 99 123 45 67">
                      <label for=""><?php echo e(__('Password')); ?></label>
                      <input type="text" value="<?php echo e(old('login')); ?>" name="password"
                        placeholder="<?php echo e(__('jhonny434')); ?>">
                      <div class="button-box btn-hover">
                        <button><?php echo e(__('Register')); ?></button>
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

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nour751/lazurit/resources/views/auth/register.blade.php ENDPATH**/ ?>