<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable=['order_id','name','quantity','price'];

    public function orders(){
        return $this->belongsTo(Order::class,'order_id');
    }
}
