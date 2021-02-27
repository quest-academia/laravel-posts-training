<?php

namespace App\Http\Controllers;
use App\Post;
use Auth;
use Validator;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //ログイン画面に遷移(未ログインの場合)
    public function __construct()
    {

    $this->middleware('auth');

    }

    //トップページを表示
    public function index()
    {

    $posts = Post::limit(5)->orderBy('created_at', 'desc')->paginate(10);
    return view('post/index', ['posts' => $posts]);

    }

    //新規投稿画面の表示
    public function new()
    {

    return view('post/new');

    }

    //バリデーション
    public function store(Request $request)
    {

    $validator = Validator::make($request->all() , ['title' => 'required|max:50', 'body' => 'required|max:255']);

    //バリデーションの結果がエラーの場合
    if ($validator->fails())

    {

    return redirect()->back()->withErrors($validator->errors())->withInput();

    }

    // Postモデル
    $post = new Post;
    $post->title = $request->title;
    $post->body = $request->body;
    $post->user_id = Auth::user()->id;
    $post->save();
    return redirect('/');

    }

    //投稿削除機能
    public function destroy($post_id)
    {

    $post = Post::find($post_id);
    $post->delete();
    return redirect('/');

    }

    //記事編集・更新機能
    public function edit($post_id)
    {

    $post = Post::findOrFail($post_id);
    return view('post.edit', [
    'post' => $post,
    ]);

    }

    public function update($post_id, Request $request)
    {

    $params = $request->validate([
    'title' => 'required|max:50',
    'body' => 'required|max:250',

    ]);

    $post = Post::findOrFail($post_id);
    $post->fill($params)->save();
    return redirect('/');
    
    }
}
