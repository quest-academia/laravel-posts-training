<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   protected $fillable = ['user_id', 'message', 'post_user_id', 'post_comment_id'];
}
