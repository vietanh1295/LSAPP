@extends('layouts.app')
@section('content')
<h1>posts</h1>
@if($post)
<div class="card">
	<h3>{{$post->title}}</h3>
	<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
	<p>{!!$post->body!!}</p>
</div>
<button class="btn btn-default"><a href="/posts/{{$post->id}}/edit">edit</a></button>
{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE']) !!}
{{Form::submit('Submit',['class' => 'btn btn-danger'])}}
{!! Form::close() !!}
@else
<h2>there are no post</h2>
@endif
@endsection