@extends('layouts.app')

@section('content')

    @include('commons.error_card_list')
    <div class="panel-body">
        <div class="d-flex flex-column align-items-center mt-5">
            <div class="col-xl-7 col-lg-8 col-md-10 col-sm-11 post-card">
                <div class="card">
                    <div class="card-header">
                        投稿の新規作成
                    </div>
                    <div class="card-body">
                        <form class="upload" id="new_post" enctype="multipart/form-data" action="{{ route('store') }}"
                            accept-charset="UTF-8" method="POST">
                            {{ csrf_field() }}
                            <div class="md-form">
                                <input name="title" class="form-control" placeholder="タイトル" value="" />
                            </div>
                            <div class="form-group">
                                <textarea name="body" class="form-control" rows="10" placeholder="本文"></textarea>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="投稿する" class="btn btn-primary w-25" data-disable-with="投稿する" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
