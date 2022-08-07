<!-- Leave Type Modal -->
<div class="modal fade" id="leaveTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Leave</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="Add_leaves_Type" id="leaveform" enctype="multipart/form-data">
                <div class="modal-body">
                    
                    <div class="form-group">
                        <label class="control-label">Leave name</label>
                        <input type="text" name="leavename" class="form-control" id="recipient-name1" minlength="1" maxlength="35" value="" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Leave Allowance</label>
                        <input type="text" name="leaveday" class="form-control" id="recipient-name1" value="">
                    </div>
                    <div class="form-group">
                        <label class="control-label">status</label>
                        <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="status" required>
                            <option value="">Select Here</option>
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" value="" class="form-control" id="recipient-name1">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>