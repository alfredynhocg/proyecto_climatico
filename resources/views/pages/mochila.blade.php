@extends('layouts.app', [
    'title' => 'Mochila Interactiva 3D - Educavo',
    'variant' => 'inner',
])

@push('styles')
@vite(['resources/js/mochila-3d.js'])
@endpush

@section('content')
<div class="main-content">

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="{{ asset('assets/images/breadcrumb-clima.svg') }}" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Mochila Interactiva 3D</h1>
            <ul>
                <li>
                    <a class="active" href="{{ route('home') }}">Home</a>
                </li>
                <li>Mochila Interactiva 3D</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <div class="rs-about style3 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row mb-40 md-mb-25">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="sec-title2 text-center">
                        <div class="sub-title">Aprende Jugando</div>
                        <h2 class="title purple-color mb-20">Nuestra Mochila Mágica</h2>
                        <div class="desc">
                            Gira la mochila, haz clic para abrirla y descubre lo que hay dentro.
                            Atrapa los íconos climáticos que flotan a su alrededor — cada uno
                            revela un dato real del Glosario Climático de la Mochila de Acción Climática.
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="mochila-stage" data-mochila-root>
                        <div class="mochila-loading" data-loading>
                            <div class="mochila-spinner"></div>
                            <span>Preparando la mochila...</span>
                        </div>

                        <div class="mochila-fallback" data-fallback>
                            <h4>Tu navegador no soporta gráficos 3D</h4>
                            <p>Prueba con una versión reciente de Chrome, Edge o Firefox para ver la mochila interactiva.</p>
                        </div>

                        <div class="mochila-tooltip" data-tooltip></div>

                        <div class="mochila-celebrate" data-celebrate>
                            <h4 data-celebrate-title>¡Aprendiste algo nuevo! 🎉</h4>
                            <p data-celebrate-text>Sigue coleccionando</p>
                        </div>

                        <div class="mochila-hud">
                            <div class="mochila-hud-top">
                                <div class="mochila-chip">
                                    🎒 <strong>Arrastra</strong>&nbsp;para girar &middot; clic para abrir
                                </div>
                                <div class="mochila-score">
                                    <span class="dot"></span>
                                    <span data-score>0 de 6 datos climáticos descubiertos</span>
                                </div>
                            </div>
                            <div class="mochila-hint" data-hint>
                                Haz clic en los íconos climáticos flotantes para descubrir datos curiosos
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-50 md-mt-30">
                <div class="col-lg-4 col-md-4 mb-30">
                    <div class="cc-card text-center">
                        <div class="cc-icon mx-auto">
                            <img src="{{ asset('assets/images/categories/home11/icons/1.png') }}" alt="">
                        </div>
                        <h4>Gira y explora</h4>
                        <p>Arrastra con el mouse o el dedo para ver la mochila desde todos los ángulos.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mb-30">
                    <div class="cc-card text-center">
                        <div class="cc-icon mx-auto">
                            <img src="{{ asset('assets/images/categories/home11/icons/2.png') }}" alt="">
                        </div>
                        <h4>Ábrela</h4>
                        <p>Haz clic sobre la mochila para abrir la solapa y descubrir el Manual del PEB, una hoja de trabajo y una plantita.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mb-30">
                    <div class="cc-card text-center">
                        <div class="cc-icon mx-auto">
                            <img src="{{ asset('assets/images/categories/home11/icons/3.png') }}" alt="">
                        </div>
                        <h4>Aprende jugando</h4>
                        <p>Atrapa los íconos climáticos flotantes y descubre datos reales del Glosario Climático.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Conecta con el Manual Start -->
    <div class="rs-cta home11-style pt-70 pb-70 md-pt-40 md-pb-40">
        <div class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
            <div class="content text-center">
                <div class="sec-title2 mb-30">
                    <div class="sub-title white-color">¿Te gustó jugar?</div>
                    <h2 class="title white-color">Esto es solo una probadita</h2>
                    <div class="desc white-color">
                        Cada ícono que recolectaste viene del Glosario Climático que acompaña al
                        Manual del PEB: 30 actividades pedagógicas completas, organizadas por edad,
                        listas para llevar al aula rural.
                    </div>
                </div>
                <div class="btn-part">
                    <a class="readon white-color" href="{{ route('manual-peb') }}">Ver Manual del PEB</a>
                    <a class="readon white-color" href="{{ route('glosario-climatico') }}">Ver Glosario Climático</a>
                    <a class="readon white-color" href="{{ route('home') }}">Volver al Inicio</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Conecta con el Manual End -->

</div>
@endsection
