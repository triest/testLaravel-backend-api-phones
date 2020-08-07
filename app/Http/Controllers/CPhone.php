<?php

    namespace App\Http\Controllers;


    use App\Http\Requests\ReqPhoneDelete;
    use App\Http\Requests\RPhone;
    use App\Http\Resources\ResPhone;
    use App\Models\Phone;
    use App\Service\SPhoneCreate;
    use App\Service\SPhoneDelete;
    use Illuminate\Http\Request;
    use App\Service\SPhone;
    use Illuminate\Http\Resources\Json\JsonResource;

    class CPhone extends Controller
    {
        //
        public function phoneGetWithOffers(SPhone $SPhone)
        {
            $phones = $SPhone->getAll();


            return ResPhone::collection($phones);
        }

        /**
         * @param RPhone $request
         * @param SPhoneCreate $SOfferCreate
         * @return JsonResource
         */
        public function create(RPhone $requwest, SPhoneCreate $SPhoneCreate): JsonResource
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

        /**
         * @param $id
         * @param SPhoneDelete $SPhoneDelete
         * @return JsonResource
         */
        public function delete($id, SPhoneDelete $SPhoneDelete)
        {
            $SPhoneDelete->init(['phone_id' => $id]);
            if ($SPhoneDelete->delete()) {
                return response()->json(['result' => true]);
            } else {
                return response()->json(['result' => false]);
            }

        }
    }
