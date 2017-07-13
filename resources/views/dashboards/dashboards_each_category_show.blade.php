@extends('layouts.app')
@section('content')
@foreach($group as $l => $g)
  <div class="category_dashboard">
    <p>title: {{$g->title}}</p>
    <p>body: {{$g->body}}</p>
    <p>owner: {{$arr['user'][0]}}</p>

    <a href="/dashboards/follow/{{$g->id}}">follow</a>
    <p>followers: {{$arr[0]}}</p>
    <hr>
  </div>
    @endforeach
    @endsection
