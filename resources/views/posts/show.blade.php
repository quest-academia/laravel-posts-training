@extends('layouts.app')

@section('content')

  <div class="container">

    <div class="container mt-4">
      <div class="text-right">
        {!! Form::open([ 'route' => ['posts.edit', $posts->id], 'method' => 'get' ]) !!}
          {!! Form::submit('編集する', ['class' => 'btn btn-primary']) !!}
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