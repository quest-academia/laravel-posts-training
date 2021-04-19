<div class="container mt-4">
    @forelse($post->comments as $comment)
        <div class="border-top p-1">
            <span>
                <strong>
                    <a class="no-text-decoration black-color" href="http://192.168.33.11/users/{{ $comment->user->id }}">
                        {{ $comment->user->name }}
                    </a>
                </strong>
            </span>
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
            {{ Form::open(['route' => 'comment.store']) }}
            {{ csrf_field() }}
            {{ Form::hidden('utf8') }}
            {{ Form::hidden('user_id') }}
            {{ Form::hidden('post_id', $post->id) }}
            <input type="text" name="comment[{{ $post->id }}]" value="{{ old('comment.'.$post->id) }}"
                class="form-control comment-input border border-light mx-auto" placeholder="コメントを入力する">
            <div class="text-right">
                {{ Form::submit('&#xf075;コメント送信', ['class' => 'far fa-comment btn btn-default btn-sm']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
