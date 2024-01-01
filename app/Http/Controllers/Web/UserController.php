<?php

namespace App\Http\Controllers\Web;

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


    public function create(){
        return view('Web.Registration.create');
    }

    public function store(UserFormRequest $request){
        $this->userRepository->store($request);
        return to_route('user.login');
    }
}
