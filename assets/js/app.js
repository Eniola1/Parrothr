/**
 * Custom JS
 * Authors: Ochiabuto Jideofor , Nawjesh Soyeb
 */

/**JS Variables used in this files*/

// In Production
// const baseUrl = window.location.origin;
const currentUrl = window.location.href;

// In Localhost (use name of your parent folder, mine was parrothr)
const baseUrl = window.location.origin + '/parrothr';

// refresh function
function refresh(response){
    console.log(response);
    $(".message").fadeIn('fast').delay(2000).html(response);
    window.setTimeout(function(){location.reload()},1000);
}

//all forms submission 
$('form').each(function() {
    let submitted = true;
    $(this).validate({
        submitHandler: function(form) {
            /** check if form has been submitted
             * 
             *  so do not duplicate the input
            */ 
            if(submitted){
                submitted = false;
            }else{
                return;
            } 
            var formval = form;
            var url = $(form).attr('action');
            // Create an FormData object
            var data = new FormData(formval);
            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                // url: "crud/Add_userInfo",
                url: url,
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 600000,
                success: function (response) {
                    console.log(response);            
                    refresh(response);
                },
                error: function (e) {
                    console.log(e);
                }
            });
        }
    });
});

$('#eventEditModal').on('hidden.bs.modal', function() {
    location.reload();
});
/* Get Event Details To EventDetailsModal */
/**---------------------------------------- */
// Date or Event clicked 
$('.event').click(function() {
    // Get Month and Year and remove whitespace
    const heading = $('#heading').text().replace(/\s+/g, '');

    //  Get date and title of event
    const day = $( this ).find('span[ id="day"]').text();
    var date = day + heading;
    let title = $( this ).find('span[ id="title"]').text();
    let eventId = $(".eventId");

    // Send parms to server to get event details
    $.get(baseUrl+`/event/getevent`, {date:date, title:title}, function(data) {
        let event = JSON.parse(data);
    
        // Populate the form fields with the data returned from server
        $('#eventDetails').find('[id="title"]').text(event.title).end();
        $('#eventDetails').find('[id="desc"]').text(event.description).end();
        $('#eventDetails').find('[id="date"]').text(moment(event.date).format("dddd, MMM d")).end();
        eventId.attr('data-id', event.id);
    });
});

/**Get event details for edit */
function getEventDetails(id){
    // Close any modals open
    $('#eventDetailsModal').modal('hide') // closes all active pop ups.
    $('.modal-backdrop').remove() // removes the grey overlay.

    // Open edit modal
    $('#eventEditModal').modal('show')
    // Get Event Details
    console.log(id);
    $.get(baseUrl+`/event/getEventEdit`, {id:id}, function(data) {
        let event = JSON.parse(data);
        // Populate the form fields with the data returned from server
        $('#eventEditDetails').find('[id="title"]').val(event.title).end();
        $('#eventEditDetails').find('[id="desc"]').val(event.description).end();
        $('#eventEditDetails').find('[id="date"]').val(event.date).end();
        $('#eventEditDetails').find('[id="eventId"]').val(event.id).end();
    });
    
    // refresh page after edit modal is closed
    $('#eventEditModal').on('hidden.bs.modal', function() {
        location.reload();
    });

}

/* Delete an Event*/
function eventDelete(id) {
    $.post(baseUrl+`/event/deleteevent`, {id:id}, function(data) {
        location.reload();
        // console.log(data);
    });
}
/**-------Event Ends--------------------- */


