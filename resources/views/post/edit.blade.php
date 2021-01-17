@extends('layouts.app')
@section('content')
<div class="panel-body">

@include('common.errors')

<div class="d-flex flex-column align-items-center mt-3">
  <div class="col-xl-7 col-lg-8 col-md-10 col-sm-11 post-card">
    <div class="card">
      <div class="card-header">
        投稿の編集
      </div>
      <div class="card-body">
        <form class="upload" id="new_post" enctype="multipart/form-data" action="{{ route('posts.update', ['post' => $post])}}" accept-charset="UTF-8" method="POST">
        {{csrf_field()}} 
        @method('PUT')

        <div class="md-form">
          <input class="form-control" placeholder="タイトル" type="text" name="title" value="{{ old('list_name') }}"/>
        </div>

        <div class="form-group">
          <textarea name="body" required class="form-control" rows="10" placeholder="本文">{{ old('body') }}</textarea>
        </div>
        </div>
          <input type="submit" name="commit" value="更新する" class="btn btn-primary w-25" data-disable-with="更新する"/>
        </form>      
      </div>
    </div>
  </div>
</div>
@endsection
