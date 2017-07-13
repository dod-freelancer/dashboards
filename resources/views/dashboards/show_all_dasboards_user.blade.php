
<div class="row">
    <div class="col-md-12" >
        <h2 id="dashboard_text">Yours dashboards: <span class="badge">{{count($dashboards)}}</span></h2>
        <h4><a href="/dashboards">Show all dashboards</a></h4>
        {{--add here
            service of observed !!!!!!!!!
            !!!!!!!!!!
            !!!!!!!!!!!!

        --}}
<<<<<<< HEAD
        <h4>Yours observed <b>{{$observed}} </b><a href="/observed">show</a> </h4>
=======
        <h4>Yours observed <b>{{$observed}} </b><a href="/dashboards/observed">show</a> </h4>
>>>>>>> 66aa46348018952cea5c9b96faebff55806b29d5

        {{--content of each dashboard from db--}}
        @foreach($dashboards as $dashboard)
            <div id="dashboard_block">
                <div id="title_block">{{$dashboard->title}}
                    <span>{{$dashboard->id}}</span>
                </div>
              </hr>
                <div id="body_block">{{$dashboard->body}}</div>
              </hr>
                <div id="additional_block">
                    <b>Dashboard created at:</b> {{$dashboard->created_at}},
                    <b>Dashboard updated at:</b> {{$dashboard->updated_at}}
                </div>
              </hr>

                <div id="del_edit_content">
                    <div>
                        {{--Delete Each Dashboard--}}
                        <form method="post" action="/home/delete/{{$dashboard->id}}">
                            {{csrf_field()}}
                            <input type="submit" class="btn btn-sm btn-danger" id="delete_button_custom" value="delete">
                        </form>
                    </div>
                    {{--Edit Dashboard--}}
                    <div>
                        <form class="form" method="post" action="/home/edit/{{$dashboard->id}}">
                            {{csrf_field()}}
                            <input type="submit" value="edit" class="btn btn-sm" id="edit_button_custom">
                        </form>
                    </div>
                </div>
            </div>

            <!-- {{--MODAL --}}
            <div class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Edit dashboard--
                    <div class="modal-content">
                        <div>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">You're editing dashboard {{$dashboard->id}}</h3>
                        </div>
                        <form class="form" method="post" action="/home/edit/{{$dashboard->id}}">
                            {{csrf_field()}}
                            <div class="modal-body">
                                <input type="text" name="id" value="" id="id-value">
                                <div class="form-group">
                                    <label for="title_edit">Title: </label>
                                    <input class="form-control" type="text" value="value"
                                           name="title" id="title_edit">
                                </div>
                                <div class="form-group">
                                    <label for="body_edit">Body Panel:</label>
                                    <textarea rows="7" class="form-control" id="body_edit" name="body">
                                        value
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
            </div> -->

        @endforeach

    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("button#edit-button").on('click', function () {
            var a  = $("#id-value").val();
            console.log(a);
        });
    });
//$(document).ready(function(){
//    $("button#edit-button").click(function(){
//        var a = $("span.serial-number");
//        console.log(a);
//    });
//});

</script>
