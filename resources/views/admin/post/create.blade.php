@extends('admin.layouts.app');

@section('content')
<h1>Create Post</h1>

@include('admin.layouts._messages');

{!! Form::model($post, ['route' => 'post.store', 'files' => true]) !!}
@include('admin.post._form')
{!! Form::close() !!}
    
@endsection

@section('js')
<script>
    $('#lfm').filemanager('image');
</script>
    
@endsection