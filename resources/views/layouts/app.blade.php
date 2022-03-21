<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Site Metas -->
    <title>
    @hasSection('template_title')@yield('template_title') | @endif
    {{ config('app.name', Lang::get('titles.app')) }}
</title>
<meta name="description" content="">
<meta name="author" content="Jeremy Kenedy">

<link rel="shortcut icon" href="{{ asset('logo.ico') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

{{-- <link href="{{!! asset('css/app.css') !!}}" rel="stylesheet"> --}}
<!-- Custom CSS -->
<!-- Site Icons and Images -->
{{-- <link rel="shortcut icon" href="{{ URL::asset('thewayshop/images/favicon.ico') }}" type="image/x-icon"> --}}
{{-- <link rel="apple-touch-icon" href="{{ asset('thewayshop/images/apple-touch-icon.png') }}"> --}}

<!-- Bootstrap CSS -->

<link rel="stylesheet" href="{{ asset('thewayshop/css/bootstrap.min.css') }}">
<!-- Site CSS -->
<link rel="stylesheet" href="{{ asset('thewayshop/css/style.css') }}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{ asset('thewayshop/css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('thewayshop/css/custom.css') }}">


{{-- End Custom CSS --}}
<!-- datatable css -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js" defer></script>
{{-- Fonts --}}
@yield('template_linked_fonts')
@yield('template_linked_css')

<style type="text/css">
    nav.navbar.bootsnav li.dropdown ul.dropdown-menu>li>a:hover {
        background-color: transparent;
        color: #d33b33;
    }

    .dropdown-item.active,
    .dropdown-item:active {
        color: #fff;
        text-decoration: none;
        background-color: transparent;
    }

    @yield('template_fastload_css') @if (Auth::User() && Auth::User()->profile && Auth::User()->profile->avatar_status == 0).user-avatar-nav {
        background: url({{ Gravatar::get(Auth::user()->email) }}) 50% 50% no-repeat;
        background-size: auto 100%;
    }

    @endif

</style>

{{-- Scripts --}}
<script>
    window.Laravel = {!! json_encode([
    'csrfToken' => csrf_token(),
]) !!};
</script>

@if (Auth::User() && Auth::User()->profile && $theme->link != null && $theme->link != 'null')
    <link rel="stylesheet" type="text/css" href="{{ $theme->link }}">
@endif

@yield('head')
@include('scripts.ga-analytics')
</head>

<body>
@include('partials.header')
@yield('content')
@include('partials.footer')


{{-- Scripts --}}

<script src="{{ asset('thewayshop/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('thewayshop/js/popper.min.js') }}"></script>
<script src="{{ asset('thewayshop/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('thewayshop/js/jquery.superslides.min.js') }}"></script>
<script src="{{ asset('thewayshop/js/bootstrap-select.js') }}"></script>
<script src="{{ asset('thewayshop/js/inewsticker.js') }}"></script>

{{-- Navigation bar dropdown --}}

<script src="{{ asset('thewayshop/js/bootsnav.js') }}"></script>
<script src="{{ asset('thewayshop/js/images-loded.min.js') }}"></script>
<script src="{{ asset('thewayshop/js/isotope.min.js') }}"></script>
<script src="{{ asset('thewayshop/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('thewayshop/js/baguetteBox.min.js') }}"></script>
<script src="{{ asset('thewayshop/js/form-validator.min.js') }}"></script>
<script src="{{ asset('thewayshop/js/jquery-ui.js') }}"></script>
<script src="{{ asset('thewayshop/js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('thewayshop/js/contact-form-script.js') }}"></script>
<script src="{{ asset('thewayshop/js/custom.js') }}"></script>

@yield('footer_scripts')
</body>

</html>
