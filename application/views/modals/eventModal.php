<!-- Create Event Modal Content -->
<!-- ---------------------------------- -->
<div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Create Event</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form role="form" method="post" action="<?= base_url();?>event/createEvent" id="btnSubmit" enctype="multipart/form-data">
            <div class="modal-body">
                <input type="hidden" name="type" value="general">
                <div class="form-group">
                    <label for="message-text" class="control-label">Title</label>
                    <input class="form-control" name="title" id="message-text1" required >
                </div>
                <div class="form-group">
                    <label for="message-text" class="control-label">Description</label>
                    <textarea class="form-control" name="description" id="message-text1" ></textarea>
                </div>
                <div class="form-group">
                    <label for="message-text" class="control-label">Event Date</label>
                    <input type="date" name="date" class="form-control" id="recipient-name1" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
