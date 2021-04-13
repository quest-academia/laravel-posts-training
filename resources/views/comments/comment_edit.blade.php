@extends('layouts.app')

<div class="panel-body">
    <div class="d-flex flex-column align-items-center mt-3">
        <div class="col-xl-7 col-lg-8 col-md-10 col-sm-11 post-card">
          @include('commons.error_card_list')

          <div class="card mt-5">
            <div class="card-header">
              コメントの編集
            </div>
            <div class="card-body">
              {!! Form::open([ 'route' => ['comment.update', $comment->id], 'method' => 'put' ]) !!}
                {{csrf_field()}}
                  <div class="form-group">
                    {!! Form::label('comment', 'コメント') !!}
                  </div>
                    {!! Form::textarea('comment',old('comment', $comment->comment), ['class' => 'form-control']) !!}
                  <div class="text-center">
                  <a class="btn btn-secondary" href="/">キャンセル</a>
                    {!!  Form::submit('更新する', ['class' => 'btn btn-primary'])!!}
                  </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
    </div>
</div>
                    <!--<form class="upload" id="new_post" enctype="multipart/form-data" action="" accept-charset="UTF-8" 
                    method="POST">
                    {{csrf_field()}}
                        <div class="md-form">
                            <input class="form-control" placeholder="タイトル" type="text" name="title" value=""/>
                        </div>
                        <div class="form-group">
                            <textarea name="body" class="form-control" rows="10" placeholder="本文"></textarea>
                        </div>
                        <div class="text-center">
                            <input type="submit" name="commit" value="更新する" class="btn btn-primary w-25" data-disable-with="更新する"/>
                        </div>
                    </form>-->

