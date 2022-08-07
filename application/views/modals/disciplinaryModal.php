<!-- Disciplinary modal content -->
<div class="modal fade" id="disciplinaryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Disciplinary Notice</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="add_Desciplinary" id="disciplinaryForm" enctype="multipart/form-data">
            <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label">Employee Name <span class="text-danger">*</span></label>
                        <select class="form-control custom-select" name="em_id" data-placeholder="Choose a Category" tabindex="1" value="" required>
                            <?php foreach($allemployees as $value): ?>
                            <option value="<?= $value->em_id ?>"><?=ucwords( $value->first_name.' '.$value->last_name) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Disciplinary Action <span class="text-danger">*</span></label>
                        <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="action" value="">
                            <option value="Demotion">Demotion</option>
                            <option value="Final Warning">Final Warning</option>
                            <option value="Query">Query</option>
                            <option value="Suspension">Suspension</option>
                            <option value="Termination">Termination</option>
                            <option value="Verbal Warning">Verbal Warning</option>
                            <option value="Written Reprimand">Written Reprimand</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Offence Count <span class="text-danger">*</span></label>
                        <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="offence_count">
                            <option value="first offence">First Offence</option>
                            <option value="second offence">Second Offence</option>
                            <option value="third offence">Third Offence</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Reason <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="description" id="message-text1" rows="4" required></textarea>
                    </div>
                    <div class="form-group editDisciplinary">
                        <label for="message-text" class="control-label">Employee Response <span class="text-danger"></span></label>
                        <textarea class="form-control" name="response" id="message-text1" rows="4" readonly></textarea>
                    </div>
                    <div class="form-group editDisciplinary">
                        <label class="control-label">Close Action</label>
                        <textarea type="text" name="close_action" class="form-control"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" value="">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /.modal -->