<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    protected $guarded = [];


    //Relaciones

    public function user(){
      return $this->belongsTo(User::class, 'user_id');
    }
    public function category(){
      return $this->belongsTo(Category::class, 'category_id');
    }
}
