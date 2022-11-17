<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{

    public function authorize(){


        return true;
    }


    public function rules(){

        return [

            'name' => 'required',
            'img' => 'required',
            'barcode' => 'required',
            'price' => 'required',
            'details' => 'required'


        ];
    }


    public function messages(){

        return [


            'name.required' => 'اسم المنتج مطلوب',
            'img.required' => 'صوره المنتج مطلوبه',
            'barcode.required' => 'يرجي ادخال الباركود',
            'price.required' => 'سعر المنتج مطلوب',
            'details.required' => 'تفاصيل المنتج مطلوب مطلوبه'

        ];
    }
}
