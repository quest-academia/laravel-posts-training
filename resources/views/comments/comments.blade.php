<span class="help-block">
    @include('commons.error_card_list')
</span>

<div class="container mt-4">
    <div class="border-top p-1">
        <span>
            <strong>
                <a class="no-text-decoration black-color" href="">
                    @forelse($post->comments as $comment)
                        {{ $comment->user->name }}
                </a>
            </strong>
        </span>
        <div class="comments mt-1">
            <span>
                {!! nl2br(e($comment->comment)) !!}
                    @empty
                        <p>コメントはまだありません</p>
                    @endforelse
            </span>
        </div>
    </div>
    <div id="comment-post-1">
        <div class="m-4">
            {{ Form::open(['route' => 'comment.store']) }}
            {{ csrf_field() }}
            {{ Form::hidden('utf8') }}
            {{ Form::hidden('user_id') }}
            {{ Form::hidden('post_id', $post->id) }}
            {{ Form::text('comment', null, ['class' => 'form-control comment-input border border-light mx-auto', 'placeholder' => 'コメントを入力する']) }}
            <div class="text-right">
                {{ Form::submit('&#xf075;コメント送信', ['class' => 'far fa-comment btn btn-default btn-sm']) }}
            </div>
                {{ Form::close() }}
        </div>
    </div>
</div>
