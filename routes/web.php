<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::get('/login', function () {
    return view('logins');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/signup', function () {
    return view('signups');
});
