@extends('layouts.app', [
    'title' => 'Gallery Three - Educavo',
    'variant' => 'inner',
])

@section('content')
<div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{ asset('assets/images/breadcrumbs/4.jpg') }}" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Gallery 3</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('home') }}">Educavo</a>
                        </li>
                        <li>Gallery 3</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

            <!-- Events Section Start -->
            <div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                   <div class="row margin-0">
                       <div class="col-lg-4 mb-0 padding-0 col-md-6">
                            <div class="gallery-img">
                                <a class="image-popup" href="{{ asset('assets/images/gallery/1.jpg') }}"><img src="{{ asset('assets/images/gallery/1.jpg') }}" alt=""></a>
                            </div>
                       </div>
                       <div class="col-lg-4 mb-0 padding-0 col-md-6">
                            <div class="gallery-img">
                                <a class="image-popup" href="{{ asset('assets/images/gallery/2.jpg') }}"><img src="{{ asset('assets/images/gallery/2.jpg') }}" alt=""></a>
                            </div>
                       </div>
                       <div class="col-lg-4 mb-0 padding-0 col-md-6">
                            <div class="gallery-img">                                
                                <a class="image-popup" href="{{ asset('assets/images/gallery/3.jpg') }}"><img src="{{ asset('assets/images/gallery/3.jpg') }}" alt=""></a>
                            </div>
                       </div>
                       <div class="col-lg-4 mb-0 padding-0 col-md-6">
                            <div class="gallery-img">                                
                                <a class="image-popup" href="{{ asset('assets/images/gallery/4.jpg') }}"><img src="{{ asset('assets/images/gallery/4.jpg') }}" alt=""></a>
                            </div>
                       </div>
                       <div class="col-lg-4 mb-0 padding-0 col-md-6">
                            <div class="gallery-img">                                
                                <a class="image-popup" href="{{ asset('assets/images/gallery/5.jpg') }}"><img src="{{ asset('assets/images/gallery/5.jpg') }}" alt=""></a>
                            </div>
                       </div>
                       <div class="col-lg-4 mb-0 padding-0 col-md-6">
                            <div class="gallery-img">                                
                                <a class="image-popup" href="{{ asset('assets/images/gallery/6.jpg') }}"><img src="{{ asset('assets/images/gallery/6.jpg') }}" alt=""></a>
                            </div>
                       </div>
                       <div class="col-lg-4 mb-0 padding-0 col-md-6">
                            <div class="gallery-img">                                
                                <a class="image-popup" href="{{ asset('assets/images/gallery/7.jpg') }}"><img src="{{ asset('assets/images/gallery/7.jpg') }}" alt=""></a>
                            </div>
                       </div>
                       <div class="col-lg-4 mb-0 padding-0 col-md-6">
                            <div class="gallery-img">                                
                                <a class="image-popup" href="{{ asset('assets/images/gallery/8.jpg') }}"><img src="{{ asset('assets/images/gallery/8.jpg') }}" alt=""></a>
                            </div>
                       </div>
                       <div class="col-lg-4 mb-0 padding-0 col-md-6">
                            <div class="gallery-img">                                
                                <a class="image-popup" href="{{ asset('assets/images/gallery/9.jpg') }}"><img src="{{ asset('assets/images/gallery/9.jpg') }}" alt="Image"></a>
                            </div>
                       </div>
                       <div class="col-lg-4 padding-0 col-md-6 md-mb-0">
                            <div class="gallery-img">                                
                                <a class="image-popup" href="{{ asset('assets/images/gallery/10.jpg') }}"><img src="{{ asset('assets/images/gallery/10.jpg') }}" alt=""></a>
                            </div>
                       </div>
                       <div class="col-lg-4 padding-0 col-md-6 sm-mb-0">
                            <div class="gallery-img">                                
                                <a class="image-popup" href="{{ asset('assets/images/gallery/11.jpg') }}"><img src="{{ asset('assets/images/gallery/11.jpg') }}" alt=""></a>
                            </div>
                       </div> 
                       <div class="col-lg-4 padding-0 col-md-6">
                            <div class="gallery-img">                                
                                <a class="image-popup" href="{{ asset('assets/images/gallery/12.jpg') }}"><img src="{{ asset('assets/images/gallery/12.jpg') }}" alt=""></a>
                            </div>
                       </div>
                   </div>
                </div> 
            </div>
            <!-- Events Section End -->  

            
            <!-- Newsletter section start -->
            <div class="rs-newsletter style1 orange-color mb--90 sm-mb-0 sm-pb-70">
                <div class="container">
                    <div class="newsletter-wrap">
                        <div class="row y-middle">
                            <div class="col-lg-6 col-md-12 md-mb-30">
                               <div class="content-part">
                                   <div class="sec-title">
                                       <div class="title-icon md-mb-15">
                                           <img src="{{ asset('assets/images/newsletter.png') }}" alt="images">
                                       </div>
                                       <h2 class="title mb-0 white-color">Subscribe to Newsletter</h2>
                                   </div>
                               </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <form class="newsletter-form">
                                    <input type="email" name="email" placeholder="Enter Your Email" required="">
                                    <button type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Newsletter section end -->
        </div>
@endsection
