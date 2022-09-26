<?php

namespace App\Models;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Categories extends Model
{
    use HasFactory;
    protected $table = "categories";
    protected $primaryKey = "category_id";

    public function products (){
        return $this->hasMany('App\Models\Product','category_id','category_id');
    }
}
