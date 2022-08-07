<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
        <div class="page-wrapper">
        <div class="message"></div>
        <!-- <div class="newUser"><div class="cancel fa fa-times" style="width: 20px;"></div></div> -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor"> Admin Dashboard</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Admin Dashboard</li>
                </ol>
            </div>
        </div>
            <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
            
                <div class="small-box" style="background-color: #fff; height: 100px;margin-bottom: 10px; display: flex; justify-content: center; align-items: center;">
                <div class="inner">
                    <div class="d-flex flex-row">
                        <div class="round align-self-center round-success" style="display: flex;
                            justify-content: center;align-items: center;font-size: 20px;"> <i class="iconify" data-icon="ion:people-sharp"></i></div>
                        <div class="m-l-10 align-self-center justify-content-center">
                        <p class="m-b-0">
                                Active Employees</p>
                        <p class="m-b-0" style=" text-align: center;">
                                <?= $employees?></p>
                        </div>
                    </div>
                    <!-- <h5 style="color:#1E007F; text-align:center; font-weight: bolder;">9 - Active Employees</h5> -->
                </div>
                
                
                <!-- <a href="#" class="small-box-footer">View Employee <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
                <a href="<?php echo base_url()?>employee">
                    <div class="small-box bg-info">
                        <div class="inner" style="text-align: center;padding-top:30px">
                            <h3 style="margin-bottom: 0;"><?= $allEmployees ?></h3>

                            <p style="font-size: 20px">Total Employees</p>
                        </div>
                        <div class="icon">
                            <i class="iconify" data-icon="ion:people-sharp"></i>
                        </div>
                        
                        <!-- <a href="#" class="small-box-footer">View Employee <i class="fa fa-arrow-circle-right"></i></a> -->
                    </div>
                </a>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box" style="background-color: #fff; height: 100px;margin-bottom: 10px;display: flex; justify-content: center; align-items: center;">
                    <div class="inner" >
                        <div class="d-flex flex-row">
                            <div class="round align-self-center round-info" style="display: flex;
                            justify-content: center;align-items: center;font-size: 20px;"> <i class="iconify" data-icon="ion:calendar"></i></div>
                            <div class="m-l-10 align-self-center justify-content-center">
                            <p class="m-b-0">
                                    Currently on Leave</p>
                            <p class="m-b-0" style="text-align: center;">
                                    <?=$onLeaveApps?></p>
                                <!-- <a href="http://localhost/parrothr/employee/Employees" class="text-muted m-b-0">View Employee</a> -->
                            </div>
                        </div>
                        <!-- <h5 style="color:#FF8500; text-align:center; font-weight: bolder;">9 - Currently On Leave</h5> -->
                    </div>
                
                
                    <!-- <a href="#" class="small-box-footer">View Employee <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
                <a href="<?php echo base_url()?>leave/Application">
                    <div class="small-box bg-success">
                        <div class="inner" style="text-align: center;padding-top:30px">
                            <h3 style="margin-bottom: 0;"><?=$leaveApps?></h3>
            
                            <p style="font-size: 20px;">Pending Applications</p>
                        </div>
                    <div class="icon">
                        <i class="iconify" data-icon="ion:calendar"></i>
                    </div>
                    <!-- <a href="#" class="small-box-footer">View Leave <i class="fa fa-arrow-circle-right"></i></a> -->
                    </div>
                </a>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box" style="background-color: #fff; height: 100px;margin-bottom: 10px;display: flex; justify-content: center; align-items: center;">
                    <div class="inner" >
                        <div class="d-flex flex-row">
                            <div class="round align-self-center round-danger" style="display: flex;
                            justify-content: center;align-items: center;font-size: 20px;"> <i class="iconify" data-icon="ion:apps"></i></div>
                            <div class="m-l-10 align-self-center justify-content-center">
                            <p class="m-b-0">
                                Completed Projects</p>
                            <p class="m-b-0" style="text-align: center;">
                            <?=$projectsCompleted?></p>
                                </div>
                            </div>
                            <!-- <h5 style="color:#FF8500; text-align:center; font-weight: bolder;">9 - Currently On Leave</h5> -->
                        </div>
                    
                
                    <!-- <a href="#" class="small-box-footer">View Employee <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
                <a href="<?php echo base_url()?>Projects/All_Projects">
                    <div class="small-box bg-warning">
                        <div class="inner" style="text-align: center; padding-top:30px">
                            <h3 style="margin-bottom: 0;"><?=$projects?></h3>
            
                            <p style="font-size: 20px">Total Projects</p>
                        </div>
                        <div class="icon">
                            <i class="iconify" data-icon="ion:apps"></i>
                        </div>
                        <!-- <a href="#" class="small-box-footer">View Project <i class="fa fa-arrow-circle-right"></i></a> -->
                    </div>
                </a>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box" style="background-color: #fff; height: 100px;margin-bottom: 10px;display: flex; justify-content: center; align-items: center;">
                    <div class="inner" >
                        <div class="d-flex flex-row">
                            <div class="round align-self-center round-loan" style="display: flex;
                            justify-content: center;align-items: center;font-size: 20px;"> <i class="iconify" data-icon="ion:cash-sharp"></i></div>
                            <div class="m-l-10 align-self-center justify-content-center">
                            <p class="m-b-0">
                                Approved Applications</p>
                            <p class="m-b-0" style="text-align: center;">
                            <?=$approvedSalAdv?></p>
                                </div>
                            </div>
                        </div>
                </div>
                <a href="<?php echo base_url()?>payroll/getSalaryAdvance">
                    <div class="small-box bg-danger">
                        <div class="inner" style="text-align: center; padding-top:30px">
                            <h3 style="margin-bottom: 0;"><?=$awaitingSalAdv?></h3>
                            <p style="font-size: 20px;">Salary Advance Applications</p>
                        </div>
                        <div class="icon">
                            <i class="iconify" data-icon="ion:cash-sharp"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <section class="col-lg-6 connectedSortable">
                    <div class="card">
                        <div class="card-header" style="width: 100%; display: flex; justify-content: center; align-items: center;background-color: #d6d6d6;">
                            <div class="line" style="width:20%; border-top:2px solid #aeaeae98"></div>
                            <h3 class="card-title" style="margin: 0 20px; color: #383737;">
                                <!-- <i class="ion ion-clipboard mr-1"></i> -->
                                <!-- <i class="iconify" data-icon="ion:information-circle-sharp"></i> -->
                            Announcements
                            </h3>
                            <div class="line" style="width:20%; border-top:2px solid #aeaeae98"></div>
                    </div>
                    <div class="card-body canvas">
                        <?php 
                        // Return only the first three announcements
                        $i = 0;
                        foreach ($notices as $value) : $i++?>
                            <div class="timeline timeline-inverse" >
                                <!-- Timeline time label -->
                                <div class="time-label">
                                    <span class="bg-green">
                                    <?php if ($value->branch):echo ucwords($value->branch_name).' Branch <br>';?>
                                    <?php elseif ($value->dep_name):echo ucwords($value->dep_name).' Department <br>';?>
                                    <?php elseif ($value->des_name):echo ucwords($value->des_name).'s';?>
                                    <?php else: echo 'Everyone';?>
                                    <?php endif;?>
                                    </span>
                                </div>
                                <div style="cursor:pointer" onclick="location.href=`<?php echo base_url()?>notice/All_notice`">
                                    <!-- Before each timeline item corresponds to one icon on the left scale -->
                                    <i class="fa fa-envelope bg-blue"></i>
                                    <!-- Timeline item -->
                                    <div class="timeline-item">
                                        <!-- Time -->
                                        <span class="time"><?php echo date("j, M. Y ", strtotime($value->date)) ?>&nbsp;&nbsp;|&nbsp;&nbsp;<i class="fa fa-clock"></i> <?php echo date("g:iA", strtotime($value->date)) ?></span>
                                        <!-- Header. Optional -->
                                        <div class="timeline-header">
                                            <h5 style="font-weight: bold;font-size:14px"><?= ucwords($value->title)?></h5>
                                        </div>
                                        <!-- Body -->
                                        <p class="timeline-body shortenText">
                                            <?= $value->message ?>
                                        </p>                                        
                                    </div>
                                </div>
                                <!-- The last icon means the story is complete -->
                            
                            </div>
                        <?php if ($i >= 2) break; endforeach; ?>
                        <!-- The last icon means the story is complete -->
                    </div>
                    </div>    
                    <!-- /.card -->
                </section>
                <!-- Left col -->
                <section class="col-lg-6 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <!-- TO DO List -->
                    <div class="card">
                    <div class="card-header" style="width: 100%; display: flex; justify-content: center; align-items: center;background-color: #d6d6d6;">
                        <div class="line" style="width:20%; border-top:2px solid #aeaeae98"></div>
                                <h3 class="card-title" style="margin: 0 20px; color: #383737;">
                                    <!-- <i class="ion ion-clipboard mr-1"></i> -->
                                    <!-- <i class="iconify" data-icon="ion:information-circle-sharp"></i> -->
                                Events
                                </h3>
                                <div class="line" style="width:20%; border-top:2px solid #aeaeae98"></div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="min-height: 300px; height: auto; width: 100%;margin: auto">
                        <div style="display:flex; justify-content: center"><?= $calendar?></div>
                        <style type="text/css">
                            table{
                            /* border: 15px solid #25BAE4; */
                            border-collapse:collapse;
                            }
                            td{
                            width: 100px;
                            height: 60px;
                            text-align: center;
                            border: 1px solid #e2e0e0;
                            font-size: 18px;
                            /* line-height: 1.8em; */
                            /* font-weight: bold; */
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
                            /* height: 27px; */

                            }
                            .event{
                                background-color:#ccc;
                                color: #000;
                                font-weight: bold;
                                height: 100%;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                            }
                            .calender .days td
                            {
                                width: 80px;
                                height: 80px;
                            }
                            .calender .hightlight
                            {
                                font-weight: 600;
                            }
                            .calender .days td:hover
                            {
                                background-color: #DEF;
                            }
                        </style>
                    </div>
                    
                    </div>
                    <!-- /.card -->
                </section>
                
                
            
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
            
                <!-- right col -->
            </div>
            <div class="row">
                <section class="col-lg-6 connectedSortable">
                    <div class="card" style="height:380px">
                    <div class="card-header" style="width: 100%; display: flex; justify-content: center; align-items: center;background-color: #d6d6d6;">
                        <div class="line" style="width:20%; border-top:2px solid #aeaeae98"></div>
                        <h3 class="card-title" style="margin: 0 20px; color: #383737;">
                            <!-- <i class="ion ion-clipboard mr-1"></i> -->
                            <!-- <i class="iconify" data-icon="ion:information-circle-sharp"></i> -->
                        Employees Attendance
                        </h3>
                        <div class="line" style="width:20%; border-top:2px solid #aeaeae98"></div>
                    </div>
                    <div class="card-body canvas">
                    <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 594px;" width="1188" height="500" class="chartjs-render-monitor"></canvas>
						<p style="text-align: left;padding-top: 30px;font-weight:bold;font-size: 13px;" id="month">  </p>
                    </div>   
                    </div> 
                  
                    <!-- /.card -->
                </section>
                <!-- Left col -->
				 <section class="col-lg-6 connectedSortable">
                    <div class="card">
                    <div class="card-header" style="width: 100%; display: flex; justify-content: center; align-items: center;background-color: #d6d6d6;">
                        <div class="line" style="width:20%; border-top:2px solid #aeaeae98"></div>
                        <h3 class="card-title" style="margin: 0 20px; color: #383737;">
                            <!-- <i class="ion ion-clipboard mr-1"></i> -->
                            <!-- <i class="iconify" data-icon="ion:information-circle-sharp"></i> -->
                        Employees Status
                        </h3>
                        <div class="line" style="width:20%; border-top:2px solid #aeaeae98"></div>
                    </div>
                    <div class="card-body" style="display:flex; padding:0; justify-content:center; align-items:center; height:auto;width: 100%; min-height: 335px">
                  <canvas id="pieChart" style="height: 201px; max-height: 65%; max-width: 40%; display: block; width: 258.5px; box-sizing: border-box;" class="chartjs-render-monitor"></canvas>
                    <canvas id="pieChart1" style="height: 451px; max-height: 85%; max-width: 40%; display: block; width: 258.5px; box-sizing: border-box;"class="chartjs-render-monitor"></canvas>
						<!-- <div id="piechart" style="flex:1;display: flex;justify-content: center;"></div>
						<div id="piechart1" style="flex:1;display: flex;justify-content: center;"></div>						 -->
                    </div>
                    <!-- /.card -->
					 </div>
                </section>
				</div>
				                      
<?php $this->load->view('modals/eventEditModal'); ?>
<?php $this->load->view('modals/eventDetailsModal'); ?>
<?php $this->load->view('backend/footer'); ?>
