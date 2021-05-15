<?php

namespace App\Http\Requests;

use App\Rules\CommentKeyCheck;
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
            'post_id' => ['required', 'exists:posts,id'],
            'comment.'.$this->post_id => ['required', 'max:40', new CommentKeyCheck($this->post_id)]
        ];
    }

    /**
     * メッセージのカスタマイズ
     */
    public function messages()
    {
        return [
            'comment.*.max' => 'コメントは40文字以内で入力してください。',
            'comment.*.required' => 'コメントは必須です。',
        ];
    }
}
