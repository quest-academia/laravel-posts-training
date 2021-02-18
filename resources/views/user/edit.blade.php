@extends('layouts.app')
@include('navbar')
@include('footer')
@section('content')

<div class="col-md-offset-2 mb-1 edit-profile-wrapper">
  <div class="row">
    <div class="col-md-8 mx-auto">
      @include('common.errors')
      <div class="profile-form-wrap">
        <form class="edit_user" enctype="multipart/form-data" action="/users/update" accept-charset="UTF-8" method="post">
          <input name="utf8" type="hidden" value="&#x2713;" />
          <input type="hidden" name="id" value="{{ $user->id }}" />
            {{csrf_field()}}
              <div class="form-group">
                <label for="name">ユーザー名</label>
                  <input autofocus="autofocus" class="form-control" value="{{ old('name',$user->name) }}" name="name" />
                    </div>

                    <div class="form-group">
                      <label for="email">メールアドレス</label>
                        <input autofocus="autofocus" class="form-control" value="{{ old('email',$user->email) }}" name="email" />
                          </div>

                          <div class="form-group">
                            <label for="password">パスワード</label>
                              <input autofocus="autofocus" class="form-control" type="password" name="password" />
                                </div>

                                <div class="form-group">
                                  <label for="password_confirmation">パスワードの確認</label>
                                    <input autofocus="autofocus" class="form-control" type="password" name="password_confirmation" />
                                      </div>

                                      <div class="text-center">
                                        <input type="submit" name="commit" value="変更する" class="btn btn-primary" data-disable-with="変更する" />
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              @endsection
