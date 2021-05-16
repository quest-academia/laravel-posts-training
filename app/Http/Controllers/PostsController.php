<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * 投稿一覧画面
     *
     * @return $posts
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('post.index', ['posts' => $posts]);
    }

    /**
     * 投稿新規登録
     *
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * 投稿登録保存
     *
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

    /**
     * 投稿編集
     *
     * @return $post
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        
        return view('post.edit', ['post' => $post]);
    }

    /**
     * 投稿更新
     *
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'message' => 'required|max:140',
        ]);

        $post = Post::findOrFail($id);
        $post->update([
            'title' => $request->title,
            'message' => $request->message,
        ]);

        return redirect('/');
    }
}
