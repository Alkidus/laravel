@extends('admin.layouts.app');

@section('content')
<h1>Create Category</h1>

@include('admin.layouts._messages');

{!! Form::model($category, ['route' => ['category.update', $category->id], 'method'=>'put']) !!}
@include('admin.category._form')
{!! Form::close() !!}
    
@endsection