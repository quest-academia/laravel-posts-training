@extends('layouts.app')

@section('content')
    <div class="panel-body">
        <div class="d-flex flex-column align-items-center mt-3">
            <div class="col-xl-7 col-lg-8 col-md-10 col-sm-11 post-card">
                <span class="help-block">
                    @include('commons.error_card_list')
                </span>
                <div class="card mt-5">
                    <div class="card-header">
                        投稿の編集
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => ['update', $post->id]]) !!}
                            {{ csrf_field() }}
                            <div class="md-form">
                                {!! Form::text('title', old('title') ? old('title'):$post->title, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::textarea('body', old('body') ? old('body'):$post->body, ['class' => 'form-control']) !!}
                            </div>
                            <div class="text-center">
                                {!! Form::submit('更新する', ['class' => 'btn btn-primary w-25']) !!}
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
