<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/user/includes/userSidebar'); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Exit Pass</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Exit Pass Form</li>
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
                        <h4 class="m-b-0 text-white"> Exit Pass Form
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="<?=base_url()?>employeeExit/addExitPass" method="post" enctype="multipart/form-data"> 
                            <div class="form-group col-md-6 m-t-10">
                                <label>Reason(s) For Exit Pass</label>
                                <textarea required name="reason" style="min-height:38px; height:38px" class="form-control"></textarea>
                            </div>
                            <div class="form-group col-md-6 m-t-10">
                                <button class="btn-info" type="submit">Submit</button>
                            </div>
                        </form>
                            
                            <!-- <div class="form-group col-md-4 m-t-10">
                                <label>Recommended By</label><br>
                                <input class="form-check-input" type="checkbox" value="true" id="fc">
                                <label class="form-check-label" for="fc">
                                Head Of Department
                                </label>
                            </div>
                            <div class="form-group col-md-4 m-t-10">
                                <label>Approved By</label><br>
                                <input class="form-check-input" type="checkbox" value="true" id="hr">
                                <label class="form-check-label" for="hr">
                                Human Resource Manager
                                </label>
                            </div>
                            <div class="form-group col-md-4 m-t-10">
                                <label>Executive Approval</label><br>
                                <input class="form-check-input" type="checkbox" value="true" id="gm">
                                    <label class="form-check-label" for="gm">
                                    General Manager
                                    </label>
                            </div> -->
                    </div>
                </div>
            </div>
        </div>
        
        <?php $this->load->view('backend/footer'); ?>
