<?php

use App\Http\Controllers\Auth\ForgotPassword;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Pages\AccountController;
use App\Http\Controllers\Pages\CartController;
use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\ProductController;
use App\Http\Controllers\Pages\RentController;
use App\Http\Controllers\Pages\RentedController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'index'])->name('product');
Route::get('/products/show', [ProductController::class, 'show'])->name('product.show');
Route::get('/abouts', [AboutController::class, 'index'])->name('about');
Route::get('/contacts', [ContactController::class, 'index'])->name('contact');
Route::get('/accounts', [AccountController::class, 'index'])->name('account');

Route::get('/rents', [RentController::class, 'index'])->name('rent');

Route::get('/renteds', [RentedController::class, 'index'])->name('rented');
Route::get('/renteds/return', [RentedController::class, 'show'])->name('rented.show');

Route::get('/whislists', [CartController::class, 'index'])->name('whislist');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/forgot', [ForgotPassword::class, 'index'])->name('forgot.password');

Route::get('/ordered/{title}/{message}', function ($title, $message) {
    return view('components.success', compact('message', 'title'));
})->name('alert.rent');
