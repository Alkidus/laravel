@extends('layouts.app')
@section('content')
<h1 class="text-center">{{$category->name}}</h1>
    @forelse ($posts as $post)
        <article class="border m-2 p-3">
            <h2><a href="{{route('postFront', $post->id)}}">{{$post->name}}</a></h2>
            {{$post->short_description}}
        </article>
    @empty
        <p>Post not found</p>
    @endforelse
        <div class="d-flex justify-content-center">
            {{$posts->links()}}
        </div>
    
@endsection