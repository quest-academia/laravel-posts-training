@extends('layout')

@section('content')
    <div class="container my-4">
        <div class="border p-4">
            <h5 class="mb-4">投稿の編集</h5>
            @if ($errors->any())
                <div>
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!!Form::open(['route'=>['posts.update',$post->id],'method'=>'put']) !!}
                <div class="form-group">
                {!!Form::label('title','タイトル')!!}
                {!!Form::text('title',old('title') ? old('title') : $post->title ,['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                {!!Form::label('body','本文')!!}
                {!!Form::textarea('body',old('body') ? old('body') : $post->body ,['class'=>'form-control'])!!}
                </div>
                <div class="mt-4">
                    <a class="btn btn-secondary"href="{{route('posts.show',['post_id'=>$post->id])}}">キャンセル</a>
                    {!!Form::submit('更新する',['class'=>'btn btn-primary'])!!}
                </div>
            {!!Form::close()!!}
        </div>
    </div>
@endsection('content')
