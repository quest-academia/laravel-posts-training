<span class="help-block">
    @include('commons.error_card_list')
</span>

<div class="container mt-4">
    <div class="card-body">
        <span>
            <strong>
                <a class="no-text-decoration black-color" href="">
                    @forelse($post->comments as $comment)
                        {!! $comment->user->name !!}
                </a>
            </strong>
        </span>
        <div class="border-top p-1">
            <div class="comments mt-1">
                <span>
                    {{ $comment->comment}}
                    @empty
                        <p>コメントはまだありません</p>
                    @endforelse
                </span>
            </div>
        </div>
    </div>
</div>