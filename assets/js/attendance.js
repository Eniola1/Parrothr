// Ensure sign-in time is less than sign-out time
function checkTimeDiff(){
    let signin = $('#attendanceForm').find('[name="signin"]').val();
    let signout = $('#attendanceForm').find('[name="signout"]').val();
    signin = Number(signin.replace(':', '.'));
    signout = Number(signout.replace(':', '.'));
    
    if(signout - signin){
        $('.confirmTimeDiff').show();
        $('form').submit(function(e){ e.preventDefault(); });
    }else{
        $('.confirmTimeDiff').hide();
        $('form').unbind('submit');
    }
}