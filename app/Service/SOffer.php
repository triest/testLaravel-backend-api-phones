<?php
    /**
     * Created by PhpStorm.
     * User: triest
     * Date: 07.08.2020
     * Time: 19:24
     */

    namespace App\Service;


    use App\Http\Controllers\COffer;
    use App\Http\Resources\ROffer;
    use App\Models\Brand;
    use App\Models\offer;

    class SOffer
    {

        function getAll()
        {
            return Offer::select('*')->get();
        }
    }