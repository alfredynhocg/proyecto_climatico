<!-- Footer Start -->
<footer id="rs-footer" class="rs-footer home11-style">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <h4 class="widget-title">El Proyecto</h4>
                    <ul class="site-map">
                        <li><a href="{{ route('home') }}#rs-proyecto-climatico">Resumen del Proyecto</a></li>
                        <li><a href="{{ route('home') }}#rs-objetivo">Objetivo y Enfoque</a></li>
                        <li><a href="{{ route('home') }}#rs-productos">Plan de Trabajo</a></li>
                        <li><a href="{{ route('home') }}#rs-cronograma">Cronograma</a></li>
                        <li><a href="{{ route('home') }}#rs-equipo-tecnico">Equipo Técnico</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <h4 class="widget-title">Recursos</h4>
                    <ul class="site-map">
                        <li><a href="{{ route('manual-peb') }}">Manual del PEB</a></li>
                        <li><a href="{{ route('glosario-climatico') }}">Glosario Climático</a></li>
                        <li><a href="{{ route('mochila') }}">🎒 Mochila Interactiva 3D</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <h4 class="widget-title">Alcance</h4>
                    <ul class="site-map">
                        <li>13.000+ estudiantes alcanzados</li>
                        <li>100+ unidades educativas</li>
                        <li>77 PEBs (44 La Paz, 33 Santa Cruz)</li>
                        <li>16 municipios rurales</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                    <h4 class="widget-title">Alianza</h4>
                    <ul class="address-widget">
                        <li>
                            <i class="flaticon-location"></i>
                            <div class="desc">La Paz y Santa Cruz, Bolivia</div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">En alianza con Enseña por Bolivia (ExB)</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-4 md-mb-20">
                    <div class="footer-logo md-text-center">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo-climate-light.svg') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8 md-mb-20">
                    <div class="copyright text-center md-text-start">
                       <p>© {{ date('Y') }} Educavo · Guía de Educación Climática y Mochila de Acción Climática, en alianza con Enseña por Bolivia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
