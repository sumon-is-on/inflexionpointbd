<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(){
        return view('Backend.Auth.login');
    }

    public function loginPost(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
            Toastr::success('Login successfull');
            return redirect()->route('backend.dashboard');
        }
        else{
            Toastr::warning('Invallid credentials');
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();
        Toastr::success('Logout successfull');
        return redirect()->route('user.login');
    }
}
