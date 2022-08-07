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
                                                <th>Status </th>
                                                <th>View </th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php foreach($tasks as $value): ?>
                                                <tr>
                                                    <td><?=$value->task_title?></td>
                                                    <td><?=$value->pro_name?></td>
                                                    <td><?=date('jS \of F Y',strtotime($value->start_date))?></td>
                                                    <td><?=date('jS \of F Y',strtotime($value->end_date))?></td>
                                                    <td><?=ucwords($value->status)?></td>
                                                    <td>
                                                    <a class="btn btn-sm btn-info waves-effect waves-light text-white viewTaskDetails" role="button" data-id="<?=$value->task_id ?>"><i  class="fa fa-eye "></i></a>
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

    <?php $this->load->view('modals/viewTaskDetailsModal'); ?>        
    <?php $this->load->view('backend/footer'); ?>        
