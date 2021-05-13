<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentStoreRequest extends FormRequest
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
            'user_id' => ['exists:users,id'],
            'post_id' => ['exists:posts,id'],
            'comment.*' => ['required','max:40']
        ];
    }

    /**
     * メッセージのカスタマイズ
     */
    public function messages()
    {
        return [
            'comment.*.max' => ':attributeは40文字以内で入力してください。',
            'comment.*.required' => ':attributeは必須です。',
        ];
    }
}
