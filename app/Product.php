<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'image1', 'image2', 'image3', 'size_id','category_id','total_quantity','price_unit','price_promotion','type_id'];
    
}
