<span class="help-block">
    <!-- エラー表示位置 -->
</span>
@foreach($post->comments as $comment)
@if(Auth::id() === $comment->user_id)
<div class="container mt-4">
    <div class="border-top p-1">
        <span>
            <strong>
                <a class="no-text-decoration black-color" href="">
                    <!-- ユーザ名 -->
                    {{$comment->user->name}}<br>
                </a>
            </strong>
        </span>
        <div class="comments mt-1">
            <span>
                <!-- コメント表示位置 -->
                {{$comment->comment}}<br>
            </span>
            <div class="post_edit text-right">

                <a class="btn btn-primary btn-sm" href="{{route('comment.edit',$comment->id)}}"><i class="far fa-edit"></i>編集
                </a>
            </div>
        </div>
    </div>
</div>
@else
<div class="container mt-4">
    <div class="border-top p-1">
        <span>
            <strong>
                <a class="no-text-decoration black-color" href="">
                    <!-- ユーザ名 -->
                    {{$comment->user->name}}<br>
                </a>
            </strong>
        </span>
        <div class="comments mt-1">
            <span>
                <!-- コメント表示位置 -->
                {{$comment->comment}}<br>
            </span>
        </div>
    </div>
</div>
@endif
@endforeach
