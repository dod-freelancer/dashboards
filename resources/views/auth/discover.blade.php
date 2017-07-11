@extends('layouts.app')

@section('content')
    @foreach ($discover as $eachDisc)
        <p>Title: {{$eachDisc->title}}</p>
        <p>Body: {{$eachDisc->body}}</p>
        <hr>
    @endforeach
@endsection