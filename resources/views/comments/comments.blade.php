<span class="help-block">
@include('commons.error_card_list')
</span>
    <div class="container mt-4">
        <div class="border-top p-1">
            <span>
                <strong>
                    <a class="no-text-decoration black-color" href="">
                    {{ $comment->user->name }}
                    </a>
                </strong>
            </span>
            <div class="comments mt-1">
                <span>
                    {{ $comment->comment }}
                    <!--@if (session('commentstatus'))
                          <div class="alert alert-success mt-4 mb-4">
                          {{ session('commentstatus') }}
                          </div>
                      @endif-->
                </span>
            </div>
        </div>
    </div>
