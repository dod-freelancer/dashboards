@extends('layouts.app')
@section('content')
@foreach($dashboards as $l => $dash)
    <p>{{$dash[0]['title']}}</p>
    <p>{{$dash[0]['body']}}</p>
    {{--get name of user !!!!! add !! --}}
    <p>{{$dash[0]['user_id']}}</p>
    <hr>
    @endforeach
@endsection