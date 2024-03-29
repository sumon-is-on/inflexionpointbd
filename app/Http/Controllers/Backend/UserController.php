<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repositories\UserRepository;
use App\Http\Requests\UserFormRequest;

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
            ->orderByDesc('id')
            ->paginate(5);
        }else{
            $users=User::with('Roles')->orderByDesc('id')->paginate(5);
        }
        return view('Backend.User.index',compact('users','search'));
    }


    public function create(){
        $user = new User();
        return view('Backend.User.create',compact('user'));
    }


    public function store(UserFormRequest $request){
        $this->userRepository->store($request);
        return to_route('user.index');
    }


    public function show(string $id){
        $user = User::find($id);
        return view('Backend.User.show',compact('user'));
    }


    public function edit(string $id){
        $user = User::find($id);
        return view('Backend.User.edit',compact('user'));
    }


    public function update(UserFormRequest $request, string $id){
        $user=User::find($id);
        $this->userRepository->update($request,$user->id);
        return to_route('user.index');
    }

    public function destroy(string $id){
        $user=User::find($id)->delete();
        return to_route('user.index');
    }
}
