<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor"> Appraisal</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Staff Performance Self Appraisal Evaluation Form</li>
            </ol>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row m-b-10">
             
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                <div class="card-header">
                        <h4 class="m-b-0 text-white"> Staff Performance Self Appraisal Evaluation Form</h4>
                    </div>
                    <div class="card-body">
                        <?php $this->load->view('backend/user/employeeAppraisalForm'); ?>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?= base_url() ?>assets/js/appraisalForm.js"></script>
        <?php $this->load->view('backend/footer'); ?>
