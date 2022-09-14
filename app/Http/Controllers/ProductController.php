<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listOfProducts(){
        return view('product-list');
    }
    public function detailsOfProducts($id){
        $data = compact('id');
        return view('product-details')->with($data);
    }
}
