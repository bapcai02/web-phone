<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bill';
    protected $primaryKey = 'id';
    protected $fillable = ['name_user', 'email', 'phone', 'address', 'qty','date_order','total'];
}
