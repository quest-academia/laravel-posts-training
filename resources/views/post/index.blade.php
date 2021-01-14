@extends('layouts.app')

@include('navbar')

@include('footer')

@section('content')

@foreach ($posts as $post) 
<div class="col-md-8 col-md-2 mx-auto">
    <div class="card-wrap">
      <div class="card mt-3">
        <div class="card-header align-items-center d-flex">
          <a class="no-text-decoration" href="/users/{{ $post->user->id }}">
            @if ($post->user->profile_image)
              <i class="fas fa-user-circle fa-2x mr-1"></i>
            @else
              <i class="fas fa-user-circle fa-2x mr-1"></i>
            @endif
          </a>
          <a class="black-color" title="{{ $post->user->name }}" href="/users/{{ $post->user->id }}">
            <strong>{{ $post->user->name }}</strong>
          </a>
          </div>
          <div class="card-body">
          <h3 class="h5 title">
            {{ $post->title }} 
          </h3>
          <div class="card-text">
            {!! nl2br(e( $post->body )) !!}
          <div class="font-weight-lighter font">
              <label>投稿日時: {{ $post->created_at}}</label>        
          </div>
          </div>
     
        
        <div id="comment-post-{{ $post->id }}">
              @include('post.comment_list')
            </div>
            <a class="light-color post-time no-text-decoration" href="/posts/{{ $post->id }}">コメント日時: {{ $post->created_at }}</a>
            <hr>
            <div class="row actions" id="comment-form-post-{{ $post->id }}">
           	  <form class="w-100" id="new_comment" action="/posts/{{ $post->id }}/comments" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
             	  {{csrf_field()}} 
                <input value="{{ Auth::user()->id }}" type="hidden" name="user_id" />
                <input value="{{ $post->id }}" type="hidden" name="post_id" />
                <input class="form-control comment-input border-0" placeholder="コメントする" autocomplete="off" type="text" name="comment" />
              </form>
            </div>
            </div>
    
      @if ($post->user->id == Auth::user()->id)
      <a class="ml-auto mx-0 my-auto" rel="nofollow" href="/postsdelete/{{ $post->id }}">
      <button class="btn btn-danger btn-sm">削除する</button>
      </a>
      @endif

    </div>
  </div>
</div>
    @endforeach

<!-- ページネーション !-->
  <div class="d-flex justify-content-center mb-5">
    {{ $posts->links() }}
  </div>

@endsection

