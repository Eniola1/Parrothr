<!-- View Field Modal Content -->
<!-- ---------------------------------- -->
<div class="modal fade" id="viewFieldVisitModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Field Visit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <form method="post" id="details" enctype="multipart/form-data">
            <div class="modal-body">
                
                <div class="form-group">
                    <label class="control-label">Location</label>
                    <input class="form-control" type="text" id="location" readonly>
                </div>
                <div class="form-group">
                    <label class="control-label">Project Name</label>
                    <input class="form-control" type="text" id="project" readonly>
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
                    <label for="message-text" class="control-label">Total Days</label>
                    <input class="form-control" type="text" id="total" readonly>
                </div>
                <div class="form-group">
                    <label for="message-text" class="control-label">Notes</label>
                    <textarea class="form-control" readonly id="notes" rows="4"></textarea>
                </div>
                    
            </div>
            
            </form>
        </div>
    </div>
</div>
