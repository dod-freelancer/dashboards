@extends('layouts.app')
@section('content')

@foreach($subjects as $sub)

    <div class="dashboard_subject_section">
    <p> Topic: {{key($sub)}}</p>
    <p>Quantity: {{$sub[key($sub)]}}</p>
        <a href="/dashboards/{{key($sub)}}">show</a>

    </div>

    @endforeach
@endsection
