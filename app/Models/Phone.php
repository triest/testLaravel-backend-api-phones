<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    //

    public function brand(){
       return $this->belongsTo(Brand::class,'brand_id','id');
    }

    public function offers(){
        return $this->hasMany(Offer::class);
    }
}
