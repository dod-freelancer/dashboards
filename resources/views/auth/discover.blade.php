@extends('layouts.app')

@section('content')
    @foreach ($discover as $eachDisc)
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 discover_random_dash">
      <div class="discover_random_title"><p>Title: {{$eachDisc->title}}</p></div>
      <div class="discover_random_body"><p>Body: {{$eachDisc->body}}</p></div>
    </div>
  </div>
</div>
    @endforeach
@endsection
