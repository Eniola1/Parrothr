<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>

<div class="page-wrapper">
<div class="message"></div>
<div class="row page-titles">
   <div class="col-md-5 align-self-center">
      <h3 class="text-themecolor"> Field Visit
      </h3>
   </div>
   <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
         <li class="breadcrumb-item">
            <a href="javascript:void(0)">Home
            </a>
         </li>
         <li class="breadcrumb-item active">Field Authorization
         </li>
      </ol>
   </div>
</div>
<div class="container-fluid">
<div class="row m-b-10">
   <div class="col-12">
      <a role="button" data-toggle="modal" data-target="#appmodel"  data-whatever="@getbootstrap" id="addNewApplication" class="btn btn-info text-white"><i class="fa fa-plus"></i> Add Field Visit </a>
      <a role="button" href="<?= base_url(); ?>Projects/All_Projects" class="btn btn-primary text-white"><i class="fa fa-bars"></i>  Project List</a>
      <a role="button" href="<?= base_url(); ?>Projects/All_Tasks" class="btn btn-primary text-white"><i class="fa fa-bars"></i>  Task List</a>
   </div>
</div>
<div class="row">
   <div class="col-12">
      <div class="card card-outline-info">
         <div class="card-body">
            <div class="table-responsive ">
               <table id="myTable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                     <tr>
                        <th>Location</th>
                        <th>Project Name</th>
                        <th>Employee Name</th>
                        <th>Start Date</th>
                        <th>Approx. End Date</th>
                        <th>Action</th>
                     </tr>
                  </thead>

                  <tbody>
                     <?php foreach($application as $value): ?>
                     <tr style="vertical-align:top">
                        <td>
                           <?=ucwords($value->field_location) ?>
                        </td>
                        <td>
                           <?=ucwords($value->pro_name)?>
                        </td>
                        <td>
                           <?=ucwords($value->first_name.' '.$value->last_name) ?>
                        </td>
                        <td>
                           <?= date('jS \of F Y',strtotime($value->start_date)) ?>
                        </td>
                        <td>
                           <?= date('jS \of F Y',strtotime($value->approx_end_date)) ?>
                        </td>
                       
                        <?php if($this->session->userdata('user_type')=='EMPLOYEE'){ ?>
                        <?php } else { ?>
                        <td class="jsgrid-align-center">

                           <a href="" title="Edit" class="btn btn-sm btn-info waves-effect waves-light fieldAuthEdit" data-id="<?= $value->id; ?>" >
                            <i class="fa fa-pencil-square-o"></i>
                           </a>
                           <a onclick="deleteRecord(<?=$value->id?>,'projects/FieldVisitDeletByid')" role="button" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light text-white" ><i class="fa fa-trash-o"></i></a>
                           
                           <!-- <?php if ($value->attendance_updated !== 'done' AND $value->status == 'Approved'): ?>
                               <a href="" id="closeAndUpdateFieldVisit" data-confirm="Are you sure want to close his field visit and update the attendance?" title="Mark as done" class="btn btn-sm btn-info waves-effect waves-light" data-id="<?= $value->id; ?>" data-employeeID="<?= $value->em_code; ?>">
                                <i class="fa fa-scissors"></i> Update attendance
                               </a>
                           <?php endif; ?> -->
                        </td>
                        <?php } ?>
                     </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>


<script>
    $(document).on('click', '#closeAndUpdateFieldVisit', function(e){
        console.log($(this).attr('data-id'));
        console.log($(this).attr('data-employeeID'));
        if(!confirm($(this).data('confirm'))){
            e.stopImmediatePropagation();
            e.preventDefault();
        } else {
            e.stopImmediatePropagation();
            e.preventDefault();
            $.ajax({
               url: "closeAndUpdateFieldVisit",
               type:"POST",
               data:
               {
                 'fieldApplicationID': $(this).attr('data-id'),
                 'employeeID': $(this).attr('data-employeeid')
               },
               success: function(response) {
                 //console.log(' ');
                 $(".message").fadeIn('fast').delay(3000).fadeOut('fast').html(response);
                 window.setTimeout(function(){
                   location.reload()} ,3000);
               }
               ,
               error: function(response) {
                 console.error();
               }
             });
        }
    });
</script>

<!-- <div class="row">
    <div class="col-md-12">
        <ul>
            <li>When you edit the applied forms from the edit button, don't forget to reauthorize approving the info.</li>
            <li>Once you give the final approval and confirm final closing, the attendance will be permanently updated.</li>
        </ul>
    </div>
</div> -->


<script>
  
  $("#addNewApplication").on("click", function() {
    $('#fieldAuthForm').find('[name="fid"]').val("").end();
    $('#fieldAuthForm').find('[name="projectID"]').val("").end();
    $('#fieldAuthForm').find('[name="emid"]').val("").end();
    $('#fieldAuthForm').find('[name="fieldLocation"]').val("").end();
    $('#fieldAuthForm').find('[name="startdate"]').val("").end();
    $('#fieldAuthForm').find('[name="enddate"]').val("").end();
    $('#fieldAuthForm').find('[name="notes"]').val("").end();



    $('#fieldAuthForm').find('[name="enddate"]').on("change", function() {
      console.log('Yes');
      var date1 = new Date($('#fieldAuthForm').find('[name="startdate"]').val());
      var date2 = new Date($('#fieldAuthForm').find('[name="enddate"]').val());
      var timeDiff = Math.abs(date2.getTime() - date1.getTime());
      var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
      $('#fieldAuthForm').find('[name="totalDays"]').val(diffDays).end();
    });

    $('#fieldAuthForm').find('[name="totalDays"]').val("").end();
    $('#fieldAuthForm').find('[name="actualReturnDate"]').val("").end();
    $('#fieldAuthForm').find('[id="returnDate"]').css("display", "none").end();

  });

