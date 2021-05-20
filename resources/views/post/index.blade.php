@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <h1 class="display-4 text-center">Laravel Post <i class="fas fa-mail-bulk"></i></h1>

</div>

<div class="col-md-8 col-md-2 mx-auto">
    <!-- エラー表示箇所 -->
    @include('layouts.comment_error_card_list')
    @if (session('error'))
    <div class="alert alert-danger error">
        {{ session('error') }}
    </div>
    @endif
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
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
                @if(Auth::id() == $post->user_id)
                <div class="post_edit text-right">
                    <a class="btn btn-primary btn-sm" href="{{route('post.edit',$post->id)}}" style="width: 96px;"><i class="far fa-edit"></i>編集
                    </a>
                    <form class="btn btn-sm bg-danger" action="{{route('post.destroy', $post->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="&#xf1f8; 削除" class="fas fa-trash bg-danger" style="border: 0px none; color:white;" onclick='return confirm("削除しますか？");'>
                    </form>
                </div>
                @endif
                <h3 class="h5 title">
                    <!-- タイトル -->
                    {{$post->title}}
                </h3>
                <div class="mb-5">
                    <!-- 本文 -->
                    {{$post->message}}
                </div>
                <section>
                    <!-- コメント -->
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
