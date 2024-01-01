<?php
namespace App\Http\Repositories;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductRepository{

    public function store(Request $request){
        $filename=null;
        if($request->hasFile('image')){
            $image=$request->file('image');
            $filename=date('Ymdhis').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/products',$filename);
        }
        Product::create([
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'image'=>$filename,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
        ]);
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
