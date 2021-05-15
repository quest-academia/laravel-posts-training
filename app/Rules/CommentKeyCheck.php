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
        $keys = explode('.', $attribute);
        return $keys[1] == $this->post_id;
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
