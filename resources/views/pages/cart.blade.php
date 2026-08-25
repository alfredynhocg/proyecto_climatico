@extends('layouts.app', [
    'title' => 'Cart - Educavo',
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
                    <h1 class="page-title">Cart</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

    		<!-- Cart Section Start -->
    	   <div class="rs-cart orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="cart-wrap">
                        <form>
                            <table class="cart-table">
                                <thead>
                                    <tr>
                                        <th class="product-remove"></th>
                                        <th class="product-thumbnail"></th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-remove"><a href="#"><i class="fa fa-close"></i></a></td>
                                        <td class="product-thumbnail"><a href="#"><img src="{{ asset('assets/images/shop/4.jpg') }}" alt=""></a></td>
                                        <td class="product-name"><a href="#">Medicine Bottle</a></td>
                                        <td class="product-price"><span>$</span>30.00</td>
                                        <td class="product-quantity"><input type="text" class="input-text" value="1" pattern="[0-9]*"></td>
                                        <td class="subtotal"><span class="amount"><span class="symbol">$</span>30.00</span></td>
                                    </tr>
                                    <tr>
                                        <td class="product-remove"><a href="#"><i class="fa fa-close"></i></a></td>
                                        <td class="product-thumbnail"><a href="#"><img src="{{ asset('assets/images/shop/5.jpg') }}" alt=""></a></td>
                                        <td class="product-name"><a href="#">Medicine Bottle</a></td>
                                        <td class="product-price"><span>$</span>30.00</td>
                                        <td class="product-quantity"><input type="text" class="input-text" value="1" pattern="[0-9]*"></td>
                                        <td class="subtotal"><span class="amount"><span class="symbol">$</span>30.00</span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" class="action text-end">
                                            <div class="coupon">
                                                <input type="text" name="text" placeholder="Coupon code" required="">
                                                <button type="submit" class="btn-shop apply-btn orange-color">apply coupon</button>
                                            </div>
                                            <div class="update-cart">
                                                <button class="btn-shop orange-color">Update cart</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        <div class="cart-collaterals pt-70 md-pt-50">
                            <div class="cart-totals">
                                <h5 class="title mb-25">Cart totals</h5>
                                <table class="cart-total-table">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td><span class="amount"><span>$</span>60.00</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td><strong><span class="amount"><span>$</span>60.00</span></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="wc-proceed-to-checkout">
                                    <button class="btn-shop orange-color"> Proceed to checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cart Section End --> 

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
