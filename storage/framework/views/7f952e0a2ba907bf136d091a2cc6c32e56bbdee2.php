<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $__env->yieldContent('title'); ?></title>

  <meta name="description"
    content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
  <meta name="author" content="pixelcave">
  <meta name="robots" content="noindex, nofollow">

  <!-- Open Graph Meta -->
  <meta property="og:title" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework">
  <meta property="og:site_name" content="Codebase">
  <meta property="og:description"
    content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <!-- Icons -->
  <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
  <link rel="shortcut icon" href="<?php echo e(asset('manager_assets/media/favicons/favicon.png')); ?>">
  <link rel="icon" type="image/png" sizes="192x192"
    href="<?php echo e(asset('manager_assets/media/favicons/favicon-192x192.png')); ?>">
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo e(asset('manager_assets/media/favicons/apple-touch-icon-180x180.png')); ?>">
  <!-- END Icons -->

  <!-- Stylesheets -->

  <!-- Fonts and Codebase framework -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap">
  <link rel="stylesheet" id="css-main" href="<?php echo e(asset('manager_assets/css/codebase.min.css')); ?>">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

</head>

<body>
  <!-- Page Container -->

  <div id="page-container"
    class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
    <!-- Side Overlay-->
    <aside id="side-overlay">
      <!-- Side Header -->
      <div class="content-header">
        <!-- User Avatar -->
        <a class="img-link me-2" href="be_pages_generic_profile.html">
          <img class="img-avatar img-avatar32" src="<?php echo e(asset('manager_assets/media/avatars/avatar15.jpg')); ?>"
            alt="">
        </a>
        <!-- END User Avatar -->

        <!-- User Info -->
        <a class="link-fx text-body-color-dark fw-semibold fs-sm" href="be_pages_generic_profile.html">
          John Smith
        </a>
        <!-- END User Info -->

        <!-- Close Side Overlay -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <button type="button" class="btn btn-sm btn-alt-danger ms-auto" data-toggle="layout"
          data-action="side_overlay_close">
          <i class="fa fa-fw fa-times"></i>
        </button>
        <!-- END Close Side Overlay -->
      </div>
      <!-- END Side Header -->

      <!-- Side Content -->
      <div class="content-side">
        <!-- Search -->
        <div class="pull-t pull-x block">
          <div class="block-content block-content-full block-content-sm bg-body-light">
            <form action="be_pages_generic_search.html" method="POST">
              <div class="input-group">
                <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search"
                  placeholder="Search..">
                <button type="submit" class="btn btn-secondary">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
        <!-- END Search -->

        <!-- Mini Stats -->
        <div class="pull-x block">
          <div class="block-content block-content-full block-content-sm bg-body-light">
            <div class="row text-center">
              <div class="col-4">
                <div class="fs-sm fw-semibold text-uppercase text-muted">Clients</div>
                <div class="fs-4">460</div>
              </div>
              <div class="col-4">
                <div class="fs-sm fw-semibold text-uppercase text-muted">Sales</div>
                <div class="fs-4">728</div>
              </div>
              <div class="col-4">
                <div class="fs-sm fw-semibold text-uppercase text-muted">Earnings</div>
                <div class="fs-4">$7,860</div>
              </div>
            </div>
          </div>
        </div>
        <!-- END Mini Stats -->

        <!-- Friends -->
        <div class="pull-x block">
          <div class="block-header bg-body-light">
            <h3 class="block-title">
              <i class="fa fa-fw fa-users me-1 opacity-50"></i> Friends
            </h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle"
                data-action-mode="demo">
                <i class="si si-refresh"></i>
              </button>
              <button type="button" class="btn-block-option" data-toggle="block-option"
                data-action="content_toggle"></button>
            </div>
          </div>
          <div class="block-content">
            <ul class="nav-users">
              <li>
                <a href="be_pages_generic_profile.html">
                  <img class="img-avatar" src="<?php echo e(asset('manager_assets/media/avatars/avatar7.jpg')); ?>" alt="">
                  <i class="fa fa-circle text-success"></i>
                  <div>Megan Fuller</div>
                  <div class="fw-normal fs-xs text-muted">Photographer</div>
                </a>
              </li>
              <li>
                <a href="be_pages_generic_profile.html">
                  <img class="img-avatar" src="<?php echo e(asset('manager_assets/media/avatars/avatar11.jpg')); ?>"
                    alt="">
                  <i class="fa fa-circle text-success"></i>
                  <div>Carl Wells</div>
                  <div class="fw-normal fs-xs text-muted">Web Designer</div>
                </a>
              </li>
              <li>
                <a href="be_pages_generic_profile.html">
                  <img class="img-avatar" src="<?php echo e(asset('manager_assets/media/avatars/avatar7.jpg')); ?>"
                    alt="">
                  <i class="fa fa-circle text-warning"></i>
                  <div>Carol Ray</div>
                  <div class="fw-normal fs-xs text-muted">UI Designer</div>
                </a>
              </li>
              <li>
                <a href="be_pages_generic_profile.html">
                  <img class="img-avatar" src="<?php echo e(asset('manager_assets/media/avatars/avatar10.jpg')); ?>"
                    alt="">
                  <div>Ryan Flores</div>
                  <div class="fw-normal fs-xs text-muted">Copywriter</div>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- END Friends -->

        <!-- Activity -->
        <div class="pull-x block">
          <div class="block-header bg-body-light">
            <h3 class="block-title">
              <i class="far fa-fw fa-clock me-1 opacity-50"></i> Activity
            </h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle"
                data-action-mode="demo">
                <i class="si si-refresh"></i>
              </button>
              <button type="button" class="btn-block-option" data-toggle="block-option"
                data-action="content_toggle"></button>
            </div>
          </div>
          <div class="block-content">
            <ul class="list list-activity mb-0">
              <li>
                <i class="si si-wallet text-success"></i>
                <div class="fs-sm fw-semibold">+$29 New sale</div>
                <div class="fs-sm">
                  <a href="javascript:void(0)">Admin Template</a>
                </div>
                <div class="fs-xs text-muted">5 min ago</div>
              </li>
              <li>
                <i class="si si-close text-danger"></i>
                <div class="fs-sm fw-semibold">Project removed</div>
                <div class="fs-sm">
                  <a href="javascript:void(0)">Best Icon Set</a>
                </div>
                <div class="fs-xs text-muted">26 min ago</div>
              </li>
              <li>
                <i class="si si-pencil text-info"></i>
                <div class="fs-sm fw-semibold">You edited the file</div>
                <div class="fs-sm">
                  <a href="javascript:void(0)">
                    <i class="fa fa-file-alt"></i> Docs.doc
                  </a>
                </div>
                <div class="fs-xs text-muted">3 hours ago</div>
              </li>
              <li>
                <i class="si si-plus text-success"></i>
                <div class="fs-sm fw-semibold">New user</div>
                <div class="fs-sm">
                  <a href="javascript:void(0)">StudioWeb - View Profile</a>
                </div>
                <div class="fs-xs text-muted">5 hours ago</div>
              </li>
              <li>
                <i class="si si-wrench text-warning"></i>
                <div class="fs-sm fw-semibold">App v5.5 is available</div>
                <div class="fs-sm">
                  <a href="javascript:void(0)">Update now</a>
                </div>
                <div class="fs-xs text-muted">8 hours ago</div>
              </li>
              <li>
                <i class="si si-user-follow text-pulse"></i>
                <div class="fs-sm fw-semibold">+1 Friend Request</div>
                <div class="fs-sm">
                  <a href="javascript:void(0)">Accept</a>
                </div>
                <div class="fs-xs text-muted">1 day ago</div>
              </li>
            </ul>
          </div>
        </div>
        <!-- END Activity -->

        <!-- Settings -->
        <div class="pull-x block">
          <div class="block-header bg-body-light">
            <h3 class="block-title">
              <i class="fa fa-fw fa-wrench me-1 opacity-50"></i> Settings
            </h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-toggle="block-option"
                data-action="content_toggle"></button>
            </div>
          </div>
          <div class="block-content block-content-full">
            <div class="mb-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value=""
                  id="side-overlay-settings-security-status" name="side-overlay-settings-security-status" checked>
                <label class="form-check-label fw-medium" for="side-overlay-settings-security-status">Online
                  Status</label>
                <div class="fs-sm text-muted">Show your status to all</div>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value=""
                  id="side-overlay-settings-security-verify" name="side-overlay-settings-security-verify">
                <label class="form-check-label fw-medium" for="side-overlay-settings-security-verify">Verify on
                  Login</label>
                <div class="fs-sm text-muted">Most secure option</div>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value=""
                  id="side-overlay-settings-security-updates" name="side-overlay-settings-security-updates" checked>
                <label class="form-check-label fw-medium" for="side-overlay-settings-security-updates">Auto
                  Updates</label>
                <div class="fs-sm text-muted">Keep app updated</div>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value=""
                  id="side-overlay-settings-security-notifications"
                  name="side-overlay-settings-security-notifications" checked>
                <label class="form-check-label fw-medium"
                  for="side-overlay-settings-security-notifications">Notifications</label>
                <div class="fs-sm text-muted">For every transaction</div>
              </div>
            </div>
            <div class="mb-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value=""
                  id="side-overlay-settings-security-api" name="side-overlay-settings-security-api" checked>
                <label class="form-check-label fw-medium" for="side-overlay-settings-security-api">API Access</label>
                <div class="fs-sm text-muted">Enable access from third party apps</div>
              </div>
            </div>
            <div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value=""
                  id="side-overlay-settings-security-2fa" name="side-overlay-settings-security-2fa">
                <label class="form-check-label fw-medium" for="side-overlay-settings-security-2fa">Two Factor
                  Auth</label>
                <div class="fs-sm text-muted">Using an authenticator</div>
              </div>
            </div>
          </div>
        </div>
        <!-- END Settings -->
      </div>
      <!-- END Side Content -->
    </aside>
    <!-- END Side Overlay -->
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
            <a class="fw-bold mx-auto tracking-wide" href="#">
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
            <!-- Visible only in mini mode -->
            <div class="smini-visible-block animated fadeIn px-3">
              <img class="img-avatar img-avatar32"
                src="<?php echo e(asset('manager_assets/media/avatars/nourpack_legend.png')); ?>" alt="">
            </div>
            <!-- END Visible only in mini mode -->

            <!-- Visible only in normal mode -->
            <div class="smini-hidden mx-auto text-center">
              <a class="img-link" href="<?php echo e(route('home')); ?>" target="_blank">
                <img class="img-avatar" src="<?php echo e(asset('manager_assets/media/avatars/nourpack_legend.png')); ?>"
                  alt="">
              </a>
              <ul class="list-inline mt-3 mb-0">
                <li class="list-inline-item">
                  <a class="text-dual fs-sm fw-semibold text-uppercase" href="<?php echo e(route('home')); ?>">Lazurit</a><span
                    class="small"> by nour <i class="fa fa-heart text-danger"></i></span>
                </li>
              </ul>
            </div>
            <!-- END Visible only in normal mode -->
          </div>
          <!-- END Side User -->

          <!-- Side Navigation -->
          <div class="content-side content-side-full">
            <ul class="nav-main">
              <li class="nav-main-heading">User Interface</li>
              <li class="nav-main-item">
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
          <?php echo $__env->make('partials.locales', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- END Left Section -->
      </div>
      <?php echo $__env->make('partials.flashs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="flashs"></div>
      <script>

        //script for autoclose alert /\
        //                           ||
        $(document).ready(function() {
          setTimeout(function() {
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
              href="https://t.me/nourcantfly" target="_blank">nour</a>
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
  <?php echo $__env->yieldContent('js'); ?>
</body>

</html>
<?php /**PATH C:\OSPanel\domains\lazurit\resources\views/manager/layouts/manager.blade.php ENDPATH**/ ?>