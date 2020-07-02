<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'info';
    protected $primaryKey = 'id';
    protected $fillable = ['product_id', 'weight', 'size', 'sim',
     'screen','chip_cpu','pin','camera_before','camera_after','video'];
}
