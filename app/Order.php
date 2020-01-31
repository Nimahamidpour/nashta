<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['user_id','kind','date','time','price','discount','finalprice','pay','address'];


    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function pays(){
        return $this->belongsTo(Pay::class,'id','order_id');

    }
}
