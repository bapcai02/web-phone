<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class size extends Model
{
    protected $table = 'size';
    protected $primaryKey = 'id';
    protected $fillable = ['name','created_at','updated_at'];
}
