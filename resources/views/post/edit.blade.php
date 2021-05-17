@extends('layouts.app')

@section('content')

<div class="panel-body">
    <div class="d-flex flex-column align-items-center mt-5">
        <div class="col-xl-7 col-lg-8 col-md-10 col-sm-11 post-card">
            <div class="card">
                <div class="card-header">
                    投稿の編集
                </div>
                <div class="card-body">
                    <form class="upload" id="new_post" enctype="multipart/form-data" action="{{route('comment.update',$comment->id)}}" accept-charset="UTF-8" method="POST">
                        @csrf
                        <input class="form-control" type="hidden" name="post_id" value="{{$comment->post_id}}" />

                        <div class="form-group">
                            <textarea name="comment" class="form-control" rows="10" placeholder="本文" value="{{old('comment') ?? $comment->comment}}">{{$comment->comment}}</textarea>
                        </div>
                        <div class="text-center">
                            <input type="submit" name="commit" value="更新する" class="btn btn-primary w-25" data-disable-with="更新する" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
