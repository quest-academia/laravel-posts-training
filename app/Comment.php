<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable =
        ['user_id',
        'post_id',
        'comment'];

    public function post()
    {
        // コメントは一つの投稿に属する
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        // コメントは一人のユーザーに属する
        return $this->belongsTo(User::class);
    }

}
