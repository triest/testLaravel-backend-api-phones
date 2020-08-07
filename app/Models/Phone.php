<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    //

    public function brend(){
       return $this->hasOne(Brend::class,'brend_id','id');
    }

    public function offers(){
        return $this->belongsTo(Offer::class);
    }
}
