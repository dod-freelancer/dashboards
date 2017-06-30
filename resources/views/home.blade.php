@extends('layouts.app')
@section('content')
<div class="container">

    {{--Status before clicked add dashboard--}}
    @include('dashboards.show_modal_status')
            <!-- Pop_up add new dashboard -->
    @include('dashboards.show_modal_add')

        {{--ALL DASHBOARDS USER--}}
    @include('dashboards.show_all_dasboards_user')
</div>
@endsection

