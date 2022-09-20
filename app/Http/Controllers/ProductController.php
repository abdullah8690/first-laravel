<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        return view('insertData');
    }
    public function insertProduct(){
        $data = DB::table('products') ->insertGetId(
    [
        'name'=>'Grenoble',
        'description'=>'ville de france',
        'price'=>'899',
        'image'=>'https://www.missnumerique.com/blog/wp-content/uploads/reussir-sa-photo-de-profil-michael-dam.jpg',
        'weight'=>'500',
        'avaliable'=>'3',
        'category_id'=>'2',
        'quantity'=>'1',
    ]
    );
        return view('insertData');
    }


  public function updateData(){
        $data = DB::update('update products set description = ?',['Best Products']);
        return $data;
    }

    public function deleteData($id){
        $product = Products::find($id)->delete();
        if (!is_null($product)){
            $product->delete();
        }
        return redirect('product-list');
//        $data = DB::delete('delete from products where id = ?',['1']);
//        return $data;


    }

    public function listOfProducts(){
        $data = DB::select('select * from products');
        $data = compact('data');
        return view('product-list')->with($data);
    }
    public function byName()
    {
        $data = Products::orderBy('name')->get();
        return view('product-by-name', ['data' => $data]);

    }

    public function byPrice()
    {
        $data = Products::orderBy('price', 'asc')->get();
        return view('product-by-price', ['data' => $data]);
    }
    public function detailsOfProducts($id){
        $data = Products::find($id);
        return view('product-details',['data'=>$data]);
    }

}
