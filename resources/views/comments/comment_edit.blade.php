@extends('layouts.app')

@section('content')
<div class="panel-body">
  <div class="d-flex flex-column align-items-center mt-3">
    <div class="col-xl-7 col-lg-8 col-md-10 col-sm-11 post-card">
    @include('commons.error_card_list')
      <div class="card mt-5">
        <div class="card-header">
          <h5 class="mb-2">コメントの編集</h5>
        </div>
        <div class="card-body">
          {!! Form::open(['route' => ['comment.delete', $comment->id], 'method' => 'delete']) !!}
          {!! Form::submit('削除する', ['class' => 'btn btn-danger w-25']) !!}
          {!! Form::close() !!}
          <div class="md-form">
            {!! Form::open(['route' => ['comment.update', $comment->id], "accept-charset" => "UTF-8", 'method' => 'put']) !!}
            {{csrf_field()}}
              <div class="form-group">
              {!! Form::textarea('comment',old('comment') ? old('comment') : $comment->comment ,['class'=>'form-control']) !!}
              </div>
              <div class="text-center">
                <a class="btn btn-secondary" href="/">キャンセル</a>
                {!! Form::submit('更新する', ['class' => 'btn btn-primary w-25']) !!}
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
