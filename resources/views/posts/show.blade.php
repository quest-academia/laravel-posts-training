@extends('layout')

@section('content')
    <div class="container">
        <div class="container mt-4">
            <div class="text-right">
             {!!Form::open(['route'=>['posts.destroy',$post->id],'method'=>'delete']) !!}
                <a class="btn btn-primary" href="{{route('posts.edit',['post_id'=>$post->id])}}">編集する</a>
                {!!Form::submit('削除する',['class'=>'btn btn-danger'])!!}

             {!!Form::close()!!}
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="card mb-4">
            <div class="card-header">
                <h2>{{$post->title}}</h2>
            </div>
            <div class="card-body">
                <p class="card-text">{{$post->body}}</p>
            </div>
            <div class="card-footer">
                <span>投稿日時：{{$post->created_at->format('Y-m-d')}}</span>
            </div>
        </div>
    </div>
    <div class="container mb-4">
         <a class="btn btn-secondary" href="{{route('top')}}">topへ</a>
    </div>
@endsection('content')
