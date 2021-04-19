@if ($errors->any())
    <div class="alert alert-danger alert_text">
        <span>入力した文字を修正してください。</span>
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
