<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
      <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor"> Employee</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Employee</li>
                    </ol>
                </div>
            </div>
            <div class="message"></div>

            <div class="container-fluid">
                <div class="row m-b-10"> 
                    <div class="col-12">
                        <button type="button" class="btn btn-info"><i class="fa fa-bars"></i><a href="<?php echo base_url(); ?>employee/Employees" class="text-white"><i class="" aria-hidden="true"></i>  Employee List</a></button>
                        
                    </div>
                </div>
               <div class="row">
                    <div class="col-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"><i class="fa fa-user-o" aria-hidden="true"></i> Add New Employee<span class="pull-right " ></span></h4>
                            </div>
                            <?php echo validation_errors(); ?>
                               <?php echo $this->upload->display_errors(); ?>
                               <?php echo $this->session->flashdata('formdata'); ?>
                               <?php echo $this->session->flashdata('feedback'); ?>
                            <div class="card-body">

                                <form class="row" method="post" action="createEmployee" enctype="multipart/form-data">
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" class="form-control form-control-line" placeholder="First name" minlength="2" required > 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Last Name </label>
                                        <input type="text" id="" name="last_name" class="form-control form-control-line" value="" placeholder="Last name" minlength="2" required> 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Email </label>
                                        <input type="text" id="" name="em_email" class="form-control form-control-line" value="" placeholder="Email" minlength="2" required> 
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <label>Role</label>
                                        <select class="form-control" name="em_role" required>
                                            <option value="EMPLOYEE">EMPLOYEE</option>
                                            <!-- <option value="MANAGER">MANAGER</option> -->
                                            <option value="ADMIN">ADMIN</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Branch </label>
                                        <select class="form-control" name="branch" required>
                                            <option selected disabled>---Select Here---</option>
                                            <?php foreach($branches as $value): ?>
                                                <option value="<?=$value->id?>"><?=$value->branch_name?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Department </label>
                                        <select class="form-control" name="dep_id" required>
                                            <option selected disabled>---Select Here---</option>
                                            <?php foreach($departments as $value): ?>
                                                <option value="<?=$value->id?>"><?=$value->dep_name?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <label>Designation </label>
                                        <select class="form-control" name="des_id" required>
                                            <option selected disabled>---Select Here---</option>
                                            <?php foreach($designations as $value): ?>
                                                <option value="<?=$value->id?>"><?=$value->des_name?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <div class="form-actions col-md-12">
                                        <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i>Create</button>
                                        <!-- <button type="button" class="btn btn-info">Cancel</button> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
<?php $this->load->view('backend/footer'); ?>
