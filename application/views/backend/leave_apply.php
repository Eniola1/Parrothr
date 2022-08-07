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
                <li class="breadcrumb-item active">Leave Applications</li>
            </ol>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row m-b-10">
            <?php if($this->session->userdata('user_type')=='EMPLOYEE'){ ?>
            <div class="col-12">
                <button type="button" onclick="location.href=`<?php echo base_url(); ?>leave/LeaveApplicationForm`" class="btn btn-info"><i class="fa fa-plus"></i></i> Add Application </a></button>
                <button type="button" class="btn btn-primary"><i class="fa fa-bars"></i><a href="<?php echo base_url(); ?>leave/Holidays" class="text-white"><i class="" aria-hidden="true"></i>  Holiday List</a></button>
            </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white"> Application List
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
                                        <th>start Date</th>
                                        <th>End Date</th>
                                        <th>Leave Duration</th>
                                        <th>Leave Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach($application as $value): ?>
                                    <tr style="vertical-align:top">
                                        <td><?php echo $value->first_name.' '.$value->last_name ?></td>
                                        <td><?php echo $value->name; ?></td>
                                        <td><?php echo date('jS \of F Y',strtotime($value->apply_date)); ?></td>
                                        <td><?php echo date('jS \of F Y',strtotime($value->start_date)); ?></td>
                                        <td><?php echo date('jS \of F Y',strtotime($value->end_date)); ?></td>
                                        <td><?php echo $value->leave_duration; ?></td>
                                        <td><?php echo $value->leave_status; ?></td>
                                        <td class="jsgrid-align-center">
                                            <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light leaveapp text-white" onclick="showLeaveModal(<?= $value->id; ?>)" ><i class="fa fa-eye"></i></a>
                                        </td>
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
