<!-- Footer Start -->
<footer id="rs-footer" class="rs-footer home9-style main-home">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                    <div class="footer-logo mb-30">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo-climate-light.svg') }}" alt=""></a>
                    </div>
                      <div class="textwidget white-color pr-60 md-pr-15"><p>Guía de Educación Climática y Mochila de Acción Climática: liderazgo climático para estudiantes y educadores comunitarios del área rural, en alianza con Enseña por Bolivia.</p>
                      </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <h3 class="widget-title">Alianza</h3>
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
                <div class="col-lg-3 col-md-12 col-sm-12 pl-50 md-pl-15 footer-widget md-mb-50">
                    <h3 class="widget-title">El Proyecto</h3>
                    <ul class="site-map">
                        <li><a href="{{ route('home') }}#rs-proyecto-climatico">Resumen del Proyecto</a></li>
                        <li><a href="{{ route('manual-peb') }}">Manual del PEB</a></li>
                        <li><a href="{{ route('glosario-climatico') }}">Glosario Climático</a></li>
                        <li><a href="{{ route('mochila') }}">🎒 Mochila Interactiva 3D</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                    <h3 class="widget-title">Alcance</h3>
                    <ul class="site-map">
                        <li>13.000+ estudiantes alcanzados</li>
                        <li>100+ unidades educativas</li>
                        <li>77 PEBs (44 La Paz, 33 Santa Cruz)</li>
                        <li>16 municipios rurales</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-20">
                    <div class="copyright">
                        <p>&copy; {{ date('Y') }} Educavo · Guía de Educación Climática y Mochila de Acción Climática</p>
                    </div>
                </div>
                <div class="col-lg-6 text-end md-text-start">
                    <ul class="copy-right-menu">
                        <li><a href="{{ route('manual-peb') }}">Manual del PEB</a></li>
                        <li><a href="{{ route('glosario-climatico') }}">Glosario</a></li>
                        <li><a href="{{ route('mochila') }}">Mochila 3D</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
