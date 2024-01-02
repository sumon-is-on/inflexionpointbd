<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function dashboard(){
        $users = User::all()->count();
        $products = Product::all()->count();
        return view('Backend.Pages.dashboard',compact('users','products'));
    }
}
