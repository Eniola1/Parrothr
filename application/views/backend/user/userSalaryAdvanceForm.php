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
                        <form action="AddSalaryAdvance" class="row" method="post" enctype="multipart/form-data">
                            <div class="form-group col-md-4 m-t-10">
                                <label>Amount Requested</label>
                                <input name="amount" type="number" required class="form-control"> 
                            </div>
                            <div class="form-group col-md-4 m-t-10">
                                <label>Reason(s) For Request</label>
                                <textarea required rows="2" class="form-control" name="reason" style="height: 38px;"></textarea>
                            </div>
                            <div class="form-group col-md-4 m-t-10">
                                <label>Repayment Duration </label>
                                <select name="duration" class="form-control custom-select" required>
                                    <option value="1">1 Month</option>
                                    <option value="2">2 Months</option>
                                    <option value="3">3 Months</option>
                                    <option value="4">4 Months</option>
                                    <option value="5">5 Months</option>
                                    <option value="6">6 Months</option>
                                    <option value="7">7 Months</option>
                                    <option value="8">8 Months</option>
                                    <option value="9">9 Months</option>
                                    <option value="10">10 Months</option>
                                    <option value="11">11 Months</option>
                                    <option value="12">12 Months</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 m-t-10">
                                <label>Start Date </label>
                                <input type="date" name="repay_date" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i>Save</button>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <?php $this->load->view('backend/footer'); ?>
