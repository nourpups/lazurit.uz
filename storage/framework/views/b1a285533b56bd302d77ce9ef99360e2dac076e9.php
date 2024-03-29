<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title><?php echo $__env->yieldContent('title'); ?></title>
   <meta name="robots" content="index, follow"/>

   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php echo $__env->yieldContent('meta_tags'); ?>

   <meta property="og:image" content="<?php echo e(asset('assets/images/logo/logo.png')); ?>">
   <?php echo $__env->yieldContent('meta_og_tags'); ?>

   <link rel="icon" href="<?php echo e(asset('assets/images/favicon/favicon155x155.png')); ?>" sizes="155x155"/>

   <!-- All CSS is here -->
   <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/bootstrap.min.css')); ?>"/>
   <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/pe-icon-7-stroke.css')); ?>"/>
   <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/themify-icons.css')); ?>"/>

   <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/animate.css')); ?>"/>
   <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/aos.css')); ?>"/>
   <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/magnific-popup.css')); ?>"/>
   <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/swiper.min.css')); ?>"/>
   <link rel="stylesheet" href="<?php echo e(asset('assets/css/plugins/slinky.css')); ?>"/>

   <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.min.css')); ?>"/>
</head>

<body>
<div class="main-wrapper main-wrapper-2">
   <header class="header-area header-responsive-padding header-height-2 section-padding-2">
      <div class="header-bottom sticky-bar">
         <div class="container-fluid">
            <div class="row align-items-center">
               <?php echo $__env->make('partials.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <div class="flashs"></div>
               <div class="col-lg-3 col-md-6 col-6">
                  <div class="logo">
                     <a href="<?php echo e(route('home')); ?>">
                        <img width="130" src="<?php echo e(asset('assets/images/logo/lazurit.png')); ?>" alt="Lazurit logo">
                     </a>
                  </div>
               </div>
               <div class="col-lg-6 d-none d-lg-block d-flex justify-content-center">
                  <div class="main-menu text-center">
                     <nav>
                        <ul>
                           <li>
                              <a class="text-uppercase" href="<?php echo e(route('home')); ?>"><?php echo e(__('Home')); ?></a>
                           </li>
                           <li>
                              <a class="text-uppercase" href="javascript:void(0)"><?php echo e(__('Catalog')); ?></a>
                              <ul class="mega-menu-style mega-menu-mrg-1">
                                 <li>
                                    <ul>
                                       <?php echo $__env->make('partials.header_nav', $categories, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li>
                              <a class="text-uppercase" href="<?php echo e(route('about')); ?>"><?php echo e(__('About')); ?></a>
                           </li>
                           <li>
                              <a class="text-uppercase" href="<?php echo e(route('contact')); ?>"><?php echo e(__('Contact')); ?></a>
                           </li>
                           <li>
                              <?php echo $__env->make('partials.locales', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-6">
                  <div class="header-action-wrap">
                     <div class="header-action-style header-search-1">
                        <a class="search-toggle" href="javascript:void(0)">
                           <i class="pe-7s-search s-open"></i>
                        </a>
                     </div>
                     <div class="header-action-style">
                        <?php if(auth()->guard()->guest()): ?>
                           <a title="<?php echo e(__('Login')); ?> <?php echo e(__('or')); ?> <?php echo e(__('Register')); ?>"
                              href="<?php echo e(route('login')); ?>"><i class="pe-7s-user"></i></a>
                        <?php endif; ?>
                        <?php if(auth()->guard()->check()): ?>
                           <a title="<?php echo e(__('Logout')); ?>" href="<?php echo e(route('get.logout')); ?>">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                   viewBox="0 0 512 512">
                                 <path
                                    d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/>
                              </svg>
                           </a>
                        <?php endif; ?>
                     </div>
                                          <?php if(!\Route::is('cart')): ?>
                                             <div class="header-action-style header-action-cart">
                                                <a class="cart-active" href="javascript:void(0)">
                                                   <i class="pe-7s-shopbag"></i>
                                                   <?php if(!empty($cart)): ?>
                                                      <?php if($cart->products->isNotEmpty()): ?>
                                                         <span class="product-count bg-black"><?php echo e($cart->quantity()); ?></span>
                                                      <?php endif; ?>
                                                   <?php endif; ?>
                                                </a>
                                             </div>

                                          <?php endif; ?>
                     <?php if(auth()->guard()->check()): ?>
                        <?php if(auth()->user()->is_admin): ?>
                           <div class="header-action-style">
                              <a title="Admin Panel" href="<?php echo e(route('manager.index')); ?>">
                                 <i class="pe-7s-plugin"></i>
                              </a>
                           </div>
                        <?php endif; ?>
                     <?php endif; ?>
                     <div class="header-action-style d-block d-lg-none">
                        <a class="mobile-menu-active-button" href="#"><i class="pe-7s-menu"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="predictive__search--box" id="search_box">
         <div class="predictive__search--box__inner">

            <input class="predictive__search--input" placeholder="<?php echo e(__('Search')); ?>..." type="text" id="search"
                   name="search">

         </div>
         <button class="predictive__search--close__btn" aria-label="search close" data-offcanvas="">
            <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51"
                 height="30.443"
                 viewBox="0 0 512 512">
               <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="32" d="M368 368L144 144M368 144L144 368"></path>
            </svg>
         </button>
         <div class="search-menu">
            <div class="search-related">
               <div class="row append_search_result" id="search_result">

               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- mini cart start -->
   <div class="sidebar-cart-active">
      <div class="sidebar-cart-all">
         <a class="cart-close" href="javascript:void(0)"><i class="pe-7s-close"></i></a>
         <?php if(!empty($cart)): ?>
            <?php if($cart->products->isNotEmpty()): ?>
               <div class="cart-content">
                  <h3><?php echo e(__('Cart')); ?></h3>
                  <ul>
                     <?php $__currentLoopData = $cart->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="product_<?php echo e($product->id); ?>">
                           <div class="cart-img">
                              <a href="<?php echo e(route('product', [$product->category, $product])); ?>"><img
                                    src="<?php echo e(asset('storage/' . $product->image)); ?>"
                                    alt="<?php echo e($product->name); ?> <?php echo e($product->art); ?>"></a>
                           </div>
                           <div class="cart-title">
                              <h4><a
                                    href="<?php echo e(route('product', [$product->category, $product])); ?>"><?php echo e($product->name); ?> <?php echo e($product->art); ?></a>
                              </h4>

                              <span> <?php echo e($product->count); ?> × <span class="price-format"><?php echo e($product->price); ?> sum</span> </span>
                           </div>
                           <div class="cart-delete">
                              <button onclick="delete_product(<?php echo e($product->id); ?>)"
                                      class="btn cart-delete-btn">×
                              </button>
                           </div>
                        </li>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                  </ul>
                  <div class="cart-total">
                     <h4><?php echo e(__('Subtotal')); ?> : <span class="subtotal"><?php echo e($cart->formattedSum()); ?>

                    sum</span></h4>
                  </div>
                  <div class="cart-btn btn-hover">
                     <a class="theme-color" href="<?php echo e(route('cart')); ?>"><?php echo e(__('View Cart')); ?></a>
                  </div>
               </div>
            <?php else: ?>
               <i><?php echo e(__('Your cart is empty')); ?>.</i>
            <?php endif; ?>
         <?php else: ?>
            <i><?php echo e(__('Your cart is empty')); ?>.</i>
         <?php endif; ?>
      </div>
   </div>
   <?php echo $__env->yieldContent('content'); ?>

   <footer class="footer-area footer-area-margin-lr">
      <div class="bg-gray-2">
         <div class="container">
            <div class="footer-top pb-35 pt-80">
               <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                     <div class="footer-widget footer-about mb-40">
                        <div class="footer-logo">
                           <a href="<?php echo e(route('home')); ?>">
                              <img width="130"
                                   src="<?php echo e(asset('assets/images/logo/lazurit.png')); ?>"
                                   alt="logo">
                           </a>
                        </div>
                        <p>a feel of luxury</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                     <div class="footer-widget footer-widget-margin-1 footer-list mb-40">
                        <h3 class="footer-title"><?php echo e(__('Information')); ?></h3>
                        <ul>
                           <li><a href="<?php echo e(route('about')); ?>"><?php echo e(__('About')); ?></a></li>
                           <li><a href="<?php echo e(route('contact')); ?>"><?php echo e(__('Contact')); ?></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                     <div class="footer-widget footer-list mb-40">
                        <h3 class="footer-title"><?php echo e(__('Catalog')); ?></h3>
                        <ul>
                           <?php echo $__env->make('partials.footer_nav', $categories, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                     <div class="footer-widget footer-widget-margin-2 footer-address mb-40">
                        <h3 class="footer-title"><?php echo e(__('Get in touch')); ?></h3>
                        <ul>
                           <li><span><?php echo e(__('Address')); ?>: </span>
                              <a href="https://goo.gl/maps/cX5341zdwVrg3hEn6?coh=178573&entry=tt">
                                 <?php echo e(__('Bunyodkor 15/1 street')); ?>,<br>
                                 <?php echo e(__('Chilonzor district, Tashkent')); ?></a></li>
                           <li><span><?php echo e(__('Telephone Enquiry')); ?>:</span> <a href="tel:+998900977020">+998900977020</a>
                           </li>
                        </ul>
                        <div class="open-time">
                           <p><?php echo e(__('Assistance hours')); ?> : <span>9:00 </span> - <span>19:00 </span></p>
                           <p><?php echo e(__('Open')); ?> : <?php echo e(__('Monday')); ?> - <?php echo e(__('Saturday')); ?></p>
                           <p><?php echo e(__('Sunday')); ?> : <span>10:00 </span> - <span>18:00 </span></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="container">
         <div class="footer-bottom copyright text-center">
            <p>Copyright <b>lazurit.uz</b> ©2023 All rights reserved.</p>
         </div>
      </div>
   </footer>
   <!-- Mobile Menu start -->
   <div class="off-canvas-active">
      <a class="off-canvas-close"><i class="ti-close"></i></a>
      <div class="off-canvas-wrap">
         <div class="mobile-menu-wrap off-canvas-margin-padding-2">
            <div id="mobile-menu" class="slinky-mobile-menu text-left">
               <ul>
                  <li>
                     <a class="text-uppercase" href="<?php echo e(route('home')); ?>"><?php echo e(__('Home')); ?></a>
                  </li>
                  <li>
                     <a class="text-uppercase" href="javascript:void(0)"><?php echo e(__('Catalog')); ?></a>
                     <ul>
                        <?php echo $__env->make('partials.header_nav', $categories, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                     </ul>
                  </li>
                  <li>
                     <a class="text-uppercase" href="<?php echo e(route('about')); ?>"><?php echo e(__('About')); ?></a>
                  </li>
                  <li>
                     <a class="text-uppercase" href="<?php echo e(route('contact')); ?>"><?php echo e(__('Contact')); ?></a>
                  </li>
                  <li>
                     <?php echo $__env->make('partials.locales', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </li>

               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- All JS is here -->
<script src="<?php echo e(asset('assets/js/vendor/modernizr-3.11.2.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/vendor/jquery-3.6.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/vendor/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/vendor/bootstrap.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/plugins/wow.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/scrollup.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/aos.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/magnific-popup.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/swiper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/jquery-ui.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/slinky.min.js')); ?>"></script>

<!-- Main JS -->
<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
<?php echo $__env->yieldContent('js'); ?>
<?php echo $__env->yieldContent('modals'); ?>
<script>
   $('.price-format').each(function() {
      let price = $(this).text();
      let formattedPrice = parseFloat(price).toLocaleString('fr');
      $(this).text(formattedPrice + ' sum');
   });
   $(document).ready(function () {
      setTimeout(() => {$(".alert").alert('close')}, 4000);
   });

   $(document).ready(function () {
      $('#sort_catalog').on('change', () => {
         document.forms['sort_form'].submit();
      });
   });

   function delete_product(product_id) {

      $.ajax({
         url: "<?php echo e(route('cart.delete')); ?>",
         type: 'DELETE',
         data: {
            _token: "<?php echo e(csrf_token()); ?>",
            product_id: product_id,
         },
         success: function (res) {
            let total = res.total.toLocaleString('fr')

            $('.product-count').html(res.count)
            $('.subtotal').html(total + ' sum')
            $('.total').html(total + ' sum')
            $('.product_' + product_id).remove()
            $('.flashs').html(res.flash)
            setTimeout(() => {
               $(".alert").alert('close')
            }, 4000)
            if (res.count === 0) {

               $('.cart-content').html('<i>Your cart is empty.</i>')

               $('.cart-area').remove()
               let empty_cart = `<div class="w-100 d-flex justify-content-center align-items-end"
                    style="background: url(<?php echo e(asset('assets/images/cart/empty-cart.png')); ?>) center no-repeat; height:75vh">
                    <a class="btn btn-dark mb-4" href="<?php echo e(route('home')); ?>"><?php echo e(__('Go to Home')); ?></a>
                    </div>
                  `
               $('.breadcrumb-area.cart').after(empty_cart)
            }
         }
      })

   }

   $(function () {
      $('#search_box').on('keyup', '#search', function () {
         let search_query = $(this).val();

         if (search_query.length >= 1) {
            $.ajax({
               type: 'POST',
               url: "<?php echo e(route('search')); ?>",
               data: {
                  _token: "<?php echo e(csrf_token()); ?>",
                  search: search_query,
               },
               success: function (res) {
                  $('#search_result').html(res);
               }
            });
         } else {
            $('#search_result').html('');
         }
      })
   });
   $(function () {
      $(document).on("click", "#pagination a", function () {

         //get url and make final url for ajax
         let url = $(this).attr("href");
         let append = url.indexOf("?") === -1 ? "?" : "&";
         let finalURL = url + append + $("#search").serialize();

         $.get(finalURL, {
              '_token': '<?php echo e(csrf_token()); ?>'
           },
           function (data) {
              $("#search_result").html(data);
           });
         return false;
      })

   });
   $(function () {

      $(document).on("submit", "#auth_form", function () {
         let e = this;
         let default_name = $(this).find("[type='submit']").html();

         $(this).find("[type='submit']").html("<?php echo e(__('Logging in...')); ?>");
         $(this).find(".text-danger").remove();
         $(this).find("input").removeClass('is-invalid')

         $.ajax({
            url: $(this).attr('action'),
            data: $(this).serialize(),
            type: 'POST',
            success: (response) => {
               window.location = response.redirectLink;
            },
            error: (response) => {

               let errors = response.responseJSON.errors;
               let form = ($(e).attr('action') === "<?php echo e(route('login')); ?>") ? '.login' : '.register';
               $.each(errors, function (field, error) {
                  (form === '.login' && field === 'phone')
                    ? field = 'name'
                    : ''

                  $(form).find(`[name=${field}]`).addClass('is-invalid').before(
                    '<div class="text-strong text-danger">'
                    + error +
                    '</div>')
               })
            }
         });
         $(e).find("[type='submit']").html(default_name);
         return false;
      });

   });
</script>
</body>

</html>
<?php /**PATH /var/www/resources/views/layouts/front.blade.php ENDPATH**/ ?>