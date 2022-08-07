/**
 * Peer Review JS
 * Purpose of populating the probation form
 * Author: Ochiabuto Jideofor
 */
//some variables are inherited from the app.js file

$(document).ready(function(){
    const id = localStorage.getItem('probationId');
    $.get(baseUrl+`/probation/getProbationData`, {id:id}, function(data) {
        let info = JSON.parse(data);
        // Populate the form fields with the data returned from server
        const firstName = info.first_name.charAt(0).toUpperCase()+ info.first_name.slice(1);
        const lastName = info.last_name.charAt(0).toUpperCase()+ info.last_name.slice(1);
        $('#headerTitle').text(firstName+' '+lastName+"'s "+'Probation');

        Object.keys(info).forEach(key => {
            const val = info[key];
            $('.probationForm').find(`[name = "${key}"]`).val(val);
        });

        $(".probationForm :input").prop("disabled", true);
        $("#hodSubmit").hide();
        $("#hrSubmit").hide();
        $("#gmSubmit").hide();
        $("#supSubmit").hide();
        
        if (info.probation_status === 'Ongoing') {
            if (info.hod_id === info.user_loggedin) {
                $("#hodForm :input").prop("disabled", false);
                $("#hodSubmit").show();
            }
            if (info.gm_id === info.user_loggedin) {
                $("#gmForm :input").prop("disabled", false);
                $("#gmSubmit").show();
            }
            if (info.user_type === 'ADMIN') {
                $("#hrForm :input").prop("disabled", false);
                $("#hrSubmit").show();
                $('#hrForm').find(`[name = "probation_status"]`).val('Completed');
            }   
        }
    });
});
