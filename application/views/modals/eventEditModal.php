<!-- Create Event Modal Content -->
<!-- ---------------------------------- -->
<div class="modal fade" id="eventEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Edit Event</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form role="form" method="post" action="<?= base_url();?>event/updateEvent" id="eventEditDetails" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <label for="message-text" class="control-label">Title</label>
                    <input class="form-control" name="title" id="title" required >
                </div>
                <div class="form-group">
                    <label for="message-text" class="control-label">Description</label>
                    <textarea class="form-control" name="description" id="desc" ></textarea>
                </div>
                <div class="form-group">
                    <label for="message-text" class="control-label">Event Date</label>
                    <input type="date" name="date" class="form-control" id="date" required>
                </div>
                <input type="hidden" name="id" id="eventId" value="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
