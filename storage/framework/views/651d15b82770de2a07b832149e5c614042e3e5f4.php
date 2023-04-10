<?php $__env->startSection('title', 'Products || glossy.uz'); ?>

<?php $__env->startSection('content'); ?>
  <!-- Dynamic Table Full -->
  <div class="block-rounded block">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        Products table
      </h3>

      <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal-popout-store">
        <i class="fa fa-plus-circle"></i> Add Product
      </button>
    </div>
    <div class="block-content block-content-full">
      <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
      <table class="table-bordered table-striped table-vcenter js-dataTable-full table">
        <thead>
          <tr>
            <th class="text-center">ID</th>
            <th style="width: 12%;">NAME</th>
            <th class="d-none d-sm-table-cell">DESCRIPTION</th>
            <th class="d-none d-sm-table-cell" style="width: 12%;">PRICE</th>
            <th class="d-none d-sm-table-cell" style="width: 25%;">IMAGE</th>
            <th class="text-center" style="width: 13%;">ACTIONS</th>
          </tr>
        </thead>
        <tbody>

          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td class="text-center"><?php echo e($product->id); ?></td>
              <td class="fw-semibold"><?php echo e($product->name); ?></td>
              <td class="d-none d-sm-table-cell"><?php echo e($product->description); ?></td>
              <td class="fw-semibold"><?php echo e(number_format($product->price, 0, '', ' ')); ?> sum</td>
              <td class="text-center">
                <img class="img-fluid options-item" src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="">
              </td>
              <td class="d-none d-sm-table-cell">

                <a class="btn btn-alt-primary w-100 mb-2" href="<?php echo e(route('product.edit', $product)); ?>"> <i
                    class="fa fa-pen"></i> Edit
                </a>

                <button type="button" class="btn btn-danger w-100 mb-2" data-bs-toggle="modal"
                  data-bs-target="#modal-popout-delete<?php echo e($product->id); ?>"><i class="fa fa-trash"></i> Delete
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
<?php $__env->startSection('js'); ?>
  <script>
    $(document).on("submit", "#store", function() {
      var e = this;
      let submit_button_default_name = $(this).find("[type='submit']").html();
      let current_location = '' + location
      let previous_url = "<?php echo e(session('previous_page')); ?>";

      $(this).find("[type='submit']").html('Creating...');
      $(this).find(".text-danger").remove();
      $.ajax({
        type: 'POST',
        url: $(this).attr('action'),
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function(data) {
          $('.flashs').html(data.flash)
          $(e).find("[type='submit']").html(submit_button_default_name);

          if (data.status) window.location = previous_url;

        },
        error: function(response) {
          $(e).find("[type='submit']").html(submit_button_default_name);
          errors = response.responseJSON.errors;
          some = '';
          $.each(errors, function(field_name, error) {
            field_name == 'en.name' ? field_name = 'en[name]' : ''
            field_name == 'en.description' ? field_name = 'en[description]' : ''
            field_name == 'ru.name' ? field_name = 'ru[name]' : ''
            field_name == 'ru.description' ? field_name = 'ru[description]' : ''

            $(e).find(`[name="${field_name}"]`).addClass(
              'is-invalid').after(
              '<div class="text-strong text-danger">' + error +
              '</div>')
            })
          console.log(some)
        }
      });

      return false;
    });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('manager.layouts.manager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\lazurit\resources\views/manager/products.blade.php ENDPATH**/ ?>