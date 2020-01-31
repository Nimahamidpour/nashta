<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public function categories(){
        return $this->belongsTo(Category::class,'category');
    }
}
