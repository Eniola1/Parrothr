<!DOCTYPE html>
<html lang="en">
<?php
date_default_timezone_set('Africa/Lagos');
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="GenIT Bangladesh">
    <!-- Favicon icon -->
    <?php $settingsvalue = $this->settings_model->GetSettingsValue(); ?>
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>assets/images/Parrot-icon.png">
    <title><?= $settingsvalue->sitetitle; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/2.0.46/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/plugins/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url(); ?>assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>assets/css/print.css" rel="stylesheet" media='print'>
    <!-- You can change the theme colors from here -->
    <link href="<?= base_url(); ?>assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- Daterange picker plugins css -->
    <link href="<?= base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    
    <script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
     <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
     <script src="<?= base_url(); ?>assets/js/orgchart.js"></script>
     
    <link href="<?= base_url(); ?>assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />   
    <link href="<?= base_url(); ?>assets/plugins/calendar/dist/fullcalendar.css" rel="stylesheet" type="text/css" />
    <!-- custom -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/admindashboard.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/all.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/icheck.css">  
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/calendar.css">  
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css">


</head>

<body class="fix-header fix-sidebar card-no-border">
        <?php 
            $id = $this->session->userdata('user_login_id');
            $userName = $this->session->userdata('name');
            $basicinfo = $this->employee_model->GetBasic($id); 
            $settingsvalue = $this->settings_model->GetSettingsValue();
        ?>
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
				<a class="navbar-brand" href="<?= base_url(); ?>">
                    <b>
                        <img src="<?= base_url();?>assets/images/Parrot-icon.png" alt="DRI" class="DRI-logo" style="width:50px;"/>
                    </b>
                    <!-- Logo text --><span>
                    <img src="<?= base_url(); ?>assets/images/<?= $settingsvalue->sitelogo; ?>" alt="DRI" class="DRI-logo" style="margin-top: 2rem; width: 100%;"/>
                        <!-- Light Logo text -->    
                        </span> 
                </a>
            
                </div>
                <div class="navbar-collapse" style="width: 100vw">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item dropdown" id="notification-dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" role="button" onclick="seenNotification()" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell"></i>
                                <div id="notify" class="notify"> 
                                    <span class="heartbit"></span> 
                                    <span class="point"></span> 
                                </div>
                            </a>
                            <div class="dropdown-menu mailbox scale-up-left" id="notification-menu">
                                <ul>
                                    <li>
                                        <div id="noNotifications" class='notification'>No Notifications</div>
                                        <div class="" id="notification-center" >
                                        <!-- Message -->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0" style="margin-right:.2%">
                        <li class="nav-item dropdown" style="background: #fff;height: 40px;width: 40px;border-radius: 50%;display: flex;align-items: center;justify-content: center;margin-right: 10px">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style=" display: flex;align-items: center;justify-content: center;"><img src="<?= base_url(); ?>assets/images/users/<?= $basicinfo->em_image; ?>" alt="Genit" class="profile-pic" style="height:40px;width:40px;border-radius:50px" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="<?= base_url(); ?>assets/images/users/<?= $basicinfo->em_image; ?>" alt="user"></div>
                                            <div class="u-text">
                                                <h4><?= $basicinfo->first_name.' '.$basicinfo->last_name; ?></h4>
                                                <p class="text-muted"><?= $basicinfo->em_email ?></p>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?= base_url(); ?>employee/view?id=<?= $basicinfo->em_id?>"><i class="ti-user"></i> My Profile</a></li>
                                    <li><a href="<?= base_url(); ?>login/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mr-3 align-self-center text-white font-11"><?=ucwords($userName)?></li>
                    </ul>
                </div>
            </nav>
        </header>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="moment.js"></script>

<script type="text/javascript">

   

</script>
