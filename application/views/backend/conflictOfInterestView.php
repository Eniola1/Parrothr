<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Conflict Of Interest</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Conflict Of Interest Form</li>
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
                        <h4 class="m-b-0 text-white"> Conflict Of Interest Form</h4>
                    </div>
                    <div class="card-body">
                    <div class="col-3"></div>
                        <div class="col-md-8" style="text-align: justify; margin-bottom: 50px">
                        <h3>Conflict Of Interest Disclosure Form</h3>
                        <p>A potential or actual conflict of interest exists when commitments and obligations are likely to be compromised by other material interests, entities or relationships particularly if those interests or commitments are not disclosed.
                        This Conflict-of-Interest Form should indicate whether you have an economic interest in, or acts as an officer or a director of, any outside entity whose financial and other interests would reasonably appear to be affected by your engagement with Golden Tulip Hotel. You should also disclose any personal, business, or volunteer affiliations that may give rise to a real or possible conflict of interest situation. 
                        </p>
                        </div>
                        <form class="row" action="<?=base_url()?>conflictofinterest/AddConflictOfInterest" method="post" enctype="multipart/form-data">
                            <div class="col-md-8" style="text-align: justify;margin-bottom: 20px;">
                                <p>Please describe below any relationships, transactions, positions you hold (volunteer or otherwise) or circumstances that you believe could contribute to a conflict of interest:
                                </p>
                            </div>
                            <div class="form-group col-md-8 m-t-10">
                                <p>
                                I, <?=ucwords($value->first_name.' '.$value->last_name)?>, a/an <?=ucwords( $value->des_name)?>, in <?=ucwords($value->branch_name)?> branch, <?=ucwords($value->dep_name)?> department, have the following conflict of interest to report:
                                </p>
                            </div>
                            <div class="form-group col-md-8 m-t-10">
                                <textarea required name="reason"  class="form-control"><?=$value->reason?>. Submitted: <?=date('jS \of F Y', strtotime($value->created_date)) ?></textarea> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <?php $this->load->view('backend/footer'); ?>
