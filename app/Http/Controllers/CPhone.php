<?php

namespace App\Http\Controllers;



use App\Models\Phone;
use Illuminate\Http\Request;
use App\Service\SPhone;

class CPhone extends Controller
{
    //
    public function phoneGetWithOffers(SPhone $SPhone){
        $phones=$SPhone->getAll();
        dd($phones);
    }

    public function createPhone(RPhone $requwest){


    }
}
