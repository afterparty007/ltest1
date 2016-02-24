@extends('layouts.master')

@section('content')
    @if(true)
        <div class="title">!!Exampxxle!! for {{$name}} from {{$location}}</div>
    @else
        False
    @endif

    @forelse($people as $person)
        {{$person}}
    @empty
        No person in the list!
    @endforelse
@endsection