/** Get and Display Field Visit Details */
/**------------------------------------ */
$('.viewFieldVisit').click(function() {
    let id = $(this).attr('data-id');
    // Send parms to server to get field visit details
    $.get(baseUrl+'/projects/getFieldVisitAppData', {id:id}, function(data) {
        let event = JSON.parse(data);
        console.log(event);
        // Populate the fields with the data returned from server
        $('#details').find('[id="location"]').val(event.field_location).end();
        $('#details').find('[id="project"]').val(event.pro_name).end();
        $('#details').find('[id="start_date"]').val(event.start_date).end();
        $('#details').find('[id="end_date"]').val(event.approx_end_date).end();
        $('#details').find('[id="total"]').val(event.total_days).end();
        $('#details').find('[id="notes"]').val(event.notes).end();
        $('#viewFieldVisitModal').modal('show');
    });
});
// Reset Forms On close of modals
$('#viewFieldVisitModal').on('hidden.bs.modal', function() {
    $('#viewFieldVisitModal').trigger("reset");
});
/**------------Ends Here ---------------------- */


/** Get and Display Task Details */
/**------------------------------------ */
$('.viewTaskDetails').click(function() {
    let id = $(this).attr('data-id');
    // Send parms to server to get field visit details
    $.get(baseUrl+'/projects/TasksById', {id:id}, function(data) {
        let event = JSON.parse(data);
        // Populate the fields with the data returned from server
        $('#details').find('[id="task_title"]').val(event.tasksvalue.task_title).end();
        $('#details').find('[id="project"]').val(event.tasksvalue.pro_name).end();
        $('#details').find('[id="task_type"]').val(event.tasksvalue.task_type).end();
        $('#details').find('[id="start_date"]').val(event.tasksvalue.start_date).end();
        $('#details').find('[id="end_date"]').val(event.tasksvalue.end_date).end();
        $('#details').find('[id="status"]').val(event.tasksvalue.status).end();
        $('#details').find('[id="description"]').val(event.tasksvalue.description).end();
        $('#taskDetailsModal').modal('show');
    });
});
// Reset Forms On close of modals
$('#taskDetailsModal').on('hidden.bs.modal', function() {
    $('#taskDetailsModal').trigger("reset");
});
/**------------Ends Here ---------------------- */

/** ---------Export and Print all Tables------- */
const pageName = currentUrl.split("/").pop();
$('#example23').DataTable({
    "order": [],
    "search": {
        "regex": true
      },
    "aaSorting": [[1,'asc']],
    dom: 'Bfrtip',
    buttons: [
        { 
            text: 'CSV',
            extend: 'csvHtml5',
            title: pageName,
            exportOptions: {
                columns: ':not(:last-child)',
            },
        }, 
        {
            text: 'PDF',
            extend: 'pdfHtml5',
            title: pageName,
            exportOptions: {
                columns: ':not(:last-child)',
            }
        },
        
    ],
    
});
/**--------- Ends Here ----------------- */

/**--------Delete Any Record ------------- */
function deleteRecord(id, relUrl){
    // show modal
    $('#deleteModal').modal('show');
    // pass record ID to form input field
    $('#deleteForm').find('[id="idInput"]').val(id);
    // pass form action URL, Base URL and Relative URL
    $("#deleteForm").attr("action", baseUrl +'/'+ relUrl);
}
/**------------Ends Here ---------------- */

/**---------Update Leave Status ----------- */
function updateLeaveStatus(id, value){
    $.post(baseUrl+`/leave/updateLeaveStatus`, {id:id, leave_status:value}, function(response) {
        refresh(response);
    });
}
/**--------Ends Here ----------------------- */

/**---------Show Leave Modal ------------- */
function showLeaveModal(id){
    $('#leaveapply').trigger("reset");
    $('#leaveModal').modal('show');
    $.ajax({
        url: baseUrl+'/leave/LeaveAppbyid?id=' + id,
        method: 'GET',
        data: '',
        dataType: 'json',
    }).done(function(response) {
        // Populate the form fields with the data returned from server
        $('#leaveapply').find('[name="id"]').val(response.leaveapplyvalue.id).end();
        $('#leaveapply').find('[name="em_id"]').val(response.leaveapplyvalue.em_id).end();
        $('#leaveapply').find('[name="name"]').val(response.leaveapplyvalue.first_name + ' ' + response.leaveapplyvalue.last_name).end();
        $('#leaveapply').find('[name="typeid"]').val(response.leaveapplyvalue.typeid).end();
        $('#leaveapply').find('[name="type"]').val(response.leaveapplyvalue.name).end();
        $('#leaveapply').find('[name="start_date"]').val(response.leaveapplyvalue.start_date).end();
        $('#leaveapply').find('[name="end_date"]').val(response.leaveapplyvalue.end_date).end();
        $('#leaveapply').find('[name="reason"]').val(response.leaveapplyvalue.reason).end();
        $('#leaveapply').find('[name="admin_response"]').val(response.leaveapplyvalue.admin_response).end();
    });
}
/**----------End Here -------------------- */

