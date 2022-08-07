<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/user/includes/userSidebar'); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor"> Onboarding</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Onboarding Forms</li>
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
                        <h4 class="m-b-0 text-white"> Onboarding Forms
                        </h4>
                    </div>
                    <div class="card-body" style="min-height:100vh">
                        <div class="row">
                            <div class="col-lg-3 col-6" style="display:flex;justify-content:center; align-items:center;">
                                <div class="info-box" style="min-height: 50px;padding: 0; ;display:flex">
                                <span class="info-box-icon bg-info" style="width:50px; height: 50px;"><i class="fa fa-file-pdf-o"></i></span>

                                <a href="<?php echo base_url(); ?>assets/documents/GUARANTORS_FORM.docx">
                                <div class="info-box-content" style="flex-direction: row;justify-content: space-between;align-items: center;">
                                    <span class="info-box-text"> Guarantor</span>
                                </div></a>
                                <!-- /.info-box-content -->
                                </div>
                            </div>
                            <div class="col-lg-3 col-6" style="display:flex;justify-content:center; align-items:center;">
                                <div class="info-box" style="min-height: 50px;padding: 0; ;display:flex">
                                <span class="info-box-icon bg-info" style="width:50px; height: 50px;"><i class="fa fa-file-pdf-o"></i></span>

                                <a href="<?php echo base_url(); ?>assets/documents/Disengagement_Clearance_Form_GTO.doc">
                                <div class="info-box-content" style="flex-direction: row;justify-content: space-between;align-items: center;">
                                    <span class="info-box-text"> Disengagement Clearance</span>
                                </div></a>
                                <!-- /.info-box-content -->
                                </div>
                            </div>
                            <div class="col-lg-3 col-6" style="display:flex;justify-content:center; align-items:center;">
                                <div class="info-box" style="min-height: 50px;padding: 0; ;display:flex">
                                <span class="info-box-icon bg-info" style="width:50px; height: 50px;"><i class="fa fa-file-pdf-o"></i></span>

                                <a href="<?php echo base_url(); ?>assets/documents/asssumption_of_duty_form.docx">
                                <div class="info-box-content" style="flex-direction: row;justify-content: space-between;align-items: center;">
                                    <span class="info-box-text"> Assumption of Duty</span>
                                </div></a>
                                <!-- /.info-box-content -->
                                </div>
                            </div>
                           
                        </div>
                </div>
                </div>
            </div>
        </div>
        <style>
              a{
                display:flex;
                color: #000
            }
        </style>
        <?php $this->load->view('backend/footer'); ?>
