<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostsUpdateRequest extends FormRequest
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
            'title' => 'required|max:50',
            'body' => 'required',
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "タイトルは必ず指定してください",
            "title.max" => "コメントは50文字以下で入力して下さい",
            "body.required" => "本文は必ず入力してください",

        ];
    }
}
