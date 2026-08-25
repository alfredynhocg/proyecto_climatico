@extends('layouts.app', [
    'title' => 'Event One - Educavo',
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
                    <h1 class="page-title">Events</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('home') }}">Educavo</a>
                        </li>
                        <li>Events</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

		    <!-- Events Section Start -->
            <div class="rs-event orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mb-60 col-md-6">
                            <div class="event-item">
                                <div class="event-short">
                                   <div class="featured-img">
                                       <img src="{{ asset('assets/images/event/1.jpg') }}" alt="Image">
                                   </div>
                                   <div class="categorie">
                                       <a href="#">Recipes</a>
                                   </div>
                                   <div class="content-part">
                                       <div class="address"><i class="fa fa-map-o"></i> New Margania</div>
                                       <h4 class="title"><a href="#">Spicy Quince And Cranberry Chutney</a></h4>
                                       <p class="text">
                                           Bootcamp Events Description Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod...
                                       </p>
                                       <div class="event-btm">
                                           <div class="date-part">
                                               <div class="date">
                                                   <i class="fa fa-calendar-check-o"></i>
                                                   July 24, 2020 
                                               </div>
                                           </div>
                                           <div class="btn-part">
                                               <a href="#">Join Event</a>
                                           </div>
                                       </div>
                                   </div> 
                                </div>
                            </div>
                        </div>   
                        <div class="col-lg-4 mb-60 col-md-6">
                            <div class="event-item">
                                <div class="event-short">
                                   <div class="featured-img">
                                       <img src="{{ asset('assets/images/event/2.jpg') }}" alt="Image">
                                   </div>
                                   <div class="categorie">
                                       <a href="#">Recipes</a>
                                   </div>
                                   <div class="content-part">
                                       <div class="address"><i class="fa fa-map-o"></i> New Margania</div>
                                       <h4 class="title"><a href="#">Persim, Pomegran, And Massag Kale Salad</a></h4>
                                       <p class="text">
                                           Bootcamp Events Description Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod...
                                       </p>
                                       <div class="event-btm">
                                           <div class="date-part">
                                               <div class="date">
                                                   <i class="fa fa-calendar-check-o"></i>
                                                   July 24, 2020 
                                               </div>
                                           </div>
                                           <div class="btn-part">
                                               <a href="#">Join Event</a>
                                           </div>
                                       </div>
                                   </div> 
                                </div>
                            </div>
                        </div>   
                        <div class="col-lg-4 mb-60 col-md-6">
                            <div class="event-item">
                                <div class="event-short">
                                   <div class="featured-img">
                                       <img src="{{ asset('assets/images/event/3.jpg') }}" alt="Image">
                                   </div>
                                   <div class="categorie">
                                       <a href="#">Recipes</a>
                                   </div>
                                   <div class="content-part">
                                       <div class="address"><i class="fa fa-map-o"></i> New Margania</div>
                                       <h4 class="title"><a href="#">Essential Fall Fruits That Aren’t Apples</a></h4>
                                       <p class="text">
                                           Bootcamp Events Description Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod...
                                       </p>
                                       <div class="event-btm">
                                           <div class="date-part">
                                               <div class="date">
                                                   <i class="fa fa-calendar-check-o"></i>
                                                   July 24, 2020 
                                               </div>
                                           </div>
                                           <div class="btn-part">
                                               <a href="#">Join Event</a>
                                           </div>
                                       </div>
                                   </div> 
                                </div>
                            </div>
                        </div>   
                        <div class="col-lg-4 mb-60 col-md-6">
                            <div class="event-item">
                                <div class="event-short">
                                   <div class="featured-img">
                                       <img src="{{ asset('assets/images/event/4.jpg') }}" alt="Image">
                                   </div>
                                   <div class="categorie">
                                       <a href="#">Recipes</a>
                                   </div>
                                   <div class="content-part">
                                       <div class="address"><i class="fa fa-map-o"></i> New Margania</div>
                                       <h4 class="title"><a href="#">Seekers From Overcoming Failure</a></h4>
                                       <p class="text">
                                           Bootcamp Events Description Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod...
                                       </p>
                                       <div class="event-btm">
                                           <div class="date-part">
                                               <div class="date">
                                                   <i class="fa fa-calendar-check-o"></i>
                                                   July 24, 2020 
                                               </div>
                                           </div>
                                           <div class="btn-part">
                                               <a href="#">Join Event</a>
                                           </div>
                                       </div>
                                   </div> 
                                </div>
                            </div>
                        </div>   
                        <div class="col-lg-4 mb-60 col-md-6">
                            <div class="event-item">
                                <div class="event-short">
                                   <div class="featured-img">
                                       <img src="{{ asset('assets/images/event/5.jpg') }}" alt="Image">
                                   </div>
                                   <div class="categorie">
                                       <a href="#">Recipes</a>
                                   </div>
                                   <div class="content-part">
                                       <div class="address"><i class="fa fa-map-o"></i> New Margania</div>
                                       <h4 class="title"><a href="#">Best Technology  Graduation Ceremony.</a></h4>
                                       <p class="text">
                                           Bootcamp Events Description Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod...
                                       </p>
                                       <div class="event-btm">
                                           <div class="date-part">
                                               <div class="date">
                                                   <i class="fa fa-calendar-check-o"></i>
                                                   July 24, 2020 
                                               </div>
                                           </div>
                                           <div class="btn-part">
                                               <a href="#">Join Event</a>
                                           </div>
                                       </div>
                                   </div> 
                                </div>
                            </div>
                        </div>   
                        <div class="col-lg-4 mb-60 col-md-6">
                            <div class="event-item">
                                <div class="event-short">
                                   <div class="featured-img">
                                       <img src="{{ asset('assets/images/event/6.jpg') }}" alt="Image">
                                   </div>
                                   <div class="categorie">
                                       <a href="#">Recipes</a>
                                   </div>
                                   <div class="content-part">
                                       <div class="address"><i class="fa fa-map-o"></i> New Margania</div>
                                       <h4 class="title"><a href="#">Educational Technology and Mobile Learning</a></h4>
                                       <p class="text">
                                           Bootcamp Events Description Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod...
                                       </p>
                                       <div class="event-btm">
                                           <div class="date-part">
                                               <div class="date">
                                                   <i class="fa fa-calendar-check-o"></i>
                                                   July 24, 2020 
                                               </div>
                                           </div>
                                           <div class="btn-part">
                                               <a href="#">Join Event</a>
                                           </div>
                                       </div>
                                   </div> 
                                </div>
                            </div>
                        </div>   
                        <div class="col-lg-4 col-md-6 md-mb-30">
                            <div class="event-item">
                                <div class="event-short">
                                   <div class="featured-img">
                                       <img src="{{ asset('assets/images/event/7.jpg') }}" alt="Image">
                                   </div>
                                   <div class="categorie">
                                       <a href="#">Web Development</a>
                                   </div>
                                   <div class="content-part">
                                       <div class="address"><i class="fa fa-map-o"></i> New Margania</div>
                                       <h4 class="title"><a href="#">Job Seekers From Overcoming Failure</a></h4>
                                       <p class="text">
                                           Bootcamp Events Description Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod...
                                       </p>
                                       <div class="event-btm">
                                           <div class="date-part">
                                               <div class="date">
                                                   <i class="fa fa-calendar-check-o"></i>
                                                   July 24, 2020 
                                               </div>
                                           </div>
                                           <div class="btn-part">
                                               <a href="#">Join Event</a>
                                           </div>
                                       </div>
                                   </div> 
                                </div>
                            </div>
                        </div>   
                        <div class="col-lg-4 col-md-6 sm-mb-30">
                            <div class="event-item">
                                <div class="event-short">
                                   <div class="featured-img">
                                       <img src="{{ asset('assets/images/event/8.jpg') }}" alt="Image">
                                   </div>
                                   <div class="categorie">
                                       <a href="#">Computer Science</a>
                                   </div>
                                   <div class="content-part">
                                       <div class="address"><i class="fa fa-map-o"></i> New Margania</div>
                                       <h4 class="title"><a href="#">Educavo Learning Gala Day For Kids</a></h4>
                                       <p class="text">
                                           Bootcamp Events Description Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod...
                                       </p>
                                       <div class="event-btm">
                                           <div class="date-part">
                                               <div class="date">
                                                   <i class="fa fa-calendar-check-o"></i>
                                                   July 24, 2020 
                                               </div>
                                           </div>
                                           <div class="btn-part">
                                               <a href="#">Join Event</a>
                                           </div>
                                       </div>
                                   </div> 
                                </div>
                            </div>
                        </div>   
                        <div class="col-lg-4 col-md-6">
                            <div class="event-item">
                                <div class="event-short">
                                   <div class="featured-img">
                                       <img src="{{ asset('assets/images/event/9.jpg') }}" alt="Image">
                                   </div>
                                   <div class="categorie">
                                       <a href="#">Civil Engineering</a>
                                   </div>
                                   <div class="content-part">
                                       <div class="address"><i class="fa fa-map-o"></i> New Margania</div>
                                       <h4 class="title"><a href="#">Best Technology  Graduation Ceremony.</a></h4>
                                       <p class="text">
                                           Bootcamp Events Description Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod...
                                       </p>
                                       <div class="event-btm">
                                           <div class="date-part">
                                               <div class="date">
                                                   <i class="fa fa-calendar-check-o"></i>
                                                   July 24, 2020 
                                               </div>
                                           </div>
                                           <div class="btn-part">
                                               <a href="#">Join Event</a>
                                           </div>
                                       </div>
                                   </div> 
                                </div>
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
