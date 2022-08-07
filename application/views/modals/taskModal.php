<!-- task modal content -->
<div class="modal fade" id="tasksmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content ">
         <div class="modal-header">
               <h4 class="modal-title" id="exampleModalLabel1">Add Tasks</h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         </div>
         <form method="post" action="Add_Tasks" id="tasksModalform" enctype="multipart/form-data">
            <div class="modal-body">
                  <div class="form-group row">
                     <label class="control-label col-md-3">Project</label>

                     <select class="form-control custom-select col-md-8 proid" data-placeholder="Select a Project" tabindex="1" name="projectid" required id="projectTitle" onchange="changeTaskProject()">
                     <option name='protitle' hidden selected>Select a Project</option>
                           <?php foreach($projects as $value): ?>
                           <option value="<?= $value->id; ?>"><?= $value->pro_name; ?></option>
                           <?php endforeach; ?>
                     </select>
                  </div>
                  <div class="form-group row">
                     <label class="control-label col-md-3">Project Date</label>
                     <input type="text" value="" name="prostart" class="form-control col-md-4" id="recipient-name1" readonly>
                     <input type="text" value="" name="proend" class="form-control col-md-4" id="recipient-name1" readonly>
                  </div>                                              
                  <div class="form-group row">
                     <label class="control-label col-md-3">Assign To</label>
                     <select class="form-control custom-select col-md-3" data-placeholder="Select an Employee" style="width:25%" tabindex="1" name="teamhead" required>
                           <option value="">Select Here</option>
                           <?php foreach($employee as $value): ?>
                           <option value="<?= $value->em_id; ?>"><?=ucwords( $value->first_name.' '.$value->last_name); ?></option>
                           <?php endforeach; ?>
                     </select>
                     <label class="control-label col-md-2">Collaborators</label>
                     <select class="select2 form-control select2-multiple col-md-3" data-placeholder="Select Collaborators" multiple="multiple" style="width:25%" tabindex="1" name="assignto[]" id="collabs">
                           <option value="">Select Here</option>
                           <?php foreach($employee as $value): ?>
                           <option value="<?= $value->em_id; ?>"><?=ucwords( $value->first_name.' '.$value->last_name); ?></option>
                           <?php endforeach; ?>
                     </select>
                  </div>                                                                                   
                  <div class="form-group row">
                     <label class="control-label col-md-3">Task Title</label>
                     <input type="text" name="tasktitle" class="form-control col-md-8" id="recipient-name1" minlength="3" maxlength="250" placeholder="Task...." required>
                  </div>
                  <div class="form-group row">
                     <label class="control-label col-md-3">Task Start Date</label>
                     <input type="text" name="startdate" class="form-control col-md-3 mydatetimepickerFull" id="recipient-name1" required>
                     
                     <label class="control-label col-md-2">Task End Date</label>
                     <input type="text" name="enddate" class="form-control col-md-3 mydatetimepickerFull" id="recipient-name1">
                  </div>
                  <div class="form-group row">
                     <label for="message-text" class="control-label col-md-3">Details</label>
                     <textarea class="form-control col-md-8" name="details" id="message-text1" minlength="10" maxlength="1400" required></textarea>
                  </div>                                            
                     <div class="form-group row">
                     <label class="control-label col-md-3">Status: </label>
                     <input name="status" type="radio" id="radio_1" class="type" value="complete" required>
                     <label for="radio_1">Complete</label>
                     <input name="status" type="radio" id="radio_2" class="type" value="running" required>
                     <label for="radio_2">Running</label>
                  </div>                                             
                  <div class="form-group row">
                     <label class="control-label col-md-3">Type: </label>
                     <input name="type" type="radio" id="radio_4" value="Office">
                     <label for="radio_4">Office</label>
                     <input name="type" type="radio" id="radio_5" value="Field">
                     <label for="radio_5">Field</label>
                  </div>  
            </div>
         <div class="modal-footer">
               <input type="hidden" name="id" class="form-control">                                       
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Submit</button>
         </div>
         </form>
      </div>
   </div>
</div>