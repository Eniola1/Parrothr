<!-- Bulk Attendance Upload Modal -->
<div id="Bulkmodal" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="importAttendance" enctype="multipart/form-data">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add Attendance</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class='row'>
                    <div class='col'>
                        <p>Upload  file</p>
                    </div>
                    <div class='col'>
                        <a class='text-dark' href="<?php echo base_url();?>assets/documents/employee_attendance_bulk_upload_template.csv" download>Download Template</a>
                    </div>
                </div>
                
                
            <input type="file" name="csv_file" id="csv_file" accept=".csv"><br><br>
                                                        
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info waves-effect">Add</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>