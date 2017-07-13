@extends('layouts.app')
@section('content')
@foreach($group as $g)
    <p>title {{$g->title}}</p>
    <p>body {{$g->body}}</p>
<<<<<<< HEAD
    <a href="/dashboards/follow/{{$g->id}}">follow</a>
=======
    <a href="/dashboards/fallow/{{$g->id}}">fallow</a>
>>>>>>> 66aa46348018952cea5c9b96faebff55806b29d5
    <hr>
    @endforeach
    @endsection