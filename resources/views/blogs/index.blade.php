@extends('layouts.master')

@section('content')
    <h1>My Latest Blog</h1>
    @foreach($blogs as $blog)
        <a href="/blogs/{{$blog->id}}"><h3>{{$blog->title}}</h3></a>
        <a href="{{ action('BlogsController@show', [$blog->id]) }}"><h3>{{$blog->title}}</h3></a>
        <p>{{$blog->body}}</p>
    @endforeach

@endsection