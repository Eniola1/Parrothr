<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/user/includes/userSidebar'); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Salary Advance</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Salary Advance Form</li>
            </ol>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row m-b-10">
            <div class="col-12">
                <a href="<?= base_url(); ?>payroll/employeeSalaryAdvance" class="btn btn-primary text-white"><i class="fa fa-bars"></i> Salary Advance List</a>
            </div>                       
        </div> 
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white"> Salary Advance Form
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="<?=base_url()?>payroll/AddSalaryAdvance" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-md-3 m-t-10">
                                    <label>Amount Requested</label>
                                    <input type="number" required  class="form-control" placeholder="" name="amount"> 
                                </div>
                                <div class="form-group col-md-3 m-t-10">
                                    <label>Reason(s) For Request</label>
                                    <textarea required rows="2" class="form-control" name="reason"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3 m-t-10">
                                    <button class="btn btn-info" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                        <!-- <div class="row">
                            <div class="form-group col-md-4 m-t-10">
                                <label>Recommended By - Human Resource Manager</label><br>
                                <input class="form-check-input" type="checkbox" value="true" id="hr">
                                    <label class="form-check-label" for="hr">
                                    By Ticking This Box I Append My Signature
                                    </label>
                            </div>
                            <div class="form-group col-md-4 m-t-10">
                                <label>Approved By - Financial Controller</label><br>
                                <input class="form-check-input" type="checkbox" value="true" id="fc">
                                    <label class="form-check-label" for="fc">
                                    By Ticking This Box I Append My Signature
                                    </label>
                            </div>
                            <div class="form-group col-md-4 m-t-10">
                                <label>Final Approval - General Manager</label><br>
                                <input class="form-check-input" type="checkbox" value="true" id="gm">
                                    <label class="form-check-label" for="gm">
                                    By Ticking This Box I Append My Signature
                                    </label>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        
        <?php $this->load->view('backend/footer'); ?>
