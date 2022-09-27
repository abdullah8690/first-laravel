<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Customer;


class CartController extends Controller
{
    public function panier(Request $request, $id)
    {
        $product = Product::find($id);
        $request->validate([
            'quantity' => 'required|integer|min:1|max:' . $product->quantity,
        ]);
            $product->quantity = $request->input('quantity');


      return view('/cart', ['product' => $product]);
    }

}
