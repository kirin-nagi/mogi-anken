<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExhibitionRequest extends FormRequest
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
            'name' => ['required'],
            
            'description' => ['required','max:255'],
            'image' => ['required','mimes:jpeg,png'],
            'category_name[]' => ['required'],
            'condition' => ['required'],
            'price' => ['required', 'numeric', 'min:0']
        ];

    }

    public function messages()
    {
        return [
            'name.required' => '商品名を入力してください',
            'description.required' => '商品説明を入力してください',
            'description.max:255' => '255文字以内で入力してください',
            'image.required' => '画像を選択してください',
            'image.mimes:jpeg,png' => '.jpegもしくはpngファイルを選択してください',
            'category_name[].required' => 'カテゴリーを選んだください',
            'condition.required' => '商品の状態を選んでください',
            'price.required' => '価格を入力してください',
            'price.numeric' => '数字で入力してください',
            'price.min:0' => '0円以上で入力してください',
        ];
    }
}
