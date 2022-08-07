/**
 * Peer Review JS
 * Purpose of populating the long peer review form
 * Author: Ochiabuto Jideofor
 */
//some variables are inherited from the app.js file

$(document).ready(function(){
    const id = localStorage.getItem('peerReviewId');
    $.get(baseUrl+`/appraisal/getPeerReviewData`, {id:id}, function(data) {
        let info = JSON.parse(data);
        // Populate the form fields with the data returned from server
        const firstName = info.first_name.charAt(0).toUpperCase()+ info.first_name.slice(1);
        const lastName = info.last_name.charAt(0).toUpperCase()+ info.last_name.slice(1);
        $('#headerTitle').text(firstName+' '+lastName+"'s "+'Review');
        $(`.type_of_appraisal[value = "${info.type_of_appraisal}"]`).prop('checked', true);
        Object.keys(info).forEach(key => {
            const val = info[key];
            $('.filledPeerReviewForm').find(`[name = "${key}"]`).val(val);
        });
        $(".filledPeerReviewForm :input").prop("disabled", true);
        $("#employeeSubmit").hide();
        $("#supervisorSubmit").hide();
        
        if (info.review_status === 'Ongoing') {
            if (info.em_id === info.user_loggedin) {
                $("#employeeReview :input").prop("disabled", false);
                $("#employeeSubmit").show();
            }
            if (info.supervisor_id === info.user_loggedin) {
                $("#supervisorReview :input").prop("disabled", false);
                $('#supervisorReview').find(`[name = "review_status"]`).val('Completed');
                $("#supervisorSubmit").show();
            }
        }
    });
});
