@extends('layouts.app')
@section('content')
{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
<div class="form-group">
{{Form::label('title', 'Title', ['class' => 'awesome'])}}
{{Form::text('title', '', ['class' => 'form-control'])}}
</div>
<div class="form-group">
{{Form::label('body', 'Body', ['class' => 'awesome'])}}
{{Form::textarea('body', '', ['id'=>'article-ckeditor', 'class' => 'form-control'])}}
</div>
{{Form::submit('Submit',['class' => 'btn btn-default'])}}
{!! Form::close() !!}
@endsection