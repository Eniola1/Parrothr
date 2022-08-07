<!-- Disciplinary modal content -->
<div class="modal fade" id="disciplinaryDetailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Disciplinary Notice</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" id="disciplinaryDetails" enctype="multipart/form-data">
            <div class="modal-body">
                
                    <div class="form-group">
                        <label class="control-label">Employee Name</label>
                        <input class="form-control" type="text" id="name" readonly>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Disciplinary Action</label>
                        <input class="form-control" type="text" name="action" readonly>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Offence Count</label>
                        <input class="form-control" type="text" name="offence_count" readonly>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Reason</label>
                        <textarea class="form-control" name="details" id="message-text1" rows="4" readonly></textarea>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Employee Response</label>
                        <textarea class="form-control" name="response" readonly id="message-text1" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Close Action</label>
                        <textarea type="text" name="close_action" class="form-control" readonly></textarea>
                    </div>
            </div>
            
            </form>
        </div>
    </div>
</div>
<!-- /.modal -->