<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Post;
use Auth;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(CommentRequest $request)
  {
    return redirect('/');
  }

}
