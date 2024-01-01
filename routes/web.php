<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\BaseController;
use Illuminate\Support\Facades\Route;



#authLogin
Route::get('/login',[AuthController::class,'login'])->name('user.login');
Route::post('/login_post',[AuthController::class,'loginPost'])->name('user.login.post');
Route::get('/logout',[AuthController::class,'logout'])->name('user.logout');



# Web-User


Route::get('/',[BaseController::class,'dashboard'])->name('backend.dashboard');

