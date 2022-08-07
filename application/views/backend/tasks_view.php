<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
      <div class="page-wrapper">
            <div class="message"></div>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"> Tasks</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Tasks</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">

                <div class="row m-b-10"> 
                    <div class="col-12">
                        <?php if($this->session->userdata('user_type')=='EMPLOYEE'){ ?>
                        
                        <?php } else { ?>                        
                        <a role="button" data-toggle="modal" data-target="#tasksmodel" data-whatever="@getbootstrap" class="btn btn-info text-white"><i class="fa fa-plus"></i> Add Task </a>
                        <a role="button" href="<?= base_url(); ?>Projects/All_Projects" class="btn btn-primary text-white"><i class="fa fa-bars"></i>  Project List</a>
                        <a role="button" href="<?= base_url(); ?>Projects/Field_visit" class="btn btn-primary text-white"><i class="fa fa-bars"></i>  Field Visit</a>
                        <?php } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"> Task List                   
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Tasks Title </th>
                                                <th>Project Title</th>
                                                <th>Start Date </th>
                                                <th>End Date </th>
                                                <th>Assigned Employee </th>
                                                <th>Action </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                           <?php foreach($tasks as $value): ?>
                                            <tr>
                                                <td><?=ucwords($value->task_title) ?></td>
                                                <td><?=ucwords($value->pro_name) ?></td>
                                                <td><?= date('jS \of F Y',strtotime($value->start_date))  ?></td>
                                                <td><?= date('jS \of F Y',strtotime($value->end_date)) ?></td>
                                                <td>
                                                <?php
                                                $id = $value->id;
                                                $assignvalue = $this->project_model->getTaskAssignUser($id);  ?>
                                                <?php foreach($assignvalue as $value1): ?>
                                                    <?=ucwords($value1->first_name.' '.$value1->last_name).', '?>
                                                <?php endforeach; ?>
                                                </td>
                                               <td class="jsgrid-align-center ">
                                                    <a role="button" title="Edit" class="btn btn-sm btn-info waves-effect waves-light taskmodal text-white" onclick="showTaskModal(<?= $value->id ?>)"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a onclick="deleteRecord(<?=$value->id?>,'projects/TasksDeletByid')" role="button" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light text-white" ><i class="fa fa-trash-o"></i></a>
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
            
<?php $this->load->view('modals/deleteModal'); ?>
<?php $this->load->view('modals/taskModal'); ?>
<?php $this->load->view('backend/footer'); ?>        
