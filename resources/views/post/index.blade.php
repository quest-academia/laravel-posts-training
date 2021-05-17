@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <h1 class="display-4 text-center">Laravel Post <i class="fas fa-mail-bulk"></i></h1>

</div>

<div class="col-md-8 col-md-2 mx-auto">
    <!-- エラー表示箇所 -->
    @if (session('error'))
    <div class="alert alert-danger error">
        {{ session('error') }}
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
                        <!-- コメントをここに挿入 -->
                        <div class="m-4">
                            <form class="w-100" action="" method="post">
                                {{ csrf_field() }}
                                <input name="utf8" type="hidden" value="" />
                                <input value="" type="hidden" name="user_id" />
                                <input value="" type="hidden" name="post_id" />
                                <input name="" value="" class="form-control comment-input border border-light mx-auto" placeholder="コメントを入力する">
                                </input>
                                <div class="text-right">
                                    <input type="submit" value="&#xf075;コメント送信" class="far fa-comment btn btn-default btn-sm">
                                    </input>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
