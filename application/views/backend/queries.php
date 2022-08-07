<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
    <div class="page-wrapper">
        <div class="message"></div>
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
        <?php $status = null; ?>
            <div class="row m-b-10"> 
                
            </div>         
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline-info">
                        <div class="card-header">
                            <h4 class="m-b-0 text-white"> Disciplinary List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive ">
                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Disciplinary Action</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach($queries as $value): ?>
                                        <tr>
                                            <td><?= $value->action; ?></td>
                                            <td><?= $value->description?> </td>
                                            <?php if(!$value->close_action):?>
                                            <td>In Progress</td>
                                            <?php else:?>
                                            <th>Closed</th>
                                            <?php endif;?>
                                            <td  class="jsgrid-align-center ">
                                            <?php if(!$value->close_action):?>
                                                <a role="button" title="Edit" class="btn btn-sm btn-info waves-effect waves-light disiplinary text-white" data-id="<?=$value->id; ?>"><i class="fa fa-pencil-square-o"></i></a>
                                                <?php else:?>
                                                <a role="button" title="See" class="btn btn-sm btn-info waves-effect waves-light disciplinaryDetailsModal text-white" data-id="<?=$value->id; ?>"><i class="fa fa-eye"></i></a>
                                                <?php endif;?>
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
        
<?php $this->load->view('modals/queryModal'); ?>
<?php $this->load->view('modals/disciplinaryDetailsModal'); ?>
<?php $this->load->view('backend/footer'); ?>
