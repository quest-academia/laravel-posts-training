<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class UpdateUserRequest extends FormRequest
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
     *バリデーションルールを記述
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:20',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'ユーザー名は必ず指定してください。',
            'name.max' => 'ユーザー名は、20文字以下で指定してください。',
            'email.required' => 'メールアドレスは必ず指定してください。',
            'email.email' => 'メールアドレスには、有効なメールアドレスを指定してください。',
            'email.max' => 'メールアドレスは、255文字以下で指定してください。。',
            'password.required' => 'パスワードは必ず指定してください。',
            'password.min' => 'パスワードは、6文字以上で指定してください。',
            'password.confirmed' => 'パスワードと、確認フィールドとが、一致していません。',
        ];
    }
}
