<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RPhone extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            //
            'name'=>'required',
            'price'=>'required|numeric|min:0',
             'brend_id'=>'required|exists:brends,id',
             'year'=>'required|numeric|max:'.date('Y')
        ];
    }
}
