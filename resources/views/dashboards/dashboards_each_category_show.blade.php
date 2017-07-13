@extends('layouts.app')
@section('content')
@foreach($group as $g)
    <p>title {{$g->title}}</p>
    <p>body {{$g->body}}</p>
    <a href="/dashboards/fallow/{{$g->id}}">fallow</a>
    <hr>
    @endforeach
    @endsection