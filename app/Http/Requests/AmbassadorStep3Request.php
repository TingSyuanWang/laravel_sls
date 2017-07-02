<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AmbassadorStep3Request extends FormRequest
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
            'serviceContent'        =>'required',
            'serviceLocation'       =>'required',
            'reserveCount'          =>'required',
            'categoryName'          =>'required',
            'name'                  =>'required',
            'gender'                =>'required',
            'phoneNumber'           =>'required',
            'email'                 =>'required',
            'contactTime'           =>'required'
        ];
    }
}
