@if (count($errors) > 0)
    <ul class="alert alert-danger" style="margin-top:50px;">
        <div>入力した文字を修正してください。</div>
        @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
        @endforeach
    </ul>
@endif