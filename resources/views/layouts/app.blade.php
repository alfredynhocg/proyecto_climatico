<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>{{ $title ?? 'Educavo' }}</title>
        <meta name="description" content="{{ $metaDescription ?? '' }}">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/fav.png') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/off-canvas.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/linea-fonts.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/flaticon.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/rsmenu-main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rs-spacing.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/climate.css') }}">

        @stack('styles')
    </head>
    <body class="{{ $bodyClass ?? 'defult-home' }}">

        @include('partials.preloader', ['variant' => $variant ?? 'inner'])

        @include('partials.'.(($variant ?? 'inner') === 'home' ? 'header-home' : 'header-inner'))

        @yield('content')

        @include('partials.'.(($variant ?? 'inner') === 'home' ? 'footer-home' : 'footer-inner'))

        <div id="scrollUp" class="{{ ($variant ?? 'inner') === 'home' ? 'purple-color' : 'orange-color' }}">
            <i class="fa fa-angle-up"></i>
        </div>

        @include('partials.search-modal')

        @include('partials.scripts')

        @stack('scripts')
    </body>
</html>
