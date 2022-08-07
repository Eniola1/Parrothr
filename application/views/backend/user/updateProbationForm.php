<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor" id="headerTitle"></h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Probation Form</li>
            </ol>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs profile-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link active font-weight-bold" data-toggle="tab" href="#supervisor" role="tab" style="font-size: 14px;">  Supervisor </a> </li>
                            <li class="nav-item"> <a class="nav-link font-weight-bold" data-toggle="tab" href="#hod" role="tab" style="font-size: 14px;"> Head of Department </a> </li>
                            <li class="nav-item"> <a class="nav-link font-weight-bold" data-toggle="tab" href="#gm" role="tab" style="font-size: 14px;"> General Manager </a> </li>
                            <li class="nav-item"> <a class="nav-link font-weight-bold" data-toggle="tab" href="#hr" role="tab" style="font-size: 14px;">Human Resources </a> </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- Supervisor tab -->
                            <div class="tab-pane active" id="supervisor" role="tabpanel">
                                <div class="">
                                    <div class="card-body">                        
                                        <h3>Confirmation Evaluation</h3>
                                        <p>(Note this is to be completed by the immediate supervisor) We are in the process of confirming the appointment of the above named employee and require the following information to guide our recommendation for this purpose.
                                        </p>
                                        <form class="row probationForm" action="<?=base_url().'probation/addProbabtion'?>" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id">
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Name of Employee </label>
                                                <select name="em_id" class=" form-control custom-select" required>
                                                    <option selected disabled>Select Here</option>
                                                    <?php foreach ($employees as $value) : ?>
                                                        <option value="<?= $value->em_id ?>"><?= ucwords($value->first_name . ' ' . $value->last_name) ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>List At Least Five Duties Handled By The Employee During The Probation Period </label>
                                                <textarea class="form-control" placeholder="Give 5 points" name="duties" required></textarea>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>List About Three Major Task Handled By The Employee During The Probation Period </label>
                                                <textarea class="form-control" placeholder="Give 3 points" name="tasks" required></textarea>
                                            </div>
                                            <div class="form-group col-md-12 m-t-10 sub-heading">
                                            <label class=" sub-heading" ><h5 style="color: #000">Kindly Rate The Employee On The Following</h5></label>
                                            </div>

                                            <div class="form-group col-md-4 m-t-10">
                                                <label >
                                                    General Job Competence
                                                </label>
                                                <select name="competence" class="form-control custom-select">
                                                    <option selected disabled></option>
                                                    <option value="S/He Is Excellent On The Jo">S/He Is Excellent On The Job</option>
                                                    <option value="S/He Is Very Good On The Job">S/He Is Very Good On The Job</option>
                                                    <option value="S/He Has Fair Knowledge Of Job">S/He Has Fair Knowledge Of Job</option>
                                                    <option value="S/He Is Still Learning On The Job">S/He Is Still Learning On The Job</option>
                                                
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label >Attitude To Work </label>
                                                <select name="attitude_to_work" class="form-control custom-select">
                                                    <option selected disabled></option>
                                                    <option value="S/He Is Excellent On The Jo">S/He Is Excellent On The Job</option>
                                                    <option value="S/He Is Very Good On The Job">S/He Is Very Good On The Job</option>
                                                    <option value="S/He Has Fair Knowledge Of Job">S/He Has Fair Knowledge Of Job</option>
                                                    <option value="S/He Is Still Learning On The Job">S/He Is Still Learning On The Job</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label >Contribution To The Team
                                                    </label>
                                                <select name="contribution" class="form-control custom-select">
                                                <option selected="true" disabled="disabled"></option>
                                                    <option selected="true" disabled="disabled"></option>
                                                    <option value="Valuable Contribution">Valuable Contribution</option>
                                                    <option value="Acceptable Contribution">Acceptable Contribution</option>
                                                    <option value="Contribution Is Not Significant">Contribution Is Not Significant </option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label >Relationship With Colleagues And Customers
                                                    </label>
                                                <select name="relationship" class="form-control custom-select">
                                                <option selected="true" disabled="disabled"></option>
                                                    <option value="Very Interactive And Supportive">Very Interactive And Supportive</option>
                                                    <option value="Relates Well And Helpful">Relates Well And Helpful</option>
                                                    <option value="Very Cold And Reserved">Very Cold And Reserved</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label >Areas Of Improvement</label>
                                                <select name="improvement_areas" class="form-control custom-select">
                                                    <option selected="true" disabled="disabled"></option>
                                                    <option value="Time Management">Time Management</option>
                                                    <option value="Accuracy Of Report Task">Accuracy Of Report Task</option>
                                                    <option value="Relationship With Colleagues Clients">Relationship With Colleagues Clients 
                                                    </option>
                                                    <option value="Communication Skill">Communication Skill</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label >Any Other Observations
                                                </label>
                                                <textarea name="observations" rows="1" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label >HOD Name</label>
                                                <select name="hod_id" class=" form-control custom-select" required>
                                                    <option selected disabled>Select Here</option>
                                                    <?php foreach ($employees as $value) : ?>
                                                        <option value="<?= $value->em_id ?>"><?= ucwords($value->first_name . ' ' . $value->last_name) ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12 m-t-10" id="supSubmit">
                                                <button class="btn btn-info" type="submit">Submit</button>
                                                <p>NB: By submtting, you certify that all information provided above are accurate.</p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- HOD tab -->
                            <div class="tab-pane" id="hod" role="tabpanel">
                                <div class="">
                                    <div class="card-body">                        
                                        <form class="row probationForm" id="hodForm" action="<?=base_url().'probation/addProbabtion'?>" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id">
                                            <div class="form-group col-md-12 m-t-10 sub-heading">
                                                <label class="sub-heading" ><h5 style="color: #000">Head Of Department's Remark</h5></label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Comments</label>
                                                <textarea name="hod_comments" rows="2" class="form-control"></textarea> 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Recommendation</label>
                                                <select name="hod_recommend" class=" form-control custom-select" required>
                                                    <option value="Recommend For Confirmation">Recommend For Confirmation</option>
                                                    <option value="Not Recommended For Confirmation">Not Recommended For Confirmation</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label >General Manager Name</label>
                                                <select name="gm_id" class=" form-control custom-select" required>
                                                    <option selected disabled>Select Here</option>
                                                    <?php foreach ($managers as $value) : ?>
                                                        <option value="<?= $value->em_id ?>"><?= ucwords($value->first_name . ' ' . $value->last_name) ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12 m-t-10" id="hodSubmit">
                                                <button class="btn btn-info" type="submit">Submit</button>
                                                <p>NB: By submtting, you certify that all information provided above are accurate.</p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- GM tab -->
                            <div class="tab-pane" id="gm" role="tabpanel">
                                <div class="">
                                    <div class="card-body">                        
                                        <form class="row probationForm" id="gmForm" action="<?=base_url().'probation/addProbabtion'?>" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id">
                                            <div class="form-group col-md-12 m-t-10 sub-heading">
                                                <label class="sub-heading" ><h5 style="color: #000">General Manager's Remark</h5></label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Comments</label>
                                                <textarea name="gm_comments" rows="2" class="form-control"></textarea> 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Recommendation</label>
                                                <select name="gm_recommend" class=" form-control custom-select" required>
                                                    <option value="Recommend For Confirmation" >Recommend For Confirmation</option>
                                                    <option value="Not Recommended For Confirmation">Not Recommended For Confirmation</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12 m-t-10" id="gmSubmit">
                                                <button class="btn btn-info" type="submit">Submit</button>
                                                <p>NB: By submtting, you certify that all information provided above are accurate.</p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- HR tab -->
                            <div class="tab-pane" id="hr" role="tabpanel">
                                <div class="">
                                    <div class="card-body">                        
                                        <form class="row probationForm" action="<?=base_url().'probation/addProbabtion'?>" method="post" enctype="multipart/form-data" id="hrForm">
                                            <input type="hidden" name="id">
                                            <input type="hidden" name="probation_status">
                                            <div class="form-group col-md-12 m-t-10 sub-heading">
                                                <label class="sub-heading" ><h5 style="color: #000">Human Resource's Remark</h5></label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Comments</label>
                                                <textarea name="hr_comment" rows="2" class="form-control"></textarea> 
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Recommendation</label>
                                                <select name="hr_recommend" class=" form-control custom-select" required>
                                                    <option value="Recommend For Confirmation">Recommend For Confirmation</option>
                                                    <option value="Not Recommended For Confirmation">Not Recommended For Confirmation</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12 m-t-10" id="hrSubmit">
                                                <button class="btn btn-info" type="submit">Submit</button>
                                                <p>NB: By submtting, you certify that all information provided above are accurate.</p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?= base_url() ?>assets/js/probation.js"></script>
        <?php $this->load->view('backend/footer'); ?>
