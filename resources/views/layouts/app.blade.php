<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>{{ $title ?? 'Educavo' }}</title>
        <meta name="description" content="{{ $metaDescription ?? '' }}">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" type="image/svg+xml" href="{{ asset('assets/images/logo-climate-icon.svg') }}">
        <link rel="alternate icon" href="{{ asset('assets/images/fav.png') }}">

        {{-- Combined from bootstrap/font-awesome/animate/owl.carousel/slick/off-canvas (same
             files, same order — just merged into one request to cut render-blocking round trips). --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor-a1.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/linea-fonts.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/flaticon.css') }}">
        {{-- Combined from magnific-popup/rsmenu-main/rs-spacing --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor-a2.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
        {{-- Combined from responsive.css + our climate.css --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor-b.css') }}">

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
