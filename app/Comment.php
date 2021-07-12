<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   // 2021/07/12 commentsテーブルから「post_comment_id」を削除したため、削除
   protected $fillable = ['user_id', 'message', 'post_id'];
}