/**----------Dashboard Metrics ------------ */
function dashboardMetrics(){
    $.get(baseUrl+`/dashboard/metrics`, function(data) {
        return data ;
    });
}
/**------------End Here ------------------ */

/**--------- Update Salary Advance Status ---------*/
function updateSalaryAdvanceStatus(id, value){
    
    $.post(baseUrl+`/payroll/updateSalaryAdvance`, {id:id, advance_status:value}, function(response) {
        console.log(response);
        refresh(response);
    });
}
/**-----------Ends Here -------------- */

/**--------- Update Request Status ---------*/
function updateRequestStatus(id, value){
    $.post(baseUrl+`/employee/updateRequest`, {id:id, request_status:value}, function(response) {
        refresh(response);
    });
}
/**-----------Ends Here -------------- */

/**--------Show Salary Advance Modal ----------- */
function showSalAdvanceModal(id){
    $('#salAdvForm').trigger("reset");
    $('#salAdvanceModal').modal('show');
    $.get(baseUrl+`/payroll/getSalaryAdvanceById`, {id:id}, function(data){
        const dataSet = JSON.parse(data);
        $('#salAdvForm').find('[name="id"]').val(dataSet.id).end();
        $('#salAdvForm').find('[id="name"]').val(dataSet.first_name+ ' '+dataSet.last_name).end();
        $('#salAdvForm').find('[name="amount"]').val(dataSet.amount).end();
        $('#salAdvForm').find('[name="reason"]').val(dataSet.reason).end();
        $('#salAdvForm').find('[name="duration"]').val(dataSet.duration).end();
        $('#salAdvForm').find('[name="deduction"]').val(dataSet.amount / dataSet.duration).end();
        $('#salAdvForm').find('[name="admin_response"]').val(dataSet.admin_response).end();
        $('#salAdvForm').find('[name="created_date"]').val(new Date(dataSet.created_date).toLocaleDateString()).end();
    });
}
/**---------Ends Here --------------------------- */

/**----------Show Request Modal ------------------ */
function showUpdateReqModal(id){
    $('#updateReqForm').trigger("reset");
    $('#updateRequestModal').modal('show');
    $.get(baseUrl+`/employee/GetSingleRequest`, {id:id}, function(data){
        const dataSet = JSON.parse(data);
        // console.log(dataSet);return
        $('#updateReqForm').find('[name="id"]').val(dataSet.id).end();
        $('#updateReqForm').find('[id="name"]').val(dataSet.first_name+ ' '+dataSet.last_name).end();
        $('#updateReqForm').find('[name="title"]').val(dataSet.title).end();
        $('#updateReqForm').find('[name="description"]').val(dataSet.description).end();
        $('#updateReqForm').find('[name="response"]').val(dataSet.response).end();
    });
}
/**-----------Ends Here ----------------------- */
/**----------Show Request Modal ------------------ */
function showReqModal(id){
    $('#updateReqForm').trigger("reset");
    $('#updateRequestModal').modal('show');
    $.get(baseUrl+`/employee/GetSingleRequest`, {id:id}, function(data){
        const dataSet = JSON.parse(data);
        // console.log(dataSet);return
        $('#updateReqForm').find('[name="id"]').val(dataSet.id).end();
        $('#updateReqForm').find('[id="name"]').val(dataSet.first_name+ ' '+dataSet.last_name).end();
        $('#updateReqForm').find('[name="title"]').val(dataSet.title).end();
        $('#updateReqForm').find('[name="description"]').val(dataSet.description).end();
        $('#updateReqForm').find('[name="response"]').val(dataSet.response).end();
    });
}
/**-----------Ends Here ----------------------- */

