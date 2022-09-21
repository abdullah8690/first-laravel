<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Customer;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
        $products = Products::all();
        return view('product-list',compact('products'));
    }


    public function create()
    {
        Products::all();
        return view('insertData');
    }

    public function show($id)
    {
        $products = Products::find($id);
        return view('product-details', ['products' => $products]);
    }

    public function byName()
    {
        $products = Products::orderBy('name')->get();
        return view('product-by-name', ['products' => $products]);

    }

    public function byPrice()
    {
        $products = Products::orderBy('price', 'asc')->get();
        return view('product-by-price', ['products' => $products]);
    }

    public function store(Request $request)
    {
        $products = new Products();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('imgFolder', $filename);
            $products->image = $filename;
        }
        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->price = $request->input('price');
        $products->image = $request->input('image');
        $products->weight = $request->input('weight');
        $products->available = $request->input('available');
        $products->category_id = $request->input('category_id');
        $products->quantity = $request->input('quantity');
        $products->save();
        return redirect('/product')->with('status', "Product Added Successfully");
    }

//        $data = DB::table('products') ->insertGetId(
//    [
//        'name'=>'Grenoble',
//        'description'=>'ville de france',
//        'price'=>'899',
//        'image'=>'https://www.missnumerique.com/blog/wp-content/uploads/reussir-sa-photo-de-profil-michael-dam.jpg',
//        'weight'=>'500',
//        'avaliable'=>'3',
//        'category_id'=>'2',
//        'quantity'=>'1',
//    ]
//    );



    public function update(Request $request, int $id)
    {
        $product = Products::find($id);
//        dd($request, $product);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->weight = $request->weight;
        $product->available = $request->available;
        $product->category_id = $request->category_id;
        $product->quantity = $request->quantity;
        $product->save();
        return redirect("/product");
    }

    public function edit($id)
    {
        $products = Products::find($id);
//        $products = DB::update('update products set description = ?',['Best Products']);
        return view('edit', ['products' => $products]);
    }

    public function destroy($id)
    {
        $product = Products::find($id);
        if (!is_null($product)) {
            $product->delete();
        }
        return redirect('/product');
//        $data = DB::delete('delete from products where id = ?',['1']);
//        return $data;


    }



}
