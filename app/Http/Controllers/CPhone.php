<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\RPhone;
    use App\Http\Resources\ResPhone;
    use App\Service\SPhone;
    use App\Service\SPhoneCreate;
    use App\Service\SPhoneDelete;
    use Illuminate\Http\Resources\Json\JsonResource;

    /**
     * Class CPhone
     * @package App\Http\Controllers
     */
    class CPhone extends Controller
    {
        //
        /**
         * @param SPhone $SPhone
         * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
         */
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
                return response()->json(['result' => "phone not found"]);
            }

        }
    }
