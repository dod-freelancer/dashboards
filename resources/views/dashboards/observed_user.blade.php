@extends('layouts.app')
@section('content')
@foreach($dashboards as $l => $dash)
  <div class="observe_user_layout">
    <p>{{$dash[0]['title']}}</p>
    <p>{{$dash[0]['body']}}</p>
    {{--get name of user !!!!! add !! --}}
    <p>User: {{$dash[0]['user_id']}}</p>
  </div>
    @endforeach
@endsection
