<!-- Leave Modal -->
<div class="modal fade" id="leaveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Leave Application</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="updateApplications" id="leaveapply" enctype="multipart/form-data">
            <div class="modal-body">
                    
                <div class="form-group">
                    <label>Employee</label>
                    <input type="text" name="name" class="form-control" readonly>
                    <input type="hidden" name="em_id" class="form-control">
                </div>
                <div class="form-group">
                    <label>Leave Type</label>
                    <input type="hidden" name="typeid" id="leavetype" class="form-control assignleave" >
                    <input type="text" name="type" id="leavetype" class="form-control assignleave" readonly>
                </div>
                <div class="form-group">
                    <label class="control-label" id="startdate">Start Date</label>
                    <input type="text" name="start_date" class="form-control" id="recipient-name1" readonly>
                </div>
                <div class="form-group" id="enddate">
                    <label class="control-label">End Date</label>
                    <input type="text" name="end_date" class="form-control" id="recipient-name1" readonly>
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
                <input type="hidden" name="id" class="form-control" id="recipient-name1" required> 
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <?php endif; ?>
            </form>
        </div>
    </div>
</div>
