@extends('layouts.app')

@section('content')


    <div class="container my-4">
        <div class="border p-4">
            <h5 class="mb-4">投稿の編集</h5>
@include('commons.error_clear_last')
            {!!Form::open(['route'=>['posts.update',$post->id]])!!}
            {{ csrf_field() }}
                <div class="md-form">
                {!! Form::text('title', old('title'), ['class' => 'form-control'.(old('title') ? old('title'):$post->title)]) !!}
                </div>
                <div class="form-group">
                {!! Form::textarea('body', old('body'),['class'=> 'form-control'.(old('body') ? old('body'):$post->body)]) !!}
                </div>
                <div class="mt-4">
                    <a class="btn btn-secondary"href="">キャンセル</a>
                    {!!Form::submit('更新する',['class'=>'btn btn-primary'])!!}
                </div>
            {!!Form::close()!!}
        </div>
    </div>
@endsection
