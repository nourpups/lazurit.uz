<?php $__env->startSection('title', __('Cart') . ' | ' . __('Jewelry brand «Lazurit» - jewelry made of precious metals and stones')); ?>

<?php $__env->startSection('meta_tags'); ?>
  <meta name="description"
    content="<?php echo e(__('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you will find rings, earrings, necklaces and bracelets that will adorn you at any time of the day')); ?>">
  <meta name="keywords"
    content="Lazurit, ювелирный бренд, украшения, золото, серебро, драгоценные камни, полудрагоценные камни, кольца, серьги, ожерелья, браслеты">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta_og_tags'); ?>
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php echo e(__('Jewelry brand «Lazurit» - jewelry made of precious metals and stones')); ?>" />
  <meta property="og:url" content="http://lazurit.uz" />
  <meta property="og:site_name" content="http://lazurit.uz" />
  <meta property="og:image" content="#" />
  <meta property="og:description"
    content="<?php echo e(__('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you will find rings, earrings, necklaces and bracelets that will adorn you at any time of the day')); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

  <div class="breadcrumb-area cart bg-gray-4 breadcrumb-padding-1">
    <div class="container">
      <div class="breadcrumb-content text-center">
        <h2>Cart</h2>
        <ul>
          <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('Home')); ?></a></li>
          <li><i class="ti-angle-right"></i></li>
          <li><?php echo e(__('Cart')); ?></li>
        </ul>
      </div>
    </div>
  </div>
  <?php if(isset($no_items)): ?>

    <div class="w-100 d-flex justify-content-center align-items-end"
      style="background: url(<?php echo e(asset('assets/images/cart/empty-cart.png')); ?>) center no-repeat; height:75vh">
      <a class="btn btn-dark mb-4" href="<?php echo e(route('home')); ?>"><?php echo e(__('Go to Home')); ?></a>
    </div>
  <?php else: ?>
    <div class="cart-area pb-100 pt-3">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="cart-table-content">
              <div class="table-content table-responsive">
                <table>
                  <thead>
                    <tr>
                      <th class="width-thumbnail"></th>
                      <th class="width-name"><?php echo e(__('Product')); ?></th>
                      <th class="width-price"> <?php echo e(__('Price')); ?></th>
                      <th class="width-quantity"><?php echo e(__('Quantity')); ?></th>
                      <th class="width-subtotal"><?php echo e(__('Amount')); ?></th>
                      <th class="width-remove"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr class="product_<?php echo e($product->id); ?>">
                        <td class="product-thumbnail">
                          <a href="<?php echo e(route('product', $product->id)); ?>"><img src="<?php echo e('storage/' . $product->image); ?>"
                              alt="<?php echo e($product->name); ?>"></a>
                        </td>
                        <td class="product-name">
                          <h5><a href="<?php echo e(route('product', $product->id)); ?>"><?php echo e($product->name); ?></a></h5>
                          <a href="<?php echo e(route('catalog', $product->category->name)); ?>"
                            class="text-muted"><?php echo e($product->category->name); ?></a>
                        </td>
                        <td class="product-cart-price">
                          <span class="amount"><?php echo e(number_format($product->price, 0, '', ' ')); ?> sum
                          </span>
                        </td>
                        <td class="cart-quality">
                          <div class="product-quality">

                            <div class="dec qtybutton" onclick="edit_count(<?php echo e($product->id); ?>, 'dec')">-</div>

                            <input disabled class="cart-plus-minus-box input-text qty text count_<?php echo e($product->id); ?>"
                              value="<?php echo e($product->count); ?>">

                            <div class="inc qtybutton" onclick="edit_count(<?php echo e($product->id); ?>, 'inc')">+</div>

                          </div>
                        </td>
                        <td class="product-total">
                          <span
                            class="amount_<?php echo e($product->id); ?>"><?php echo e(number_format($product->price_for_count(), 0, '', ' ')); ?>

                            sum
                          </span>
                        </td>
                        <td class="product-remove">
                          <button class="btn btn-outline-dark" onclick="delete_product(<?php echo e($product->id); ?>)">
                            <i class="ti-trash"></i>
                          </button>
                        </td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-12">
                <div class="cart-shiping-update-wrapper">
                  <div class="cart-shiping-update btn-hover">
                    <a href="<?php echo e(route('catalog', $product->category->name)); ?>"><?php echo e(__('Continue Shopping')); ?></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 offset-lg-2 col-md-12">
                <div class="grand-total-wrap">
                  <div class="grand-total-content">
                    <h3>
                      <?php echo e(__('Subtotal')); ?> <span class="subtotal"><?php echo e(number_format($order->total_sum(), 0, '', ' ')); ?>

                        sum</span>
                    </h3>
                    <div class="grand-shipping">
                    </div>
                    <div class="grand-total">
                      <h4><?php echo e(__('Total')); ?> <span class="total"><?php echo e(number_format($order->total_sum(), 0, '', ' ')); ?>

                          sum </span>
                      </h4>
                    </div>
                  </div>
                  <div class="grand-total-btn btn-hover">
                    <?php if(auth()->guard()->guest()): ?>
                      <a class="btn btn-outline-dark" data-bs-toggle="modal"
                        data-bs-target="#confirm_order"><?php echo e(__('Proceed to checkout')); ?></a>
                    <?php endif; ?>
                    <?php if(auth()->guard()->check()): ?>
                      <a href="<?php echo e(route('cart.confirm', $order)); ?>"
                        class="btn btn-outline-dark"><?php echo e(__('Proceed to checkout')); ?></a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
  <script>
    function edit_count(product_id, status) {

      $.ajax({
        url: "<?php echo e(route('cart.edit_count')); ?>",
        type: 'GET',
        data: {
          product_id: product_id,
          status: status
        },
        success: function(res) {
          let flash = res.flash
          let id = res.id
          let deleted = res.deleted
          let total = res.total
          let count = res.count
          let amount = res.amount


          if (total == 0) {
            $('.cart-area').remove()
            empty_cart = `<div class="w-100 d-flex justify-content-center align-items-end"
                          style="background: url(<?php echo e(asset('assets/images/cart/empty-cart.png')); ?>) center no-repeat; height:75vh">
                          <a class="btn btn-dark mb-4" href="<?php echo e(route('home')); ?>"><?php echo e(__('Go to Home')); ?></a>
                          </div>
                        `
            $('.breadcrumb-area').after(empty_cart)
          }
          if (deleted) {
            $('.product_' + id).remove()
          } else {
            $('.count_' + id).val(count)
            $('.amount_' + id).html(amount.toLocaleString() + ' sum')
          }
          $('.flashs').html(flash)

          $('.product-count').html(count)
          $('.total').html(total.toLocaleString() + ' sum')
          $('.subtotal').html(total.toLocaleString() + ' sum')
        }
      })
    }
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\lazurit\resources\views/catalog/cart.blade.php ENDPATH**/ ?>