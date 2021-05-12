<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

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

        return view('post.index', ['posts' => $posts]);
    }

    /**
     * ユーザー新規登録
     *
     * @return $user
     */
    public function create()
    {
        $user = Auth::user();

        return view('post.create', ['user' => $user]);
    }

    /**
     * ユーザー登録保存
     *
     * @return $post　登録内容
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|max:50',
            'message' => 'required|max:140',
        ]);

        $request->user()->posts()->create([
            'title' => $request->title,
            'message' => $request->message,
        ]);

        return redirect('/');
    }
}
