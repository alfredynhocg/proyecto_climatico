<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/mochila-3d', 'pages.mochila')->name('mochila');
Route::view('/manual-peb', 'pages.manual-peb')->name('manual-peb');
Route::view('/glosario-climatico', 'pages.glosario-climatico')->name('glosario-climatico');

Route::view('/about', 'pages.about')->name('about');
Route::view('/about-2', 'pages.about2')->name('about2');

Route::view('/courses', 'pages.course')->name('course');
Route::view('/courses-2', 'pages.course2')->name('course2');
Route::view('/courses-3', 'pages.course3')->name('course3');
Route::view('/courses-4', 'pages.course4')->name('course4');
Route::view('/courses-5', 'pages.course5')->name('course5');
Route::view('/courses/single', 'pages.course-single')->name('course-single');

Route::view('/team', 'pages.team')->name('team');
Route::view('/team-2', 'pages.team2')->name('team2');
Route::view('/team/single', 'pages.team-single')->name('team-single');

Route::view('/events/one', 'pages.events-style1')->name('events-style1');
Route::view('/events/two', 'pages.events-style2')->name('events-style2');
Route::view('/events/three', 'pages.events-style3')->name('events-style3');

Route::view('/gallery/one', 'pages.gallery-style1')->name('gallery-style1');
Route::view('/gallery/two', 'pages.gallery-style2')->name('gallery-style2');
Route::view('/gallery/three', 'pages.gallery-style3')->name('gallery-style3');

Route::view('/shop', 'pages.shop')->name('shop');
Route::view('/shop/single', 'pages.shop-single')->name('shop-single');
Route::view('/cart', 'pages.cart')->name('cart');
Route::view('/checkout', 'pages.checkout')->name('checkout');

Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/404', 'pages.error')->name('error');
Route::view('/login', 'pages.login')->name('login');
Route::view('/register', 'pages.register')->name('register');

Route::view('/blog', 'pages.blog')->name('blog');
Route::view('/blog/left-sidebar', 'pages.blog-left')->name('blog-left');
Route::view('/blog/right-sidebar', 'pages.blog-right')->name('blog-right');
Route::view('/blog/post-left', 'pages.blog-post-left')->name('blog-post-left');
Route::view('/blog/post-right', 'pages.blog-post-right')->name('blog-post-right');
Route::view('/blog/single', 'pages.blog-single')->name('blog-single');

Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/contact-2', 'pages.contact2')->name('contact2');
Route::view('/contact-3', 'pages.contact3')->name('contact3');
Route::view('/contact-4', 'pages.contact4')->name('contact4');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
