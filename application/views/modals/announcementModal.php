<!-- Announcement Modal Content -->
<!-- ---------------------------------- -->
<div class="modal fade" id="announcementModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Notice Board</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form role="form" method="post" action="Published_Notice" id="noticeForm" enctype="multipart/form-data">
            <div class="modal-body">
                <input type="hidden" name="type" value="department">
                <div class="form-group">
                    <label for="message-text" class="control-label">Branch</label>
                    <select name="branch" class="form-control custom-select">
                        <option default>All Branches</option>
                        <?php foreach ($branches as $value): ?>
                            <option value="<?=$value->id; ?>"><?=ucwords($value->branch_name);?></option>
                        <?php endforeach ; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message-text" class="control-label">Department</label>
                    <select name="dep_id" class="form-control custom-select">
                        <option default>All Departments</option>
                        <?php foreach ($departments as $value): ?>
                            <option value="<?php echo $value->id; ?>"><?php echo ucwords($value->dep_name);?></option>
                        <?php endforeach ; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message-text" class="control-label">Designation</label>
                    <select name="des_id" class="form-control custom-select">
                        <option default>All Designations</option>
                        <?php foreach ($designations as $value): ?>
                            <option value="<?= $value->id; ?>"><?= ucwords($value->des_name);?></option>
                        <?php endforeach ; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message-text" class="control-label">Title</label>
                    <input class="form-control" name="title" id="message-text1" required minlength="4" >
                </div>
                <div class="form-group">
                    <label for="message-text" class="control-label">Message</label>
                    <textarea class="form-control" name="message" id="message-text1" required minlength="4"></textarea>
                </div>
                <!-- <div class="form-group">
                    <label class="control-label">Document</label>
                    <input type="file" name="file_url" class="form-control" id="recipient-name1">
                </div> -->
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Announcement Modal Closes --> 
