<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\home;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/' , [home::class , 'index']);

//  category Routes
Route::get ('NewCategory' , [CategoryController::class,'NewCategory']);
Route::get ('showCategory' , [CategoryController::class,'index']);
Route::post('createCategory' , [CategoryController::class , 'create']);
Route::get('removeCategory/{id}' , [CategoryController::class , 'remove']);
Route::get('editCategory/{id}' , [CategoryController::class , 'edit']);
Route::patch('updateCategory/{id}' , [CategoryController::class , 'update']);


//  product Routes
Route::get ('showProducts' , [ProductController::class,'index']);
Route::get ('NewProduct' , [ProductController::class,'NewProduct']);
Route::post('createProduct' , [ProductController::class , 'create']);
Route::get('removePro/{id}' , [ProductController::class , 'delete']);
Route::get('editProduct/{id}' , [ProductController::class , 'edit']);
Route::patch('updateProduct/{id}' , [ProductController::class , 'update']);



// start home routes
// Route::get('/',[FrontController::class , 'index']);
// Route::patch('selectCaregory',[FrontController::class , 'selectCaregory']);

