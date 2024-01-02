<?php

namespace App\Http\Controllers\Web;

use App\Events\ProductPurchased;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductPurchaseController extends Controller
{
    public function index(){
        $products = Product::with('Categories')->get();
        return view('Web.Purchase.Purchase',compact('products'));
    }
    public function purchase($id){
        $product = Product::find($id);
        // dd($products);
        event(new ProductPurchased($product));
        return to_route('product.purchase');
    }
}
