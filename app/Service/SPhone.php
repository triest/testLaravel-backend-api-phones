<?php

    namespace App\Service;

    use App\Models\Phone;

    /**
     * Created by PhpStorm.
     * User: triest
     * Date: 07.08.2020
     * Time: 13:04
     */
    class SPhone
    {


        function getAll()
        {
            return Phone::select('*')->with('brand')->with('offers')->get();
        }

        function getItem($id)
        {
            return Phone::select('*')->where('id', $id)->with('brand')->with('offers')->first();
        }
    }