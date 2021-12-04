@extends('layouts.app')
@section('content')
    <h1 class="text-center">{{$post->name}}</h1>
        {{$post->description}}


@endsection