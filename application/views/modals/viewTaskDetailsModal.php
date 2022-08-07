<!-- View Field Modal Content -->
<!-- ---------------------------------- -->
<div class="modal fade" id="taskDetailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Task Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            
            <form method="post" id="details" enctype="multipart/form-data">
                <div class="modal-body">
                    
                    <div class="form-group">
                        <label class="control-label">Task Title</label>
                        <input class="form-control" type="text" id="task_title" readonly>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Project Name</label>
                        <input class="form-control" type="text" id="project" readonly>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Task Type</label>
                        <input class="form-control" type="text" id="task_type" readonly>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Start Date</label>
                        <input class="form-control" type="text" id="start_date" readonly>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">End Date</label>
                        <input class="form-control" type="text" id="end_date" readonly>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Status</label>
                        <input class="form-control" type="text" id="status" readonly>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Notes</label>
                        <textarea class="form-control" readonly id="description" rows="4"></textarea>
                    </div>
                        
                </div>
            </form>
        </div>
    </div>
</div>
