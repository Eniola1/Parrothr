 <!-- update request modal content -->
 <div class="modal fade" id="updateRequestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Make Request</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="updateRequest" id="updateReqForm" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Name</label>
                    <input type="text" readonly id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Title</label>
                    <input type="text" readonly  name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message-text" class="control-label">Details</label>
                    <textarea class="form-control" <?php if($this->session->userdata('user_type')=='ADMIN'):echo 'readonly';endif; ?> name="description" id="message-text1" rows="4"></textarea>
                </div>
                <div class="form-group" id='response-input'>
                    <label for="message-text" class="control-label">Admin Response</label>
                    <textarea <?php if($this->session->userdata('user_type')=='EMPLOYEE'):echo 'readonly';endif; ?> class="form-control" name="response" id="response" rows="4"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /.modal -->