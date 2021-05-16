<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CommentKeyCheck implements Rule
{
    private $post_id;

    public function __construct($post_id)
    {
        $this->post_id = $post_id;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // commentの配列の添字がpost_idと一致するか検証
        // $attributeは、文字列の"comment.添字"であるため、
        // 添字のみ取得してpost_idと検証。
        $commentKeys = explode('.', $attribute);
        return $commentKeys[1] == $this->post_id;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'コメント投稿に失敗しました。';
    }
}