/**----------Show Exit Pass Modal ------------------ */
function showExitPass(id){
    $('#exitPassForm').trigger("reset");
    $('#exitPassModal').modal('show');
    $.get(baseUrl+`/employeeExit/getExitPass`, {id:id}, function(data){
        const dataSet = JSON.parse(data);
        // console.log(dataSet);return
        $('#exitPassForm').find('[name="id"]').val(dataSet.id).end();
        $('#exitPassForm').find('[id="name"]').val(dataSet.first_name+ ' '+dataSet.last_name).end();
        $('#exitPassForm').find('[name="reason"]').val(dataSet.reason).end();
        $('#exitPassForm').find('[name="admin_response"]').val(dataSet.admin_response).end();
        $('#exitPassForm').find('[name="created_date"]').val(new Date(dataSet.created_date).toLocaleDateString()).end();
    });
}
/**-----------Ends Here ----------------------- */

/**--------- Update Exit Pass Status ---------*/
function updateExitPass(id, value){
    $.post(baseUrl+`/employeeExit/updateExitPass`, {id:id, pass_status:value}, function(response) {
        refresh(response);
    });
}
/**-----------Ends Here -------------- */

/**----------- Disciplinary Modal ------------- */
$(".disiplinary").click(function (e) {
    e.preventDefault(e);
    // Get the record's ID via attribute  
    var iid = $(this).attr('data-id');
    $('#disciplinaryForm').trigger("reset");
    $('#disciplinaryModal').modal('show');
    $.ajax({
        url: baseUrl+'/employee/DisiplinaryByID?id=' + iid,
        method: 'GET',
        data: '',
        dataType: 'json',
    }).done(function (response) {
        console.log(response);
        // Populate the form fields with the data returned from server
        $('#disciplinaryForm').find('[name="id"]').val(response.desipplinary.id).end();
        $('#disciplinaryForm').find('[id="name"]').val(response.desipplinary.first_name+' '+response.desipplinary.last_name).end();
        $('#disciplinaryForm').find('[name="em_id"]').val(response.desipplinary.em_id).end();
        $('#disciplinaryForm').find('[name="action"]').val(response.desipplinary.action).end();
        $('#disciplinaryForm').find('[name="offence_count"]').val(response.desipplinary.offence_count).end();
        $('#disciplinaryForm').find('[name="description"]').val(response.desipplinary.description).end();
        $('#disciplinaryForm').find('[name="response"]').val(response.desipplinary.response).end();
        $('.editDisciplinary').show();
    });
});

$(".disciplinaryDetailsModal").click(function (e) {
    e.preventDefault(e);
    // Get the record's ID via attribute  
    var iid = $(this).attr('data-id');
    $('#disciplinaryDetails').trigger("reset");
    $('#disciplinaryDetailsModal').modal('show');
    $.ajax({
        url: baseUrl+'/employee/DisiplinaryByID?id=' + iid,
        method: 'GET',
        data: '',
        dataType: 'json',
    }).done(function (response) {
        console.log(response);
        // Populate the form fields with the data returned from server
        $('#disciplinaryDetails').find('[id="name"]').val(response.desipplinary.first_name+' '+response.desipplinary.last_name).end();
        $('#disciplinaryDetails').find('[name="action"]').val(response.desipplinary.action).end();
        $('#disciplinaryDetails').find('[name="offence_count"]').val(response.desipplinary.offence_count).end();
        $('#disciplinaryDetails').find('[name="details"]').val(response.desipplinary.description).end();
        $('#disciplinaryDetails').find('[name="response"]').val(response.desipplinary.response).end();
        $('#disciplinaryDetails').find('[name="close_action"]').val(response.desipplinary.close_action).end();
    });
});
    // Reset Forms On close of modals
