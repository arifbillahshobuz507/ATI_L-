<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded=[];

   
    public function subCategory (){
        $this->hasMany(SubCategory::class);
    }
    public function product (){
        $this->belongsToMany(Product::class, 'product_categories');
    }
}
