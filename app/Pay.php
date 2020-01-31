<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    protected $fillable=['order_id','user_id','price','authority','refid'];
}
