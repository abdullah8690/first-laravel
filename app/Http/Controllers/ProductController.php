<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('product-list',compact('products'));
    }


    public function create()
    {
        Product::all();
        return view('insertData');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('product-details', ['product' => $product]);
    }

    public function byName()
    {
        $product = Product::orderBy('name')->get();
        return view('product-by-name', ['product' => $product]);

    }

    public function byPrice()
    {
        $product = Product::orderBy('price', 'asc')->get();
        return view('product-by-price', ['product' => $product]);
    }

    public function store(Request $request)
    {
        $request->validate([
//            'name'=>'required|JPG|JPEG|PNG',
            'name'=>'required',
            'description'=>'required',
            'price'=>'required|integer|min:1',
            'image'=>'required',
            'weight'=>'required',
            'available'=>'required',
//            'category_id '=>'required',
            'quantity'=>'required',
        ]);

        $products = new Product();


        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->price = $request->input('price');
        $products->image = $request->input('image');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/images', $filename);
            $products->image = $filename;
        }
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
    public function edit($id)
    {
        $product = Product::find($id);
//        $products = DB::update('update products set description = ?',['Best Products']);
        return view('edit', ['product' => $product]);
    }


    public function update(Request $request, int $id)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'image'=>'required',
            'weight'=>'required',
            'available'=>'required',
//            'category_id '=>'required',
            'quantity'=>'required',
        ]);

        $product = Product::find($id);
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



    public function destroy($id)
    {
        $product = Product::find($id);
        if (!is_null($product)) {
            $product->delete();
        }
        return redirect('/product');
//        $data = DB::delete('delete from products where id = ?',['1']);
//        return $data;


    }

    function category(){
        $categories = Categories::all();
        return view('oneToOne', compact('categories'));


        //        echo "<pre>";
//        print_r($products);
//        echo "</pre>";
    }




}
