<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Salary Advance</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Salary Advance Report</li>
            </ol>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row m-b-10">
            <div class="col-12">
                <a href="<?= base_url(); ?>payroll/getSalaryAdvance" class="btn btn-primary text-white"><i class="fa fa-bars"></i> Salary Advance List</a>
            </div>                       
        </div> 
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white"> Salary Advance Report                        
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
                                        <th>Requested Amount</th>
                                        <th>Salary</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($list as $value): ?>
                                    <tr style="vertical-align:top">
                                        <td><?= $value->first_name.' '.$value->last_name?></td>
                                        <td><?= $value->branch_name?></td>
                                        <td><?= $value->dep_name?></td>
                                        <td><?= $value->des_name?></td>
                                        <td><?= number_format($value->amount)?></td>
                                        <td><?= number_format($value->total)?></td>
                                        <td><?= date('jS F', strtotime($value->created_date))?></td>
                                        <td><?= $value->advance_status?></td>
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
