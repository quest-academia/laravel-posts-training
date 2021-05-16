<?php

namespace App\Http\Middleware;

use Closure;
use App\Post;

class EditCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $param = $request->route()->parameter('id');

        $post = Post::findOrFail($param);

        if (auth()->user()->id !== $post->user_id) {
            return redirect('/')->with('error', '許可されていない操作です');
        }
        return $next($request);
    }
}