</script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".fieldAuthEdit").click(function(e) {
            e.preventDefault(e);
            // Get the record's ID via attribute
            var fieldAppID = $(this).attr('data-id');
            $('#fieldAuthForm').trigger("reset");
            $('#fieldAuthForm #returnDate').css("display", "block !IMPORTANT");
            $('#appmodel').modal('show');
            $.ajax({
                url: 'getFieldVisitAppData?id=' + fieldAppID,
                method: 'GET',
                data: '',
                dataType: 'json',
            }).done(function(response) {
                console.log(response);
                // Populate the form fields with the data returned from server
                $('#fieldAuthForm').find('[name="fid"]').val(response.id).end();
                $('#fieldAuthForm').find('[name="projectID"]').val(response.project_id).end();
                $('#fieldAuthForm').find('[id="projectName"]').text(response.pro_name).end();
                $('#fieldAuthForm').find('[name="emid"]').val(response.emp_id).end();
                $('#fieldAuthForm').find('[name="fieldLocation"]').val(response.field_location
).end();
                $('#fieldAuthForm').find('[name="startdate"]').val(response.start_date
).end();
                $('#fieldAuthForm').find('[name="enddate"]').val(response.approx_end_date).end();

var date1 = new Date(response.start_date);
var date2 = new Date(response.approx_end_date);
var timeDiff = Math.abs(date2.getTime() - date1.getTime());
var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 

                $('#fieldAuthForm').find('[name="totalDays"]').val(diffDays).end();
                $('#fieldAuthForm').find('[name="notes"]').val(response.notes).end();

                $('#fieldAuthForm').find('[id="returnDate"]').css("display", "block").end();
                $('#fieldAuthForm').find('[name="actualReturnDate"]').val(response.actual_return_date).end();




            });
        });
    });
</script> 


<script type="text/javascript">
   $(document).ready(function () {
     $(".assignleave").click(function (e) {
       e.preventDefault(e);
       // Get the record's ID via attribute  
       var iid = $(this).val();
       if(iid){
         console.log(iid);
         $.ajax({
           url: 'LeaveAssign?id=' + iid,
           method: 'GET',
           data: '',
         }
               ).done(function (response) {
           //console.log(response);
           $("#total").html(response);
         }
                     );
       }
       else {
         $("#total").val('');
       }
     }
                            );
   }
                    );
</script>
<script type="text/javascript">
   $(document).ready(function () {
     $(".emleavetype").click(function (e) {
       e.preventDefault(e);
       // Get the record's ID via attribute  
       var iid = $(this).val();
       //console.log(iid);
       $.ajax({
         url: 'LeaveType?id=' + iid,
         method: 'GET',
         data: '',
       }
             ).done(function (response) {
         //console.log(response);
         $("#leavetype").html(response);
       }
                   );
     }
                            );
   }
                    );
</script>
<script type="text/javascript">
   $(document).ready(function () {
     $(".leaveapp").click(function (e) {
       e.preventDefault(e);
       // Get the record's ID via attribute  
       var iid = $(this).attr('data-id');
       $('#leaveapply').trigger("reset");
       $('#appmodel').modal('show');
       $.ajax({
         url: 'LeaveAppbyid?id=' + iid,
         method: 'GET',
         data: '',
         dataType: 'json',
       }
             ).done(function (response) {
         console.log(response);
         // Populate the form fields with the data returned from server
         $('#leaveapply').find('[name="id"]').val(response.id).end();
         $('#leaveapply').find('[name="emid"]').val(response.em_id).end();
         $('#leaveapply').find('[name="applydate"]').val(response.apply_date).end();
         $('#leaveapply').find('[name="typeid"]').val(response.typeid).end();
         $('#leaveapply').find('[name="startdate"]').val(response.start_date).end();
         $('#leaveapply').find('[name="enddate"]').val(response.end_date).end();
         $('#leaveapply').find('[name="duration"]').val(response.leave_duration).end();
         $('#leaveapply').find('[name="reason"]').val(response.reason).end();
         $('#leaveapply').find('[name="status"]').val(response.leave_status).end();
         $('#leaveapply').find('[name="type"]').val(response.leave_type).end();
       }
                   );
     }
                         );
   }
                    );
</script>
<script>
   $(".Status").on("click", function(event){
     event.preventDefault();
     
     $.ajax({
       url: "authorizeFieldVisit",
       type:"POST",
       data:
       {
         'fieldApplicationID': $(this).attr('data-id'),
         'approvalStatus': $(this).attr('data-value')
       }
       ,
       success: function(response) {
         //console.log(' ');
         $(".message").fadeIn('fast').delay(3000).fadeOut('fast').html(response);
         window.setTimeout(function(){
           location.reload()}
                           ,3000)
       }
       ,
       error: function(response) {
         console.error();
       }
     }
           );
   }
                  );
</script>

<?php $this->load->view('modals/deleteModal'); ?>
<?php $this->load->view('modals/fieldVisitModal'); ?>
<?php $this->load->view('backend/footer'); ?>
