<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor" id="headerTitle"> Appraisal</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Appraisal Form</li>
            </ol>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-xlg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs profile-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link active font-weight-bold" data-toggle="tab" href="#employee" role="tab" style="font-size: 14px;">  Employee </a> </li>
                            <li class="nav-item"> <a class="nav-link font-weight-bold" data-toggle="tab" href="#evaluator" role="tab" style="font-size: 14px;"> Evaluator </a> </li>
                            <li class="nav-item"> <a class="nav-link font-weight-bold" data-toggle="tab" href="#total" role="tab" style="font-size: 14px;"> Total Score</a> </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- Employee tab -->
                            <div class="tab-pane active" id="employee" role="tabpanel">
                                <div class="">
                                    <div class="card-body">     
                                        <?php $this->load->view('backend/user/employeeAppraisalForm'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Evaluator tab -->
                            <div class="tab-pane" id="evaluator" role="tabpanel">
                                <div class="">
                                    <div class="card-body">
                                        <?php $this->load->view('backend/evaluatorAppraisalForm'); ?>
                                    </div>
                                </div>
                            </div>  
                            <!-- Total tab -->
                            <div class="tab-pane" id="total" role="tabpanel">
                                <div class="">
                                    <div class="card-body">
                                        <?php $this->load->view('backend/totalAppraisalForm'); ?>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>     
                </div>
            </div>
            <!-- Column -->
        </div>

<script async src="<?= base_url() ?>assets/js/appraisal.js"></script>
<script async src="<?= base_url() ?>assets/js/appraisalForm.js"></script>
<?php $this->load->view('backend/footer'); ?>