@if(session('success'))
    <p class="alert-success">
        {{session('success')}}
    </p>
    <button type="button" class="btn btn-info btn-group-sm" id="add_new_dash" data-toggle="modal" data-target="#addModal">Add new dashboard</button>
@elseif(session('error'))
    <p class="alert-danger">
        {{session('error')}}
    </p>
    <button type="button" class="btn btn-info btn-group-sm" id="add_new_after" data-toggle="modal" data-target="#addModal">Add new dashboard</button>
@else
    <button type="button" class="btn btn-info btn-group-sm" id="add_new_dash" data-toggle="modal" data-target="#addModal">Add new dashboard</button>
@endif
