@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>入力内容を確認してください。</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
