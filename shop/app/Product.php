<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['name', 'image1', 'image1', 'image1', 'size_id','desc','title','price_unit','price_promotion','type_id'];
    
}
