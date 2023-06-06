<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,initial-scale=1.0">

   <title><?php echo $__env->yieldContent('title'); ?></title>


   <!-- Icons -->
   <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
   <link rel="shortcut icon" href="<?php echo e(asset('assets/images/logo/logo-icon.webp')); ?>">\
   <link rel="apple-touch-icon" sizes="180x180"
         href="<?php echo e(asset('assets/images/logo/logo-icon.webp')); ?>">
   <!-- END Icons -->

   <!-- Fonts and Codebase framework -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap">
   <link rel="stylesheet" id="css-main" href="<?php echo e(asset('manager_assets/css/codebase.min.css')); ?>">
   <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
           integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
           crossorigin="anonymous"></script>
</head>
<style>
    @media only screen and (max-width: 500px) {
        .table th, td {
            padding: 0.4rem !important;
        }

        tbody, tbody a, tbody button, th {
            font-size: .7rem !important;
        }

        .block-content {
            padding: .7rem 0;
        }

        hr {
            margin: 0.2rem 0;
        }

    }

    @media only screen and (min-width: 500px) and (max-width: 768px) {
        .table th, td {
            padding: 0.4rem 0.4rem !important;
        }

        tbody, tbody a, tbody button, th {
            font-size: .75rem !important;
        }

        .block-content {
            padding: .9rem 0;
        }
    }
</style>
<body>
<!-- Page Container -->

