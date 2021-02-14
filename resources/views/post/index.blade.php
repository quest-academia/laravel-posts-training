@extends('layouts.app')

@include('navbar')

@include('footer')

@section('content')

<div class="jumbotron">
  <h1 class="display-4 text-center">Laravel Post <i class="fas fa-mail-bulk"></i></h1>
    </div>
     </div>

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
              @if ($post->user->id == Auth::user()->id)
            <div class="post_edit text-right">
          <a class="btn btn-primary btn-sm" href="{{ route('posts.edit', ['post' => $post]) }}"><i class="far fa-edit"></i>編集</a>
        <a class="btn btn-danger btn-sm" rel="nofollow" href="/postsdelete/{{ $post->id }}"><i class="far fa-trash-alt"></i>削除</a>
      </div>

      @endif
    <h3 class="h5 title">
    {{ $post->title }}
      </h3>
        <div class="mb-5">
          {!! nl2br(e( $post->body )) !!}
        </div>
      <section>


<!-- コメント -->
<div id="comment-post-{{ $post->id }}">
@include('post.comment_list')

    <form class="w-100" action="{{ route('comments.store') }}" method="post">
      @csrf
        <input name="utf8" type="hidden" value="{{ $post->id }}"/>
          <input value="{{ Auth::user()->id }}" type="hidden" name="user_id" />
            <input value="{{ $post->id }}" type="hidden" name="post_id" />
              <input name="comment[{{ $post->id }}]" class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }} comment-input border border-light" placeholder="コメントを入力する">{{ old('comment') }}</input>
                <div class="text-right">
                  <input type="submit" value="&#xf075;コメント送信" class="far fa-comment btn btn-default btn-sm"></input>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    @endforeach
  @endsection
