@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <h1>Your Blog Posts</h1>
    <br />
    <a href="/posts/create" class="btn btn-primary">Create New</a>
    <br /><br />

    @if(count($posts) > 0)
        <table class="table table-striped" style="width:50%;">
            <tr>
                <th>Table</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                    <td>
                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <p>You have no posts to display</p>
    @endif
@endsection
