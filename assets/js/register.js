// Confirm Password
function confirmPassword(){
    let pass = $('#signupform').find('[name="em_password"]').val();
    let confirmPass = $('#password_confirm').val();
    if(pass !== confirmPass){
        $('#confirmPass').show();
        $('form').submit(function(e){ e.preventDefault(); });
    }else{
        $('#confirmPass').hide();
        $('form').unbind('submit');
    }
}