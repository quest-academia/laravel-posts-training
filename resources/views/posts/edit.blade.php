@extends('layouts.app')

@section('content')

    <div class="container my-4">
        <div class="border p-4">
            <h5 class="mb-4">投稿の編集</h5>
            {!!Form::open(['route'=>'posts.store'])!!}
                <div class="form-group">
                {!!Form::label('title','タイトル')!!}
                {!!Form::text('title',old('title'),['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                {!!Form::label('body','本文')!!}
                {!!Form::textarea('body',old('body'),['class'=>'form-control'])!!}
                </div>
                <div class="mt-4">
                    <a class="btn btn-secondary"href="">キャンセル</a>
                    {!!Form::submit('更新する',['class'=>'btn btn-primary'])!!}
                </div>
            {!!Form::close()!!}
        </div>
    </div>
@endsection
