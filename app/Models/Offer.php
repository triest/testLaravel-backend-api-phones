<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class offer extends Model
{
    //
    public function phones(){
            return $this->belongsToMany(Phone::class);
    }
}
