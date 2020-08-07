<?php
    /**
     * Created by PhpStorm.
     * User: triest
     * Date: 07.08.2020
     * Time: 19:24
     */

    namespace App\Service;


    use App\Models\Brand;

    class SBrand
    {

        function getAll(){
            return Brand::select('*')->get();
        }
    }