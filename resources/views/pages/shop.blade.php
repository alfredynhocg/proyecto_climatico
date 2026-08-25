@extends('layouts.app', [
    'title' => 'Shop - Educavo',
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
                    <h1 class="page-title">Shop</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li>Shop</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

    	   <!--Shop part start-->
            <div class="rs-shop-part orange-color pt-130 pb-130 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row rs-vertical-middle shorting mb-25">
                        <div class="col-sm-6 col-12">
                            <p class="woocommerce-result-count">Showing 1-9 of 12 results</p>
                        </div>
                        <div class="col-sm-6 col-12">
                            <select class="from-control">
                                <option>Default sorting</option>
                                <option>Sort by popularity</option>
                                <option>Sort by average rating</option>
                                <option>Sort by lates</option>
                                <option>Sort by price: low to high</option>
                                <option>Sort by price: high to low</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 mb-53">
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
                        <div class="col-lg-4 col-md-6 col-12 mb-53">
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
                        <div class="col-lg-4 col-md-6 col-12 mb-53">
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
                        <div class="col-lg-4 col-md-6 col-12 mb-53">
                            <div class="product-list">
                                <div class="image-product">
                                    <img src="{{ asset('assets/images/shop/9.jpg') }}" alt="">
                                    <div class="overley">
                                        <a href="#"><i class="flaticon-basket"></i></a>
                                    </div>
                                    <span class="onsale">sale!</span>
                                </div>
                                <div class="content-desc text-center">
                                    <h2 class="loop-product-title pt-15"><a href="#">Stethoscope</a></h2>
                                    <span class="price">$25.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-53">
                            <div class="product-list">
                                <div class="image-product">
                                    <img src="{{ asset('assets/images/shop/11.jpg') }}" alt="">
                                    <div class="overley">
                                    <a href="#"><i class="flaticon-basket"></i></a>
                                    </div>
                                </div>
                                <div class="content-desc text-center">
                                    <h2 class="loop-product-title pt-15"><a href="#">Urinary System</a></h2>
                                    <span class="price">$20.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-53">
                            <div class="product-list">
                                <div class="image-product">
                                    <img src="{{ asset('assets/images/shop/1.jpg') }}" alt="">
                                    <div class="overley">
                                    <a href="#"><i class="flaticon-basket"></i></a>
                                    </div>
                                </div>
                                <div class="content-desc text-center">
                                    <h2 class="loop-product-title pt-15"><a href="#">Presser Machine</a></h2>
                                    <span class="price">$25.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-53">
                            <div class="product-list">
                                <div class="image-product">
                                    <img src="{{ asset('assets/images/shop/2.jpg') }}" alt="">
                                    <div class="overley">
                                        <a href="#"><i class="flaticon-basket"></i></a>
                                    </div>
                                </div>
                                <div class="content-desc text-center">
                                    <h2 class="loop-product-title pt-15"><a href="#">Digital Mechanics</a></h2>
                                    <span class="price">$20.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-53">
                            <div class="product-list">
                                <div class="image-product">
                                    <img src="{{ asset('assets/images/shop/9.jpg') }}" alt="">
                                    <div class="overley">
                                        <a href="#"><i class="flaticon-basket"></i></a>
                                    </div>
                                    <span class="onsale">sale!</span>
                                </div>
                                <div class="content-desc text-center">
                                    <h2 class="loop-product-title pt-15"><a href="#">Oxygen Mask</a></h2>
                                    <span class="price">$20.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-53">
                            <div class="product-list">
                                <div class="image-product">
                                    <img src="{{ asset('assets/images/shop/10.jpg') }}" alt="">
                                    <div class="overley">
                                        <a href="#"><i class="flaticon-basket"></i></a>
                                    </div>
                                </div>
                                <div class="content-desc text-center">
                                    <h2 class="loop-product-title pt-15"><a href="#">Tablet Medicine</a></h2>
                                    <span class="price">$20.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagenav-link orange-color text-center">
                        <ul>
                            <li>1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#"><i class="flaticon-next"></i></a></li>
                        </ul>
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
