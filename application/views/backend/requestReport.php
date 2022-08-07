<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
    <div class="page-wrapper">
        <div class="message"></div>
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor"> Requests</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Requests</li>
                </ol>
            </div>
        </div>
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">  
        <div class="row m-b-10">
            <div class="col-12">
                <a href="<?= base_url(); ?>employee/employee_requests" class="btn btn-primary text-white"><i class="fa fa-bars"></i> Request List</a>
            </div>                       
        </div>              
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline-info">
                        <div class="card-header">
                            <h4 class="m-b-0 text-white">Request Report</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive ">
                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Title </th>
                                            <th>Employee </th>
                                            <th>Branch </th>
                                            <th>Department </th>
                                            <th>Designation </th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($requests as $value): ?>
                                            <tr>
                                            <td><?=ucwords($value->title) ?> </td>
                                            <td ><?=ucwords($value->first_name.' '.$value->last_name) ?></td>
                                            <td><?=ucwords($value->branch_name) ?> </td>
                                            <td><?=ucwords($value->dep_name) ?> </td>
                                            <td><?=ucwords($value->des_name) ?> </td>
                                            <td><?=date('jS \of F Y',strtotime($value->created_at)) ?> </td>
                                            <td><?=ucwords($value->request_status) ?> </td>
                                            <td class="jsgrid-align-center ">
                                                <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light text-white" data-id="<?= $value->id; ?>" onclick="showReqModal($(this).attr('data-id'))"><i class="fa fa-eye"></i></a>
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
        </div>
<?php $this->load->view('modals/showRequestModal'); ?>
<?php $this->load->view('backend/footer'); ?>
