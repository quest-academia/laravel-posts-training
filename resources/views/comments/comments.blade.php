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