<span class="help-block">
</span>
<div class="container mt-4">
    <div class="border-top p-1">
        <span>
            <strong>
                {{-- 後ほどリンク先はユーザ詳細画面にする --}}
                <a class="no-text-decoration black-color" href="">
                    {{ $comment->user->name }}
                </a>
            </strong>
        </span>
        <div class="comments mt-1">
            <span>
                {{ $comment->comment }}
            </span>
        </div>
    </div>
</div>
