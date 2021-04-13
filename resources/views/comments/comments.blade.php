<span class="help-block">
    @include('commons.error_card_list')
</span>

    <div class="container mt-4">
        <div class="border-top p-1">
            <span>
                <strong>
                    <a class="no-text-decoration black-color" href="">
                        @forelse($post->comments as $comment)
                            {!! $comment->user->name !!}
                    </a>
                </strong>
                <div class="comment_edit text-right" style="display: flex; justify-content: flex-end;">
                    <a class="btn btn-primary btn-sm" href="{{ route('comment.edit', $comment->id) }}"><i class="far fa-edit"></i>編集
                    </a>
                    {{-- @if (Auth::id() == $post->user_id) --}}
                        {!! Form::open(['route' => ['delete', $post->id], 'method' => 'delete']) !!}
                            {!! Form::button('<i class="far fa-trash-alt" style="margin-left: 2px;"></i>削除', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit']) !!}
                        {!! Form::close() !!}
                    {{-- @endif --}}
                </div>
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
    </div>