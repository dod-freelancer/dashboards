@extends('layouts.app')
@section('content')
@foreach($subjects as $sub)

    <div class="panel-body">
    <p> Topic: {{key($sub)}}</p><p>Quantity: {{$sub[key($sub)]}}</p>
        <a href="/dashboards/{{key($sub)}}">show</a>
        <hr>
    </div>

    @endforeach
@endsection