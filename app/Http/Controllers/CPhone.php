<?php

    namespace App\Http\Controllers;


    use App\Http\Requests\RPhone;
    use App\Http\Resources\ResPhone;
    use App\Models\Phone;
    use App\Service\SPhoneCreate;
    use Illuminate\Http\Request;
    use App\Service\SPhone;

    class CPhone extends Controller
    {
        //
        public function phoneGetWithOffers(SPhone $SPhone)
        {
            $phones = $SPhone->getAll();


            return ResPhone::collection($phones);
        }

        public function create(RPhone $requwest, SPhoneCreate $SPhoneCreate)
        {
            $SPhoneCreate->init([
                    "name" => $requwest->name,
                    "price" => $requwest->price,
                    'year' => $requwest->year,
                    'brand_id' => $requwest->brand_id
            ]);
            $phone = $SPhoneCreate->create();

            return new ResPhone($phone);
        }
    }
