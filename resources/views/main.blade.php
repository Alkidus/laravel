@extends('layouts.app')
{{-- @extends('template') --}}

@section('content')

<h1>{!!$title!!}</h1>

@foreach ($categories as $category)
    {{$category->name}} <br>
@endforeach


<hr>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/get-form" method="POST">
@csrf
<input type="text" name="name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}">
@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<br>
<input type="text" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}">
@error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<br>
<button>Send</button>
</form>
<style>
    .is-invalid{
        border: 3px red solid
    }
</style>



@endsection

@section('title', 'Main page')