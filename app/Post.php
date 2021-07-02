<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =
        ['user_id',
        'title',
        'body'];

    public function user()
    {
        // 投稿は一人のユーザーに属する
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        // 投稿は多数のコメントを持っている
        return $this->hasMany(Comment::class);
    }

}
