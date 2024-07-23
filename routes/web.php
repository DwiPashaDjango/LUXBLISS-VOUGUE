<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DesignerController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
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
Route::get('/products/{id}/see', [ProductController::class, 'show'])->name('product.show');
Route::get('/abouts', [AboutController::class, 'index'])->name('about');
Route::get('/contacts', [ContactController::class, 'index'])->name('contact');
Route::get('/accounts', [AccountController::class, 'index'])->name('account');

Route::get('/whislists', [CartController::class, 'index'])->name('whislist');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/check', [LoginController::class, 'login'])->name('login.check');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register/check', [RegisterController::class, 'register'])->name('register.check');

Route::get('/forgot', [ForgotPassword::class, 'index'])->name('forgot.password');

Route::get('/ordered/{title}/{message}', function ($title, $message) {
    return view('components.success', compact('message', 'title'));
})->name('alert.rent');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware(['role:Admin|Pengguna']);
    Route::prefix('admins')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['role:Admin']);

        Route::prefix('designers')->group(function () {
            Route::get('/', [DesignerController::class, 'index'])->name('designer');
            Route::get('/show/{id}', [DesignerController::class, 'show'])->name('designer.show');
            Route::post('/store', [DesignerController::class, 'store'])->name('designer.store');
            Route::post('/update', [DesignerController::class, 'update'])->name('designer.update');
            Route::delete('/destroy/{id}', [DesignerController::class, 'destroy'])->name('designer.destroy');
        });

        Route::prefix('products')->group(function () {
            Route::get('/', [AdminProductController::class, 'index'])->name('admin.product');
            Route::get('/create', [AdminProductController::class, 'create'])->name('admin.product.create');
            Route::post('/store', [AdminProductController::class, 'store'])->name('admin.product.store');
            Route::get('/{id}/edit', [AdminProductController::class, 'edit'])->name('admin.product.edit');
            Route::put('/{id}/update', [AdminProductController::class, 'update'])->name('admin.product.update');
        });
    });

    Route::prefix('rents')->group(function () {
        Route::get('/{invoice}', [RentController::class, 'index'])->name('rent');
        Route::post('/generateRent', [RentController::class, 'generateRent'])->name('users.generateRent');
        Route::put('/updatePaidRent/{invoice}', [RentController::class, 'updatePaidRent'])->name('users.updatePaidRent');
        Route::get('/invoice/{invoice}/rents', [RentController::class, 'generateRentInvoice'])->name('rent.generateRentInvoice');
    });

    Route::prefix('renteds')->group(function () {
        Route::get('/', [RentedController::class, 'index'])->name('rented');
        Route::get('/renteds/{invoice}/return', [RentedController::class, 'show'])->name('rented.show');
        Route::post('/return', [RentedController::class, 'returnRents'])->name('rent.returnRents');
        Route::get('/invoice/{invoice}/rents', [RentedController::class, 'generateRentInvoice'])->name('rent.generateRentInvoice');
        Route::get('/invoice/{invoice}/returns', [RentedController::class, 'generateReturnInvoice'])->name('rent.generateReturnInvoice');
    });
});
