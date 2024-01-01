<?php
namespace App\Http\Repositories;

use App\Models\User;
use Illuminate\Http\Request;

class UserRepository{

    public function store(Request $request){
        // dd($request->all());
        $filename=null;
        if($request->hasFile('image')){
            $image=$request->file('image');
            $filename=date('Ymdhis').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/users',$filename);
        }
        User::create([
            'name'=>$request->name,
            'role_id'=>$request->role_id,
            'image'=>$filename,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'phone'=>$request->phone,
            'address'=>$request->address
        ]);
    }



    public function update(Request $request, $id){
        $user = User::find($id);
        $filename=null;
        if($request->hasFile('image')){
            $image=$request->file('image');
            $filename=date('Ymdhis').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/users',$filename);
        }
        $user->update([
            'name'=>$request->input('name',$user->name),
            'role_id'=>$request->input('role_id',$user->role_id),
            'image'=>$filename ?? $user->image,
            'email'=>$request->input('email',$user->email),
            'phone'=>$request->input('phone',$user->phone),
            'address'=>$request->input('address',$user->address)
        ]);
        $user->save();
        return to_route('user.index');

    }
}
