<?php
    /**
     * Created by PhpStorm.
     * User: triest
     * Date: 07.08.2020
     * Time: 21:41
     */

    namespace App\Service;


    use App\Models\Phone;

    class SPhoneDelete
    {
        public $phone_id;

        public function init(Array $array)
        {
            $this->phone_id = $array['phone_id'];
        }


        public function delete()
        {
            $phone = Phone::find($this->phone_id);
            if ($phone==null) {
                return false;
            }
            $phone->offers()->delete();
            $phone->delete();
            return true;
        }

    }