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
                        @if ($post->user->id == Auth::user()->id)
                        <div class="post_edit text-right">
                          <a class="btn btn-primary btn-sm" href="{{ route('posts.edit', ['post' => $post]) }}"><i class="far fa-edit"></i>編集</a>
                          <a class="btn btn-danger btn-sm" rel="nofollow" href="/postsdelete/{{ $post->id }}"><i class="far fa-trash-alt"></i>削除</a>
                        </div>
                        @endif

                        <h3 class="h5 title">
                          {{ $post->title }}
                          </h3>
                            <div class="card-text">
                              {!! nl2br(e( $post->body )) !!}
                              </div>

                        <!-- コメント -->
                        <div id="comment-post-{{ $post->id }}">
                          @include('post.comment_list')

                          </div>
                          <hr>
           	                  <form class="w-100" action="{{ route('comments.store') }}" method="post">
                               @csrf
                               <input name="utf8" type="hidden" value="{{ $post->id }}"/>
                                  <input value="{{ Auth::user()->id }}" type="hidden" name="user_id" />
                                    <input value="{{ $post->id }}" type="hidden" name="post_id" />
                                      <input class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }} comment-input border border-light" placeholder="コメントを入力する">{{ old('comment') }}</input>
                                      @php
                                        $commentErrorName = 'comment'. $post->id;
                                      @endphp

                                      @foreach ($errors->all() as $error)
                                      @if ($error == $commentErrorName . 'は必ず指定してください。')
                                      <li>{{ $error }}</li>
                                      @endif
                                      @endforeach
                                          <input type="submit" value="コメント送信" class="btn btn-default btn-sm"></input>

                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>


                            @endforeach
                          @endsection
