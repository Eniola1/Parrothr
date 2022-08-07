<!-- Exit Pass Modal -->
<div class="modal fade" id="exitPassModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Exit Pass</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="updateExitPass" id="exitPassForm" enctype="multipart/form-data">
            <div class="modal-body">
                    
                <div class="form-group">
                    <label>Employee</label>
                    <input type="text" id="name" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label class="control-label">Application Date</label>
                    <input type="text" name="created_date" class="form-control" id="recipient-name1" readonly>
                </div>
                <div class="form-group">
                    <label class="control-label">Reason</label>
                    <textarea class="form-control" name="reason" id="message-text1" readonly></textarea>                                                
                </div>                                           
                <div class="form-group">
                    <label class="control-label">Response from Admin</label>
                    <textarea class="form-control" <?php if($this->session->userdata('user_type')=='EMPLOYEE'): echo 'readonly';endif; ?>  name="admin_response" id="message-text1"></textarea>                                                
                </div>                                           
            </div>
            <?php if($this->session->userdata('user_type')=='ADMIN'): ?> 
            <div class="modal-footer">
                <input type="hidden" name="id" class="form-control"> 
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <?php endif; ?>
            </form>
        </div>
    </div>
</div>
