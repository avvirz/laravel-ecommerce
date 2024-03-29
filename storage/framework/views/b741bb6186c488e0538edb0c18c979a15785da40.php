  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/jqvmap/jqvmap.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('dist/css/adminlte.min.css')); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/daterangepicker/daterangepicker.css')); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/summernote/summernote-bs4.min.css')); ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo e(asset('../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">
  
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

       <!-- <?php if (Auth::check() && Auth::user()->hasRole('admin')): ?>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo trans('titles.adminDropdownNav'); ?>

            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item <?php echo e((Request::is('roles') || Request::is('permissions')) ? 'active' : null); ?>" href="<?php echo e(route('laravelroles::roles.index')); ?>">
                    <?php echo trans('titles.laravelroles'); ?>

                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item <?php echo e(Request::is('users', 'users/' . Auth::user()->id, 'users/' . Auth::user()->id . '/edit') ? 'active' : null); ?>" href="<?php echo e(url('/users')); ?>">
                    <?php echo trans('titles.adminUserList'); ?>

                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item <?php echo e(Request::is('users/create') ? 'active' : null); ?>" href="<?php echo e(url('/users/create')); ?>">
                    <?php echo trans('titles.adminNewUser'); ?>

                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item <?php echo e(Request::is('themes','themes/create') ? 'active' : null); ?>" href="<?php echo e(url('/themes')); ?>">
                    <?php echo trans('titles.adminThemesList'); ?>

                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item <?php echo e(Request::is('logs') ? 'active' : null); ?>" href="<?php echo e(url('/logs')); ?>">
                    <?php echo trans('titles.adminLogs'); ?>

                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item <?php echo e(Request::is('activity') ? 'active' : null); ?>" href="<?php echo e(url('/activity')); ?>">
                    <?php echo trans('titles.adminActivity'); ?>

                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item <?php echo e(Request::is('phpinfo') ? 'active' : null); ?>" href="<?php echo e(url('/phpinfo')); ?>">
                    <?php echo trans('titles.adminPHP'); ?>

                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item <?php echo e(Request::is('routes') ? 'active' : null); ?>" href="<?php echo e(url('/routes')); ?>">
                    <?php echo trans('titles.adminRoutes'); ?>

                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item <?php echo e(Request::is('active-users') ? 'active' : null); ?>" href="<?php echo e(url('/active-users')); ?>">
                    <?php echo trans('titles.activeUsers'); ?>

                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item <?php echo e(Request::is('blocker') ? 'active' : null); ?>" href="<?php echo e(route('laravelblocker::blocker.index')); ?>">
                    <?php echo trans('titles.laravelBlocker'); ?>

                </a>
            </div>
        </li>
        <?php endif; ?> -->

      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Contact</a>
      </li>
    
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <?php if(auth()->guard()->guest()): ?>
      <?php else: ?>
      <li class="nav dropdown">
          <?php if((Auth::User()->profile) && Auth::user()->profile->avatar_status == 1): ?>
           <a  class="nav-link dropdown-toggle arrow" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><img src="<?php echo e(Auth::user()->profile->avatar); ?>" height='30px' width="30px" style="border-radius: 50%" alt="" class="rounded-circle user-avatar-nav"><span> <?php echo e(Auth::user()->name); ?></span></a>
          <?php else: ?>
            
               <a  class="nav-link dropdown-toggle arrow" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><img src="<?php echo e(asset('dist/img/avtar.png')); ?>"height='30px' width="30px" style="border-radius: 50%" alt="" class="rounded-circle user-avatar-nav"><span> <?php echo e(Auth::user()->name); ?></span></a>
            
          <?php endif; ?>
           <span class="caret"></span>
          <ul class="dropdown-menu">
              <a class="nav-item nav-link <?php echo e(Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'active' : null); ?>" href="<?php echo e(url('/profile/'.Auth::user()->name)); ?>">
              <?php echo trans('titles.profile'); ?>

              </a>
              <a class="nav-item nav-link" href="<?php echo e(route('logout')); ?>"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              <?php echo e(__('Logout')); ?>

              </a>
              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                  <?php echo csrf_field(); ?>
              </form>
          </ul>
      <?php endif; ?>
     </li>
    </ul>
    
  </nav><?php /**PATH /var/www/html/laravel-auth/resources/views/partials/admin/navbar.blade.php ENDPATH**/ ?>