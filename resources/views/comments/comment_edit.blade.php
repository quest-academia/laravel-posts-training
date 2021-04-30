<link rel="stylesheet" href="{{ asset('/css/style.css') }}">

@extends('layouts.app')

@section('content')
<div class="panel-body">
  <div class="d-flex flex-column align-items-center mt-3">
    <div class="col-xl-7 col-lg-8 col-md-10 col-sm-11 post-card">
    @include('commons.error_card_list')
      <div class="card mt-5">
        <div class="card-header">
          <div class="comment_display" style="display:flex; justify-content:space-between; flex-wrap: wrap;">
          <h5 class="mb-2">コメントの編集</h5>
          <a class="btn-xs" href="/"><i class="fa fa-reply" style="color: gray; ">　戻る</i></a>
</div>
        </div>
        <div class="card-body">
          <div class="md-form">
            {!! Form::open(['route' => ['comment.update', $comment->id], "accept-charset" => "UTF-8", 'method' => 'put']) !!}
            {{csrf_field()}}
              <div class="form-group">
              {!! Form::textarea('comment',old('comment') ? old('comment') : $comment->comment ,['class'=>'form-control']) !!}
              </div>
              <div class="container">
              <div class="flex text-center mt-3" style="display:flex; justify-content:center; writing-mode:horizontal-tb;">
              <div class="f-item mr-2" style="writing-mode:horizontal-tb;">
                {!! Form::submit('更新する', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
</div>
                <div class="f-item" style="writing-mode:horizontal-tb;">
                {!! Form::open(['route' => ['comment.delete', $comment->id], 'method' => 'delete']) !!}
                {!! Form::submit('削除する', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
</div>
                </div>
</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
