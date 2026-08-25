@extends('layouts.app', [
    'title' => 'Educavo - Guía de Educación Climática y Mochila de Acción Climática',
    'variant' => 'home',
    'bodyClass' => 'home-style4',
])

@section('content')
<div class="main-content">
    <!-- Banner Section Start -->
    <div id="rs-banner" class="rs-banner style9">
        <div class="container relative">
            <div class="row">
                <div class="banner-content">
                    <h1 class="banner-title mb-20 ">Formamos Líderes Climáticos en el Aula Rural</h1>
                    <div class="desc mb-41">Guía de Educación Climática y Mochila de Acción Climática, en alianza con Enseña por Bolivia: liderazgo climático para estudiantes y educadores del área rural.</div>
                    <div class="banner-btn">
                        <a class="readon purple-btn" href="#rs-proyecto-climatico">Conoce el Proyecto</a>
                        <a class="readon purple-btn" href="{{ route('mochila') }}" target="_blank" rel="noopener">🎒 Mochila Interactiva 3D</a>
                    </div>
                </div>
                <div class="shape-img">
                    <div class="spiner one">

                        <img class="up-down-new " src="{{ asset('assets/images/banner/home11/shape/1.png') }}" alt="images">

                    </div>
                    <div class="spiner two">
                        <img class="left-right-new" src="{{ asset('assets/images/banner/home11/shape/2.png') }}" alt="images">

                    </div>
                    <div class="spiner three">
                        <img class="up-down-new " src="{{ asset('assets/images/banner/home11/shape/3.png') }}" alt="images">

                    </div>
                    <div class="spiner four">
                        <img class="left-right-new" src="{{ asset('assets/images/banner/home11/shape/4.png') }}" alt="images">

                    </div>
                </div>
            </div>
        </div>
        <div class="social-icon">
            <ul class="icon-cart">
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- Proyecto Climatico - Intro Start -->
    <div id="rs-proyecto-climatico" class="rs-about style3 pt-100 pb-70 md-pt-70 md-pb-40">
        <div class="container">
            <div class="row mb-40 md-mb-25">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="sec-title2 text-center">
                        <div class="sub-title">Proyecto en alianza con Enseña por Bolivia</div>
                        <h2 class="title purple-color mb-20">Guía de Educación Climática y la Mochila de Acción Climática</h2>
                        <div class="desc">
                            Un programa de liderazgo climático para formar líderes escolares rurales a
                            través de los Educadores Comunitarios (PEBs) de Enseña por Bolivia en La Paz
                            y Santa Cruz. Aprendizaje Basado en Proyectos y juegos pedagógicos analógicos
                            —sin necesidad de internet— contextualizados a problemáticas locales como la
                            escasez de agua, el manejo de residuos y la agricultura sostenible.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 mb-30">
                    <div class="cc-card text-center">
                        <div class="cc-icon mx-auto">
                            <img src="{{ asset('assets/images/categories/home11/icons/1.png') }}" alt="">
                        </div>
                        <h4><a class="cc-stretched" href="#rs-productos">77 PEBs</a></h4>
                        <p>Educadores comunitarios formados en 10 municipios de La Paz y 6 de Santa Cruz.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mb-30">
                    <div class="cc-card text-center">
                        <div class="cc-icon mx-auto">
                            <img src="{{ asset('assets/images/categories/home11/icons/2.png') }}" alt="">
                        </div>
                        <h4><a class="cc-stretched" href="#rs-productos">20 Kits "Mochila"</a></h4>
                        <p>Kits físicos y digitales completos con manual, infografías y juegos de rol.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mb-30">
                    <div class="cc-card text-center">
                        <div class="cc-icon mx-auto">
                            <img src="{{ asset('assets/images/categories/home11/icons/3.png') }}" alt="">
                        </div>
                        <h4><a class="cc-stretched" href="{{ route('mochila') }}">Mochila Interactiva 3D</a></h4>
                        <p>Explora en 3D el contenido de la mochila y colecciona letras, números y figuras.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-20">
                <div class="col-12 text-center">
                    <div class="btn-part">
                        <a class="readon purple-btn" href="{{ route('mochila') }}">🎒 Ver Mochila Interactiva 3D</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Proyecto Climatico - Intro End -->

        <!-- Impacto Counter Start -->
    <div id="rs-counter" class="pb-70 md-pb-40">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-30">
                    <div class="cc-card cc-stat text-center">
                        <h2 class="rs-count kplus">13</h2>
                        <p class="cc-stat-label mb-0">Estudiantes alcanzados por las Brigadas de ExB</p>
                    </div>
                </div>
                <div class="col-md-4 mb-30">
                    <div class="cc-card cc-stat text-center">
                        <h2 class="rs-count plus">100</h2>
                        <p class="cc-stat-label mb-0">Unidades educativas rurales</p>
                    </div>
                </div>
                <div class="col-md-4 mb-30">
                    <div class="cc-card cc-stat text-center">
                        <h2 class="rs-count">77</h2>
                        <p class="cc-stat-label mb-0">PEBs: 44 en La Paz, 33 en Santa Cruz</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Impacto Counter End -->

    <!-- Objetivo y Enfoque Start -->
    <div id="rs-objetivo" class="rs-about style11 pt-70 pb-100 md-pt-40 md-pb-70 gray-bg3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 md-mb-30">
                    <div class="img-part js-tilt cc-illustration">
                        <img src="{{ asset('assets/images/ilustracion-objetivo.svg') }}" alt="Estudiante rural liderando una acción climática, con su escuela y la Mochila de Acción Climática">
                    </div>
                </div>
                <div class="col-lg-6 pl-65 md-pl-15 col-md-12">
                    <div class="sec-title2">
                        <div class="sub-title">Objetivo General</div>
                        <h2 class="title purple-color mb-30">Liderazgo climático protagonizado por estudiantes rurales</h2>
                        <p class="desc mb-30">
                            Desarrollar y fortalecer una propuesta metodológica de educación y
                            liderazgo climático que promueva el protagonismo de estudiantes rurales
                            mediante los Agentes de Cambio y Brigadas Estudiantiles, contribuyendo a
                            la resiliencia territorial.
                        </p>
                        <p class="desc mb-45">
                            <strong>Enfoque pedagógico:</strong> metodología mixta, participativa y
                            vivencial, basada en el Aprendizaje Basado en Proyectos (ABP) y juegos
                            pedagógicos analógicos —sin necesidad de conexión a internet—
                            contextualizados a las problemáticas locales de cada comunidad.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Objetivo y Enfoque End -->

    <!-- Productos Start -->
    <div id="rs-productos" class="rs-about style3 pt-100 pb-70 md-pt-70 md-pb-40">
        <div class="container">
            <div class="row mb-40 md-mb-25">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="sec-title2 text-center">
                        <div class="sub-title">Plan de Trabajo</div>
                        <h2 class="title purple-color mb-20">3 Productos en 3 Meses</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="cc-card">
                        <div class="cc-icon">
                            <img src="{{ asset('assets/images/categories/home11/icons/4.png') }}" alt="">
                        </div>
                        <span class="cc-tag">Producto 1</span>
                        <h4>Diagnóstico y Línea Base</h4>
                        <p>
                            Encuestas de entrada por rango de edad (6–8, 9–12, 13–18 años) y de
                            capacidades pedagógicas para los 77 PEBs, con muestreo representativo
                            e informe final de brechas y recomendaciones.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="cc-card">
                        <div class="cc-icon">
                            <img src="{{ asset('assets/images/categories/home11/icons/5.png') }}" alt="">
                        </div>
                        <span class="cc-tag">Producto 2</span>
                        <h4><a href="{{ route('manual-peb') }}">20 Kits "Mochila de Acción Climática"</a></h4>
                        <p>
                            Manual del PEB con 30 actividades por nivel escolar, infografías,
                            hojas de trabajo y una caja de herramientas dinámicas con juegos de
                            rol sobre agua, residuos y resiliencia climática.
                        </p>
                        <div class="cc-card-links">
                            <a class="cc-btn" href="{{ route('manual-peb') }}">Ver Manual del PEB</a>
                            <a class="cc-btn" href="{{ route('glosario-climatico') }}">Ver Glosario</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="cc-card">
                        <div class="cc-icon">
                            <img src="{{ asset('assets/images/categories/home11/icons/6.png') }}" alt="">
                        </div>
                        <span class="cc-tag">Producto 3</span>
                        <h4>Talleres y Carpeta Técnica</h4>
                        <p>
                            Taller Formador de Formadores para el staff de ExB y talleres
                            vivenciales para los 77 PEBs, con planes de clase, presentaciones y
                            memorias del evento.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Productos End -->

    <!-- Cronograma Start -->
    <div id="rs-cronograma" class="pt-70 pb-80 md-pt-40 md-pb-50 gray-bg3">
        <div class="container">
            <div class="sec-title2 text-center mb-50 md-mb-30">
                <div class="sub-title">Cronograma</div>
                <h2 class="title purple-color">Ejecución en 3 Meses</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="cc-card cc-timeline">
                        <div class="cc-date-badge cc-date-1">
                            <span class="cc-date-day">18</span>
                            <span class="cc-date-month">Sep</span>
                        </div>
                        <h4 class="mb-0">Diagnóstico e informe de línea base</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="cc-card cc-timeline">
                        <div class="cc-date-badge cc-date-2">
                            <span class="cc-date-day">30</span>
                            <span class="cc-date-month">Sep</span>
                        </div>
                        <h4 class="mb-0">1ra revisión de los 20 Kits "Mochila"</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="cc-card cc-timeline">
                        <div class="cc-date-badge cc-date-3">
                            <span class="cc-date-day">30</span>
                            <span class="cc-date-month">Oct</span>
                        </div>
                        <h4 class="mb-0">Entrega final de Kits (físico y digital)</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="cc-card cc-timeline">
                        <div class="cc-date-badge cc-date-4">
                            <span class="cc-date-day">15</span>
                            <span class="cc-date-month">Nov</span>
                        </div>
                        <h4 class="mb-0">Talleres, Carpeta Técnica e informe final</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cronograma End -->

    <!-- Equipo Tecnico Start -->
    <div id="rs-equipo-tecnico" class="rs-team home11-style pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="sec-title2 text-center mb-50 md-mb-30">
                <div class="sub-title">Equipo Técnico</div>
                <h2 class="title purple-color">Quiénes Llevan Adelante el Proyecto</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="cc-card cc-team">
                        <div class="team-item">
                            <div class="team-thumbnail">
                                <div class="team-img">
                                    <img src="{{ asset('assets/images/banner/home11/alfredo.jpg') }}" alt="Alfredo Callizaya Gutierrez">
                                </div>
                                <div class="team-header">
                                    <h4 class="name mb-0">Alfredo Callizaya Gutierrez</h4>
                                    <span class="subject">Consultor Titular / Coordinador de Proyecto</span>
                                </div>
                            </div>
                        </div>
                        <p class="cc-bio-teaser">
                            Especialista en la intersección de Educación a Distancia, Desarrollo
                            de Sistemas y Tecnología Educativa.
                        </p>
                        <a class="cc-btn cc-btn-toggle" data-bs-toggle="collapse" href="#bio-alfredo" role="button" aria-expanded="false" aria-controls="bio-alfredo">
                            Conocer más <i class="fa fa-angle-down cc-chevron"></i>
                        </a>
                        <div class="collapse" id="bio-alfredo">
                            <p class="cc-bio-full">
                                Administra plataformas virtuales de aprendizaje (Moodle, Chamilo,
                                H5P, eXeLearning) y coordina la producción de materiales
                                pedagógicos digitales e impresos del proyecto, la coordinación
                                general y el cumplimiento estricto del cronograma y entregables.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="cc-card cc-team">
                        <div class="team-item">
                            <div class="team-thumbnail">
                                <div class="team-img">
                                    <img src="{{ asset('assets/images/banner/home11/mary.jpg') }}" alt="María Elena Avalos Choque">
                                </div>
                                <div class="team-header">
                                    <h4 class="name mb-0">María Elena Avalos Choque</h4>
                                    <span class="subject">Especialista Pedagógica</span>
                                </div>
                            </div>
                        </div>
                        <p class="cc-bio-teaser">
                            Licenciada en Psicología y en Ciencias de la Educación, con
                            experiencia en educación infantil y comunitaria en el área rural.
                        </p>
                        <a class="cc-btn cc-btn-toggle" data-bs-toggle="collapse" href="#bio-mary" role="button" aria-expanded="false" aria-controls="bio-mary">
                            Conocer más <i class="fa fa-angle-down cc-chevron"></i>
                        </a>
                        <div class="collapse" id="bio-mary">
                            <p class="cc-bio-full">
                                Experiencia en el Programa Pan Manitos (G.A.M.A.), el proyecto ECCD
                                de Fomento al Desarrollo Infantil (FODEI) y la Organización Mundial
                                para la Educación Preescolar (OMEP Bolivia). Diseña contenidos y
                                dinámicas pedagógicas adaptadas a cada rango etario del proyecto
                                (6–8, 9–12 y 13–18 años).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Equipo Tecnico End -->

</div>
@endsection
