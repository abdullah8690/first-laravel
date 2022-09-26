<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Customer;


class CartController extends Controller
{
        public function panier( $id , Request $request)
        {
            $product = Product::find($id);
            return view('cart', ['product' => $product, 'request' => $request]);
        }
}
