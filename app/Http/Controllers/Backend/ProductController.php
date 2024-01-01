<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Repositories\ProductRepository;
use App\Http\Requests\ProductFormRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $productRepository;
    public function __construct(ProductRepository $productRepository){
        $this->productRepository=$productRepository;
    }

    public function index(){
        $search=request()->query('search');
        if($search){
            $products=Product::with('Categories')
                ->where('name','like',"%$search%")->get();
        }else{
            $products=Product::with('Categories')->paginate();
        }
        return view('Backend.Product.index',compact('products','search'));
    }


    public function create(){
        $product = new Product();
        $categories = Category::all();
        return view('Backend.Product.create',compact('product','categories'));

    }


    public function store(ProductFormRequest $request){
        $this->productRepository->store($request);
        return to_route('product.index');
    }


    public function show(string $id){
        //
    }


    public function edit(string $id){
        $product = Product::find($id);
        $categories = Category::all();
        return view('Backend.Product.edit',compact('product','categories'));
    }


    public function update(Request $request, string $id){
        $product = Product::find($id);
        $this->productRepository->update($request,$product->id);
        return to_route('product.index');
    }


    public function destroy(string $id){
        $product=Product::find($id)->delete();
        return to_route('product.index');
    }
}
