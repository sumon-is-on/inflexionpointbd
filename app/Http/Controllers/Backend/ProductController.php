<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Exports\ProductExport;
use App\Imports\ProductImport;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\ProductFormRequest;
use App\Http\Repositories\ProductRepository;

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
                ->where('name','like',"%$search%")
                ->orderByDesc('id')
                ->paginate(5);
        }else{
            $products=Product::with('Categories')->orderByDesc('id')->paginate(5);
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
        Toastr::success('Product Created successfully');
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
        Toastr::success('Product updated successfully');
        return to_route('product.index');
    }


    public function destroy(string $id){
        $product=Product::find($id)->delete();
        Toastr::success('Product deleted successfully');
        return to_route('product.index');
    }



    public function export(){
        return Excel::download(new ProductExport, 'products.xlsx');
    }


    public function import(Request $request){
        Toastr::success('Product has been uploaded');
        Excel::import(new ProductImport, $request->file('file')->store('temp'));
        return to_route('product.index');
    }
}
