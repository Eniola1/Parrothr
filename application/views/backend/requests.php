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
        <?php $status = null; ?>
            <div class="row m-b-10"> 
                <div class="col-12">
                    <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a data-toggle="modal" data-target="#addRequestModal" data-whatever="@getbootstrap"  class="text-white"><i class="" aria-hidden="true"></i> Add Request </a></button>
                </div>
            </div>         
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline-info">
                        <div class="card-header">
                            <h4 class="m-b-0 text-white">Request List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive ">
                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Title </th>
                                            <th>Description</th>
                                            <th>Response</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($requests as $value): ?>
                                        <tr>
                                            <td ><?= $value->title?></td>
                                            <td><?=$value->description?> </td>
                                            <td><?=$value->response?> </td>
                                            <td><?=date('jS \of F Y',strtotime($value->created_at)) ?> </td>
                                            <td><?=ucwords($value->request_status)?> </td>
                                            <td  class="jsgrid-align-center ">
                                                <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light text-white" data-id="<?= $value->id; ?>" onclick="showUpdateReqModal($(this).attr('data-id'))"><i class="fa fa-eye" aria-hidden="true"></i></a>
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
<?php $this->load->view('modals/addRequestModal'); ?>
<?php $this->load->view('modals/updateRequestModal'); ?>
<?php $this->load->view('backend/footer'); ?>
