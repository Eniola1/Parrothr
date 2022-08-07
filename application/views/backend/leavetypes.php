<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor"> Leave Types</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Leave</li>
            </ol>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row m-b-10">
            <div class="col-12">
                <a data-toggle="modal" data-target="#leaveTypeModal" data-whatever="@getbootstrap" class="btn btn-info text-white"><i class="fa fa-plus"></i> Add Leave Types</a>
                <a href="<?php echo base_url(); ?>leave/Application" class="btn btn-primary text-white"><i class="fa fa-bars"></i> Leave Applications</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white"> Leave Type List  </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive ">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Leave Type</th>
                                        <th>Number Of Days</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($leavetypes as $value): ?>
                                    <tr>
                                        <td><?php echo $value->name ?></td>
                                        <td><?php echo $value->leave_day ?></td>
                                        <td class="jsgrid-align-center ">
                                            <a onclick="showLeaveTypeModal(<?=$value->type_id?>)" title="Edit" <?php if($this->session->userdata('user_type')=='EMPLOYEE'){ ?> hidden <?php } ?> class="btn btn-sm btn-info waves-effect text-white waves-light leavetype"><i class="fa fa-pencil-square-o"></i></a>
                                            <a onclick="deleteRecord(<?=$value->type_id?>,'leave/LeavetypeDelet')" title="Delete" <?php if($this->session->userdata('user_type')=='EMPLOYEE'){ ?> hidden <?php } ?> class="btn btn-sm btn-danger waves-effect waves-light text-white"><i class="fa fa-trash-o"></i></a>
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
<?php $this->load->view('modals/leaveTypeModal'); ?>
<?php $this->load->view('modals/deleteModal'); ?>
<?php $this->load->view('backend/footer'); ?>