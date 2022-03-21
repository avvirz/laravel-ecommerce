  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet"
      href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="{{ url('/') }}" class="nav-link">Website</a>
          </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          @guest
          @else
              <li class="nav dropdown">
                  @if (Auth::User()->profile && Auth::user()->profile->avatar_status == 1)
                      <a class="nav-link dropdown-toggle arrow" href="#" role="button" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false" v-pre><img src="{{ Auth::user()->profile->avatar }}"
                              height='30px' width="30px" alt="" class="rounded-circle user-avatar-nav nav-img-border"><span>
                              {{ Auth::user()->name }}</span></a>
                  @else
                      <a class="nav-link dropdown-toggle arrow" href="#" role="button" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false" v-pre><img src="{{ asset('dist/img/avtar.png') }}"
                              height='30px' width="30px" alt="" class="rounded-circle user-avatar-nav nav-img-border"><span>
                              {{ Auth::user()->name }}</span></a>
                  @endif
                  <span class="caret"></span>
                  <ul class="dropdown-menu">
                      <a class="nav-item nav-link {{ Request::is('profile/' . Auth::user()->name, 'profile/' . Auth::user()->name . '/edit') ? 'active' : null }}"
                          href="{{ url('/profile/' . Auth::user()->name) }}">
                          {!! trans('titles.profile') !!}
                      </a>
                      <a class="nav-item nav-link" href="{{ route('logout') }}"
                          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="logout-btn">
                          @csrf
                      </form>
                  </ul>
              @endguest
          </li>
      </ul>

  </nav>
