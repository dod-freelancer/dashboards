@extends('layouts.app')
@section('content')
@foreach($group as $g)
    <p>title {{$g->title}}</p>
    <p>body {{$g->body}}</p>
    <a href="/dashboards/follow/{{$g->id}}">follow</a>
    <hr>
    @endforeach
    @endsection