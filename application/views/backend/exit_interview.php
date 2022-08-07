<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Exit Interview</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Exit Interview List</li>
            </ol>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white"> Exit Interview List                        
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive ">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Employee Name</th>
                                        <th>Branch</th>
                                        <th>Department</th>
                                        <th>Designation</th>
                                        <th>Service Length</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($list):?>
                                    <?php foreach($list as $value): ?>
                                    <tr style="vertical-align:top">
                                        <td><?=ucwords($value->first_name.' '.$value->last_name)?></td>
                                        <td><?=ucwords($value->branch_name)?></td>
                                        <td><?=ucwords($value->dep_name)?></td>
                                        <td><?=ucwords($value->des_name)?></td>
                                        <td><?=ucwords($value->service_length)?></td>
                                        <td><?= date('jS \of F Y', strtotime($value->created_date))?></td>
                                        <td>
                                            <a href="<?=base_url().'employeeExit/getExitInterview?id='.$value->id?>" class="btn btn-sm btn-info waves-effect waves-light text-white" ><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a role="button" data-toggle="modal" data-id="<?=$value->id?>" title="Delete" onclick="deleteRecord($(this).data('id'), `employeeExit/deleteExitInterview`)" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash text-white"></i></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>                                        
                                    <?php endif;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<?php $this->load->view('modals/deleteModal'); ?>
<?php $this->load->view('backend/footer'); ?>
