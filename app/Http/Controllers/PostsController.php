<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostsController extends Controller
{
    /**
     * ユーザー一覧画面
     *
     * @return $posts
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        $comments = Comment::all();

        return view('post.index', ['posts' => $posts, 'comments' => $comments]);
    }
}
