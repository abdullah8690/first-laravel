<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function panier(){
        return view('/cart');
    }
    public function store(Request $request){

    }
}
