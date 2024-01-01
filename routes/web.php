<?php

use App\Http\Controllers\Backend\BaseController;
use Illuminate\Support\Facades\Route;


Route::get('/',[BaseController::class,'dashboard'])->name('backend.dashboard');

