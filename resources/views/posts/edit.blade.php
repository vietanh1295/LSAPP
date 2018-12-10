@extends('layouts.app')
@section('content')
{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'PUT']) !!}
<div class="form-group">
{{Form::label('title', 'Title')}}
{{Form::text('title', $post->title, ['class' => 'form-control'])}}
</div>
<div class="form-group">
{{Form::label('body', 'Body')}}
{{Form::textarea('body', $post->body, ['id'=>'article-ckeditor', 'class' => 'form-control'])}}
</div>
{{Form::submit('Submit',['class' => 'btn btn-default'])}}
{!! Form::close() !!}
@endsection