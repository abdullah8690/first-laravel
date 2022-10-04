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
Route::get('/dashboard',[ProductController::class,'index'])->middleware(['auth'])->name('dashboard');
Route::get('/',[HomeController::class,'homePage']);

require __DIR__.'/auth.php';
//Route::get('/admin', function () {
//    return view('admin.dashboard');
//});
Route::post('/cart/{id}',[CartController::class,'panier'])->name('addTo.cart');


Route::get('/product',[ProductController::class,'index']);
Route::get('/product/{id}',[ProductController::class,'show'])->name('product.detail');
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

//Route::post('/cart',[CartController::class,'show']);
//
//Route::get('/cart',[CartController::class,'index']);
//Route::get('/cart/{id}',[CartController::class,'show'])->name('addTo.cart');
//
//Route::get('/insertProductForm',[CartController::class,'create']);
//Route::post('insert-product',[CartController::class,'store']);
//Route::delete('/cart/delete/{id}',[CartController::class,'destroy'])->name('product.delete');
//
//
//Route::get('/product/edit/{id}',[CartController::class,'edit'])->name('product.edit');
//Route::put('/product/update/{id}',[CartController::class,'update'])->name('product.update');

Route::get('/class',[CategoryController::class,'class']);
Route::get('/class2',[CategoryController::class,'class2']);






