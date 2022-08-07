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

    <section id="wrapper" class="login-register register-sidebar" style="background-image:url(<?php echo base_url(); ?>assets/images/background/Artboard_3.png	);">
         
        <div class="login-box card">
            <div class="card-body loginpage">
                <!-- SIGN UP -->
                <form class="form-horizontal form-material" style="min-height: 100%" method="post" id="signupform" action="<?php echo base_url()?>register/createEmployee">
                    <h5 style="text-align:center; font-size:15px">Already a Member? <a href="<?php echo base_url()?>">Login</a></h5>

                    <a href="javascript:void(0)" class="text-center db"><br/><img src="<?php echo base_url(); ?>assets/images/pl.png" alt="Home" width="350" /></a>
                    <div class="form-group " style="margin-top:20px">
                        <input style="border-bottom: 1px solid #00000040;" class="form-control" name="first_name"  type="text" required placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input style="border-bottom: 1px solid #00000040;" class="form-control" name="last_name"  type="text" required placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <input style="border-bottom: 1px solid #00000040;" class="form-control" name="em_email" type="email" required placeholder="Email: example@email.com">
                        <?php if(!empty($this->session->flashdata('register_email'))): ?>
							<small class="pl-2 login-message">
								<?php echo $this->session->flashdata('register_email')?>
							</small>
						<?php unset($_SESSION['register_email']); endif;?> 
                    </div>
                    <div class="form-group">
                        <input style="border-bottom: 1px solid #00000040;" class="form-control" name="em_phone" type="number" required placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="branch" required>
                            <option value="" selected hidden disabled>Branch</option>
                            <?php foreach($branches as $value): ?>
                                <option value="<?=$value->id?>"><?=$value->branch_name?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="dep_id" required>
                            <option value="" selected hidden disabled>Department</option>
                            <?php foreach($departments as $value): ?>
                                <option value="<?=$value->id?>"><?=$value->dep_name?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="des_id" required>
                            <option value="" selected hidden disabled>Designation</option>
                            <?php foreach($designations as $value): ?>
                                <option value="<?=$value->id?>"><?=$value->des_name?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group" style="position: relative">
                        <div class="col-xs-12">
                            </div>
                            <input style="border-bottom: 1px solid #00000040;" class="form-control" name="em_password" value="" type="password" required placeholder="Password" >
                    </div>
                    <div class="form-group" style="position: relative;">
                        <div class="col-xs-12">
                            </div>
                            <input style="border-bottom: 1px solid #00000040;" class="form-control" id="password_confirm" value="" type="password" onchange="confirmPassword()" placeholder="Confirm Password" required />
                            <small id="confirmPass" style="display: none;" class="text-danger text-center">Passwords do not match</small>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button id="registerSubmit" class="btn btn-info btn-lg btn-login btn-block text-uppercase waves-effect waves-light" type="submit" style="padding:5px 0;    letter-spacing: 5px;border-radius: 50px!important;font-size: 18px;margin-top:20px">SIGNUP</button>
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
    <!-- Custom JS -->
    <script src="<?php echo base_url(); ?>assets/js/register.js"></script>
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
