<span class="help-block">
    <!-- エラー表示位置 -->
</span>
@foreach($post->comments as $comment)
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

            @if($comment->user->id == Auth::id())
                <form class="btn btn-sm bg-danger inline-block px-1" action="{{ route('comments.destroy', ['comment' => $comment]) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="&#xf1f8; 削除" class="fas fa-trash bg-danger" style="border: 0px none; color:white;" onclick='return confirm("コメントを削除しますか？");'>
                </form>
            @endif
        </div>
    </div>
</div>
@endforeach
