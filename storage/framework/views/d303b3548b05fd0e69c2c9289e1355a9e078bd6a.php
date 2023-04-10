<?php $__env->startSection('title', __('Cart') . ' | ' . __('Jewelry brand «Lazurit» - jewelry made of precious metals and stones')); ?>

<?php $__env->startSection('meta_tags'); ?>
  <meta name="description"
    content="<?php echo e(__('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you find rings, earrings, necklaces and bracelets that adorn you at any time of the day')); ?>">
  <meta name="keywords"
    content="Lazurit, ювелирный бренд, украшения, золото, серебро, драгоценные камни, полудрагоценные камни, кольца, серьги, ожерелья, браслеты">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_og_tags'); ?>
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo e(url()->current()); ?>" />
  <meta property="og:title" content="<?php echo e($product->name); ?>" />
  <meta property="og:description"
    content="<?php echo e(__('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you will find rings, earrings, necklaces and bracelets that will adorn you at any time of the day')); ?>" />
  <meta property="og:keywords" content="<?php echo e($product->name); ?>, <?php echo e($product->category->name); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
    <div class="container">
      <div class="breadcrumb-content text-center">
        <h2 data-aos="fade-up" data-aos-delay="200"><?php echo e($product->name); ?></h2>
        <ul data-aos="fade-up" data-aos-delay="400">
          <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('Home')); ?></a></li>
          <li><i class="ti-angle-right"></i></li>
          <li><a href="<?php echo e(route('catalog', $product->category->name)); ?>"><?php echo e($product->category->name); ?></a></li>
          <li><i class="ti-angle-right"></i></li>
          <li><?php echo e($product->name); ?></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="product-details-area pb-35 pt-30">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="product-details-img-wrap" data-aos="fade-up" data-aos-delay="200">
            <div class="easyzoom-style">
              <div class="easyzoom">
                <a href="javascript:void(0)">
                  <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>">
                </a>
              </div>
              <a class="easyzoom-pop-up img-popup" href="<?php echo e(asset('storage/' . $product->image)); ?>">
                <i class="pe-7s-search"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="product-details-content" data-aos="fade-up" data-aos-delay="400">
            <h2><?php echo e($product->name); ?></h2>
            <div class="product-details-price my-3">
              <span class="new-price fs-3"><?php echo e(number_format($product->price, 0, '', ' ')); ?> sum</span>
            </div>
            <div class="product-details-action-wrap">
              <div class="single-product-cart btn-hover">
                <a href="<?php echo e(route('add_to_cart', $product)); ?>"><?php echo e(__('Add to Cart')); ?></a>
              </div>
            </div>
            <div class="product-details-meta">
              <ul>
                <li><span class="title">ID:</span><?php echo e($product->id); ?></li>
                <li><span class="title"><?php echo e(__('Category')); ?>:</span>
                  <ul>
                    <li>
                      <a href="<?php echo e(route('catalog', $product->category->name)); ?>"><?php echo e($product->category->name); ?></a>
                    </li>
                  </ul>
                </li>
                <li><span class="title"><?php echo e(__('Sample')); ?>: </span>585</li>
              </ul>
            </div>
            <h5>
              <?php echo e($product->description); ?>

            </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="related-product-area pt-5 pb-5">
    <div class="container">
      <div class="section-title-2 st-border-center text-center" data-aos="fade-up" data-aos-delay="200">
        <h2><?php echo e(__('Related Products')); ?></h2>
      </div>
      <div class="related-product-active swiper-container">
        <div class="swiper-wrapper pt-5">
          <?php $__currentLoopData = $related_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="swiper-slide">
              <div class="product-wrap" data-aos="fade-up" data-aos-delay="200">
                <div class="product-img img-zoom mb-25">
                  <a href="<?php echo e(route('product', $related_product)); ?>">
                    <img src="<?php echo e(asset('storage/' . $related_product->image)); ?>" alt="<?php echo e($related_product->name); ?>">
                  </a>
                </div>
                <div class="product-content">
                  <h3><a href="<?php echo e(route('product', $related_product)); ?>"><?php echo e($related_product->name); ?></a></h3>
                  <div class="product-price">
                    
                    <span class="new-price"><?php echo e(number_format($related_product->price, 0, '', ' ')); ?> sum</span>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\lazurit.uz\resources\views/catalog/product-details.blade.php ENDPATH**/ ?>