$('#disciplinaryModal').on('hidden.bs.modal', function() {
    $('#disciplinaryForm').trigger("reset");
});
$('#disciplinaryDetailsModal').on('hidden.bs.modal', function() {
    $('#disciplinaryDetails').trigger("reset");
});
/**------------Ends Here ---------------------- */

/**----------Show Notice Modal ------------------ */
function showNoticeModal(id){
    $('#noticeForm').trigger("reset");
    $('#announcementModal').modal('show');
    $.get(baseUrl+`/notice/getSingleNotice`, {id:id}, function(data){
        const dataSet = JSON.parse(data);
        // console.log(dataSet);return
        $('#noticeForm').find('[name="branch"]').val(dataSet.id).end();
        $('#noticeForm').find('[name="branch"]').val(dataSet.id).end();
        $('#noticeForm').find('[id="name"]').val(dataSet.first_name+ ' '+dataSet.last_name).end();
        $('#noticeForm').find('[name="title"]').val(dataSet.title).end();
        $('#noticeForm').find('[name="description"]').val(dataSet.description).end();
        $('#noticeForm').find('[name="response"]').val(dataSet.response).end();
    });
}
/**-----------Ends Here ----------------------- */

/**-------------Reset Announcement Modal on close---------- */
$('#announcementModal').on('hidden.bs.modal', function() {
    $('#noticeForm').trigger("reset");
});
/**-----------Ends Here ----------------------- */


/**-------------Show Task Modal --------------- */
function showTaskModal(id){
    $('#tasksModalform').trigger("reset");
    $('#tasksmodel').modal('show');
    $.ajax({
        url: 'TasksById?id=' + id,
        method: 'GET',
        data: '',
        dataType: 'json',
    }).done(function (response) {
        // Populate the form fields with the data returned from server
        $('#tasksModalform').find('[name="id"]').val(response.tasksvalue.id).end();
        $('#tasksModalform').find('[name="projectid"]').val(response.tasksvalue.pro_id).end();
        $('#tasksModalform').find('[name="assignto"]').val(response.tasksvalue.assigned_id).end();
        $('#tasksModalform').find('[name="tasktitle"]').val(response.tasksvalue.task_title).end();
        $('#tasksModalform').find('[name="startdate"]').val(response.tasksvalue.start_date).end();
        $('#tasksModalform').find('[name="enddate"]').val(response.tasksvalue.end_date).end();
        $('#tasksModalform').find('[name="details"]').val(response.tasksvalue.description).end();
        $('#tasksModalform').find('[name="prostart"]').val(response.tasksvalue.pro_start_date).end();
        $('#tasksModalform').find('[name="proend"]').val(response.tasksvalue.pro_end_date).end();
        const assignedUser = response.employesvalue;
        let collabs = [];
        assignedUser.forEach((val) => {
            if(val.user_type === 'Team Head'){
                const head = val.em_id;
                $('#tasksModalform').find('[name="teamhead"]').val(head).end();
            }else{
                collabs = [...collabs, val.em_id];
            }
        });
        $('#collabs').val(collabs).trigger('change');
        $(`input[name="status"][value="${response.tasksvalue.status}"]`).prop('checked',true);
        $(`input[name="type"][value="${response.tasksvalue.task_type}"]`).prop('checked',true);
    });
    $('#tasksmodel').on('hidden.bs.modal', function() {
        $('#tasksModalform').trigger("reset");
    });
}
/**-------------End Here ----------------------- */

/**------------- Change Task Title -------------- */
function changeTaskProject(){
    // Get the record's ID via attribute  
    var id = $('#projectTitle').val();
    $.ajax({
        url: 'projectbyId?id=' + id,
        method: 'GET',
        data: '',
        dataType: 'json',
    }).done(function (response) {
        console.log(response);
        // Populate the form fields with the data returned from server
        $('#tasksModalform').find('[name="protitle"]').text(response.provalue.pro_name).end();
        $('#tasksModalform').find('[name="protitle"]').val(response.provalue.id).end();
        $('#tasksModalform').find('[name="prostart"]').val(response.provalue.pro_start_date).end();
        $('#tasksModalform').find('[name="proend"]').val(response.provalue.pro_end_date).end();
    });
}
/**--------------Ends Here ----------------------- */

