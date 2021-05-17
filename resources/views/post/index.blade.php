@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <h1 class="display-4 text-center">Laravel Post <i class="fas fa-mail-bulk"></i></h1>

</div>

<div class="col-md-8 col-md-2 mx-auto">
    <!-- エラー表示箇所 -->
</div>

<div class="col-md-8 col-md-2 mx-auto">
    <div class="card-wrap">
        @foreach($posts as $key => $post)

        <div class="card mt-3">
            <div class="card-header align-items-center d-flex">
                <a class="no-text-decoration" href="">
                    <i class="fas fa-user-circle fa-2x mr-1"></i>
                </a>
                <a class="black-color" title="" href="">
                    <strong>
                        <!-- ユーザ名 -->
                        {{$post->user->name}}
                    </strong>
                </a>
            </div>
            <div class="card-body">
                <h3 class="h5 title">
                    <!-- タイトル -->
                    {{$post->title}}
                </h3>
                <div class="mb-5">
                    <!-- 本文 -->
                </div>
                <section>
                    <!-- コメント -->
                    {{$post->message}}
                    <div id="comment-post-1">
                        @include('post.comment')
                        @include('post.comment_form')
                    </div>
                </section>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
