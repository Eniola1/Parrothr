<div class="modal fade" id="holysmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Holidays</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="Add_Holidays" id="holidayform" enctype="multipart/form-data">
            <div class="modal-body">
                
                    <div class="form-group">
                        <label class="control-label">Holidays name</label>
                        <input type="text" name="holiname" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Holidays Start Date</label>
                        <input type="text" name="startdate" class="form-control mydatetimepickerFull" id="recipient-name1"  value="">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Holidays End Date</label>
                        <input type="text" name="enddate" class="form-control mydatetimepickerFull" id="recipient-name1" value="">
                    </div><!--
                    <div class="form-group">
                        <label class="control-label">Number of Days</label>
                        <input type="number" name="nofdate" class="form-control" id="recipient-name1" readonly required>
                    </div>-->
                    <!--<div class="form-group">
                        <label for="message-text" class="control-label"> Year</label>
                        <input class="form-control mydatetimepicker" name="year" id="message-text1" required>
                    </div> -->                                          
                
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