<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function product(){

        return $this->belongsto('App\Product','product_id','id');

    }
}
