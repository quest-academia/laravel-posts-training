<div class="m-4">
    <form class="w-100" action="{{ route('comments.store') }}" method="post">
        {{ csrf_field() }}
        <input name="utf8" type="hidden" value="" />
        <input value="{{ Auth::id() }}" type="hidden" name="user_id" />
        <input value="{{ $post->id }}" type="hidden" name="post_id" />
        <input name="comment[{{ $post->id }}]" value="{{ old('comment.'.$post->id) }}" class="form-control comment-input border border-light mx-auto" placeholder="コメントを入力する"></input>
        <div class="text-right">
            <input type="submit" value="&#xf075;コメント送信" class="far fa-comment btn btn-default btn-sm"></input>
        </div>
    </form>
</div>
