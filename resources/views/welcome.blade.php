@extends('layouts.app')

@section('content')

    <div class="center jumbotron bg-warning">

        <div class="text-center text-white">
            <h1>YouTubeまとめ × SNS</h1>
        </div>

    </div>
    
    @include('posts.posts', ['posts'=>$posts])

@endsection
