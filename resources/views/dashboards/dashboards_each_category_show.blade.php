@extends('layouts.app')
@section('content')
@foreach($group as $l => $g)
    <p>title {{$g->title}}</p>
    <p>body {{$g->body}}</p>

    <a href="/dashboards/follow/{{$g->id}}">follow</a>
    <p>followers: {{$arr[$l]}}</p>
    <hr>
    @endforeach
    @endsection