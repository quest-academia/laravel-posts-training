@extends('layouts.app')

@section('main_content')

    <div class="jumbotron">
        <h1 class="display-4 text-center">Laravel Post <i class="fas fa-mail-bulk"></i></h1>
    </div>

    <div class="col-md-8 col-md-2 mx-auto">
        <span class="help-block">
            @include('comments.comment_error_card')
        </span>
        @foreach ($posts as $post)
            <div class="card-wrap">
                <div class="card mt-5">
                    <div class="card-header align-items-center d-flex">
                        <a class="no-text-decoration" href="{{ route('show', $post->user->id) }}">
                            <i class="fas fa-user-circle fa-2x mr-1"></i>
                        </a>
                        <a class="black-color" title="" href="{{ route('show', $post->user->id) }}">
                            <strong>
                                {{ $post->user->name }}
                            </strong>
                        </a>
                    </div>
                    <div class="card-body">
                            <div class="post_edit text-right" style="display: flex; justify-content: flex-end;">
                                <a class="btn btn-primary btn-sm" href="{{ route('edit', $post->id) }}"><i
                                        class="far fa-edit"></i>編集</a>
                                {!! Form::open(['route' => ['delete', $post->id], 'method' => 'delete']) !!}
                                {!! Form::button('<i class="far fa-trash-alt" style="margin-left: 2px;"></i>削除', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit']) !!}
                                {!! Form::close() !!}
                            </div>
                        <h3 class="h5 title">
                            {{ $post->title }}
                        </h3>
                        <div class="mb-5">
                            {{ $post->body }}
                        </div>
                    </div>
                    <section>
                        @include('comments.comments')
                    </section>
                    <!--</div>-->
                </div>
        @endforeach
    </div>
@endsection
