<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\ReqOffer;
    use App\Http\Resources\ROffer;
    use App\Models\offer;
    use App\Service\SOffer;
    use App\Service\SOfferCreate;
    use Illuminate\Http\Request;
    use Illuminate\Http\Resources\Json\JsonResource;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Validation\ValidationException;

    class COffer extends Controller
    {
        //
        public function getAll(SOffer $ROffer)
        {
            return ROffer::collection($ROffer->getAll());
        }


        /**
         * @param ReqOffer $request
         * @param SOfferCreate $SOfferCreate
         * @return JsonResource
         */
        public function create(ReqOffer $request,SOfferCreate $SOfferCreate):JsonResource
        {
            $SOfferCreate->init([
                    "color"=>$request->color,
                    "memory"=>$request->memory,
                    "year"=>$request->year,
                    "phone_id"=>$request->phone_id,
            ]);
            $offer=$SOfferCreate->create();
            return new ROffer($offer);
        }
    }
