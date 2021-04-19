<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'post_id' => 'required|exists:posts,id',
            'comment.*'=> 'required|max:40',
        ];
    }
    public function messages()
    {
        return[
        'comment.*.max' => 'コメントは40文字以内で入力してください',
        'comment.*.required' => 'コメントは必須です',
        ];
    }
}
