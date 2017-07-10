@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-10 col-lg-offset-1">
        <form class="form-horizontal" method="post" action="/home/change/{{$dash->id}}">
            <legend>You're editing dash nr {{$dash->id}}</legend>
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title_edit">Title: </label>
                    <input class="form-control" type="text" value="{{$dash->title}}"
                           name="title" id="title_edit">
                </div>
                <div class="form-group">
                    <label for="body_edit">Body Panel:</label>
                    <textarea rows="7" class="form-control" id="body_edit" name="body">
                        {{$dash->body}}
                    </textarea>
                </div>
                <input type="submit" value="change" class="btn">
        </form>

        <a href="{{url('home')}}"><button class="btn btn-danger"> Cancel</button></a>
    </div>
</div>
@endsection