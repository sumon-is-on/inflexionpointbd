<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\BaseController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\UserController as BackendUserController;
use App\Http\Controllers\Web\ProductPurchaseController;
use App\Http\Controllers\Web\UserController;
use Illuminate\Support\Facades\Route;



#authLogin
Route::get('/login', [AuthController::class, 'login'])->name('user.login');
Route::post('/login_post', [AuthController::class, 'loginPost'])->name('user.login.post');
Route::get('/registration', [UserController::class, 'create'])->name('user.registration');
Route::post('/registration_post', [UserController::class, 'store'])->name('user.registration.post');





# Web-User

Route::middleware('auth', 'admin')->group(function () {
    Route::get('/', [BaseController::class, 'dashboard'])->name('backend.dashboard');

    Route::get('/logout', [AuthController::class, 'logout'])->name('user.logout');

    #Backend-user
    Route::resource('user', BackendUserController::class);
    #Backend-category
    Route::resource('category', CategoryController::class);
    #Backend-Product
    Route::resource('product', ProductController::class);
    Route::get('/product-export', [ProductController::class, 'export'])->name('product.export');
    Route::post('/product-import', [ProductController::class, 'import'])->name('product.import');
});
Route::get('/purchase', [ProductPurchaseController::class, 'index'])->name('product.purchase');
Route::middleware('auth')->group(function () {
    Route::get('/purchase-product/{id}', [ProductPurchaseController::class, 'purchase'])->name('product.purchase.save');
});
