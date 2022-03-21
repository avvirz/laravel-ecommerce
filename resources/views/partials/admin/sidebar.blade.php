<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/home') }}" class="brand-link">
        <?php

        use App\Http\Controllers\admin\SettingsController;
        use App\Models\Settings;
        $dynamicData = SettingsController::dynamicContent();
        //dd($logo);
        ?>
        @foreach ($dynamicData as $key => $logo)
            <img src="{{ asset('imagesuser/' . $logo->logo) }}" class="brand-image img-circle"
                style="border-radius:50%">
        @endforeach
        <span class="brand-text">The Way Shop</span>
    </a>

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            @if (Auth::User()->profile && Auth::user()->profile->avatar_status == 1)
                <img src="{{ Auth::user()->profile->avatar }}" height='30px' width="30px" style="border-radius: 50%"
                    alt="" class="rounded-circle ml-2"><span class="ml-2" style="color:aliceblue">
                    {{ Auth::user()->name }}</span>
        </div>
        <div class="info">
        @else
            <img src="{{ asset('dist/img/avtar.png') }}" height='30px' width="30px" style="border-radius: 50%" alt=""
                class="rounded-circle ml-2">
            <span class="ml-2" style="color:white">{{ Auth::user()->name }}</span>
            @endif
        </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ url('/home') }}" class="nav-link {{ Request::is('home')?'active':'' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link {{ Request::is('home/category')||Request::is('home/category/create')?'active':'' }}">
                    <i class="nav-icon fas fa-copyright"></i>
                    <p>
                        Categories Management
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('category.index') }}" class="nav-link {{ Request::is('home/category')?'active':'' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('category.create') }}" class="nav-link {{ Request::is('home/category/create')?'active':'' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link {{ Request::is('home/product')||Request::is('home/product/create')?'active':'' }}">
                    <i class="nav-icon fab fa-product-hunt"></i>
                    <p>
                        Products Management
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('product.index') }}" class="nav-link {{ Request::is('home/product')?'active':'' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('product.create') }}" class="nav-link {{ Request::is('home/product/create')?'active':'' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('adminCart.index') }}" class="nav-link {{ Request::is('home/adminCart')?'active':'' }}">
                    <i class="nav-icon fas fa-shopping-cart"></i>
                    <p>
                        Cart Management
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('address.index') }}" class="nav-link {{ Request::is('home/address')?'active':'' }}">
                    <i class="nav-icon fas fa-address-card"></i>
                    <p>
                        Address
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('orders.index') }}" class="nav-link {{ Request::is('home/orders')?'active':'' }}">
                    <i class="nav-icon fas fa-truck"></i>
                    <p>
                        Order Management
                    </p>
                </a>
            </li>
            {{-- ckeditor --}}
            <li class="nav-item">
                <a href="" class="nav-link {{ Request::is('blogs')||Request::is('blogs/create')?'active':'' }}">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Pages
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('blogs.index') }}" class="nav-link {{ Request::is('blogs')?'active':'' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('blogs.create') }}" class="nav-link {{ Request::is('blogs/create')?'active':'' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add</p>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- ckeditor // --}}
            {{-- Settings --}}
            <li class="nav-item">
                <a href="{{ route('settings.index') }}" class="nav-link {{ Request::is('home/settings')?'active':'' }}">
                    <i class="nav-icon fas fa-cogs"></i>
                    <p>
                        Settings
                    </p>
                </a>
            </li>
            {{-- Settings // --}}
            {{-- newletter --}}
            <li class="nav-item">
                <a href="{{ url('offer') }}" class="nav-link {{ Request::is('offer')?'active':'' }}">
                    <i class="nav-icon fas fa-envelope"></i>
                    <p>
                        Email
                    </p>
                </a>
            </li>
            {{-- newsletter// --}}
            <!-- user administration -->
            <li class="nav-item">
                <a class="nav-link {{ Request::is('users', 'users/' . Auth::user()->id, 'users/' . Auth::user()->id . '/edit') ?'active': null }}"
                    href="{{ url('/users') }}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>{!! trans('titles.adminUserList') !!}</p>
                </a>
            </li>
            <!-- user administration // -->
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
