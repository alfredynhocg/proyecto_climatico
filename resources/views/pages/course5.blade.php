@extends('layouts.app', [
    'title' => 'Courses Five - Educavo',
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
                    <h1 class="page-title">Course Grid 02</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li>Course</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Popular Courses Section Start -->
            <div class="rs-latest-couses orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-40">
                            <div class="course-item">
                                <div class="course-image">
                                  <a href="#">
                                      <img src="{{ asset('assets/images/courses/home6/style1/1.png') }}" alt="images">
                                  </a>
                                </div>
                                <div class="course-info">
                                 <ul class="meta-part">
                                     <li><span class="price">$55.00</span></li>
                                     <li class="user"><i class="fa fa-user"></i> 245</li>
                                 </ul>
                                    <h3 class="course-title">
                                        <a href="{{ route('course-single') }}">
                                            Introduction to Javascript
                                            for Beginners
                                        </a>
                                    </h3>
                                    <div class="bottom-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-part">
                                            <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-40">
                            <div class="course-item">
                                <div class="course-image">
                                  <a href="{{ route('course-single') }}">
                                      <img src="{{ asset('assets/images/courses/home6/style1/2.png') }}" alt="images">
                                  </a>
                                </div>
                                <div class="course-info">
                                 <ul class="meta-part">
                                     <li><span class="price">$55.00</span></li>
                                     <li class="user"><i class="fa fa-user"></i> 245</li>
                                 </ul>
                                    <h3 class="course-title">
                                        <a href="{{ route('course-single') }}">From Zero to Hero with Advance Nodejs</a>
                                    </h3>
                                    <div class="bottom-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-part">
                                            <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-40">
                            <div class="course-item">
                                <div class="course-image">
                                  <a href="#">
                                      <img src="{{ asset('assets/images/courses/home6/style1/3.png') }}" alt="images">
                                  </a>
                                </div>
                                <div class="course-info">
                                 <ul class="meta-part">
                                     <li><span class="price">$55.00</span></li>
                                     <li class="user"><i class="fa fa-user"></i> 245</li>
                                 </ul>
                                    <h3 class="course-title">
                                        <a href="{{ route('course-single') }}">Learning jQuery Mobile for Beginners</a>
                                    </h3>
                                    <div class="bottom-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-part">
                                            <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-40">
                            <div class="course-item">
                                <div class="course-image">
                                  <a href="#">
                                      <img src="{{ asset('assets/images/courses/home6/style1/4.png') }}" alt="images">
                                  </a>
                                </div>
                                <div class="course-info">
                                 <ul class="meta-part">
                                     <li><span class="price">$55.00</span></li>
                                     <li class="user"><i class="fa fa-user"></i> 245</li>
                                 </ul>
                                    <h3 class="course-title">
                                        <a href="{{ route('course-single') }}">Become a PHP Master and Make Money</a>
                                    </h3>
                                    <div class="bottom-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-part">
                                            <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 md-mb-40">
                            <div class="course-item">
                                <div class="course-image">
                                  <a href="#">
                                      <img src="{{ asset('assets/images/courses/home6/style1/5.png') }}" alt="images">
                                  </a>
                                </div>
                                <div class="course-info">
                                 <ul class="meta-part">
                                     <li><span class="price">$55.00</span></li>
                                     <li class="user"><i class="fa fa-user"></i> 245</li>
                                 </ul>
                                    <h3 class="course-title">
                                        <a href="{{ route('course-single') }}">The Art of Black and White Photography</a>
                                    </h3>
                                    <div class="bottom-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-part">
                                            <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="course-item">
                                <div class="course-image">
                                  <a href="#">
                                      <img src="{{ asset('assets/images/courses/home6/style1/6.png') }}" alt="images">
                                  </a>
                                </div>
                                <div class="course-info">
                                 <ul class="meta-part">
                                     <li><span class="price">$55.00</span></li>
                                     <li class="user"><i class="fa fa-user"></i> 245</li>
                                 </ul>
                                    <h3 class="course-title">
                                        <a href="{{ route('course-single') }}">Introduction to Javascript for Beginners</a>
                                    </h3>
                                    <div class="bottom-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-part">
                                            <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Popular Courses Section End -->

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