/**--------------Edit Leave Type Modal --------------*/
function showLeaveTypeModal(id){
    $('#leaveform').trigger("reset");
    $('#leaveTypeModal').modal('show');
    $.ajax({
        url: 'LeaveTypebYID?id=' + id,
        method: 'GET',
        data: '',
        dataType: 'json',
    }).done(function (response) {
        console.log(response);
        // Populate the form fields with the data returned from server
        $('#leaveform').find('[name="id"]').val(response.leavetypevalue.type_id).end();
        $('#leaveform').find('[name="leavename"]').val(response.leavetypevalue.name).end();
        $('#leaveform').find('[name="leaveday"]').val(response.leavetypevalue.leave_day).end();
        $('#leaveform').find('[name="status"]').val(response.leavetypevalue.status).end();
    });
    $('#leaveTypeModal').on('hidden.bs.modal', function() {
        $('#leaveform').trigger("reset");
    });
}
/**----------------Ends Here-------------------------- */

/**---------------Holidays Edit Modal------------------ */
function showHolidayUpdateModal(id){
    $('#holidayform').trigger("reset");
    $('#holysmodel').modal('show');
    $.ajax({
        url: 'Holidaybyib?id=' + id,
        method: 'GET',
        data: '',
        dataType: 'json',
    }).done(function (response) {
        console.log(response);
        // Populate the form fields with the data returned from server
        $('#holidayform').find('[name="id"]').val(response.holidayvalue.id).end();
        $('#holidayform').find('[name="holiname"]').val(response.holidayvalue.holiday_name).end();
        $('#holidayform').find('[name="startdate"]').val(response.holidayvalue.from_date).end();
        $('#holidayform').find('[name="enddate"]').val(response.holidayvalue.to_date).end();
        $('#holidayform').find('[name="nofdate"]').val(response.holidayvalue.number_of_days).end();
        $('#holidayform').find('[name="year"]').val(response.holidayvalue.year).end();
    });
    // reset modal on close
    $('#holysmodel').on('hidden.bs.modal', function() {
        $('#holidayform').trigger("reset");
    });
}
/**---------------Ends Here---------------------------- */

/**---------------Redirect to Populated Appraisal Page---------------- */
function showAppraisalData(id){
    //set appraisal ID in local storage, so as to not pass ID on url
    localStorage.setItem('appraisalId', id);
    window.location.href = baseUrl+`/appraisal/perfAppraisalData`;
}

/**---------------Redirect to Populated Appraisal Page---------------- */
function showPeerReviewData(id){
    //set appraisal ID in local storage, so as to not pass ID on url
    localStorage.setItem('peerReviewId', id);
    window.location.href = baseUrl+`/appraisal/peerReviewData`;
}
/**-----------------------Ends Here------------------------------- */

/**---------------Redirect to Populated Appraisal Page---------------- */
function showProbationData(id){
    //set appraisal ID in local storage, so as to not pass ID on url
    localStorage.setItem('probationId', id);
    window.location.href = baseUrl+`/probation/updateForm`;
}
/**-----------------------Ends Here------------------------------- */

/**------------------Get Branch Employees------------------------- */
function getBranchEmployees() {
    let branchId = $('#branchId').val();
    let empOptions = '';
    let employees = $('#employees').select2()
    employees.empty()
    $.get(baseUrl+`/organization/branchEmployees`, {id:branchId}, function(data) {
        let details = JSON.parse(data);
        // console.log(details);return
        details.forEach((emp) => {
            const firstName = emp.first_name.charAt(0).toUpperCase()+ emp.first_name.slice(1);
            const lastName = emp.last_name.charAt(0).toUpperCase()+ emp.last_name.slice(1);            
            empOptions += '<option value=' + emp.em_id + '>' + firstName+' '+lastName + '</option>';
        });
        employees.append(empOptions);
    });
}