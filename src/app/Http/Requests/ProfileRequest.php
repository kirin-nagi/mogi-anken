<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name' => ['required', 'min|20'],
            'postcode' => ['required'/*ハイフンありで設定する*/],
            'address' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>'' ,
            'name.min|20' => '',
            'postcode.required' =>'',
            'postcode.ハイフン設定' =>'',
            'address.required' => '',

        ];
    }
}
