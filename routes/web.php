<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


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

        // partie 2.1
//Route::get('/',function (){
//    return "homepage";
//});
//
//Route::get('/product',function (){
//    return "Liste des produits";
//});
//
//Route::get('/product/{id}',function ($id){
//    return "Fiche du produit " . $id;
//});
//
//Route::get('/cart',function (){
//    return "Panier";
//});

        // partie 2.2
Route::get('/',[HomeController::class,'homePage']);

Route::get('/product',[ProductController::class,'listOfProducts']);

Route::get('/product/{id}',[ProductController::class,'detailsOfProducts']);

Route::get('/cart',[CartController::class,'panier']);

            // partie 2.3


//Route::get('/',function (){
//    return view('home');
//});
//
//Route::get('/product',function (){
//    return view('product-list');
//});
//
//Route::get('/product/{id}',function ($id){
//    $data = compact('id');
//    return view('product-details')->with($data);
//});
//
//Route::get('/cart',function (){
//    return view('cart');
//});


