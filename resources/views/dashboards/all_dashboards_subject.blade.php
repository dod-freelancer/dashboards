@extends('layouts.app')
@section('content')
@foreach($subjects as $sub)

    <div class="panel-body">
    <p> Topic: {{key($sub)}}</p><p>Quantity: {{$sub[key($sub)]}}</p>
        <hr>
    </div>

    @endforeach
@endsection