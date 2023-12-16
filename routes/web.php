<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'loginView'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/signup', [AuthController::class, 'registerView']);

Route::get('/', [CommonController::class, 'homeView'])->name('home');
Route::get('/about', [CommonController::class, 'aboutView']);
Route::get('/contact', [CommonController::class, 'contactView']);

Route::get('/products', [ProductController::class, 'productsView']);
Route::get('/products/create', [ProductController::class, 'createView']);
Route::post('/products', [ProductController::class, 'create']);

Route::post('/orders/checkout', [OrderController::class, 'checkout']);
Route::post('/coupon/apply', [OrderController::class, 'applyCoupon']);

Route::get('/carts/{id}/delete', [CartController::class, 'delete'])->middleware('auth');
Route::get('/cart', [CartController::class, 'cartView'])->middleware('auth');
Route::post('/carts', [CartController::class, 'addProduct'])->middleware('auth');
Route::post('/carts/{action}', [CartController::class, 'updateQuantity'])->middleware('auth');

Route::get('/checkout', [OrderController::class, 'checkoutView'])->middleware('auth');
Route::get('/thankyou', [OrderController::class, 'checkoutSuccessView'])->middleware('auth');

Route::get('/testimonials', [TestimonialController::class, 'indexView']);


