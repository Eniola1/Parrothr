<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?> 
         <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Branch</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Branch</li>
                    </ol>
                </div>
            </div>
            <div class="message"></div> 
            <div class="container-fluid">         
                <div class="row">
                    <div class="col-lg-5">                  

                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">
                                    <?php if(isset($editBranch)): echo'Edit Branch';else: echo'Add Branch'; endif;?>
                                </h4>
                            </div>
                            
                            <?php validation_errors(); ?>
                            <?php $this->upload->display_errors(); ?>
                            <?php $this->session->flashdata('feedback'); ?>
                            

                            <div class="card-body">
                                    <?php if(isset($editBranch)):?>
                                        <form method="post" action="<?=base_url()?>organization/updateBranch" enctype="multipart/form-data">
                                            <div class="form-body">
                                                <div class="row ">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Branch Name</label>
                                                            <input type="text" name="branch_name" value="<?=$editBranch->branch_name?>" class="form-control" placeholder="">
                                                            <input type="hidden" name="id" value="<?=$editBranch->id?>">
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <!--/row-->
                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Save</button>
                                                <button type="button" class="btn btn-info">Cancel</button>
                                            </div>
                                        </form>
                                    <?php else:?>
                                        <form method="post" action="saveBranch" enctype="multipart/form-data">
                                            <div class="form-body">
                                                <div class="row ">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Branch Name</label>
                                                            <input type="text" name="branch_name" value="" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <!--/row-->
                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Save</button>
                                                <button type="button" class="btn btn-info">Cancel</button>
                                            </div>
                                        </form>
                                    <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-7">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"> Branch List</h4>
                            </div>
                            <?php $this->session->flashdata('delsuccess'); ?>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table id="example23" class="display  table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Branch Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php foreach ($branch as $value) { ?>
                                            <tr>
                                                <td>
                                                    <a href="<?=base_url();?>organization/BranchDetails/<?=$value->id;?>" class="text-dark">
                                                        <?=ucwords($value->branch_name);?>
                                                    </a>
                                                </td>
                                                <td class="jsgrid-align-center ">
                                                    <a href="<?=base_url();?>organization/editBranch/<?=$value->id;?>" title="Edit" class="btn btn-sm btn-info waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a onclick="return confirm('Are you sure to delete this data?')" href="<?=base_url();?>organization/deleteBranch/<?=$value->id;?>" title="Delete" class="btn btn-sm btn-danger waves-effect waves-light"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <?php $this->load->view('backend/footer'); ?>
