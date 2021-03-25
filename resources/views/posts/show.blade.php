@extends('layouts.app')

@section('content')

<div class="container">
  <div class="flex text-right mt-4" style="display: flex; justify-content: flex-end;">
    <div class ="f-item mr-1">
      {!! Form::open([ 'route' => ['posts.edit', $posts->id], 'method' => 'get' ]) !!}
        {!! Form::submit('編集する', ['class' => 'btn btn-primary']) !!}
      {!! Form::close() !!}
    </div>
    <div class="f-item mr-4">
      {!! Form::open([ 'route' => ['posts.delete', $posts->id], 'method' => 'delete' ]) !!}
        {!! Form::submit('削除する', ['class' => 'btn btn-danger']) !!}
      {!! Form::close() !!}
    </div>
  </div>
</div>

  <div class="container my-4">
    <div class="card mb-4">
        <h2 class="card-header pb-3">
          {{ $posts->title }}
        </h2>
        <div class="card-body">
          <p class="card-text">
            {{ $posts->body }}
          </p>
        </div>
        <div class="card-footer">
          <span>
            投稿日時:{{ $posts->created_at->format('Y.m.d') }}
          </span>
        </div>
    </div>
    <a class="btn btn-secondary" href="{{ route('top') }}">topへ</a>
  </div>

@endsection