@if ($errors->any())
    <div class="alert alert-danger"><ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul></div>
@endif

@if(session('succsess'))
<div class="alert alert-succsess">
    {{ session('succsess')}}
</div>
@endif