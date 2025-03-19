<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $allPro = Product::all();
        return view ('admin.products.index' , compact('allPro'));
    }
    public  function NewProduct () {
        $allCat = Category::all();
        return view('admin.products.create' , compact('allCat'));
    }


    public function create(Request $request){
        $newPro = new Product;
        $newPro->name = $request->name;;
        $newPro->category = $request->category;
        $newPro->price = $request->price;
        $newPro->quantity = $request->quantity;
        $newPro->description = $request->des;
        $newPro->save();
        return redirect()->back();
    }
    public function delete($id){
        Product::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id){
        $proRow = Product::find($id);
        $allCat = Category::all();
        $catName = (Category::find($proRow->category))->name;
        return view('admin.products.edit' , compact('proRow' , 'allCat' ,'catName'));
    }
    public function update(Request $request , $id){
        $pro = Product::find($id);
        $pro->name =$request->name; ;
        $pro->category = $request->category;
        $pro->price = $request->price;
        $pro->quantity = $request->quantity;
        $pro->description = $request->des;
        $pro->save();
        return  redirect('showProducts');
    }
}
