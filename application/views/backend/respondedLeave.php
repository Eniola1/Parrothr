<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Leave Report</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Leave Report</li>
            </ol>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row m-b-10">
            <?php // if($this->session->userdata('user_type')=='EMPLOYEE'){ ?> 
                <div class="col-12">
                    <a href="<?= base_url(); ?>leave/LeaveApplicationForm" class="btn btn-info text-white"><i class="fa fa-plus"></i> Add Application </a>
                    <a href="<?= base_url(); ?>leave/Application" class="btn btn-primary text-white"><i class="fa fa-bars"></i> Leave Applications</a>
                </div>                       
            <?php // } ?> 
        </div> 
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Report List                       
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive ">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Employee Name</th>
                                        <th>Leave Type</th>
                                        <th>Apply Date</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Duration</th>
                                        <th>Leave Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($respondedApplications as $value): ?>
                                        <tr style="vertical-align:top">
                                            <td><span><?php echo $value->first_name.' '.$value->last_name ?></span></td>
                                            <td><?php echo $value->name; ?></td>
                                            <td><?php echo date('jS \of F Y',strtotime($value->apply_date)); ?></td>
                                            <td><?php echo date('jS \of F Y',strtotime($value->start_date)); ?></td>
                                            <td><?php echo date('jS \of F Y',strtotime($value->end_date)); ?></td>
                                            <td><?php echo $value->leave_duration; ?> days</td>
                                            <td><?php echo $value->leave_status; ?></td>
                                            
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    
<?php $this->load->view('backend/footer'); ?>
