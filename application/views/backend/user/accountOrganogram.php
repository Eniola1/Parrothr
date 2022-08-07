
<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/account/main.css">



<div class="page-wrapper" style="background-color:white">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">&nbsp Organogram</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Organogram</li>
            </ol>
        </div>
    </div>
    <div class="row m-b-10" style="background:white; padding: 10px 15px;"> 
            <div class="col-12">
                <a class="btn btn-primary text-white "><i class="fa fa-bars"></i> ACCOUNT </a>
                <a href='<?=base_url()?>organization/hrOrganogram' class="btn btn-info text-white "><i class="fa fa-bars"></i> HUMAN RESOURCES </a>
                <a href='<?=base_url()?>organization/organogram' class="btn btn-info text-white "><i class="fa fa-bars"></i> MANAGEMENT </a>
                <a href='<?=base_url()?>organization/account1Organogram' class="btn btn-info text-white "><i class="fa fa-bars"></i> ACCOUNT 1</a>
                <a href='<?=base_url()?>organization/adminOrganogram' class="btn btn-info text-white "><i class="fa fa-bars"></i> ADMIN </a>
            </div>
            
        </div> 
    <div class="container-fluid" style="display:flex; justify-content:center; background-color:white">
                <div id="header">
                Family Name
            </div>
            <hr>
            <div id="control_panel">
                <button id="add_child"  style="display: none">
                    Add Node
                </button>
                <button id="remove_node"  style="display: none">
                    Remove Node
                </button>
                <input id="sourceText" style="width:30%; display: none" placeholder="Please Edit Name Here" >
                <button id="edit_node"  style="display: none">
                    Update Node
                </button>
                <div style="position: absolute;top: -140px;width: 100vw;height: 1px;background: lightgray;"></div>
                <div style="position: absolute; top: -110px;  border-left: 4px solid #1E007F;  padding: 10px 15px; display: flex; flex-direction: column; justify-content: center;background: #fff; width: 300px; min-height: 80px; font-family: Source Sans Pro">
                    <div id="name" style=" 
                    /* font-variant: small-caps;  */
                    text-transform: uppercase; letter-spacing: 2px; font-weight: bold;"></div>
                    <div id="position" style=" font-size: 13px; font-style: normal"></div>
                </div>
                <button id="zoom_in" style="display: none">
                    Zoom In
                </button>
                <button id="zoom_out" style="display: none">
                    Zoom Out
                </button>
                <!-- <div class="section">
                    Information Panel
                </div> -->
                <div id="information_panel">

                </div>
            </div>
            <div id="divider">

            </div>
            <div id="main">
                <canvas id="canvas"></canvas>
            </div>
        
    </div>
  
    <script src="<?php echo base_url(); ?>assets/js/account/tree.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/account/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/org.js"></script>


<?php $this->load->view('backend/footer'); ?>
