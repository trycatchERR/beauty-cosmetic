<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'loginView'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/signup', [AuthController::class, 'registerView']);
Route::post('/signup', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/', [CommonController::class, 'homeView'])->name('home');
Route::get('/about', [CommonController::class, 'aboutView']);
Route::get('/contact', [CommonController::class, 'contactView']);

Route::get('/products', [ProductController::class, 'productsView']);
Route::get('/products/create', [ProductController::class, 'createView'])->middleware('auth');
Route::post('/products', [ProductController::class, 'create']);

Route::get('/profile', [UserController::class, 'profileView'])->middleware('auth');

Route::post('/orders/checkout', [OrderController::class, 'checkout'])->middleware('auth');
Route::get('/history', [OrderController::class, 'historyView'])->middleware('auth');
Route::post('/coupon/apply', [OrderController::class, 'applyCoupon'])->middleware('auth');

Route::get('/carts/{id}/delete', [CartController::class, 'delete'])->middleware('auth');
Route::get('/cart', [CartController::class, 'cartView'])->middleware('auth');
Route::post('/carts', [CartController::class, 'addProduct'])->middleware('auth');
Route::post('/carts/{action}', [CartController::class, 'updateQuantity'])->middleware('auth');

Route::get('/checkout', [OrderController::class, 'checkoutView'])->middleware('auth');
Route::get('/thankyou', [OrderController::class, 'checkoutSuccessView'])->middleware('auth');

Route::get('/testimonials', [TestimonialController::class, 'indexView'])->middleware('auth');
Route::post('/testimonials', [TestimonialController::class, 'create'])->middleware('auth');


