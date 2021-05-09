<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->get();
        
        return view('posts.index',['posts'=>$posts]);
    }
    
    public function create()
    {
        return view('posts.create');
        // $user = \Auth::user();
        // $posts = $user->posts()->orderBy('id','desc')->paginate(9);
        
        // $data=[
        //     'user' => $user,
        //     'posts' => $posts,
        //     ];
            
        // return view('posts.create',$data);
    }
    
    public function edit()
    {
        // $post = Post::findOrFail($post_id);
        
        // return view('posts.edit',['post' => $post]);
        return view('posts.edit');
    }
    
    public function update($post_id, Request $request)
    {
        $params = $request->validate([
            'title'=>'required|max:20',
            'body'
            ]);
            
        $post = Post::findOrFail($post_id);
        $post->fill($params)->save();
        
        return view('posts.edit',['post' => $post]);
        // return view('posts.edit');
    }
    
    public function store(Request $request)
    {

        $this->validate($request,[
            'title' => 'required|max:20',
            'body',
        ]);

        $request->user()->posts()->create([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return back();
    }
    
    public function destroy($post_id)
    {
        
        $post = Post::findOrFail($post_id);
        
        \DB::transaction(function() use ($post){
            $post->delete();
        });

        return redirect()->route('/');
    }
}
