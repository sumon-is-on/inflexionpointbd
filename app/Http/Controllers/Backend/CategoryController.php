<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    public function index(){
        $search=request()->query('search');
        if($search){
            $categories=Category::where('name','like',"%$search%")->orderByDesc('id')->paginate(10);
        }else{
            $categories=Category::orderByDesc('id')->paginate(10);
        }
        return view('Backend.Category.index',compact('categories','search'));
    }


    public function create(){
        $category = new Category();
        return view('Backend.Category.create',compact('category'));
    }


    public function store(Request $request){
        $request->validate([
            'name'=>'required|unique:categories,name',
            'details' => 'required|max:255'
        ]);
        Category::create([
            'name'=>$request->name,
            'details'=>$request->details
        ]);
        Toastr::success('Category Created successfully');
        return to_route('category.index');
    }

    public function show(string $id)
    {
        //
    }


    public function edit(string $id){
        $category = Category::find($id);
        return view('Backend.Category.edit',compact('category'));
    }

    public function update(Request $request, string $id){
        $request->validate([
            'name' => 'required|unique:categories,name|max:255',
            'details' => 'required|max:255'
        ]);
        $category = Category::find($id);
        $category->update([
            'name'=>$request->input('name',$category->name),
            'details'=>$request->input('details',$category->details)

        ]);
        $category->save();
        Toastr::success('Category Created successfully');
        return to_route('category.index');
    }

    public function destroy(string $id){
        $category=Category::find($id)->delete();
        Toastr::success('Category deleted successfully');
        return to_route('category.index');
    }
}
