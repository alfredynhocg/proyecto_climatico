<!--Full width header Start-->
<div class="full-width-header header-style3 home11-modify2">
    <!--Header Start-->
    <header id="rs-header" class="rs-header">
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="logo-part hidden-md">
                <a class="light-logo" href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo-climate-dark.svg') }}" alt="">
                </a>
                <a class="small-logo" href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo-climate-dark.svg') }}" alt="">
                </a>
            </div>
            <div class="container">
                <div class="responsive-logo">
                    <img src="{{ asset('assets/images/logo-climate-icon.svg') }}" alt="Proyecto Climático">
                </div>
                <div class="rs-menu-area">
                    <div class="main-menu">
                        <div class="mobile-menu">
                            <a class="rs-menu-toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                        <nav class="rs-menu">
                           <ul class="nav-menu">
                              <li class="{{ request()->routeIs('home') ? 'current-menu-item' : '' }}">
                                  <a href="{{ route('home') }}">Inicio</a>
                              </li>

                               <li>
                                   <a href="{{ route('home') }}#rs-proyecto-climatico">Proyecto Climático</a>
                               </li>

                               <li class="{{ request()->routeIs('manual-peb') ? 'current-menu-item' : '' }}">
                                   <a href="{{ route('manual-peb') }}">Manual del PEB</a>
                               </li>

                               <li class="{{ request()->routeIs('glosario-climatico') ? 'current-menu-item' : '' }}">
                                   <a href="{{ route('glosario-climatico') }}">Glosario Climático</a>
                               </li>

                               <li class="{{ request()->routeIs('mochila') ? 'current-menu-item' : '' }}">
                                   <a href="{{ route('mochila') }}">Mochila Interactiva 3D</a>
                               </li>
                           </ul> <!-- //.nav-menu -->
                        </nav>
                    </div> <!-- //.main-menu -->
                </div>
            </div>
        </div>
        <!-- Menu End -->

        <!-- Canvas Menu start -->
        <nav class="right_menu_togle hidden-md">
            <div class="close-btn">
                <div id="nav-close">
                    <div class="line">
                        <span class="line1"></span><span class="line2"></span>
                    </div>
                </div>
            </div>
            <div class="canvas-logo">
                <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo-climate-dark.svg') }}" alt="logo"></a>
            </div>
            <div class="offcanvas-text">
                <p>We denounce with righteous indige nationality and dislike men who are so beguiled and demo  by the charms of pleasure of the moment data com so blinded by desire.</p>
            </div>
            <div class="offcanvas-gallery">
                @for ($i = 1; $i <= 6; $i++)
                <div class="gallery-img">
                    <a class="image-popup" href="{{ asset('assets/images/gallery/'.$i.'.jpg') }}"><img src="{{ asset('assets/images/gallery/'.$i.'.jpg') }}" alt=""></a>
                </div>
                @endfor
            </div>
            <div class="map-img">
                <img src="{{ asset('assets/images/map.jpg') }}" alt="">
            </div>
            <div class="canvas-contact">
                <ul class="social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </nav>
        <!-- Canvas Menu end -->
    </header>
    <!--Header End-->
</div>
<!--Full width header End-->
