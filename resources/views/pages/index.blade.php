@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is first laravel application from scratch</p>
        @if(Auth::guest())
            <p><a href="{{ route('login') }}" class="btn btn-primary btn-lg">Login</a> <a href="{{ route('register') }}" class="btn btn-success btn-lg">Register</a></p>
        @endif
    </div>
@endsection