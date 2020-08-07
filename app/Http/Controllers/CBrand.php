<?php

    namespace App\Http\Controllers;

    use App\Http\Resources\RBrand;
    use App\Models\Brand;
    use App\Service\SBrand;
    use Illuminate\Http\Request;

    class CBrand extends Controller
    {
        //
        public function getAll(SBrand $SBrand)
        {
            return RBrand::collection($SBrand->getAll());
        }
    }
