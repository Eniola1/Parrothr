<!-- Delete Modal -->
<!-- ---------------------------------- -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">         
            <div class="modal-body">
                <p><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></p>
                <div class="text-center ">
                    <p class="display-2 text-danger"><i class="fa fa-times-circle-o"></i></p>
                    <h3>Are you sure?</h3>
                    <p>This process can not be undone.</p>
                    <p>
                        <form id="deleteForm" action="" method="delete">
                            <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Cancel</button>
                            <input type="hidden" name="id" id="idInput">
                            <button class="btn btn-danger ml-2" role="submit">Delete</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Event Modal Closes --> 
