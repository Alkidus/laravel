@extends('admin.layouts.app')

@section('content')
    <h1 class="text-center">Categories</h1>

@include('admin.layouts._messages')

<a href="{{route('category.create')}}" class="btn btn-primary">New Category</a>


<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>Name</th>
      <th>Description</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->description}}</td>
        <td>
          <div class="d-flex justify-content-end">
            <a href="{{route('category.edit', ['category'=>$item->id])}}" class="btn btn-warning me-2">Edit</a>

            {!! Form::open([ 'route'=>['category.destroy', $item->id], 'method'=>'delete' ]) !!}
              <button class="btn btn-danger">Delete</button>
            {!! Form::close() !!}
          </div>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection