<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function panier(){
        return view('cart');
    }
    public function store(Request $request){
        $data = DB::select('select * from products');
        $data = compact('data');
        return view('cart')->with($data);

    }
}
