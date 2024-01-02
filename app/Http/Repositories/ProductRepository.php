<?php
namespace App\Http\Repositories;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Mail\SendNewProductEmail;
use App\Mail\NewProductNotification;
use Illuminate\Support\Facades\Mail;

class ProductRepository{

    public function store(Request $request){
        $filename=null;
        if($request->hasFile('image')){
            $image=$request->file('image');
            $filename=date('Ymdhis').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/products',$filename);
        }
        $product = Product::create([
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'image'=>$filename,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
        ]);
        $users = User::where('role_id',2)->get();
        foreach ($users as $key => $value) {
            Mail::to($value->email)->send(new SendNewProductEmail($product,"New product has been created","please checkout"));
        }
    }



    public function update(Request $request, $id){
        $product = Product::find($id);
        $filename=null;
        if($request->hasFile('image')){
            $image=$request->file('image');
            $filename=date('Ymdhis').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/products',$filename);
        }
        $product->update([
            'name'=>$request->input('name',$product->name),
            'category_id'=>$request->input('category_id',$product->category_id),
            'image'=>$filename ?? $product->image,
            'price'=>$request->input('price',$product->price),
            'quantity'=>$request->input('quantity',$product->quantity),
        ]);
        $product->save();
        return to_route('product.index');

    }
}
