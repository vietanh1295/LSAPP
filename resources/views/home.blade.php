@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-info">Create Post</a>
                    You are logged in!
                    <table>
                    <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{$post->title}}</th>
                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                        <td>{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE']) !!}
                            {{Form::submit('delete',['class' => 'btn btn-danger'])}}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
