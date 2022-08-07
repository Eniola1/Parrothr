<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/user/includes/userSidebar'); ?>

<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">&nbsp Employee Dashboard</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Employee Dashboard</li>
            </ol>
        </div>
    </div>
        <section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
    
        <!-- /.row -->
        <!-- Main row -->

        <div class="row">
            <section class="col-lg-4 connectedSortable">
                <div class="card">
                    <div class="card-header" style="width: 100%; display: flex; justify-content: center; align-items: center; background-color:#d6d6d6">
                        <div class="line" style="width:20%; border-top:2px solid #aeaeae98"></div>
                        <h3 class="card-title" style="margin: 0 20px;">
                            <!-- <i class="ion ion-clipboard mr-1"></i> -->
                            <!-- <i class="iconify" data-icon="ion:information-circle-sharp"></i> -->
                            Announcements
                        </h3>
                        <div class="line" style="width:20%; border-top:2px solid #aeaeae98"></div>
                </div>
                <div class="card-body canvas" style="height: 467px;overflow-y: scroll; ">
                <style>
                    .canvas::-webkit-scrollbar{width: 0!important; height: 0!important}
                </style>
                    <?php 
                        // announcement
                        $i = 0;
                        foreach ($employeeNotices as $value) : $i++;  ?>
                            <div class="callout callout-info" style="padding:5px;cursor:pointer" onclick="location.href=`<?php echo base_url()?>notice/All_notice`">
                                <div style="display:flex; justify-content: space-between;">
                                    <h5 style="font-weight: bold;font-size:14px"><?= ucwords($value->title)?></h5>
                                    <span class="time" style="font-size:12px"><?= date("j, M. Y ", strtotime($value->date)) ?>&nbsp;&nbsp;|&nbsp;&nbsp;<i class="fa fa-clock"></i> <?= date("g:iA", strtotime($value->date)) ?></span>
                                </div>
                                <p class="shortenText"><?= substr($value->message, 0, 100).'...'?></p>
                            </div>
                        <?php if ($i >= 8) break; 
                        endforeach; ?>
                </div>    
                <!-- /.card -->
            </section>
        <!-- Left col -->
        <section class="col-lg-4 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <!-- TO DO List -->
            <div class="card">
                <div class="card-header" style="width: 100%; display: flex; justify-content: center; align-items: center; background-color: #d6d6d6">
                    <div class="line" style="width:20%; border-top:2px solid #aeaeae98"></div>
                    <h3 class="card-title" style="margin: 0 20px;">
                        <!-- <i class="ion ion-clipboard mr-1"></i> -->
                        <!-- <i class="iconify" data-icon="ion:information-circle-sharp"></i> -->
                        <!-- Reports -->
                        Documents And Forms
                    </h3>
                    <div class="line" style="width:20%; border-top:2px solid #aeaeae98"></div>
            </div>
            <!-- /.card-header -->
            <div class="card-body canvas" style="display: flex;flex-direction: column;height:467px">
                <div class="info-box" style="min-height: 50px;padding: 0">
                <span class="info-box-icon bg-info" style="width:50px; height: 50px;"><i class="fa fa-file-pdf-o"></i></span>
    
                <div class="info-box-content" style="flex-direction: row;justify-content: space-between;align-items: center;">
                    <span class="info-box-text"> Policy Documents</span>
                    <span style="background-color: #8edf8255;font-weight:bold;color:#000; padding: 2px 5px;border-radius: 4px;cursor:pointer; font-size: 12px;"><a style="color:green" href="<?= base_url(); ?>employee/PolicyDocuments">View</a></span>
                </div>
                <!-- /.info-box-content -->
                </div>

                <div class="info-box" style="min-height: 50px;padding: 0">
                <span class="info-box-icon" style="width:50px; height: 50px;background-color: #FFB600;color: #fff;"><i class="fa fa-file-pdf-o"></i></span>
    
                <div class="info-box-content" style="flex-direction: row;justify-content: space-between;align-items: center;">
                    <span class="info-box-text">Employee Forms</span>
                    <span style="background-color: #D9F4D5;font-weight:bold;color:#000; padding: 2px 5px;border-radius: 4px;cursor:pointer; font-size: 12px;"><a style="color:green" href="<?= base_url(); ?>employee/EmployeeForms">View</a></span>
                </div>
                <!-- /.info-box-content -->
                </div>


                <div class="info-box" style="min-height: 50px;padding: 0">
                <span class="info-box-icon bg-info" style="width:50px; height: 50px;"><i class="fa fa-file-pdf-o"></i></span>
    
                <div class="info-box-content" style="flex-direction: row;justify-content: space-between;align-items: center;">
                    <span class="info-box-text">Onboarding forms</span>
                    <span style="background-color: #D9F4D5;font-weight:bold;color:#000; padding: 2px 5px;border-radius: 4px;cursor:pointer; font-size: 12px;"><a style="color:green" href="<?= base_url(); ?>employee/OnboardingForms">View</a></span>
                </div>
                <!-- /.info-box-content -->
                </div>
            </div>
            <!-- /.card-body canvas -->
            
            </div>
            <!-- /.card -->
        </section>
        <section class="col-lg-4 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <!-- TO DO List -->
            <div class="card">
                <div class="card-header" style="width: 100%; display: flex; justify-content: center; align-items: center;border-top: 3px solid #007BFF; position:relative; overflow:hidden;background-color: #d6d6d6">
                    <!-- <div class="line" style="width:20%; border-top:2px solid #fff"></div> -->
                    <h3 class="card-title" style="margin: 0 20px;">
                        Employee of the Month
                    </h3>
                    <!-- <div class="ribbon-wrapper">
                            <div class="ribbon bg-primary">
                            &nbsp;&nbsp; HURRAY
                            </div>
                            </div> -->
            </div>
            <!-- /.card-header -->
            <div class="card-body canvas" style="height: 200px; overflow-y: scroll;">
                <div class="card-body p-0 mt-2 text-center">
                        <img class="mb-2" width="100px" src="<?=base_url()?>assets/images/users/<?= $employeeOfTheMonth->em_image?>" alt="User Image">
                        <p class="h6"><?= ucwords($employeeOfTheMonth->first_name).' '.ucwords($employeeOfTheMonth->last_name)?></p>
                   
                </div>
            </div>
        </div>
            <div class="card">
                <div class="card-header" style="width: 100%; display: flex; justify-content: center; align-items: center;border-top: 3px solid #007BFF; position:relative; overflow:hidden;background-color: #d6d6d6">
                    <!-- <div class="line" style="width:20%; border-top:2px solid #fff"></div> -->
                    <h3 class="card-title" style="margin: 0 20px;">
                        Birthdays
                    </h3>
                    <!-- <div class="ribbon-wrapper">
                            <div class="ribbon bg-primary">
                            &nbsp;&nbsp; HURRAY
                            </div>
                        </div> -->
            </div>
            <!-- /.card-header -->
            <div class="card-body canvas" style="height: 200px; overflow-y: scroll;">
                <div style="display: flex;justify-content: center;align-items: center;width: 100%;"> 
                <!-- <h3 style="font-size: 1.1rem;font-weight:400;">Awards</h3>  -->
                <br>
                </div>
                <div class="card-body p-0">
                    <ul class="users-list clearfix">
                    <?php
                    foreach($birthdays as $birthday)
                    {?>
                        <li>
                            <img src='<?=base_url()?>assets/images/users/<?php echo $birthday->em_image; ?>' alt='User Image'>
                            <a class='users-list-name'><?php echo $birthday->first_name; ?></a>
                            <span class='users-list-date bg-today'><?php if($birthday->em_birthday == date("Y-m-d", strtotime("-1 days"))){echo 'Today';} else{ echo date('jS M', strtotime($birthday->em_birthday)); } ?></span>
                        </li>
                    <?php }?>
                    </ul>
            </div>
                
            </div>
        </div>
            <!-- /.card-body canvas -->
            <script>
                const soon = document.querySelector('.bg-soon');
                let birth = new Date('June 4, 2022 03:24:00');
                let b = birth.toLocaleDateString();
                soon.innerHTML = b

                const sooner = document.querySelector('.bg-sooner');
                let birth1 = new Date('March 17, 2022 03:24:00');
                let b1 = birth1.toLocaleDateString();
                sooner.innerHTML = b1
            </script>
            <!-- /.card -->
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
    
        <!-- right col -->
        </div>
        <style>
            .users-list {
                display: flex;
                justify-content: space-evenly;
                align-items: center;
            }
            .users-list>li {
                padding: 0!important;
                margin: 0 10px;
            }
            .bg-today{
                background-color: #D6D6D6;
                border-radius: 20px;
                color: #000;
                font-weight: bold;
            }
            .bg-sooner{
            background-color: #D6D6D6;
                border-radius: 20px;
                color: #000;
                font-weight: bold;
            }
            .bg-soon{
            background-color: #D6D6D6;
                border-radius: 20px;
                color: #000;
                font-weight: bold;
            }
        </style>
        <div class="row">
        
        <!-- Left col -->
        <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <!-- Requests -->
            <div class="card">
                <div class="card-header" style="width: 100%; display: flex; justify-content: center; align-items: center; background-color: #d6d6d6">
                    <div class="line" style="width:20%; border-top:2px solid #aeaeae98"></div>
                    <h3 class="card-title" style="margin: 0 20px;">
                    Requests
                    </h3>
                    <div class="line" style="width:20%; border-top:2px solid #aeaeae98"></div>
                </div>
                <!-- /.card-header -->
                <div class="card-body canvas" style="min-height: 515px; height:auto">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr style="background-color: #1E007F;color: #fff; padding: 5px 0">
                            <th style="padding:5px; font-size: 16px; text-align: center;width:15%">Type</th>
                            <th style="padding:5px; font-size: 16px; text-align: center;">Applied Date</th>
                            <th style="padding:5px; font-size: 16px; text-align: center;">Status</th>
                            <th style="padding:5px; font-size: 16px; text-align: center;width:10%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php $i=0; foreach ($leave as $value): $i++;?>
                                    <td style="font-size:14px">Leave</td>
                                    <td style="font-size:14px"><?=date('jS \of F Y',strtotime($value->apply_date))?></td>
                                    <td style="font-size:14px"><?=ucwords($value->leave_status) ?></td>
                                    <td><a href="<?=base_url().'leave/EmApplication'?>"><span style="background-color: #D9F4D5;font-weight:bold;color:green; padding: 2px 5px;border-radius: 4px;cursor:pointer; font-size: 12px;">View</span></a></td>
                                <?php if($i = 2)break; endforeach; ?>
                            </tr>
                            <tr style="font-weight: normal;">
                                <?php $i=0; foreach ($salary_advance as $value): $i++;?>
                                    <td style="font-size:14px">Salaray Advance</td>
                                    <td style="font-size:14px"><?=date('jS \of F Y',strtotime($value->created_date))?></td>
                                    <td style="font-size:14px"><?=ucwords($value->advance_status) ?></td>
                                    <td><a href="<?=base_url().'payroll/employeeSalaryAdvance'?>"><span style="background-color: #D9F4D5;font-weight:bold;color:green; padding: 2px 5px;border-radius: 4px;cursor:pointer; font-size: 12px;">View</span></a></td>
                                <?php if($i = 2)break; endforeach; ?>
                            </tr>
                        
                        </tbody>
                    
                    </table>
                    <style>
                        .superman{
                            overflow-wrap: anywhere
                        }
                    </style>
                
                        <!-- /.progress-group -->
                        <!-- <div class="progress-group">
                        Send Inquiries
                        <span class="float-right"><b>250</b>/500</span>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-danger" style="width: 50%"></div>
                        </div>
                        </div> -->
                        <!-- /.progress-group -->
                    <!-- /.col -->
                
                </div>
                <!-- /.card-body canvas -->
            </div>
            
        </section>

        <section class="col-lg-6 connectedSortable">
            <div class="card">
                <div class="card-header" style="width: 100%; display: flex; justify-content: center; align-items: center; background-color: #d6d6d6">
                    <div class="line" style="width:20%; border-top:2px solid #aeaeae98"></div>
                    <h3 class="card-title" style="margin: 0 20px;">
                        <!-- <i class="ion ion-clipboard mr-1"></i> -->
                        <!-- <i class="iconify" data-icon="ion:information-circle-sharp"></i> -->
                        Events
                    </h3>
                    <div class="line" style="width:20%; border-top:2px solid #aeaeae98"></div>
            </div>
             <div class="card-body" style="min-height: 515px; height: auto; width: 100%;margin: auto;">
                        <div style="display:flex; justify-content: center"><?= $calendar?></div>
                        <style type="text/css">
                            table{
                            border-collapse:collapse;
                            }
                            td{
                            width: 100px;
                            height: 70px;
                            text-align: center;
                            border: 1px solid #e2e0e0;
                            font-size: 18px;
                            }
                            th.calend{
                            background: #ffffff;
                            border-top-left-radius: 5px;
                            border-top-right-radius: 5px;
                            font-size: 18px;
                            font-weight: 700;
                            color: #000;
                            padding: 5px;
                            text-align: center;
                            }
                            th#heading{
                                text-align:center;
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
                            color:white;height: 100%;
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
            <!-- /.card -->
</section>
        <!-- right col -->
        </div>
    
    
                <!-- /.card -->
            </section>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    
    
    

    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
</div>       
<?php $this->load->view('modals/eventDetailsModal'); ?>
<?php $this->load->view('backend/footer'); ?>