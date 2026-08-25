@extends('layouts.app', [
    'title' => 'Team One - Educavo',
    'variant' => 'inner',
])

@section('content')
<div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{ asset('assets/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Team One</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li>Team One</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Team Section Start -->
            <div id="rs-team" class="rs-team style1 orange-color pt-94 pb-100 md-pt-64 md-pb-70 white-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 mb-30">
                            <div class="team-item">
                                <img src="{{ asset('assets/images/team/1.jpg') }}" alt="">
                                <div class="content-part">
                                    <h4 class="name"><a href="{{ route('team-single') }}">Jhon Pedrocas</a></h4>
                                    <span class="designation">Professor</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-30">
                            <div class="team-item">
                                <img src="{{ asset('assets/images/team/2.jpg') }}" alt="">
                                <div class="content-part">
                                    <h4 class="name"><a href="{{ route('team-single') }}">Jesika Albenian</a></h4>
                                    <span class="designation">Professor</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-30">
                            <div class="team-item">
                                <img src="{{ asset('assets/images/team/3.jpg') }}" alt="">
                                <div class="content-part">
                                    <h4 class="name"><a href="{{ route('team-single') }}">Alex Anthony</a></h4>
                                    <span class="designation">Professor</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 md-mb-30">
                            <div class="team-item">
                                <img src="{{ asset('assets/images/team/1.jpg') }}" alt="">
                                <div class="content-part">
                                    <h4 class="name"><a href="{{ route('team-single') }}">Jhon Pedrocas</a></h4>
                                    <span class="designation">Professor</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 xs-mb-30">
                            <div class="team-item">
                                <img src="{{ asset('assets/images/team/2.jpg') }}" alt="">
                                <div class="content-part">
                                    <h4 class="name"><a href="{{ route('team-single') }}">Jesika Albenian</a></h4>
                                    <span class="designation">Professor</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="team-item">
                                <img src="{{ asset('assets/images/team/3.jpg') }}" alt="">
                                <div class="content-part">
                                    <h4 class="name"><a href="{{ route('team-single') }}">Alex Anthony</a></h4>
                                    <span class="designation">Professor</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team Section End -->

            
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
