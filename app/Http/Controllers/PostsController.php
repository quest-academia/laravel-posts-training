<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostsUpdateRequest;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 投稿を全件取得
        $posts = Post::all();

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        // 投稿者以外の編集を規制
        if (auth()->user()->id != $post->user_id) {
            return redirect('/');
        }

        //更新画面へ
        return view('posts.edit', [
            'post' => $post,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostsUpdateRequest $request, $id)
    {
        // idで受け取ったものを更新する
        $post = Post::findOrFail($id);

        // 投稿者以外の編集を規制
        if (auth()->user()->id != $post->user_id) {
            return redirect('/');
        }

        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     *@param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 受け取ったidをPostモデルから探す
        $post = Post::findOrFail($id);
        dd($post);

        // ログインユーザ自身の投稿を削除
        if (\Auth::id() == $post->user_id) {
            $post->delete();
        }

        // 前のURLにリダイレクト
        return redirect('/');
    }
}
