<span class="help-block">
    <!-- エラー表示位置 -->
</span>
@foreach($comments as $key => $comment)
@if($post->id== $comment->post_id)
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
