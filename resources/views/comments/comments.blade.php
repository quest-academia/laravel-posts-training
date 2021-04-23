<div class="container mt-4">
    @forelse($post->comments as $comment)
        <div class="border-top p-1">
            <div class="comment_display" style="display:flex; justify-content:space-between; flex-wrap: wrap;">
                <span>
                    <strong>
                        <a class="no-text-decoration black-color" href="{{ route('show', $comment->user->id) }}">
                            @forelse($post->comments as comment )
                                <i class="fas fa-user-circle fa-2x mr-1"></i>
                                    {{ $comment->user->name }}
                        </a>
                    </strong>
                </span>
                <div class="comment_edit">
                    <a class="btn btn-info btn-sm py-1"  href="{{ route('comment.edit', ['comment' => $comment]) }}"><i class="far fa-edit" method="get"></i>コメントを編集
                    </a>
                </div>
            </div>
            <div class="comments mt-1">
                <span>
                    {!! nl2br(e($comment->comment)) !!}
                </span>
            </div>
        </div>
    @empty
        <div class="comments mt-1">
            <span>
                <p>コメントはまだありません</p>
            </span>
        </div>
    @endforelse
    <div id="comment-post-1">
        <div class="m-4">
            <form method="POST" action="{{ route('comment.store') }}" accept-charset="UTF-8">
                {{ csrf_field() }}
                <input type="hidden" name='user_id' value="{{ Auth::user()->id }}">
                <input type="hidden" name='post_id' value="{{ $post->id }}">
                <input type="text" name="comment[{{ $post->id }}]" value="{{ old('comment.' . $post->id) }}"
                    class="form-control comment-input border border-light mx-auto" placeholder="コメントを入力する">
                <div class="text-right">
                    <input class="far fa-comment btn btn-default btn-sm" type="submit" value="&#xf075;コメント送信">
                </div>
            </form>
        </div>
    </div>
</div>
