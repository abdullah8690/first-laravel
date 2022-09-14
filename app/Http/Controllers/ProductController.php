<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listOfProducts(){
        return "liste des produit ok";
    }
    public function detailsOfProducts($id){
        return "Fiche du produit " . $id;
    }
}
