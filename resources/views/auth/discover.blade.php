@extends('layouts.app')

@section('content')
    @foreach ($discover as $eachDisc)
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 discover_random_dash">
      <div class="discover_random_title"><p>Title: {{$eachDisc->title}}</p></div>
      <div class="discover_random_body"><p>Body: {{$eachDisc->body}}</p></div>
    </div>
  </div>
</div>
    @endforeach
@endsection
