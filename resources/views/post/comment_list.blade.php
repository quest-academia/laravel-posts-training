@foreach ($post->comments as $comment)
<span class="help-block">
{{$errors->first('comment')}}
</span>
    <div class="container mt-4">
        <div class="border-top p-1">
            <span>
                <strong>
                    <a class="no-text-decoration black-color" href="/users/{{ $comment->user->id }}">
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
@endforeach
