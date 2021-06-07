<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'body.*' => 'required|max:40',
            'post_id' => 'required',Rule::exists('comments')->where(function ($query) {
            $query->where('post_id');
            }),
        ];
    }
    
    // 'exists:comments,post_id'
    
    public function messages()
    {
        return[
            'body.*' => 'コメントは必須です',   
            
        ];
    }
}
