@extends('layouts.app', [
    'title' => 'Team Single - Educavo',
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
                    <h1 class="page-title">Team Single</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li>Team Single</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

            <!-- Profile Section -->
            <section class="profile-section orange-color pt-100 pb-100 md-pt-70 md-pb-70"> 
                <div class="container">                   
                    <div class="row clearfix">
                        <!-- Image Section -->
                        <div class="image-column col-lg-5 md-mb-50">
                            <div class="inner-column mb-50 md-mb-0">
                                <div class="image">
                                    <img src="{{ asset('assets/images/team/2.jpg') }}" alt="" />
                                </div>
                                <div class="team-content text-center">
                                    <h3>Eliena Rose</h3>
                                    <div class="text">Chief Instructor</div>
                                    <ul class="personal-info">
                                        <li class="email">
                                            <span><i class="glyph-icon flaticon-email"> </i> </span>
                                            <a href="mailto:info@yourwebsite.com">info@yourwebsite.com</a>
                                        </li>
                                        <li class="phone">
                                            <span><i class="glyph-icon flaticon-call"></i></span>
                                            <a href="tel:+088-589-8745">(+088) 589-8745</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="social-box">
                                    <a href="#" class="fa fa-facebook-square"></a>
                                    <a href="#" class="fa fa-twitter-square"></a>
                                    <a href="#" class="fa fa-linkedin-square"></a>
                                    <a href="#" class="fa fa-github"></a>
                                </div>
                            </div>
                        </div>                      
                        <!-- Content Section -->
                        <div class="content-column col-lg-7 pl-60 pt-50 md-pl-15 md-pt-0">
                            <div class="inner-column">
                                <h2>Eliena Rose</h2>
                                <h4>A certified instructor From Educavo</h4>
                                <!-- Student List -->
                                <ul class="student-list">
                                    <li>23,564 Total Students</li>
                                    <li><span class="theme_color">4.5</span> <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span> (1254 Rating)</li>
                                    <li>256 Reviews</li>
                                </ul>
                                <h5>About Me</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat</p>
                                <div class="team-skill mb-50">
                                    <h3 class="skill-title">Our Teacher Skill:</h3>
                                    <div class="row">
                                        <div class="col-md-6 sm-mb-20">
                                            <div class="progress rs-progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                                    <span class="pb-label">Accounting</span>
                                                    <span class="pb-percent">95%</span>
                                                </div>
                                            </div>
                                            <div class="progress rs-progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                                    <span class="pb-label">Reading</span>
                                                    <span class="pb-percent">85%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="progress rs-progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width:88%">
                                                    <span class="pb-label">Writing</span>
                                                    <span class="pb-percent">88%</span>
                                                </div>
                                            </div>
                                            <div class="progress rs-progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                                    <span class="pb-label">Speaking</span>
                                                    <span class="pb-percent">75%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="content-part">
                                <h3 class="title">25 That Prevent Job Seekers From Overcoming Failure</h3>
                                <p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur.I was skeptical of SEO and content marketing at first, but the Lorem Ipsum Company not only proved itself financially speaking, but the response I have received from customers is incredible.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
