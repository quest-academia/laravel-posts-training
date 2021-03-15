@extends('layouts.app')

@section('content')

  <div class="container">

    <div class="container mt-4">
      <div class="text-right">
        <a class="btn btn-primary" href="{{ route('posts.edit', ['posts_id' => $posts->id]) }}">編集する</a>

        {!! Form::open([ 'method' => 'delete', 'route' => ['posts.delete', $posts->id]]) !!}
          {!! Form::submit('削除する', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
      </div>
    </div>

  </div>

  <div class="container my-4">

      <div class="card mb-4">
        <h2 class="card-header">
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

@endsection