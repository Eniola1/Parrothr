/**
 * Appraisal JS
 * Purpose of populating the long appraisal form
 * Author: Ochiabuto Jideofor
 */
//some variables are inherited from the app.js file

$(document).ready(function(){
    const id = localStorage.getItem('appraisalId');
    $.get(baseUrl+`/appraisal/getPerfAppraisalData`, {id:id}, function(data) {
        let info = JSON.parse(data);
        const firstName = info.first_name.charAt(0).toUpperCase()+ info.first_name.slice(1);
        const lastName = info.last_name.charAt(0).toUpperCase()+ info.last_name.slice(1);
        // Populate the form fields with the data returned from server
        $('#headerTitle').text(firstName+' '+lastName+"'s "+'Appraisal');
        Object.keys(info).forEach(key => {
            const val = info[key];
            $('.filledAppraisalForm').find(`[name = "${key}"]`).val(val);
        });
        $(".filledAppraisalForm :input").prop("disabled", true);
        $(".evalSubmit").hide();
        $(".empSubmit").hide();
        if (info.appraisal_status === 'Ongoing') {
            if (info.em_id === info.user_loggedin) {
                $("#employeeAppraisal :input").prop("disabled", false);
                $(".empSubmit").show();
            }
            if (info.manager_id === info.user_loggedin) {
                $("#evaluatorAppraisal :input").prop("disabled", false);
                $("#totalAppraisal :input").prop("disabled", false);
                $(".evalSubmit").show();
                $('.filledAppraisalForm').find(`[name = "appraisal_status"]`).val('Completed');
            }
        }

    });
});
