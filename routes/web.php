<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Models\Product;
use App\Models\Categories;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

        // partie 2.2
Route::get('/',[HomeController::class,'homePage']);

Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/cart/{id}',[CartController::class,'panier'])->name('addTo.cart');


Route::get('/product',[ProductController::class,'index']);
Route::get('/product/{id}',[ProductController::class,'show']);
//Route::get('/insertData',[ProductController::class,'insertProduct']);
Route::get('/product/list',[ProductController::class,'index']);
Route::get('/insertProductForm',[ProductController::class,'create']);
Route::post('insert-product',[ProductController::class,'store']);
Route::delete('/product/delete/{id}',[ProductController::class,'destroy'])->name('product.delete');


Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::put('/product/update/{id}',[ProductController::class,'update'])->name('product.update');


Route::get('/productByName',[ProductController::class,'byName']);
Route::get('/productByPrice',[ProductController::class,'byPrice']);


Route::get('/getData',[ProductController::class,'getData']);

Route::get('/updateData',[ProductController::class,'updateData']);
//Route::get('/deleteData',[ProductController::class,'deleteData']);

Route::get('/oneToOne',[ProductController::class,'category']);
//Route::get('/oneToOne',[ProductController::class,'category']);








