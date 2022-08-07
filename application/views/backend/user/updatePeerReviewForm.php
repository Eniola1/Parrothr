<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor" id="headerTitle"></h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Peer Review</li>
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
                <div class="card">
                    
                    <!-- <div class="card-header">
                        <h4 class="m-b-0 text-white"> Employee Peer Review Form</h4>
                    </div> -->
                    <div class="card-body">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs profile-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link active font-weight-bold" data-toggle="tab" href="#peer" role="tab" style="font-size: 14px;">  Peer </a> </li>
                            <li class="nav-item"> <a class="nav-link font-weight-bold" data-toggle="tab" href="#employee" role="tab" style="font-size: 14px;"> Employee </a> </li>
                            <li class="nav-item"> <a class="nav-link font-weight-bold" data-toggle="tab" href="#supervisor" role="tab" style="font-size: 14px;"> Supervisior / Next Level Supervisor </a> </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- peer tab -->
                            <div class="tab-pane active" id="peer" role="tabpanel">
                                <div class="">
                                    <div class="card-body">
                                        <form class="row filledPeerReviewForm" action="<?= base_url()?>appraisal/addPeerReview" method="post" enctype="multipart/form-data" id="peerReview">
                                            <div class="form-group col-md-12 m-t-10 sub-heading" style="border-bottom: none"><label class=" sub-heading" ><h5 style="color: #000;">
                                                <h5 style="color: #000">Section 1: Personal Information</h5></label>
                                            </div>
                                            <div class="form-group col-md-3 m-t-10">
                                                <input type="hidden" name="id">
                                                <label>Name Of Supervisor / Employee </label>
                                                <select name="em_id" class="form-control custom-select">
                                                    <option selected disabled>Select Here</option>
                                                    <?php foreach ($employees as $value) : ?>
                                                        <option value="<?= $value->em_id ?>"><?= ucwords($value->first_name . ' ' . $value->last_name) ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3 m-t-10">
                                                <label>Type Of Appraisal </label><br>
                                                <input class="form-check-input type_of_appraisal" type="radio" value="Annual" id="annual" name="type_of_appraisal" >
                                                <label class="form-check-label" for="annual" style="padding-top: 0">
                                                    Annual
                                                </label>
                                                <input class="form-check-input type_of_appraisal" type="radio" value="Semi-Annual" id="semi" name="type_of_appraisal">
                                                <label class="form-check-label" for="semi" style="padding-top: 0">
                                                    Semi-Annual
                                                </label>
                                                <input class="form-check-input type_of_appraisal" type="radio" value="Probation" id="prob" name="type_of_appraisal">
                                                <label class="form-check-label" for="prob" style="padding-top: 0">
                                                    Probation
                                                </label>
                                            </div>
                                            <div class="form-group col-md-3 m-t-10">
                                                <label>Period Under Review (From) </label>
                                                <input type="date" id="" name="review_start" class="form-control" placeholder=""/>
                                            </div>
                                            <div class="form-group col-md-3 m-t-10">
                                                <label>Period Under Review (To) </label>
                                                <input type="date" id="" name="review_end" class="form-control" placeholder=""/>
                                            </div>
                                            
                                                <div class="form-group col-md-12 m-t-10 sub-heading">
                                                    <label class=" sub-heading" ><h5 style="color: #000">Section 2: Evaluation Of Supervisor Only </h5></label>
                                                </div>
                                                <div class="col-md-9 headings" style="text-align: justify; margin-bottom: 50px">
                                                <p style="text-align: left">Discuss And Evaluate Your Supervisor's Performance Base Your Appraisal On Your Understanding Of His Her Responsibilities And Factors Such As Planning, Budgeting, Knowledge Expertise, Management Skills And Leadership Traits. </p>
                                                </div>  
                                                <style>
                                                    @media screen and (max-width: 1200px) {
                                                        div.headings{
                                                            max-width: 100%;
                                                        }
                                                    }
                                                </style>
                                                <div class="form-group col-md-6 m-t-10">
                                                    <label>Identify Areas Of Exceptional Performance By The Supervisor That Should Be Particularly Noted Provide Specific Examples</label>
                                                    <textarea name="perf_note" class="form-control"></textarea> 
                                                </div>
                                                <div class="form-group col-md-6 m-t-10">
                                                    <label>Identify Areas Of Performance By The Supervisor That Needs More Attention Or Improvement Provide Specific Examples
                                                    </label>
                                                    <textarea name="perf_imprv" class="form-control"></textarea> 
                                                </div>
                                                <div class="form-group col-md-6 m-t-10">
                                                    <label>What Should The Supervisor Keep Doing</label>
                                                    <textarea name="keep_doing" class="form-control"></textarea> 
                                                </div>
                                                <div class="form-group col-md-6 m-t-10">
                                                    <label>What Should The Supervisor Stop Doing</label>
                                                    <textarea name="stop_doing" class="form-control"></textarea> 
                                                </div>
                                                <div class="form-group col-md-6 m-t-10">
                                                    <label>What Should The Supervisor Start Doing</label>
                                                    <textarea name="start_doing" class="form-control"></textarea> 
                                                </div>
                                                <div class="form-group col-md-12 m-t-10 sub-heading" ><label class=" sub-heading" >
                                                <h5 style="color: #000">Review Of Performance Elements (Questionnaire)</h5></label>
                                                </div>
                                                <div class="form-group col-md-7 m-t-10">
                                                <label style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Productivity (The Amount Of Work An Individual Does In A Work Day)</label>
                                                </div>
                                                <div class="col-md-5"></div>
                                                <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">What Is Employee's Overall Volume Of Work</label>
                                                    <textarea name="prod_wrk_vol" class="form-control"></textarea> 
                                                </div>
                                                <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">Is Employee's Work Level Consistent</label>
                                                    <textarea name="prod_wrk_lvl" class="form-control"></textarea> 
                                                </div>
                                                <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">What Is Relation Between Employee's Production And The Company's Expectations</label>
                                                    <textarea name="prod_expectn" class="form-control"></textarea> 
                                                </div>
                                            <div class="form-group col-md-12 m-t-10">
                                                <label>Rating </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Above Average" id="paa" name="prod_rating">
                                                <label class="form-check-label" for="paa" style="padding-top: 0">
                                                Above Average
                                                <ul>
                                                    <li>Excellent Producer</li>
                                                    <li>Consistently Generates High Volume Of Work</li>
                                                    <li>Produces more than is required or expected</li>
                                                </ul>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Average" id="pa" name="prod_rating">
                                                <label class="form-check-label" for="pa" style="padding-top: 0">
                                                Average
                                                <ul>
                                                    <li>Satisfactory Producer</li>
                                                    <li>Generates Sufficient Volume Of Work With Some Degree Of Consistency</li>
                                                    <li>Meets Expectations Or Requirements</li>
                                                </ul>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Below Average" id="pba" name="prod_rating">
                                                <label class="form-check-label" for="pba" style="padding-top: 0">
                                                Below Average
                                                <ul>
                                                    <li>Unsatisfactory Producer</li>
                                                    <li>Generates Minimal Volume Of Work And Or Is Inconsistent In Level Of Production</li>
                                                    <li>Produces Less Than Is Expected Or Required</li>
                                                </ul>
                                                </label>
                                            </div>
                                            
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Comments </label>
                                                <textarea name="prod_comment" class="form-control"></textarea> 
                                            </div>
                                            <div class="col-md-8"></div>
                                            <!--  -->
                                            <div class="form-group col-md-7 m-t-10">
                                                <label style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Quality Of Work (Accuracy, Neatness And Thoroughness Of Work Effort)</label>
                                                </div>
                                                <div class="col-md-5"></div>
                                                <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">Does Employee Take Time And Care To Check Work</label>
                                                    <textarea name="qual_time_wrk" class="form-control"></textarea> 
                                                </div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">How Frequent Are Mistakes Or Errors</label>
                                                    <textarea name="qual_error" class="form-control"></textarea> 
                                                </div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">How Consistent Is The Accuracy And Thoroughness Of Work</label>
                                                    <textarea name="qual_accu" class="form-control"></textarea> 
                                                </div>
                                            <div class="form-group col-md-12 m-t-10">
                                                <label>Rating </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Above Average" id="qaa" name="qual_rating">
                                                <label class="form-check-label" for="qaa" style="padding-top: 0">
                                                Above Average
                                                <ul>
                                                    <li>Produces Outstanding, Neat And Accurate Work</li>
                                                    <li>Work Must Seldom Be  By Others</li>
                                                    <li>Errors Are Rare And Minor</li>
                                                </ul>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Average" id="qa" name="qual_rating">
                                                <label class="form-check-label" for="qa" style="padding-top: 0">
                                                Average
                                                <ul>
                                                    <li>Average Accuracy And Neatness For Qualified Employees</li>
                                                    <li>Occasional Errors</li>
                                                    <li>Reasonably Conscientious About Checking Work And Preventing Errors</li>
                                                </ul>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Below Average" id="qba" name="qual_rating">
                                                <label class="form-check-label" for="qba" style="padding-top: 0">
                                                Below Average
                                                <ul>
                                                    <li>Poor Accuracy And Neatness</li>
                                                    <li>Frequent Errors And Or Errors Of Substantial Magnitude</li>
                                                    <li>Work Must Be  By Others</li>
                                                    <li>Employee Shows Little Concern With Quality Of Work</li>
                                                </ul>
                                                </label>
                                            </div>
                                            
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Comments </label>
                                                <textarea name="qual_comment" class="form-control"></textarea> 
                                            </div>
                                            
                                            <div class="col-md-8"></div>
                                            <!--  -->
                                            <div class="form-group col-md-8 m-t-10">
                                                <label style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Knowledge Of The Job (Demonstrates The Knowledge Of Fundamental Methods And Procedures Of Job)</label>
                                                </div>
                                                <div class="col-md-4"></div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">How Often Does Employee Have To Be Shown Job Procedures</label>
                                                    <textarea name="know_procd" class="form-control"></textarea> 
                                                </div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">How Does Employee Handle Unexpected Problems Or Breakdowns</label>
                                                    <textarea name="know_probs" class="form-control"></textarea> 
                                                </div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">Does Employee Retain Knowledge Of Job Or Require Substantial Review</label>
                                                    <textarea name="know_retain" class="form-control"></textarea> 
                                                </div>
                                            <div class="form-group col-md-12 m-t-10">
                                                <label>Rating </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Above Average" id="aa" name="know_rating">
                                                <label class="form-check-label" for="aa" style="padding-top: 0">
                                                Above Average
                                                <ul>
                                                    <li>Possesses Broad And Detailed Knowledge Of All Aspects Of The Job</li>
                                                    <li>Rarely Needs To Ask For Job Information</li>
                                                </ul>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Average" id="a" name="know_rating">
                                                <label class="form-check-label" for="a" style="padding-top: 0">
                                                Average
                                                <ul>
                                                    <li>Adequate Knowledge Of Phases Of Work</li>
                                                    <li>Possesses Knowledge Necessary To Perform Duties</li>
                                                    <li>Does Not Need Substantial Guidance Or Direction</li>
                                                </ul>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Below Average" id="ba" name="know_rating">
                                                <label class="form-check-label" for="ba" style="padding-top: 0">
                                                Below Average
                                                <ul>
                                                    <li>Insufficient Knowledge Of Job Duties</li>
                                                    <li>Has Difficulty Performing Job Tasks Without Substantial Guidance And Direction</li>
                                                </ul>
                                                </label>
                                            </div>
                                            
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Comments </label>
                                                <textarea name="know_comment" class="form-control"></textarea> 
                                            </div>
                                            
                                            <div class="col-md-8"></div>
                                            <!--  -->
                                            <div class="form-group col-md-8 m-t-10">
                                                <label style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Teamwork (Ability To Work Well With Co Workers And Supervisors)</label>
                                                </div>
                                                <div class="col-md-4"></div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">What Level Of Friction Exists Between Employee And Co Workers And Supervisors</label>
                                                    <textarea name="team_frictn" class="form-control"></textarea> 
                                                </div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">How Does Employee React When Others Disagree Or Assert Authority</label>
                                                    <textarea name="team_disagree" class="form-control"></textarea> 
                                                </div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">Does Employee Help Others</label>
                                                    <textarea name="team_help" class="form-control"></textarea> 
                                                </div>
                                            <div class="form-group col-md-12 m-t-10">
                                                <label>Rating </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Above Average" id="taa" name="team_rating">
                                                <label class="form-check-label" for="taa" style="padding-top: 0">
                                                Above Average
                                                <ul>
                                                    <li>Possesses Broad And Detailed Knowledge Of All Aspects Of The Job</li>
                                                    <li>Rarely Needs To Ask For Job Information</li>
                                                </ul>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Average" id="ta" name="team_rating">
                                                <label class="form-check-label" for="ta" style="padding-top: 0">
                                                Average
                                                <ul>
                                                    <li>Adequate Knowledge Of Phases Of Work</li>
                                                    <li>Possesses Knowledge Necessary To Perform Duties</li>
                                                    <li>Does Not Need Substantial Guidance Or Direction</li>
                                                </ul>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Below Average" id="tb" name="team_rating">
                                                <label class="form-check-label" for="tb" style="padding-top: 0">
                                                Below Average
                                                <ul>
                                                    <li>Insufficient Knowledge Of Job Duties</li>
                                                    <li>Has Difficulty Performing Job Tasks Without Substantial Guidance And Direction</li>
                                                </ul>
                                                </label>
                                            </div>
                                            
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Comments </label>
                                                <textarea name="team_comment" class="form-control"></textarea> 
                                            </div>
                                            
                                            <div class="col-md-8"></div>
                                            <!--  -->
                                            <div class="form-group col-md-8 m-t-10">
                                                <label style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Initiative And Motivation (Ability To Work Independently Be Resourceful And Display Initiative)</label>
                                                </div>
                                                <div class="col-md-4"></div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">Does Employee Perform Functions Not Specifically Given By Superiors</label>
                                                    <textarea name="init_funcs" class="form-control"></textarea> 
                                                </div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">Can Employee Be Trusted To Work Without Supervision</label>
                                                    <textarea name="init_trust" class="form-control"></textarea> 
                                                </div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">Is Employee Interested In Acquiring New Skills And Knowledge</label>
                                                    <textarea name="init_skills" class="form-control"></textarea> 
                                                </div>
                                            <div class="form-group col-md-12 m-t-10">
                                                <label>Rating </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Above Average" id="imaa" name="init_rating">
                                                <label class="form-check-label" for="imaa" style="padding-top: 0">
                                                Above Average
                                                <ul>
                                                    <li>Superior Initiative And Follow Through</li>
                                                    <li>Does Not Require Supervision And Undertakes Tasks On Own</li>
                                                    <li>ACtively Seeks To Acquire New Skills And Knowledge</li>
                                                </ul>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Average" id="ima" name="init_rating">
                                                <label class="form-check-label" for="ima" style="padding-top: 0">
                                                Average
                                                <ul>
                                                    <li>Satisfactory Initiative And Follow Through</li>
                                                    <li>Usually Does Not Require Supervision Or Have To Be Told To Perform Job Functions</li>
                                                    <li>Reasonably Willing To Learn New Tasks</li>
                                                </ul>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Below Average" id="imb" name="init_rating">
                                                <label class="form-check-label" for="imb" style="padding-top: 0">
                                                Below Average
                                                <ul>
                                                    <li>Requires Substantial Supervision And Direction To Perform Job Tasks</li>
                                                    <li>Not Interested In Learning Or Performing Any Tasks But Those Required</li>
                                                </ul>
                                                </label>
                                            </div>
                                            
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Comments </label>
                                                <textarea name="init_comment" class="form-control"></textarea> 
                                            </div>
                                            
                                            <div class="col-md-8"></div>
                                            <!--  -->
                                            <div class="form-group col-md-8 m-t-10">
                                                <label style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Records And Reports (Ability To Produce And Maintain Written Job Reports And Records)</label>
                                                </div>
                                                <div class="col-md-4"></div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">Are Written Records Reports Kept Accurately And Neatly</label>
                                                    <textarea name="recd_accu" class="form-control"></textarea> 
                                                </div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">Does Employee Complete Written Records Reports Promptly And Without Direction</label>
                                                    <textarea name="recd_complete" class="form-control"></textarea> 
                                                </div>
                                            <div class="form-group col-md-12 m-t-10">
                                                <label>Rating </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Above Average" id="rraa" name="recd_rating">
                                                <label class="form-check-label" for="rraa" style="padding-top: 0">
                                                Above Average
                                                <ul>
                                                    <li>Outstanding Management Of Written Records/Reports</li>
                                                    <li>Completes Records Reports Accurately And On Time</li>
                                                    <li>Requires Little Or No Supervision</li>
                                                </ul>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Average" id="rra" name="recd_rating">
                                                <label class="form-check-label" for="rra" style="padding-top: 0">
                                                Average
                                                <ul>
                                                    <li>Completes Records Reports With Satisfactory Accuracy</li>
                                                    <li>Written Records Reports Are Usually Completed On Time</li>
                                                </ul>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Below Average" id="rrb" name="recd_rating">
                                                <label class="form-check-label" for="rrb" style="padding-top: 0">
                                                Below Average
                                                <ul>
                                                    <li>Records Reports Completed In Sloppy Fashion</li>
                                                    <li>Completes Written Records Reports In An Untimely Manner</li>
                                                    <li>Requires Supervision To Complete Written Tasks</li>
                                                </ul>
                                                </label>
                                            </div>
                                            
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Comments </label>
                                                <textarea name="recd_comment" class="form-control"></textarea> 
                                            </div>
                                            
                                            <div class="col-md-8"></div>
                                            <!--  -->
                                            <div class="form-group col-md-8 m-t-10">
                                                <label style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Customer/Guest Service (Ability To Deal With Guests Customers In Polite And Helpful Manner)</label>
                                                </div>
                                                <div class="col-md-4"></div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">Does Employee Pay Attention To Guest Customer Concerns And Seek Positive Resolution</label>
                                                    <textarea name="cust_attentn" class="form-control"></textarea> 
                                                </div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">Does Employee Display Common Courtesy And Positive Attitude To Guests Customers</label>
                                                    <textarea name="cust_attitude" class="form-control"></textarea> 
                                                </div>
                                            <div class="form-group col-md-12 m-t-10">
                                                <label>Rating </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Above Average" id="cgaa" name="cust_rating">
                                                <label class="form-check-label" for="cgaa" style="padding-top: 0">
                                                Above Average
                                                <ul>
                                                    <li>Treats Guests With Outstanding Level Of Concern And Helpfulness</li>
                                                    <li>Follows Through On Solving Customer Problems</li>
                                                    <li>Consistently Courteous And Helpful To Guests/Customers</li>
                                                </ul>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Average" id="cga" name="cust_rating">
                                                <label class="form-check-label" for="cga" style="padding-top: 0">
                                                Average
                                                <ul>
                                                    <li>Satisfactory Skills In Dealing With Guests</li>
                                                    <li>Follows Through On Guest Problems To A Satisfactory Degree</li>
                                                    <li>Usually Courteous And Helpful To Guests</li>
                                                </ul>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Below Average" id="cgb" name="cust_rating">
                                                <label class="form-check-label" for="cgb" style="padding-top: 0">
                                                Below Average
                                                <ul>
                                                    <li>Unsatisfactory Treatment Of Guests</li>
                                                    <li>Displays Rude And Unhelpful Behavior To Guests</li>
                                                    <li>Unconcerned With Solving Guest Problems</li>
                                                </ul>
                                                </label>
                                            </div>
                                            
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Comments </label>
                                                <textarea name="cust_comment" class="form-control"></textarea> 
                                            </div>
                                            
                                            <div class="col-md-8"></div>
                                            <!--  -->
                                            <div class="form-group col-md-8 m-t-10">
                                                <label style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Safety (Ability To Comply With Precautions For Safety Of Self And Others)</label>
                                                </div>
                                                <div class="col-md-4"></div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">Is Employee Knowledgeable Of Safety Policies And Procedures</label>
                                                    <textarea name="safe_know" class="form-control"></textarea> 
                                                </div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">Does Employee Comply With Established Safety Procedures</label>
                                                    <textarea name="safe_comply" class="form-control"></textarea> 
                                                </div>
                                            <div class="form-group col-md-12 m-t-10">
                                                <label>Rating </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Above Average" id="saa" name="safe_rating">
                                                <label class="form-check-label" for="saa" style="padding-top: 0">
                                                Above Average
                                                <ul>
                                                    <li>Completely Knowledgeable Of All Existing Safety Policies And Procedures</li>
                                                    <li>Highly Concerned With Safety Of Self And Others</li>
                                                    <li>Takes All Precautions And Strictly Complies With All Safety Procedures</li>
                                                </ul>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Average" id="sa" name="safe_rating">
                                                <label class="form-check-label" for="sa" style="padding-top: 0">
                                                Average
                                                <ul>
                                                    <li>Satisfactory Level Of Safety Knowledge</li>
                                                    <li>Usually Concerned With Safety Of Self And Others</li>
                                                    <li>Takes Reasonable Precautions And Usually Complies With All Safety Procedures</li>
                                                </ul>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Below Average" id="sb" name="safe_rating">
                                                <label class="form-check-label" for="sb" style="padding-top: 0">
                                                Below Average
                                                <ul>
                                                    <li>Unsatisfactory Level Of Knowledge Of Safety Of Policies And Procedures</li>
                                                    <li>Fails To Take Precautions And Causes Accidents Or Mishaps</li>
                                                    <li>Fails To Follow Safety Procedures</li>
                                                </ul>
                                                </label>
                                            </div>
                                            
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Comments </label>
                                                <textarea name="safe_comment" class="form-control"></textarea> 
                                            </div>
                                            
                                            <div class="col-md-8"></div>
                                            <!--  -->
                                            <div class="form-group col-md-8 m-t-10">
                                                <label style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Attendance (Regularity Of Attendance And Absence For Legitimate Reasons)</label>
                                                </div>
                                                <div class="col-md-4"></div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">How Regular Is Employee's Attendance</label>
                                                    <textarea name="atnd_reg" class="form-control"></textarea> 
                                                </div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">When Absent Does Employee Do Everything Possible To Minimize Disruption</label>
                                                    <textarea name="atnd_disrup" class="form-control"></textarea> 
                                                </div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">Does Employee Provide Satisfactory Reasons For Absences</label>
                                                    <textarea name="atnd_reason" class="form-control"></textarea> 
                                                </div>
                                            <div class="form-group col-md-12 m-t-10">
                                                <label>Rating </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Above Average" id="ataa" name="atnd_rating">
                                                <label class="form-check-label" for="ataa" style="padding-top: 0">
                                                Above Average
                                                <ul>
                                                    <li>Rarely Absent And Follows Established Absenteeism Procedures</li>
                                                    <li>Takes Extraordinary Steps To Minimize Disruption And Allow Replacements To Perform Tasks</li>
                                                    <li>Absent Only For Legitimate Reasons And Provides Notice When Possible</li>
                                                </ul>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Average" id="ata" name="atnd_rating">
                                                <label class="form-check-label" for="ata" style="padding-top: 0">
                                                Average
                                                <ul>
                                                    <li>Satisfactory Attendance Level</li>
                                                    <li>Usually Follows Established Absenteeism Procedures</li>
                                                    <li>Takes Satisfactory Steps To Minimize Disruption</li>
                                                    <li>Rarely Absent For Non Legitimate Reasons And Usually Provides Notice When Possible</li>
                                                </ul>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Below Average" id="atb" name="atnd_rating">
                                                <label class="form-check-label" for="atb" style="padding-top: 0">
                                                Below Average
                                                <ul>
                                                    <li>Frequently Absent</li>
                                                    <li>Fails To Adhere To Absenteeism Policies And Procedures</li>
                                                    <li>Causes Disruption By Failure To Take Steps To Allow Replacements To Perform Tasks</li>
                                                    <li>Absent For Non Legitimate Reasons And Fails To Provide Notice When Reasonable</li>
                                                </ul>
                                                </label>
                                            </div>
                                            
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Comments </label>
                                                <textarea name="atnd_comment" class="form-control"></textarea> 
                                            </div>
                                            
                                            <div class="col-md-8"></div>
                                            <!--  -->
                                            <div class="form-group col-md-8 m-t-10">
                                                <label style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Leadership And Supervision (Ability To Plan Organize And Supervise So That Jobs Are Completed)</label>
                                                </div>
                                                <div class="col-md-4"></div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">Does Employee Delegate Authority When Reasonable</label>
                                                    <textarea name="lead_delegate" class="form-control"></textarea> 
                                                </div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">Does Employee Maintain Effective Working Relationships With Employees</label>
                                                    <textarea name="lead_relatnshp" class="form-control"></textarea> 
                                                </div>
                                                    <div class="form-group col-md-4 m-t-10" >
                                                    <label style="height: 52px; display:flex;">Does Employee Plan And Organize Sufficiently To Avoid Crisis</label>
                                                    <textarea name="lead_plan" class="form-control"></textarea> 
                                                </div>
                                            <div class="form-group col-md-12 m-t-10">
                                                <label>Rating </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Above Average" id="laa" name="lead_rating">
                                                <label class="form-check-label" for="laa" style="padding-top: 0">
                                                Above Average
                                                <ul>
                                                    <li>Superior Level Of Planning And Organization</li>
                                                    <li>Delegates And Assigns All Delegable Tasks</li>
                                                    <li>Absent Only For Legitimate Reasons And Provides Notice When Possible</li>
                                                    <li>Rarely Experiences Crisis</li>
                                                </ul>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Average" id="la" name="lead_rating">
                                                <label class="form-check-label" for="la" style="padding-top: 0">
                                                Average
                                                <ul>
                                                    <li>Satisfactory Planning And Organization</li>
                                                    <li>Usually Delegates And Assigns Tasks</li>
                                                    <li>Maintains Effective Working Relationship With Employees</li>
                                                    <li>Usually Avoids Crisis</li>
                                                </ul>
                                                </label>
                                            </div>
                                            <div class="form-group col-md-4 m-t-10">
                                                <input class="form-check-input" type="radio" value="Below Average" id="lb" name="lead_rating">
                                                <label class="form-check-label" for="lb" style="padding-top: 0">
                                                Below Average
                                                <ul>
                                                    <li>Poor Planning And Organization</li>
                                                    <li>Fails To Delegate Tasks To Subordinates</li>
                                                    <li>Fails To Maintain Satisfactory Working Relationships With Employees</li>
                                                    <li>Frequently Experiences Crisis</li>
                                                </ul>
                                                </label>
                                            </div>
                                            
                                            <div class="form-group col-md-4 m-t-10">
                                                <label>Comments </label>
                                                <textarea name="lead_comment" class="form-control"></textarea> 
                                            </div>
                                            
                                            <div class="col-md-8"></div>
                                            <!--  -->
                                            <div class="form-group col-md-8 m-t-10">
                                                <label style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Overall Rating</label>
                                            </div>
                                            <div class="form-group col-md-6 m-t-10" >
                                                <label  style="display:flex">Overall Comments</label>
                                                <textarea name="overall_rating" class="form-control"></textarea> 
                                            </div>
                                            <div class="form-group col-md-6 m-t-10" >
                                                <label style="display:flex">Primary Areas of Future Focus</label>
                                                <textarea name="focus_areas" class="form-control"></textarea> 
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- employee tab -->
                            <div class="tab-pane" id="employee" role="tabpanel">
                                <div class="">
                                    <div class="card-body">
                                        <form class="row filledPeerReviewForm" action="<?= base_url()?>appraisal/addPeerReview" method="post" enctype="multipart/form-data" id="employeeReview">
                                            <input type="hidden" name="id">
                                            <div class="form-group col-md-12 m-t-10 sub-heading">
                                                <label class=" sub-heading" ><h5 style="color: #000">Section 3: Employee's Comments</h5></label>
                                            </div>
                                            <div class="form-group col-md-8 m-t-10">
                                                <label style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">This Section Provides An Opportunity For The Employee To Give Comments Regarding His/Her Performance</label>
                                            </div>
                                            <div class="col-md-4"></div>    
                                            
                                            <!-- last -->
            
                                            <div class="form-group col-md-6 m-t-10">
                                            <label>Comment </label>
                                            <textarea rows="2" name="emp_comment" class="form-control" required></textarea> 
                                            </div>
                                            <div class="col-md-6 m-t-10">
                                                <label>Name Of Supervisor / Next Level Supervisor</label>
                                                <select name="supervisor_id" class="form-control custom-select" required>
                                                    <option selected disabled>Select Here</option>
                                                    <?php foreach ($employees as $value) : ?>
                                                        <option value="<?= $value->em_id ?>"><?= ucwords($value->first_name . ' ' . $value->last_name) ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="form-group col-md-12 m-t-10" id="employeeSubmit">
                                                <button class="btn btn-info">Submit</button>
                                                <p>NB: By submtting, you certify that all information provided above are accurate.</p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- supervisor tab -->
                            <div class="tab-pane" id="supervisor" role="tabpanel">
                                <div class="">
                                    <div class="card-body">
                                        <form class="row filledPeerReviewForm" action="<?= base_url()?>appraisal/addPeerReview" method="post" enctype="multipart/form-data" id="supervisorReview">
                                            <input type="hidden" name="id">
                                            <input type="hidden" name="review_status"0>
                                            <div class="form-group col-md-12 m-t-10 sub-heading">
                                                <label class=" sub-heading" ><h5 style="color: #000">Section 4: Next Level Supervisor's Comments</h5></label>
                                            </div>
                                            <div class="form-group col-md-8 m-t-10">
                                                <label style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">This Section Provides An Opportunity For The Supervisor And Or The Next Level Supervisor To Give Comments Regarding The Employee's Performance</label>
                                            </div>
                                            <div class="col-md-4"></div>    
                                            
                                            <!-- last -->    
                                            <div class="form-group col-md-6 m-t-10">
                                            <label>Comment </label>
                                            <textarea rows="2" name="sec_lvl_supvisr_comment" class="form-control"></textarea> 
                                            </div>
                                            <div class="col-md-6"></div>
                                            <!-- next section -->

                                            <div class="col-md-12" id="supervisorSubmit">
                                                <button type="submit" class="btn btn-info">Submit</button>
                                                <p>NB: By submtting, you certify that all information provided above are accurate.</p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script src="<?= base_url() ?>assets/js/peerReview.js"></script>
<?php $this->load->view('backend/footer'); ?>
