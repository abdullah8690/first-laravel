<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Models\Products;


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
//Route::get('/connection', function (){
//try {
//    DB::connection()->getPdo();
//    return 'connection successful';
//} catch (\Exception $e) {
//    die("Could not connect to the database.  Please check your configuration. error:" . $e );
//}
//});
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

Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/cart',[CartController::class,'panier']);

Route::get('/product',[ProductController::class,'index']);

Route::get('/product/{id}',[ProductController::class,'show']);
//Route::get('/insertData',[ProductController::class,'insertProduct']);

Route::get('/product/list',[ProductController::class,'index']);
Route::get('/insertProductForm',[ProductController::class,'create']);
Route::post('insert-product',[ProductController::class,'store']);

Route::post('/product/delete/{id}',[ProductController::class,'destroy'])->name('product.delete');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::put('/product/update/{id}',[ProductController::class,'update'])->name('product.update');


Route::get('/productByName',[ProductController::class,'byName']);
Route::get('/productByPrice',[ProductController::class,'byPrice']);


Route::get('/getData',[ProductController::class,'getData']);

Route::get('/updateData',[ProductController::class,'updateData']);
//Route::get('/deleteData',[ProductController::class,'deleteData']);





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

