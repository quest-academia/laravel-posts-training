<span class="help-block">
@include('commons.error_card_list')
</span>
    <div class="container mt-4">

            <span>
                <strong>
                    <a class="no-text-decoration black-color" href="">
                    @forelse($post->comments as $comment)
                      <div class="border-top p-1">
                      @empty
            <p>コメントはまだありません。</p>
                    @endforelse
                    </a>
                </strong>
            </span>
            <div class="comments mt-1">
                <span>
                    <!--{{ $comment->comment }}-->

                </span>
            </div>
        </div>
    </div>
