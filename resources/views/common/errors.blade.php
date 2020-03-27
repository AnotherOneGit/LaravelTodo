@if (count($errors)>0)
    <strong>Smtng went wrong!</strong>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
