
<div class="row">
    <div class="col-md-12" >
        <h2 id="dashboard_text">Yours dashboards: <span class="badge">{{count($dashboards)}}</span></h2>
        <h4 class="show_all_dash"><a href="/dashboards">Show all dashboards</a></h4>
        {{--add here
            service of observed !!!!!!!!!
            !!!!!!!!!!
            !!!!!!!!!!!!

        --}}
        <h4>Yours observed <b>{{$observed}} </b><a href="/observed" id="show-observed">show</a> </h4>

        {{--content of each dashboard from db--}}
        @foreach($dashboards as $dashboard)
            <div id="dashboard_block">
                <div id="title_block">
                    <span class="title-dash">{{$dashboard->title}}</span>
                </div>
              </hr>
                <div id="body_block">{{$dashboard->body}}</div>
              </hr>
                <div id="additional_block">
                    <b>Dashboard created at:</b> {{$dashboard->created_at}}
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
