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
                        <li class="breadcrumb-item active">Attendance</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">

                <div class="row m-b-10"> 
                    <div class="col-12">
                        <a href="<?= base_url(); ?>attendance/Save_Attendance" class="btn btn-info text-white"><i class="fa fa-plus"></i> Add Attendance </a>
                        <a role="button" class="btn btn-info text-white" data-toggle="modal" data-target="#Bulkmodal"><i class="fa fa-plus"></i>  Add Bulk Attendance</a>
                        <a href="<?= base_url(); ?>attendance/Attendance" class="btn btn-primary text-white"><i class="fa fa-bars"></i> Attendance List </a>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"> Attendance Report  </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Employee Name</th>
                                                <th>Date </th>
                                                <th>Sign In</th>
                                                <th>Sign Out</th>
                                                <th>Working Hour</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php foreach($attendancelist as $value): ?>
                                            <tr>
                                                <td><?=ucwords($value->name) ?></td>
                                                <td><?= date('d-m-Y', strtotime($value->atten_date)) ?></td>
                                                <td><?= $value->signin_time; ?></td>
                                                <td><?= $value->signout_time; ?></td>
                                                <td><?= $value->Hours; ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php $this->load->view('modals/bulkAttendanceUpload'); ?>
<?php $this->load->view('backend/footer'); ?>