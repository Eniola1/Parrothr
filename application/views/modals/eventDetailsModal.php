<!-- Event Modal Content -->
<!-- ---------------------------------- -->
<div class="modal fade" id="eventDetailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Event</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            
            <div class="modal-body" id="eventDetails">
                <h2 id="title"></h2>
                <p id="desc"></p>
                <p id="date"></p>
                <?php if($this->session->userdata('user_type') == "ADMIN"):?>
                <p>
                    <button onclick="eventDelete(this.getAttribute('data-id'))" class="btn btn-danger float-right eventId">Delete</button>
                    <button onclick="getEventDetails(this.getAttribute('data-id'))" class="btn btn-info float-right mr-3 eventId">Edit</button>
                </p>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>
<!--Event Modal Closes --> 
