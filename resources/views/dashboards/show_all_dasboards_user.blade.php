<div class="row">
    <div class="col-md-12">
        <h2>Yours dashboards: <span class="badge">{{count($dashboards)}}</span></h2>

        {{--content of each dashboard from db--}}
        @foreach($dashboards as $dashboard)
            <div class="panel panel-default">

                <div class="panel-heading">{{$dashboard->title}}</div>
                <div class="panel-body">{{$dashboard->body}}</div>
                <div class="panel-footer">
                    <b>Dashboard created at:</b> {{$dashboard->created_at}},
                    <b>Dashboard updated at:</b> {{$dashboard->updated_at}}
                </div>

                <div class="panel-footer">
                    {{--Edit Dashboard--}}
                    <div class="form-group">
                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal">Edit</button>
                    </div>
                    <div class="form-group">
                        {{--Delete Each Dashboard--}}
                        <form method="post" action="/home/delete/{{$dashboard->id}}">
                            {{csrf_field()}}
                            <input type="submit" class="btn btn-sm btn-danger" value="delete">
                        </form>
                    </div>
                </div>
            </div>

            {{--MODAL --}}
            <div class="modal fade" id="editModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Add new dashboard-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">You're editing dashboard</h3>
                        </div>
                        <form class="form" method="post" action="/home/edit/{id}">
                            {{csrf_field()}}
                            <div class="modal-body">
                                <input type="hidden" name="id" value="{{$dashboard->id}}">
                                <div class="form-group">
                                    <label for="title">Title: </label>
                                    <input class="form-control" type="text" value="{{$dashboard->title}}"
                                           name="title" id="title">
                                </div>
                                <div class="form-group">
                                    <label for="body">Body Panel:</label>
                                    <textarea rows="7" class="form-control" id="body" name="body">
                                        {{$dashboard->body}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <input type="submit" value="Change" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        @endforeach
    </div>
</div>