<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
         <div class="page-wrapper">
            <div class="message"></div>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Attendance</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active"> Attendance</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row m-b-10"> 
                    <div class="col-12">
                        <a role="button" class="btn btn-info text-white" data-toggle="modal" data-target="#Bulkmodal"><i class="fa fa-plus"></i>  Add Bulk Attendance</a>
                        <a href="<?= base_url(); ?>attendance/Attendance" class="btn btn-primary text-white"><i class="fa fa-bars"></i> Attendance List </a>
                        <a href="<?= base_url(); ?>attendance/Attendance_Report" class="btn btn-primary text-white"><i class="fa fa-bars"></i> Attendance Report </a>
                        
                    </div>
                </div>  
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white"> Attendance </h4>
                    </div>
                    <div class="card-body">
                        <form class="row" method="post" action="Add_Attendance" id="attendanceForm" enctype="multipart/form-data">
                            <div class="form-group col-md-3 m-t-20">
                                <label>Employee</label>
                                <select class="form-control select2 custom-select" data-placeholder="Choose a Category" tabindex="1" name="emid" required>
                                    
                                    <?php if(!empty($attval->em_id)){ ?>
                                    <option value="<?= $attval->em_id ?>"><?=ucwords( $attval->first_name.' '.$attval->last_name )?></option>           
                                    <?php } else { ?>
                                    <option selected disabled>Select Here</option>
                                    <?php foreach($employee as $value): ?>
                                    <option value="<?=$value->em_id ?>"><?=ucwords($value->first_name.' '.$value->last_name) ?></option>
                                    <?php endforeach; ?>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3 m-t-20">
                                <label>Select Date: </label>
                                <div id="" class="input-group date" >
                                    <input name="attdate" class="form-control mydatetimepickerFull" value="<?php if(!empty($attval->atten_date)) { 
                                    $old_date_timestamp = strtotime($attval->atten_date);
                                    $new_date = date('Y-m-d', $old_date_timestamp);    
                                    echo $new_date; } ?>" required>
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                            <div class="form-group col-md-3 m-t-20">
                                <label>Sign In Time (24hour format)</label>
                                <input class="form-control time-input" name="signin" value="<?php if(!empty($attval->signin_time)) { echo  $attval->signin_time;} ?>" placeholder="" required>
                                <small style="display: none;" class="text-danger text-center confirmTimeDiff">Sign in time must be earlier</small>
                            </div>
                            <div class="form-group col-md-3 m-t-20">
                                <label>Sign Out Time (24hour format)</label>
                                <div class="input-group">
                                    <input type="text" name="signout" class="form-control time-input" value="<?php if(!empty($attval->signout_time)) { echo  $attval->signout_time;} ?>">
                                    <br>
                                </div>
                                <small style="display: none;" class="text-danger text-center confirmTimeDiff">Sign out time must be later</small>
                            </div>
                            <div class="form-group col-md-4 m-t-20">
                                <label>Place</label>
                                <select class="form-control custom-select" data-placeholder="" tabindex="1" name="place" required>
                                    <option value="office" <?php if(isset($attval->place) && $attval->place == "office") { echo "selected"; } ?>>Office</option>
                                    <option value="field"  <?php if(isset($attval->place) && $attval->place == "field") { echo "selected"; } ?>>Field</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12 m-t-20">
                                <input type="hidden" name="id" value="<?php if(!empty($attval->id)){ echo  $attval->id;} ?>" class="form-control"id="recipient-name1">                             
                                <button type="submit" id="attendanceUpdate" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                            
<?php $this->load->view('modals/bulkAttendanceUpload'); ?>
<?php $this->load->view('backend/footer'); ?>
<!-- Custom JS -->
<!-- <script src="<?php echo base_url(); ?>assets/js/attendance.js"></script> -->