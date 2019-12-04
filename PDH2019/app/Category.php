<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class Category extends Model
{
    protected $guarded = [];


    //Relaciones

    public function product(){
      return $this->hasMany(Product::class, 'category_id');
    }
}
