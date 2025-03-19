<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class home extends Controller
{
   public function index (){
    $allPro = product::all();
    $allCat = category::all();
        return view('layouts.home', compact('allPro' , 'allCat'));
    }
}