<div id="page-container"
     class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
   <nav id="sidebar">
      <!-- Sidebar Content -->
      <div class="sidebar-content">
         <!-- Side Header -->
         <div class="content-header justify-content-lg-center">
            <!-- Logo -->
            <div>
            <span class="smini-visible fw-bold fs-lg tracking-wide">
              c<span class="text-primary">b</span>
            </span>
               <a class="fw-bold mx-auto tracking-wide" href="javascript:void(0)">
              <span class="smini-hidden">
                <i class="far fa-gem text-primary"></i>
                <span class="fs-4 text-dual">La</span><span class="fs-4 text-primary">zurit</span>
              </span>
               </a>
            </div>
            <!-- END Logo -->

            <!-- Options -->
            <div>
               <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout"
                       data-action="sidebar_close">
                  <i class="fa fa-fw fa-times"></i>
               </button>
               <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
         </div>
         <!-- END Side Header -->

         <!-- Sidebar Scrolling -->
         <div class="js-sidebar-scroll">
            <!-- Side User -->
            <div class="content-side content-side-user px-0 py-0">

               <!-- Visible only in normal mode -->
               <div class="smini-hidden mx-auto text-center">
                  <a class="img-link" href="<?php echo e(route('home')); ?>" target="_blank">
                     <img class="img-avatar"
                          src="<?php echo e(asset('manager_assets/media/avatars/nourpack_legend.png')); ?>"
                          alt="">
                  </a>
                  <ul class="list-inline mt-3 mb-0">
                     <li class="list-inline-item">
                        <a class="text-dual fs-sm"
                           href="<?php echo e(route('home')); ?>">
                           Go to <span class="text-primary-light">Lazurit</span><span class="small"> <i class="fa fa-arrow-right"></i></span>
                        </a>
                     </li>
                  </ul>
               </div>
               <!-- END Visible only in normal mode -->
            </div>
            <!-- END Side User -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
               <ul class="nav-main">
                  <li class="nav-main-heading">Pages</li>
                  <li class="nav-main-item">
                     <a class="nav-main-link" href="<?php echo e(route('manager')); ?>">
                        <i class="nav-main-link-icon fa-solid fa-chart-pie"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                     </a>
                     <a class="nav-main-link" href="<?php echo e(route('users')); ?>">
                        <i class="nav-main-link-icon fa fa-user"></i>
                        <span class="nav-main-link-name">Users</span>
                     </a>
                     <a class="nav-main-link" href="<?php echo e(route('products')); ?>">
                        <i class="nav-main-link-icon fa fa-diamond"></i>
                        <span class="nav-main-link-name">Products</span>
                     </a>
                     <a class="nav-main-link" href="<?php echo e(route('categories')); ?>">
                        <i class="nav-main-link-icon fa fa-list-alt"></i>
                        <span class="nav-main-link-name">Categories</span>
                     </a>
                     <a class="nav-main-link" href="<?php echo e(route('orders')); ?>">
                        <i class="nav-main-link-icon fa fa-pencil-square"></i>
                        <span class="nav-main-link-name">Orders</span>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- END Side Navigation -->
         </div>
         <!-- END Sidebar Scrolling -->
      </div>
      <!-- Sidebar Content -->
   </nav>
   <!-- END Sidebar -->

   <!-- Header -->
   <header id="page-header">
      <!-- Header Content -->
      <div class="content-header">
         <!-- Left Section -->
         <div class="space-x-1">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout"
                    data-action="sidebar_toggle">
               <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout"
                    data-action="dark_mode_toggle"><i class="fa fa-moon"></i> <i class="fa fa-sun"></i></button>
            <div style="border-radius: 5px"
                 class="bg-gray-light p-1 d-inline-block"> <?php echo $__env->make('partials.locales', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> </div>
         </div>
         <!-- END Left Section -->
      </div>
      <?php echo $__env->make('partials.flashs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="flashs"></div>
      <script>

         //script for autoclose alert /\
         //                           ||
         $(document).ready(function () {
            setTimeout(function () {
               $(".alert").alert('close');
            }, 1500);
         });
      </script>
   </header>
   <!-- END Header -->
   <!-- Main Container -->
   <div style="margin: 68px 0 0">
      <?php echo $__env->yieldContent('content'); ?>
   </div>
   <!-- END Main Container -->

   <!-- Footer -->
   <footer id="page-footer">
      <div class="content py-3">
         <div class="row fs-sm">
            <div class="col-sm-6 offset-sm-6 order-sm-2 text-sm-end py-1 text-center">
               Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold"
                                                                          href="https://t.me/nouracea" target="_blank">nour</a>
            </div>
         </div>
      </div>
   </footer>
   <!-- END Footer -->
</div>
<!-- END Page Container -->

<!--
        Codebase JS

        Core libraries and functionality
        webpack is putting everything together at <?php echo e(asset('manager_assets/_js/main/app.js')); ?>

   -->
<?php echo $__env->yieldContent('modals'); ?>

<script src="<?php echo e(asset('manager_assets/js/codebase.app.min.js')); ?>"></script>

<!-- Page JS Plugins -->
<script src="<?php echo e(asset('manager_assets/js/plugins/chart.js/chart.min.js')); ?>"></script>

<!-- Page JS Code -->
<script src="<?php echo e(asset('manager_assets/js/pages/be_pages_dashboard.min.js')); ?>"></script>

<script>
   $(document).on("submit", "#store", function () {

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
         success: function (data) {
            $('.flashs').html(data.flash)
            $(e).find("[type='submit']").html(submit_button_default_name);

            if (data.status) window.location = previous_url;

         },
         error: function (response) {

            errors = response.responseJSON.errors;
            $.each(errors, function (field_name, error) {
               field_name == 'en.name' ? field_name = 'en[name]' : ''
               field_name == 'en.description' ? field_name = 'en[description]' : ''
               field_name == 'ru.name' ? field_name = 'ru[name]' : ''
               field_name == 'ru.description' ? field_name = 'ru[description]' : ''

               $(e).find(`[name="${field_name}"]`).addClass(
                 'is-invalid').after(
                 '<div class="text-strong text-danger">' + error +
                 '</div>')
            })
         }
      });

      return false;
   });
</script>

<?php echo $__env->yieldContent('js'); ?>
</body>

</html>
<?php /**PATH C:\OSPanel\domains\lazurit\resources\views/manager/layouts/manager.blade.php ENDPATH**/ ?>