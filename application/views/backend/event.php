<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor"> Events</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Events</li>
            </ol>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row m-b-10"> 
            <div class="col-12">
                <a data-toggle="modal" data-target="#eventModal" class="btn btn-info text-white "><i class="fa fa-plus"></i> Add Event </a>
            </div>
        </div> 
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white"> Calendar
                        </h4>
                    </div>
                    <div class="card-body">
                    <div style="display:flex; justify-content: center; height: 550px"><?= $calendar?></div>
                        <style type="text/css">
                            table{
                            border-collapse:collapse;
                            border: none!important;
                            margin: 0!important;
                            max-width: 1200px!important;
                            width: 1200px!important;
                            }
                            td{
                            width: 100px;
                            height: 70px;
                            text-align: center;
                            border: 1px solid #e2e0e0;
                            font-size: 18px;
                            }
                            th{
                            background: #ffffff!important;
                            border-top-left-radius: 5px;
                            border-top-right-radius: 5px;
                            font-size: 18px;
                            color: #000;
                            padding: 5px;
                            text-align: center!important;
                            }
                            .prev_sign a, .next_sign a{
                            color:white;
                            text-decoration: none;
                            }
                            tr:nth-child(2){font-weight: bold}
                            tr.week_name{
                            font-size: 16px;
                            font-weight:400;
                            color:red;
                            width: 10px;
                            background-color: #efe8e8;
                            }
                            .highlight{
                            background-color: #d9f4d5;
                            color:white;
                            height: 100%!important;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            font-weight: bold;color:#000;

                            }
                            .event{
                                background-color:#ccc;
                                color: #000;
                                font-weight: bold;
                                height: 100%;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                text-align: center;
                            }
                            .calender .days td
                            {
                                width: 80px;
                                height: 80px;
                            }
                            .calender .hightlight
                            {
                                font-weight: 600px;
                            }
                            .calender .days td:hover
                            {
                                background-color: #DEF;
                            }
                        </style>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Style for calendar -->
        <style type="text/css">
            table{
            border: 15px solid #25BAE4;
            border-collapse:collapse;
            margin-top: 50px;
            margin-left: 250px;
            }
            td{
            width: 50px;
            height: 50px;
            text-align: center;
            border: 1px solid #e2e0e0;
            font-size: 18px;
            font-weight: bold;
            }
            th{
            height: 50px;
            padding-bottom: 8px;
            background:#25BAE4;
            font-size: 20px;
            }
            .prev_sign a, .next_sign a{
            color:white;
            text-decoration: none;
            }
            tr.week_name{
            font-size: 16px;
            font-weight:400;
            color:red;
            width: 10px;
            background-color: #efe8e8;
            }
            .highlight{
            background-color:#25BAE4;
            color:white;
            height: 27px;
            padding-top: 13px;
            padding-bottom: 7px;
            }
            .calender .days td
            {
                width: 80px;
                height: 80px;
            }
            .calender .hightlight
            {
                font-weight: 600px;
            }
            .calender .days td:hover
            {
                background-color: #DEF;
            }
        </style>
        
<?php $this->load->view('modals/eventModal'); ?>
<?php $this->load->view('modals/eventEditModal'); ?>
<?php $this->load->view('modals/eventDetailsModal'); ?>
<?php $this->load->view('backend/footer'); ?>

