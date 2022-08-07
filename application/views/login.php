<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/Parrot-icon.png">
    <title>Parrot HR</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url(); ?>assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->

    <section id="wrapper" class="login-register login-sidebar" style="background-image:url(<?php echo base_url(); ?>assets/images/background/Artboard_3.png	);">
         
        <div class="login-box card">
            <div class="card-body loginpage">
                <form class="form-horizontal form-material" method="post" id="loginform" action="<?php echo base_url()?>login/Login_Auth" >
                    <h5 style="text-align:center; font-size:15px" id="su">Not Registered? <a href="register">SignUp</a></h5>
                    <a href="javascript:void(0)" class="text-center db"><br/><img src="<?php echo base_url(); ?>assets/images/pl.png" alt="Home" width="350" /></a>
                    <div class="form-group m-t-40">
						<?php if(!empty($this->session->flashdata('feedback'))): ?>
							<small class="login-message">
								<?php echo $this->session->flashdata('feedback')?>
							</small>
						<?php unset($_SESSION['feedback']); endif;?> 
						<?php if(!empty($this->session->flashdata('register_success'))): ?>
							<p class="text-center success-message">
                                <small class="">
                                    <?php echo $this->session->flashdata('register_success')?>
                                </small>
                            </p>
						<?php unset($_SESSION['register_success']); endif;?> 
                        <!-- <div class="col-xs-12">
                            </div> -->
                            <input style="border-bottom: 1px solid #00000040;" class="form-control" name="email" value="<?php if(isset($_COOKIE['email'])) { echo $_COOKIE['email']; } ?>" type="text" required placeholder="Email">
                    </div>
                    <div class="form-group" style="position: relative">
                        <div class="col-xs-12">
                            </div>
                            <input style="border-bottom: 1px solid #00000040;" class="form-control" name="password" value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password']; } ?>" type="password" required placeholder="Password" >
                            <span id="close" style="cursor: pointer;position: absolute;left: 95%;transform: translateX(-95%);top: calc(50% - 15px);width: 50px;height: 30px;display: flex;justify-content: center;align-items: center;"><img  src="https://img.icons8.com/fluency-systems-regular/50/000000/closed-eye.png" style=" width: 16px;" /></span>
                            <span id="open" style="cursor: pointer;position: absolute;left: 95%;transform: translateX(-95%);top: calc(50% - 15px);width: 50px;height: 30px;display: flex;justify-content: center;align-items: center;"><img  src="https://img.icons8.com/metro/50/000000/visible.png" style= "width: 16px;" /></span>
                    </div>

                 <div class="form-check">
                     <input type="checkbox" name="remember" class="form-check-input" id="remember-me">
                     <label class="form-check-label" for="remember-me">Remember me</label>
                 </div>                     
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-login btn-block text-uppercase waves-effect waves-light" type="submit" style="padding:5px 0;    letter-spacing: 5px;border-radius: 50px!important;font-size: 18px;">Login</button>
                        </div>
                    </div>
                    <h3 style="text-align: center;font-style: italic;font-size: 14px;font-family: ui-sans-serif; color:#123FA7">Know everything about your workforce</h3>

                </form>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url(); ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/sneakpeek.js"></script>
</body>


</html>
