@extends('layouts.app')
@section('content')
@foreach($group as $l => $g)
    <p>title: {{$g->title}}</p>
    <p>body: {{$g->body}}</p>
    <p>owner: {{$arr['user'][0]}}</p>

    <a href="/dashboards/follow/{{$g->id}}">follow</a>
    <p>followers: {{$arr[0]}}</p>
    <hr>
    @endforeach
    @endsection