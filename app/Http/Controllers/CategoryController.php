<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function NewCategory(){
            return view('admin.categories.create');
    }
    public function index(){
        $AllCategories = Category::all();
        return view ('admin.categories.index' , compact('AllCategories'));
    }
    public function create(Request $request){
        // add to DB
        $cat = new Category();
        $cat->name = $request->name;
        $cat->save();
        return redirect()->back();
    }
    public function remove($id){
        Category::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id){
        $CatRow = Category::find($id);
        return view('admin.categories.edit' , compact('CatRow'));
    }
    public function update(Request $request , $id){
        $cat = Category::find($id);
        $cat->name =$request->name; ;
        $cat->save();
        return  redirect('showCategory');
    }
}
