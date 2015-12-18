@extends('layouts.master')

@section('title')
    Your Birds
@stop

@section('content')

    <h1>Your Birds</h1>

    @if(sizeof($birds) == 0)
        You have not added any birds.
    @else
        @foreach($birds as $bird)
            <div>
                <h2>{{ $book->title }}</h2>
                <a href='/birds/edit/{{$bird->id}}'>Edit</a> | 
                <a href='/birds/confirm-delete/{{$bird->id}}'>Delete</a><br>
                <img src='{{ $bird->image }}'>
            </div>
        @endforeach
    @endif

@stop
