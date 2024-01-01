<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\BaseController;
use Illuminate\Support\Facades\Route;

Route::get('/login',[AuthController::class,'login'])->name('backend.login');
Route::get('/',[BaseController::class,'dashboard'])->name('backend.dashboard');

