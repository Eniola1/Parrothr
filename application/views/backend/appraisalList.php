<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Appraisal</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Appraisal List</li>
            </ol>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row m-b-10">
            <div class="col-12">
                <a href="<?= base_url(); ?>appraisal/PerformanceSelfAppraisal" class="btn btn-info text-white"><i class="fa fa-plus"></i> Start Performance Self-Appraisal</a>
            </div>                       
        </div> 
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white"> Appraisal List                        
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
                                        <th>Supervisor Name</th>
                                        <th>Type of Appraisal</th>
                                        <th>Review period</th>
                                        <th>Start Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($list as $value): ?>
                                    <tr style="vertical-align:top">
                                        <td><?= ucwords($value->first_name.' '.$value->last_name)?></td>
                                        <td><?= ucwords($value->branch_name)?></td>
                                        <td><?= ucwords($value->dep_name)?></td>
                                        <td><?= ucwords($value->des_name)?></td>
                                        <td><?= ucwords($value->manager_fullname)?></td>
                                        <td><?= ucwords($value->type_of_appraisal)?></td>
                                        <td><?= ucwords($value->review_period)?></td>
                                        <td><?= date('jS \of F Y', strtotime($value->created_date))?></td>
                                        <td><?= $value->appraisal_status?></td>
                                        <td>
                                            <a title="See" class="btn btn-sm btn-info waves-effect waves-light text-white" onclick="showAppraisalData(<?=$value->id?>)"><i class="fa fa-eye"></i></a>
                                            <a title="Delete" class="btn btn-sm btn-danger waves-effect waves-light text-white"                           onclick="deleteRecord(<?=$value->id?>, 'appraisal/deleteAppraisal')"><i class="fa fa-trash"></i></a>
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
        
<?php $this->load->view('modals/deleteModal'); ?>
<?php $this->load->view('backend/footer'); ?>
