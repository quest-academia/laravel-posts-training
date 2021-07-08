<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
     * バリデーションルールを記述
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'max:20'],
            'body' => ['required', 'max:255'],
        ];
    }
}
