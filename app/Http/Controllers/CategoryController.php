<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Acounts\AcountService\AcountService;

class CategoryController extends Controller
{
    private $acount;
    public function __construct(AcountService $acount)
    {
        $this->acount = $acount;
    }

    public function class(){
//        return $this->acount->testData();
//        return Product::all();
        return Product::where('id',34)->first();

    }
    public function class2(AcountService $acount){
        return $this->acount->testData();
    }
}
