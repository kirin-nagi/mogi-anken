<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => ['required', 'max:20'],
            'email' => ['required', 'email'],
            'password' => ['required', 'max:8'],
            'password_confirm' => ['confirmed'],
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'お名前を入力してください',
            'name.max:20',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'password.required' => 'パスワードを入力してください',
            'password.max:8' => 'パスワードは8文字以内で入力してください',
            'password.confirmed' => 'パスワードと一致しません',
        ];
    }
}
