@extends('admin.layouts.app')

@section('content')
    <h1 class="text-center">Posts</h1>

@include('admin.layouts._messages')

<a href="{{route('post.create')}}" class="btn btn-primary">New Post</a>


<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>Img</th>
      <th>Name</th>
      <th>Description</th>
      <th>Category</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td> <img src="{{$item->img}}" alt="{{$item->name}}" style="width: 70px"></td>
        <td>{{$item->name}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->category->name}}</td>
        <td>
          <div class="d-flex justify-content-end">
            <a href="{{route('post.edit', ['post'=>$item->id])}}" class="btn btn-warning me-2">Edit</a>

            {!! Form::open(['route'=>['post.destroy', $item->id], 'method'=>'delete']) !!}
              <button class="btn btn-danger">Delete</button>
            {!! Form::close() !!}
          </div>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection