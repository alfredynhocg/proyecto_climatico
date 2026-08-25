@extends('layouts.app', [
    'title' => 'Contact Four - Educavo',
    'variant' => 'inner',
])

@section('content')
<div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{ asset('assets/images/breadcrumbs/6.jpg') }}" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color padding">
                    <h1 class="page-title">Contact 4</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li>Contact 4</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

    		<!-- Contact Section Start -->
    		<div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
            	<div class="container">
            		<div class="row contact-address-section">
        				<div class=" col-lg-4 col-md-12 lg-pl-0 md-mb-30">
        					<div class="contact-info contact-address">
        						<div class="icon-part">
        							<i class="fa fa-map-marker"></i>
        						</div>
        						<div class="content-part">
	        						<h5 class="info-subtitle">Address</h5>
	        						<h4 class="info-title">228-5 Main Street,<br>Georgia, USA </h4>
	        					</div>
        					</div>
        				</div>
        				<div class=" col-lg-4 col-md-12 md-mb-30">
        					<div class="contact-info contact-mail">
        						<div class="icon-part">
        							<i class="fa fa-envelope-o"></i>
        						</div>
        						<div class="content-part">
	        						<h5 class="info-subtitle">Email Address</h5>
	        						<h4 class="info-title"><a href="mailto:info@rstheme.com">info@rstheme.com</a></h4>
	        					</div>
        					</div>
        				</div>
        				<div class=" col-lg-4 col-md-12 lg-pr-0">
        					<div class="contact-info contact-phone">
        						<div class="icon-part">
        							<i class="fa fa-user-o"></i>
        						</div>
        						<div class="content-part">
	        						<h5 class="info-subtitle">Phone Number</h5>
	        						<h4 class="info-title"><a href="tel+0885898745">(+088)589-8745</a></h4>
	        					</div>
        					</div>
            			</div>
            		</div>
            		<div class="row">
            			<div class="col-lg-5 md-mb-30">
            				<div class="contact-map2">
                               <iframe src="https://maps.google.com/maps?q=mirpur%20stadium&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                            </div>
            			</div>
            			<div class="col-lg-7 pl-30 lg-pl-15">
			        	    <div class="rs-quick-contact new-style">
                                <div class="inner-part mb-50">
                                    <h2 class="title mb-15">Get In Touch</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, eius to mod
                                        tempor incidi dunt ut dolore.</p>
                                </div>
                                <div id="form-messages"></div>
                                <form id="contact-form" method="post" action="{{ route('contact.send') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                        </div> 
                                        <div class="col-lg-6 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="email" name="email" placeholder="Email" required="">
                                        </div>   
                                        <div class="col-lg-6 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone" required="">
                                        </div>   
                                        <div class="col-lg-6 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="subject" name="subject" placeholder="Subject" required="">
                                        </div>
                                     
                                        <div class="col-lg-12 mb-50">
                                            <textarea class="from-control" id="message" name="message" placeholder=" Message" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input class="btn-send" type="submit" value="Submit Now">
                                    </div>       
                                </form>
                            </div>
                        </div> 
            		</div>
            	</div>
            </div>
            <!-- Contact Section End --> 

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
