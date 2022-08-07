<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Leave Applications</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Leave Application</li>
            </ol>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row m-b-10">
            <div class="col-12">
                <a href="<?= base_url(); ?>leave/LeaveApplicationForm" class="btn btn-info text-white"><i class="fa fa-plus"></i> Add Application </a>
                <a href="<?= base_url(); ?>leave/Leave_report" class="btn btn-primary text-white"><i class="fa fa-bars"></i> Leave Report</a>
            </div>                       
        </div> 
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Leave Application List                        
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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($application as $value): ?>
                                        <tr style="vertical-align:top">
                                            <td><span><?php echo $value->first_name.' '.$value->last_name ?></span></td>
                                            <td><?php echo $value->name; ?></td>
                                            <td><?php echo date('jS \of F Y',strtotime($value->apply_date)); ?></td>
                                            <td><?php echo date('jS \of F Y',strtotime($value->start_date)); ?></td>
                                            <td><?php echo date('jS \of F Y',strtotime($value->end_date)); ?></td>
                                            <td><?php echo $value->leave_duration; ?> days</td>
                                            <td><?php echo $value->leave_status; ?></td>
                                            <?php if($this->session->userdata('user_type')=='EMPLOYEE'){ ?> 
                                            
                                            <?php } else { ?> 
                                            <td class="jsgrid-align-center">
                                                
                                            <?php if($value->leave_status =='Approved' or $value->leave_status =='Rejected'){ ?>
                                            
                                                <?php } elseif($value->leave_status =='Not Approved'){ ?>
                                                <a class="btn btn-sm btn-info waves-effect waves-light text-white" data-id="<?= $value->id; ?>" data-value="Approved" onclick="updateLeaveStatus($(this).attr('data-id'),$(this).attr('data-value'))">Approve</a>       
                                                <a class="btn btn-sm btn-info waves-effect waves-light text-white" data-id="<?= $value->id;?>" data-value="Rejected" onclick="updateLeaveStatus($(this).attr('data-id'),$(this).attr('data-value'))">Reject</a>
                                                

                                                <?php } ?>
                                                <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light leaveapp text-white" data-id="<?= $value->id; ?>" onclick="showLeaveModal($(this).attr('data-id'))"><i class="fa fa-pencil-square-o"></i></a>
                                                
                                            </td>
                                            <?php } ?>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
<?php $this->load->view('modals/leaveModal'); ?>
<?php $this->load->view('backend/footer'); ?>
