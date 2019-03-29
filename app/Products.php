<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $fillable = ['store_id', 'name','weight', 'price', 'fast_ship', 'time_bq'];

}
