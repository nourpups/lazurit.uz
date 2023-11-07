<?php $__env->startSection('title', __('Jewelry brand «Lazurit» - jewelry made of precious metals and stones')); ?>

<?php $__env->startSection('meta_tags'); ?>
   <meta name="description"
         content="<?php echo e(__('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you find rings, earrings, necklaces and bracelets that adorn you at any time of the day')); ?>">
   <meta name="keywords"
         content="Lazurit, ювелирный бренд, украшения, золото, серебро, драгоценные камни, полудрагоценные камни, кольца, серьги, ожерелья, браслеты">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_og_tags'); ?>
   <meta property="og:type" content="website"/>
   <meta property="og:title" content="<?php echo e(__('Lazurit jewelry brand - jewelry made of precious metals and stones')); ?>"/>
   <meta property="og:url" content="https://lazurit.uz"/>
   <meta property="og:site_name" content="<?php echo e(__('Lazurit - a feel of luxury')); ?>"/>
   <meta property="og:image" content="#"/>
   <meta property="og:description"
         content="<?php echo e(__('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you will find rings, earrings, necklaces and bracelets that will adorn you at any time of the day')); ?>"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   <div class="slider-area">
      <div class="container-fluid">
         <div
            class="intro-section slider-height-1 slider-content-center bg-img single-animation-wrap slider-overly"
            style="background-image:url(<?php echo e(asset('assets/images/slider/home-banner-5.webp')); ?>);  background-size: contain; background-repeat: no-repeat;">
            <div class="container">
               <div class="row align-items-start">
                  <div class="col-lg-5 offset-lg-7 offset-6 col-6">
                     <div class="slider-content-1 slider-animated-1 ms-lg-5 ms-md-4">
                        <h1 class="animated text-white"><?php echo e(__('Ignite Your Dreams')); ?></h1>
                        <div class="slider-btn btn-hover">
                           <a href="<?php echo e(route('catalog', $bracelets)); ?>" class="btn animated">
                              <?php echo e(__('Show Bracelets')); ?> <i class="ti-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="banner-area section-padding-2 py-3">
      <div class="container-fluid">
         <?php echo $__env->make('partials.home_categories_list', $categories, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
   </div>

   <div class="banner-area section-padding-2 pb-95">
      <div class="container-fluid">
         <div class="bg-img bg-padding-3"
              style="background-image:url(<?php echo e(asset('assets/images/slider/home-banner-3.avif')); ?>)">
            <div class="banner-content-5 banner-content-5-static banner-content-5-home">
               <h1 class="font-montserrat" data-aos="fade-up"
                   data-aos-delay="400"><?php echo e(__('Celebrate all the love')); ?></h1>
               <p data-aos="fade-up"
                  data-aos-delay="600"><?php echo e(__('We have the perfect gift for everyone you cherish')); ?> </p>
               <div class="btn-style-3 btn-hover" data-aos="fade-up" data-aos-delay="800">
                  <a class="btn border-radius-none"
                     href="<?php echo e(route('catalog',  $sets)); ?>"><?php echo e(__('Show Gifts')); ?></a>
               </div>
            </div>
         </div>
      </div>
   </div>

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/home.blade.php ENDPATH**/ ?>