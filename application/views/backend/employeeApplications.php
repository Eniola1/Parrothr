<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Employee Applications</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Employee Applications</li>
            </ol>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row m-b-10">
            
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Applications
                        </h4>
                    </div>
                    <div class="card-body" style="min-height:50vh">
                        <div class="row">
                           
                            <div class="col-lg-3 col-6" style="display:flex;justify-content:center; align-items:center;">
                                    <div class="info-box" style="min-height: 50px;padding: 0; ;display:flex">
                                    <span class="info-box-icon bg-info" style="width:50px; height: 50px;"><i class="fa fa-file-pdf-o"></i></span>

                                    <a href="<?php echo base_url(); ?>payroll/getSalaryAdvance">
                                    <div class="info-box-content" style="flex-direction: row;justify-content: space-between;align-items: center;">
                                        <span class="info-box-text"> Salary Advance</span>
                                    </div></a>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-6" style="display:flex;justify-content:center; align-items:center;">
                                    <div class="info-box" style="min-height: 50px;padding: 0; ;display:flex">
                                    <span class="info-box-icon bg-info" style="width:50px; height: 50px;"><i class="fa fa-file-pdf-o"></i></span>

                                    <a href="<?php echo base_url(); ?>appraisal/perfAppraisalList">
                                    <div class="info-box-content" style="flex-direction: row;justify-content: space-between;align-items: center;">
                                        <span class="info-box-text">Performance Self-Appraisal</span>
                                    </div></a>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-6" style="display:flex;justify-content:center; align-items:center;">
                                    <div class="info-box" style="min-height: 50px;padding: 0; ;display:flex">
                                    <span class="info-box-icon bg-info" style="width:50px; height: 50px;"><i class="fa fa-file-pdf-o"></i></span>

                                    <a href="<?php echo base_url(); ?>appraisal/peerReviewList">
                                    <div class="info-box-content" style="flex-direction: row;justify-content: space-between;align-items: center;">
                                        <span class="info-box-text">Peer Review</span>
                                    </div></a>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-6" style="display:flex;justify-content:center; align-items:center;">
                                    <div class="info-box" style="min-height: 50px;padding: 0; ;display:flex">
                                    <span class="info-box-icon bg-info" style="width:50px; height: 50px;"><i class="fa fa-file-pdf-o"></i></span>

                                    <a href="<?php echo base_url(); ?>probation">
                                    <div class="info-box-content" style="flex-direction: row;justify-content: space-between;align-items: center;">
                                        <span class="info-box-text">Probation</span>
                                    </div></a>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>

                            <!-- <div class="col-lg-3 col-6" style="display:flex;justify-content:center; align-items:center;">
                                    <div class="info-box" style="min-height: 50px;padding: 0; ;display:flex">
                                    <span class="info-box-icon bg-info" style="width:50px; height: 50px;"><i class="fa fa-file-pdf-o"></i></span>

                                    <a href="<?php echo base_url(); ?>employee/UniformIssuance">
                                    <div class="info-box-content" style="flex-direction: row;justify-content: space-between;align-items: center;">
                                        <span class="info-box-text"> Uniform Issuance</span>
                                    </div></a>
                                </div>
                            </div> -->
                          

                            <div class="col-lg-3 col-6" style="display:flex;justify-content:center; align-items:center;">
                                    <div class="info-box" style="min-height: 50px;padding: 0; ;display:flex">
                                    <span class="info-box-icon bg-info" style="width:50px; height: 50px;"><i class="fa fa-file-pdf-o"></i></span>

                                    <a href="<?php echo base_url(); ?>conflictOfInterest/employeeConflictOfInterest">
                                    <div class="info-box-content" style="flex-direction: row;justify-content: space-between;align-items: center;">
                                        <span class="info-box-text"> Conflict of Interest</span>
                                    </div></a>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            <!--  -->
                            <div class="col-lg-3 col-6" style="display:flex;justify-content:center; align-items:center;">
                                    <div class="info-box" style="min-height: 50px;padding: 0; ;display:flex">
                                    <span class="info-box-icon bg-info" style="width:50px; height: 50px;"><i class="fa fa-file-pdf-o"></i></span>

                                    <a href="<?php echo base_url(); ?>conflictOfInterest/employeeConflictOfInterest">
                                    <div class="info-box-content" style="flex-direction: row;justify-content: space-between;align-items: center;">
                                        <span class="info-box-text"> Disciplinary Action</span>
                                    </div></a>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>

                            <div class="col-lg-3 col-6" style="display:flex;justify-content:center; align-items:center;">
                                    <div class="info-box" style="min-height: 50px;padding: 0;display:flex">
                                    <span class="info-box-icon bg-info" style="width:50px; height: 50px;"><i class="fa fa-file-pdf-o"></i></span>

                                    <a href="<?php echo base_url(); ?>employeeExit/exitPass">
                                    <div class="info-box-content" style="flex-direction: row;justify-content: space-between;align-items: center;">
                                        <span class="info-box-text">Exit Pass</span>
                                    </div></a>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>

                            <div class="col-lg-3 col-6" style="display:flex;justify-content:center; align-items:center;">
                                    <div class="info-box" style="min-height: 50px;padding: 0; ;display:flex">
                                    <span class="info-box-icon bg-info" style="width:50px; height: 50px;"><i class="fa fa-file-pdf-o"></i></span>

                                    <a href="<?php echo base_url(); ?>employeeExit/exitInterview">
                                    <div class="info-box-content" style="flex-direction: row;justify-content: space-between;align-items: center;">
                                        <span class="info-box-text">Exit Interview</span>
                                    </div></a>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>

                              
                            <div class="col-lg-3 col-6" style="display:flex;justify-content:center; align-items:center;">
                                <div class="info-box" style="min-height: 50px;padding: 0; ;display:flex">
                                <span class="info-box-icon bg-info" style="width:50px; height: 50px;"><i class="fa fa-file-pdf-o"></i></span>

                                <a href="<?php echo base_url(); ?>employee/employee_requests">
                                <div class="info-box-content" style="flex-direction: row;justify-content: space-between;align-items: center;">
                                    <span class="info-box-text">Other Requests</span>
                                </div></a>
                                </div>
                            </div>

                            <!-- end div -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
              a{
                display:flex;
                color: #000
            }
        </style>
        
        <?php $this->load->view('backend/footer'); ?>
