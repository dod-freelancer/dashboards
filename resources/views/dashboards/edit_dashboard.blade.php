
@extends('layouts.app')
@section('content')
<div class="row">

    <div class="col-xs-10 col-sm-10  col-xs-offset-1">
        <form class="form-horizontal" method="post" action="/home/change/{{$dash->id}}">
            <legend id="edit_info">You're editing dash nr  {{$dash->id}}</legend>
                {{csrf_field()}}
                <div class="form-group title_layout">
                    <label for="title_edit" class="label_content">Title: </label>
                    <input class="form-control edit_input" type="text" value="{{$dash->title}}"
                           name="title">
                </div>
                <div class="form-group">
                    <label for="body_edit" class="label_content">Body Panel:</label>
                    <textarea rows="7" class="form-control edit_text" name="body">
                        {{$dash->body}}
                    </textarea>
                </div>
                <input type="submit" value="change" class="btn btn-success btn-md">
        </form>

        <a href="{{url('home')}}"><button class="btn back_button">Back</button></a>
    </div>
</div>
@endsection
