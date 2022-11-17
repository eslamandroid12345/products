<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSliderRequest extends FormRequest
{
    public function authorize(){


        return true;
    }


    public function rules(){

        return [

            'advertisement' => 'required',

        ];
    }


    public function messages(){

        return [


            'advertisement.required' => 'ادخل وصف الاعلان',

        ];
    }
}
