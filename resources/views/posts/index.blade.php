@extends('layouts.app')
@section('content')
<h1>posts</h1>
@if(count($posts)>0)
@foreach($posts as $post)
<div class="card">
	<h3><a href="/posts/{{$post->slug}}">{{$post->title}}</a></h3>
	<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
</div>
@endforeach
{{$posts->links()}}
@else
<h2>there are no post</h2>
@endif
@endsection