<div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">

        <!-- Add new dashboard-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Add new dashboard</h3>
            </div>
            <form class="form" method="post" action="/home/add">
                {{csrf_field()}}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="subject">Subject: </label>
                        <select class="form-control" type="text" placeholder="enter dashboard subject"
                                name="subject" id="subject">
                            <option value="programming">Programming</option>
                            <option value="biology">Biology</option>
                            <option value="philosophy">Philosophy</option>
                            <option value="sport">Sport</option>
                            <option value="music">Music</option>
                            <option value="film">Film</option>
                            <option value="economy">Economy</option>
                            <option value="graphic">Graphic</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Title: </label>
                        <input class="form-control" type="text" placeholder="enter dashboard title"
                               name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="body">Body Panel:</label>
                        <textarea rows="7" class="form-control" placeholder="let describe your dashboard"
                                  id="body" name="body">
                                        </textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" value="Add" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>