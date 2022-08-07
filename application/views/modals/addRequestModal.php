<!-- add request modal content -->
<div class="modal fade" id="addRequestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Make Request</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="AddRequest" id="btnSubmit" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" name="id">
                    <input type="hidden" name="emid">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Title</label>
                    <input type="text"  name="title" class="form-control" id="title">
                </div>
                <div class="form-group">
                    <label for="message-text" class="control-label">Details</label>
                    <textarea class="form-control" name="details" id="message-text1" rows="4"></textarea>
                </div>
                <div class="form-group" id='response-input' style='display:none;'>
                    <label for="message-text" class="control-label">Response</label>
                    <textarea readonly class="form-control" name="response" id="response" rows="4"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" value="">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /.modal -->