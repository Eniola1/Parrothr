<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?> 
        <div class="message"></div>
         <div class="page-wrapper">
                <?php 
                $allemployees = $this->employee_model->GetAllEmployee(); 
                ?> 
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"> Disciplinary</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Disciplinary</li>
                    </ol>
                </div>
            </div>
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <div class="row m-b-10"> 
                    <div class="col-12">
                        <a data-toggle="modal" data-target="#disciplinaryModal" data-whatever="@getbootstrap"  class="btn btn-info text-white"><i class="fa fa-plus"></i> Add Disciplinary </a>
                        <a href="<?=base_url(); ?>employee/disciplinary" class="btn btn-primary text-white"><i class="fa fa-bars"></i> Disciplinary List</a>
                    </div>
                </div>         
                <div class="row">
                <div class="col-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"> Disciplinary Action Report</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Employee Name</th>
                                                <th>Disciplinary Action</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                           <?php foreach($desciplinary as $value): ?>
                                            <tr>
                                                <td ><?=ucwords($value->first_name.' '.$value->last_name); ?></td>
                                                <td><?=ucwords($value->action); ?></td>
                                                <td><?=$value->description?> </td>
                                                <td>
                                                    Closed
                                                </td>

                                                <td  class="jsgrid-align-center ">
                                                    <a role="button" title="See" class="btn btn-sm btn-info waves-effect waves-light disciplinaryDetailsModal text-white" data-id="<?=$value->id; ?>"><i class="fa fa-eye"></i></a>
                                                    <a href="DeletDisiplinary?D=<?=$value->id; ?>" onclick="confirm('Are you sure want to delet this value?')" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
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
<?php $this->load->view('modals/disciplinaryModal'); ?>
<?php $this->load->view('modals/disciplinaryDetailsModal'); ?>
<?php $this->load->view('backend/footer'); ?>
