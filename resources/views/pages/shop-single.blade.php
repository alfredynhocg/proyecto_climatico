@extends('layouts.app', [
    'title' => 'Shop Single - Educavo',
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
                    <h1 class="page-title">Shop Single</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li>Shop Single</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Shop Single Start -->
        	<div id="rs-single-shop" class="rs-single-shop shop-rp orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 sm-mb-30">
                            <div class="single-product-image">
                                <div class="images-single">
                                    <img src="{{ asset('assets/images/shop/5.jpg') }}" alt="Single Product">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="single-price-info pl-30">
                                <h4 class="product-title">Medicine Bottle</h4>
                                <span class="single-price">$30.00</span>
                                <p class="some-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <form>
                                    <input type="number" class="input-text" step="1" min="1" value="1">
                                    <button class="btn-shop orange-color ml-10" type="submit">Add To cart</button>
                                </form>
                                <p class="category"><span>Category:</span><a href="#"> Business</a></p>
                            </div>
                        </div> 
                    </div>

                    <div class="tab-area">
                        <ul class="nav nav-tabs">
                            <li><a class="active" href="#one" data-bs-toggle="tab">Description</a></li>
                            <li><a href="#two" data-bs-toggle="tab">Reviews (0)</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="one">
                                <p class="dsc-p">A product can be classified as tangible or intangible. A tangible product is a physical object that can be perceived by touch such as a building, vehicle, gadget, or clothing. An intangible product is a product that can only be perceived indirectly such as an insurance policy</p>
                            </div><!-- #one -->

                            <div class="tab-pane" id="two">
                                <div class="reviews-grid">
                                    <div class="top-area">
                                        <p>There are no reviews yet.</p>
                                        <h6 class="mb-0">Be the first to review <b>Medicine Bottle</b> </h6>
                                    </div>

                                    <form class="comment-form" id="commentform">
                                        <p class="comment-notes">Your email address will not be published. Required fields are marked *</p>

                                        <div class="placeholder-cntrl">
                                            <label>Name *</label>
                                            <input type="text" name="name" size="30" required="">
                                        </div>
                                        <div class="placeholder-cntrl">
                                            <label>Email *</label>
                                            <input type="Email" name="email" size="30" required="">
                                        </div>
                                        <div class="ratings">Your rating
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="placeholder-cntrl">
                                            <label>Your review *</label>
                                            <textarea required=""></textarea>
                                        </div>
                                        <button class="btn-shop orange-color" type="submit">submit</button>
                                    </form>
                                </div>
                            </div><!-- #two -->
                        </div>
                    </div><!-- .tab-area -->
                </div>
            </div>
            <!-- Shop Single Start -->

            <!--Shop part end-->
            <div class="rs-shop-part orange-color pb-125 md-pb-75">
                <div class="container">
                    <h4 class="mb-40">Related products</h4>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 md-mb-45">
                            <div class="product-list">
                                <div class="image-product">
                                    <img src="{{ asset('assets/images/shop/4.jpg') }}" alt="">
                                    <div class="overley">
                                        <a href="#"><i class="flaticon-basket"></i></a>
                                    </div>
                                </div>
                                <div class="content-desc text-center">
                                    <h2 class="loop-product-title pt-15"><a href="#">Medicine Bottle</a></h2>
                                    <span class="price">$30.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 md-mb-45">
                            <div class="product-list">
                                <div class="image-product">
                                    <img src="{{ asset('assets/images/shop/5.jpg') }}" alt="">
                                    <div class="overley">
                                        <a href="#"><i class="flaticon-basket"></i></a>
                                    </div>
                                </div>
                                <div class="content-desc text-center">
                                    <h2 class="loop-product-title pt-15"><a href="#">Medicine Bottle</a></h2>
                                    <span class="price">$30.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="product-list">
                                <div class="image-product">
                                    <img src="{{ asset('assets/images/shop/7.jpg') }}" alt="">
                                    <div class="overley">
                                        <a href="#"><i class="flaticon-basket"></i></a>
                                    </div>
                                </div>
                                <div class="content-desc text-center">
                                    <h2 class="loop-product-title pt-15"><a href="#">Prescription Book</a></h2>
                                    <span class="price">$30.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Shop part end-->

            
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
