<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/user/includes/userSidebar'); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor"> Recruitment Requirement</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Recruitment Requirement Form</li>
            </ol>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white"> Recruitment Requirement Form
                        </h4>
                    </div>
                    <div class="card-body">
                    <form class="row" action="<?=base_url()?>recruitment/AddRecruitment" method="post" enctype="multipart/form-data">
                            <div class="form-group col-md-4 m-t-10">
                                <label>Roles / Job Title</label>
                                <select name="des_id" class="form-control custom-select">
                                    <option selected disabled>--Select Here--</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Kitchen">Kitchen</option>
                                    <option value="IT">IT</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 m-t-10">
                                <label>Proposed Career Level</label>
                                    <select name="career_level" class="form-control custom-select">
                                        <option selected disabled>--Select Here--</option>
                                        <option value="Operational/Technical">Operational/Technical</option>
                                        <option value="Professional">Professional</option>
                                        <option value="Supervisory / Managerial">Supervisory / Managerial</option>
                                        <option value="Entry Level">Entry Level</option>
                                        <option value="Contract">Contract</option>
                                    </select>
                            </div>
                            <div class="form-group col-md-4 m-t-10">
                                <label>Number Required</label>
                                <input type="text" name="required_quantity" class="form-control" placeholder="" value=""> 
                            </div>
                            <div class="form-group col-md-4 m-t-10">
                                <label>Reason(s) For Request</label>
                                <textarea name="reason" style="min-height:38px;height:38px" class="form-control"></textarea> 
                            </div>
                            <div class="form-group col-md-4 m-t-10">
                                <label>Impact Of Non Filling Of The Role</label>
                                <textarea name="consequence" style="min-height:38px;height:38px" class="form-control"></textarea> 
                            </div>
                            <div class="form-group col-md-8 m-t-10">
                                <button class="btn btn-info" type="submit">Submit</button>
                            </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        
        <?php $this->load->view('backend/footer'); ?>
