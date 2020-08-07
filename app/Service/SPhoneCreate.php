<?php

    namespace App\Service;

    use App\Http\Requests\RPhone;
    use App\Models\Phone;
    use Illuminate\Support\Arr;
    use PhpParser\Node\Expr\Array_;

    /**
     * Created by PhpStorm.
     * User: triest
     * Date: 07.08.2020
     * Time: 13:04
     */
    class SPhoneCreate
    {
        private $name;
        private $price;
        private $year;
        private $brand_id;

        public function rules()
        {
            return [
                    'name' => 'required|min:2|max:250',
                    'price' => 'numeric|min:0',
                    'year' => 'year',
                    'brand_id' => 'numeric|exist:brands,id'
            ];
        }

        public function init(Array $array)
        {
            $this->name = $array["name"];
            $this->price = $array["price"];
            $this->year = $array["year"];
            $this->brand_id=$array["brand_id"];
        }

        public function create()
        {
            $phone = new Phone();
            $phone->name = $this->name;
            $phone->price = $this->price;
            $phone->year = $this->year;
            $phone->brand_id = $this->brand_id;
            $phone->save();
            return $phone;
        }
    }