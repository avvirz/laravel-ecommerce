<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo e(url('/home')); ?>" class="brand-link">
    <img src="<?php echo e(asset('dist/img/unnamed.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle" style="border-radius:50%">
    <span class="brand-text font-weight-light">TheWayShop</span>
  </a>

  <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <?php if((Auth::User()->profile) && Auth::user()->profile->avatar_status == 1): ?>
        <img src="<?php echo e(Auth::user()->profile->avatar); ?>" height='30px' width="30px" style="border-radius: 50%" alt="" class="rounded-circle ml-5"><span class="ml-2" style="color:aliceblue"> <?php echo e(Auth::user()->name); ?></span>
      </div>
      <div class="info" >
       <?php else: ?>
           <div class="user-avatar-nav"><span style="color:white"><?php echo e(Auth::user()->name); ?></span></div>
       <?php endif; ?>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?php echo e(url('/home')); ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>
              Categories Management
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo e(route('category.index')); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(route('category.create')); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>
              Products Management
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo e(route('product.index')); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(route('product.create')); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('adminCart.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>
              Cart Management
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('address.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>
              Address
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('orders.index')); ?>" class="nav-link">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>
              Order Management
            </p>
          </a>
        </li>
        <!-- user administration -->
        <li class="nav-item">
          <a class="nav-link <?php echo e(Request::is('users', 'users/' . Auth::user()->id, 'users/' . Auth::user()->id . '/edit') ? 'active' : null); ?>" href="<?php echo e(url('/users')); ?>">
            <i class="nav-icon fas fa-list-alt"></i>
            <p><?php echo trans('titles.adminUserList'); ?></p>
          </a>
        </li> 
        <!-- user administration // -->
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside><?php /**PATH /var/www/html/laravel-auth/resources/views/partials/admin/sidebar.blade.php ENDPATH**/ ?>