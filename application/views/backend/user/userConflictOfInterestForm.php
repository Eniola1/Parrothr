<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/user/includes/userSidebar'); ?>
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
                        <div class="" style="text-align: justify;">
                        <h3>Conflict Of Interest Disclosure Form</h3>
                        <p>A potential or actual conflict of interest exists when commitments and obligations are likely to be compromised by other material interests, entities or relationships particularly if those interests or commitments are not disclosed.
                        This Conflict-of-Interest Form should indicate whether you have an economic interest in, or acts as an officer or a director of, any outside entity whose financial and other interests would reasonably appear to be affected by your engagement with Golden Tulip Hotel. You should also disclose any personal, business, or volunteer affiliations that may give rise to a real or possible conflict of interest situation. 
                        </p>
                        </div>
                        <form class="row" action="<?=base_url()?>conflictofinterest/AddConflictOfInterest" method="post" enctype="multipart/form-data">
                            <div class="col-md-12" style="text-align: justify;">
                                <p>Please describe below any relationships, transactions, positions you hold (volunteer or otherwise) or circumstances that you believe could contribute to a conflict of interest:
                                </p>
                            </div>
                            <div class="form-group col-md-12 m-t-10">
                                <p>
                                I have the following conflict of interest to report (please specify other nonprofit and for-profit boards you (and your spouse) sit on, any for-profit businesses for which you or an immediate family member are an officer or director, or a majority shareholder, and the name of your employer and any businesses you or a family member own:
                                </p>
                            </div>
                            <div class="form-group col-md-12 m-t-10">
                                <textarea required name="reason" class="form-control"></textarea> 
                            </div>
                            <div class="form-group col-md-8 m-t-10">
                                <button type="submit" class="btn-info">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <?php $this->load->view('backend/footer'); ?>
