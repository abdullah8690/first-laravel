<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
//    protected $primaryKey = "category_id";
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'weight',
        'available',
        'category_id ',
        'quantity',

    ];

    public function category (){
        return $this->BelongsTo('App\Models\Categories','category_id');
    }

}
//        return $this->hasMany(Categories::class);
