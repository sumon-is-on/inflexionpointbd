<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $search=request()->query('search');
        if($search){
            $categories=Category::where('name','like',"%$search%")->get();
        }else{
            $categories=Category::paginate();
        }
        return view('Backend.Category.index',compact('categories','search'));
    }


    public function create(){
        $category = new Category();
        return view('Backend.Category.create',compact('category'));
    }


    public function store(Request $request){
        $request->validate([
            'name'=>'required|unique:categories,name'
        ]);
        Category::create([
            'name'=>$request->name,
            'details'=>$request->details
        ]);
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
            'name'=>'required'
        ]);
        $category = Category::find($id);
        $category->update([
            'name'=>$request->input('name',$category->name),
            'details'=>$request->input('details',$category->details)

        ]);
        $category->save();
        return to_route('category.index');
    }

    public function destroy(string $id){
        $category=Category::find($id)->delete();
        return to_route('category.index');
    }
}
