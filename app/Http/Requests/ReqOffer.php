<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class ReqOffer extends FormRequest
    {
        /**
         * Determine if the user is authorized to make this request.
         *
         * @return bool
         */
        public function authorize()
        {
            return true;
        }

        /**
         * Get the validation rules that apply to the request.
         *
         * @return array
         */
        public function rules()
        {
            return [
                    'phone_id' => 'required|exists:phones,id',
                    'color' => 'required|string|min:3',
                    'memory' => 'required|integer|min:0'
            ];
        }
    }
