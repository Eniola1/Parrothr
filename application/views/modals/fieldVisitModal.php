<!-- Field Visit Modal -->
<!-- ---------------------------------- -->
<div class="modal fade" id="appmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content ">
         <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel1">Field Authorization
            </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
            </button>
         </div>
         <form method="post" action="Field_Application" id="fieldAuthForm" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="row">
              <div class="col-md-6">
               <div class="form-group">
                  <label>Project Name
                  </label>
                  <select class="form-control select2 custom-select emid"  tabindex="1" name="projectID" style="width:100%" required>
                     <option id="projectName" selected disabled>Select Project</option>
                     <?php foreach($projects as $project): ?>
                     <option value="<?= $project->id; ?>">
                        <?= substr($project->pro_name,0,60).'...' ?>
                     </option>
                     <?php endforeach; ?>
                  </select>
               </div>
               <div class="form-group">
                  <label>Employee
                  </label>
                  <select class="form-control select2 custom-select emid"  tabindex="1" name="emid" style="width:100%" required>                     
                     <option selected disabled>Select Employee</option>
                     <?php foreach($employee as $value): ?>
                     <option value="<?= $value->em_id; ?>">
                        <?=ucwords( $value->first_name.' '.$value->last_name) ?>
                     </option>
                     <?php endforeach; ?>
                  </select>
               </div>
               <div class="form-group">
                  <label for="fieldLocation" class="control-label">Field Location</label>
                  <input type="text" class="form-control" placeholder="Field location" name="fieldLocation">
               </div>
               <div class="form-group">
                  <label class="control-label">Approximate Start Date</label>
                  <input type="text" name="startdate" class="form-control mydatetimepickerFull" id="recipient-name1" required>
               </div>
               </div>
               <div class="col-md-6">
               <div class="form-group" id="enddate">
                  <label class="control-label">Approximate End Date
                  </label>
                  <input type="text" name="enddate" class="form-control mydatetimepickerFull" id="recipient-name1">
               </div>               
               <div class="form-group" id="totalDays">
                  <label class="control-label">Total Days
                  </label>
                  <input type="number" name="totalDays" class="form-control" id="recipient-name1" readonly>
               </div>
               <div class="form-group">
                  <label class="control-label">Notes
                  </label>
                  <textarea name="notes" id="notes" class="form-control" rows="5"></textarea>
               </div>
               <div class="form-group" id="returnDate">
                  <label class="control-label">Actual Return Date
                  </label>
                  <input type="date" name="actualReturnDate" class="form-control" id="">
               </div>
            </div>
            </div>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="fid">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close
               </button>
               <button type="submit" class="btn btn-primary">Submit
               </button>
            </div>
         </form>
      </div>
   </div>
</div>