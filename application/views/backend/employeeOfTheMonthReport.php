<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
         <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"> Employee Of The Month History</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Employee Of The Month History</li>
                    </ol>
                </div>
            </div>
            <div class="message"></div>

            <!-- This div closes in the footer -->
            <div class="container-fluid">
                <div class="row m-b-10"> 
                    <div class="col-12">
                        <a href="<?=base_url(); ?>employee/employeeOfTheMonth" class="btn btn-primary text-white"><i class="fa fa-bars"></i> Employee Of The Month List</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"><i class="fa fa-user-o" aria-hidden="true"></i> Employee List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Branch </th>
                                                <th>Month</th>
                                                <th>Employee Name</th>
                                                <th>Department </th>
                                                <th>Designation</th>
                                                <th>Year</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php foreach($employee as $value): ?>
                                            <tr>
                                                <td><?=$value->branch_name; ?></td>
                                                <td><?=$value->month; ?></td>
                                                <td title="<?=$value->first_name .' '.$value->last_name; ?>"><?=ucwords($value->first_name) .' '.ucwords($value->last_name); ?></td>
                                                <td><?=$value->dep_name ?></td>
                                                <td><?=$value->des_name ?></td>
                                                <td><?= date('Y',strtotime($value->created_date)); ?></td>
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
<?php $this->load->view('modals/bulkUpload'); ?>
<?php $this->load->view('backend/footer'); ?>
