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

//

}

//public function panier(){
//     return view('cart');
// }
//
//    public function addToCart(Products $products)
//    {dd($products);
//        $cart = session()->get('cart');
//        if (!$cart){
//            $cart = [
//                $products->id=>[
//                    'name'=>$products->name,
//                    'quantity'=>1,
//                    'price'=>$products->price,
//                    'image'=>$products->image,
//                ]
//            ];
//
//            session()->put('cart', $cart);
//            return redirect('/cart')->with('success',"Added to Cart");
//        }
//
//
//
//        if (isset($cart[$products->id])){
//            $cart[$products->id]['quantity']++;
//            session()->put('cart',$cart);
//            return redirect('/cart')->with('success',"Added to Cart");
//        }
//
//        $cart =[$products->id] = [
//        'name'=>$products->name,
//        'quantity'=>1,
//        'price'=>$products->price,
//        'image'=>$products->image,
//
//            ];
//        session()->put('cart', $cart);
//        return redirect('/cart')->with('success',"Added to Cart");
//    }
