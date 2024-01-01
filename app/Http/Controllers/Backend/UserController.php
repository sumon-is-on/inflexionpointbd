<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repositories\UserRepository;

class UserController extends Controller
{
    public $userRepository;
    public function __construct(UserRepository $userRepository){
        $this->userRepository=$userRepository;
    }


    public function index(){
        $search=request()->query('search');
        if($search){
            $users=User::where('name','like',"%$search%")
            ->orWhere('email','like',"%$search%")
            ->orWhere('phone','like',"%$search%")
            ->get();
        }else{
            $users=User::with('Roles')->paginate();
        }
        return view('Backend.User.index',compact('users','search'));
    }


    public function create(){
        $user = new User();
        return view('Backend.User.create',compact('user'));
    }


    public function store(Request $request){
        //
    }


    public function show(string $id){
        //
    }


    public function edit(string $id){
        //
    }


    public function update(Request $request, string $id){
        //
    }

    public function destroy(string $id){
        //
    }
}
