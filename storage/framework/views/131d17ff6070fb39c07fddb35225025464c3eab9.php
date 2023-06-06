<?php $__env->startSection('title', $product->name.' '. $product->art . ' | ' . __('Jewelry brand «Lazurit» - jewelry made of precious metals and stones')); ?>

<?php $__env->startSection('meta_tags'); ?>
   <meta name="description"
         content="<?php echo e(__('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you find rings, earrings, necklaces and bracelets that adorn you at any time of the day')); ?>">
   <meta name="keywords"
         content="Lazurit, ювелирный бренд, украшения, золото, серебро, драгоценные камни, полудрагоценные камни, кольца, серьги, ожерелья, браслеты">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_og_tags'); ?>
   <meta property="og:type" content="website"/>
   <meta property="og:url" content="<?php echo e(url()->current()); ?>"/>
   <meta property="og:title" content="<?php echo e($product->name); ?> <?php echo e($product->art); ?>"/>
   <meta property="og:description"
         content="<?php echo e(__('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you will find rings, earrings, necklaces and bracelets that will adorn you at any time of the day')); ?>"/>
   <meta property="og:keywords" content="<?php echo e($product->name); ?>, <?php echo e($product->category->name); ?>"/>
   <meta property="og:image" content="<?php echo e(asset('storage/'.$product->image)); ?>"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
      <div class="container">
         <div class="breadcrumb-content text-center">
            <h2 data-aos="fade-up" data-aos-delay="200"><?php echo e($product->name); ?> <?php echo e($product->art); ?> </h2>
            <ul data-aos="fade-up" data-aos-delay="400">
               <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('Home')); ?></a></li>
               <li><i class="ti-angle-right"></i></li>
               <li><a href="<?php echo e(route('catalog', $product->category)); ?>"><?php echo e($product->category->name); ?></a></li>
               <li><i class="ti-angle-right"></i></li>
               <li><?php echo e($product->name); ?> <?php echo e($product->art); ?></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="product-details-area pb-35 pt-30">
      <div class="container">
         <div class="row p-sm-4">
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
                  <div class="product-details-price mb-3">
                     <span class="new-price fs-3"><?php echo e($product->formattedPrice()); ?> sum</span>
                  </div>
                  <div class="product-details-action-wrap">
                     <div class="single-product-cart btn-hover">
                        <a href="<?php echo e(route('add_to_cart', $product)); ?>"><?php echo e(__('Add to Cart')); ?></a>
                     </div>
                  </div>
                  <div class="product-details-meta">
                     <ul>
                        <li><span class="title">Art:</span><?php echo e($product->art); ?></li>
                        <li>
                           <span class="title"><?php echo e(__('Category')); ?>: </span>
                           <a href="<?php echo e(route('catalog', $product->category)); ?>"><?php echo e($product->category->name); ?></a>
                        </li>
                        <li><span
                              class="title"><?php echo e(__('Sample: :sample gold of the highest quality', ['sample' => 585])); ?></span>
                        </li>
                     </ul>
                  </div>
                  <hr>
                  <div class="product-details-meta">
                     <ul>
                        <li><span class="fw-bold"><?php echo e(__('Payment')); ?>:</span>
                        <li><span class="title"><?php echo e(__('Cash or Online')); ?>: Click, Payme, Visa, Mastercard</span>
                        </li>
                        <li>
                           <span class="fw-bold"><?php echo e(__('For any questions')); ?>:</span>
                        </li>
                        <li>
                           <span class="d-flex align-items-center title py-1"><?php echo e(__('Call')); ?>:
                              <a class="fs-3 px-1" href="tel:+998900977020"> +998 90 097 70 20</a>
                           </span>
                        </li>
                     </ul>
                  </div>
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
         <div class="related-products-active swiper-container">
            <div class="swiper-wrapper pt-5">
               <?php $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="swiper-slide">
                     <div class="product-wrap" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-img img-zoom mb-25">
                           <a href="<?php echo e(route('product', [$relatedProduct->category, $relatedProduct])); ?>">
                              <img src="<?php echo e(asset('storage/' . $relatedProduct->image)); ?>"
                                   alt="<?php echo e($relatedProduct->name); ?>">
                           </a>
                        </div>
                        <div class="product-content">
                           <h3><a href="<?php echo e(route('product', [$relatedProduct->category, $relatedProduct])); ?>"><?php echo e($relatedProduct->name); ?> <?php echo e($relatedProduct->art); ?></a></h3>
                           <div class="product-price">
                                
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

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\lazurit\resources\views/catalog/product-details.blade.php ENDPATH**/ ?>