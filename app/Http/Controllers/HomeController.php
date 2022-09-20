<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends Controller
{
  public function homePage(){

      return view('home');
  }
}
