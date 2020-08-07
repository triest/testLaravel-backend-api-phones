<?php

    namespace App\Service;

    use App\Http\Requests\RPhone;
    use App\Models\offer;
    use App\Models\Phone;
    use Illuminate\Support\Arr;
    use PhpParser\Node\Expr\Array_;

    /**
     * Created by PhpStorm.
     * User: triest
     * Date: 07.08.2020
     * Time: 13:04
     */
    class SOfferCreate
    {
        private $phone_id;
        private $color;
        private $memory;

        public function rules()
        {
            return [
                    'color' => 'required|min:2|max:250',
                    'memory' => 'numeric|min:0',
                    'year' => 'year',
                    'phone_id' => 'numeric|exist:phones,id'
            ];
        }

        public function init(Array $array)
        {
            $this->color = $array["color"];
            $this->memory = $array["memory"];
            $this->phone_id = $array["phone_id"];
        }

        public function create()
        {
            $item = new Offer();
            $item->color = $this->color;
            $item->phone_id = $this->phone_id;
            $item->memory = $this->memory;
            $item->save();
            return $item;
        }
    }