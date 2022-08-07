<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/user/includes/userSidebar'); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Exit Interview</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Exit Interview Form</li>
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
                        <h4 class="m-b-0 text-white"> Exit Interview Form
                        </h4>
                    </div>
                    <div class="card-body">
                    <form class="row" action="<?=base_url()?>employeeExit/addExitInterview" method="post" enctype="multipart/form-data">
                                <div class="form-group col-md-4 m-t-10">
                                    <label>Reports To </label>
                                    <select name="manager_id" class="form-control select2 custom-select">
                                        <?php foreach($employees as $employee):?>
                                        <option value="<?=$employee->em_id?>"><?=ucwords($employee->first_name.' '.$employee->last_name)?></option>
                                        <?php endforeach;?>
                                    </select>
                                    <!-- <input type="text"  class="form-control" placeholder="" name="manager_id">  -->
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label>Length Of Service</label>
                                    <input type="text"  class="form-control" placeholder="" name="service_length"> 
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label>Termination Date </label>
                                    <input type="date" id="" name="termination_date" class="form-control" placeholder="" > 
                                </div>
                                <div class="form-group col-md-6 m-t-10">
                                    <label >What Was Your Reason For Joining Golden Tulip 
                                    </label>
                                    <select name="reason_joining" class="form-control custom-select">
                                        <option selected="true" disabled="disabled">Select</option>
                                        <option value="Compensation">Compensation</option>
                                        <option value="Employer Of Choice">Employer Of Choice</option>
                                        <option value="Career Advancement Opportunity">Career Advancement Opportunity</option>
                                        <option value="Job Seeking">Job Seeking</option>
                                        <option value="Work Life Balance">Work Life Balance</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 m-t-10">
                                    <label >What Is Your Reason For Leaving Golden Tulip 
                                        </label>
                                    <select name="reason_leaving" class="form-control custom-select">
                                        <option selected="true" disabled="disabled">Select</option>
                                        <option value="Career Advancement">Career Advancement</option>
                                        <option value="Education">Education</option>
                                        <option value="Retirement">Retirement</option>
                                        <option value="Work Conditions">Work Conditions</option>
                                        <option value="Compensation">Compensation</option>
                                        <option value="Personal">Personal</option>
                                        <option value="Family Circumstances">Family Circumstances</option>
                                        <option value="Relocation">Relocation</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12 m-t-10 sub-heading">
                                    <label class="sub-heading">Kindly Rate Your Line Manager Supervisor In The Following Areas
                                    </label>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Has Good Work Knowledge
                                        </label>
                                    <select name="rate_work_knlg" class="form-control custom-select">
                                        <option selected="true" disabled="disabled">Select</option>
                                        <option value="Almost Always">Almost Always </option>
                                        <option value="Some Times">Some Times</option>
                                        <option value="Never">Never</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Exhibits Fair And Equal Treatment
                                        </label>
                                    <select name="rate_treatment" class="form-control custom-select">
                                        <option selected="true" disabled="disabled">Select</option>
                                        <option value="Almost Always">Almost Always </option>
                                        <option value="Some Times">Some Times</option>
                                        <option value="Never">Never</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Ensures Cooperation Teamwork And Right Working Environment
                                    </label>
                                    <select name="rate_teamwork" class="form-control custom-select">
                                        <option selected="true" disabled="disabled">Select</option>
                                        <option value="Almost Always">Almost Always </option>
                                        <option value="Some Times">Some Times</option>
                                        <option value="Never">Never</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Encourages Listens To Suggestions
                                        </label>
                                    <select name="rate_listening" class="form-control custom-select">
                                        <option selected="true" disabled="disabled">Select</option>
                                        <option value="Almost Always">Almost Always </option>
                                        <option value="Some Times">Some Times</option>
                                        <option value="Never">Never</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Receives Complaints And Problems
                                        </label>
                                    <select name="rate_recieve_complaint" class="form-control custom-select">
                                        <option selected="true" disabled="disabled">Select</option>
                                        <option value="Almost Always">Almost Always </option>
                                        <option value="Some Times">Some Times</option>
                                        <option value="Never">Never</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Follow Policies And Practices
                                        </label>
                                    <select name="rate_follow_policies" class="form-control custom-select">
                                        <option selected="true" disabled="disabled">Select</option>
                                        <option value="Almost Always">Almost Always </option>
                                        <option value="Some Times">Some Times</option>
                                        <option value="Never">Never</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-8 m-t-10">
                                    <label>Comments</label>
                                    <textarea name="comments"  class="form-control"></textarea>
                                </div>
                                <!--  next-->
                                <div class="form-group col-md-12 m-t-10 sub-heading">
                                    <label class="sub-heading">Kindly Rate Your Job Role Department In The Following Areas
                                    </label>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Cooperation Within Your Department
                                        </label>
                                    <select name="rate_dep_cooperation" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Excellent">Excellent </option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Cooperation With Other Departments
                                        </label>
                                    <select name="rate_other_cooperation" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Excellent">Excellent </option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Morale In Your Department
                                        </label>
                                    <select name="rate_dep_morale" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Excellent">Excellent </option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Trainings Received
                                        </label>
                                    <select name="trainings_recieved" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Excellent">Excellent </option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Growth Potential
                                        </label>
                                    <select name="growth_potential" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Excellent">Excellent </option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Work Load
                                        </label>
                                    <select name="work_load" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Excellent">Excellent </option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Adequate Work Tools
                                        </label>
                                    <select name="work_tools" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Excellent">Excellent </option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Optimal Skill Use
                                        </label>
                                    <select name="skill_use" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Excellent">Excellent </option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Relationship With Peers And Supervisors
                                        </label>
                                    <select name="relation_peers_supervisor" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Excellent">Excellent </option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                    
                                </div>
                                <!-- next -->
                                <div class="form-group col-md-12 m-t-10 sub-heading">
                                    <label class="sub-heading">Kindly Rate The Performance Management System
                                    </label>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >I Am Evaluated On The Job
                                        </label>
                                    <select name="rate_pms_evaluated" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Almost Always">Almost Always </option>
                                        <option value="Some Times">Some Times</option>
                                        <option value="Never">Never</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >The Evaluation Of My Performance Is Accurate
                                        </label>
                                    <select name="rate_pms_accurate" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Almost Always">Almost Always </option>
                                        <option value="Some Times">Some Times</option>
                                        <option value="Never">Never</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >My Supervisors Discuss My Performance Evaluation
                                        </label>
                                    <select name="rate_pms_supervisior" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Almost Always">Almost Always </option>
                                        <option value="Some Times">Some Times</option>
                                        <option value="Never">Never</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >I Am Clear On My Deliverables
                                        </label>
                                    <select name="rate_pms_deliverable" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Almost Always">Almost Always </option>
                                        <option value="Some Times">Some Times</option>
                                        <option value="Never">Never</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >I Am Clear How My Deliverable Feed Into The Organizations Goals
                                        </label>
                                    <select name="rate_pms_deliverable_fit" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Almost Always">Almost Always </option>
                                        <option value="Some Times">Some Times</option>
                                        <option value="Never">Never</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >The Pms Is Transparent And Reliable
                                        </label>
                                    <select name="rate_pms_reliable" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Almost Always">Almost Always </option>
                                        <option value="Some Times">Some Times</option>
                                        <option value="Never">Never</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-8 m-t-10">
                                    <label >Other Comments On The Performance Management System
                                        </label>
                                        <textarea name="rate_pms_comments"  class="form-control"></textarea>
                                </div>
                                <!-- next -->
                                <div class="form-group col-md-12 m-t-10 sub-heading">
                                    <label class="sub-heading">Kindly Rate The Compensation And Reward Systems
                                    </label>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Annual Salary
                                        </label>
                                    <select name="rate_crs_salary" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Excellent">Excellent </option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Medical Plan
                                        </label>
                                    <select name="rate_crs_medical_plan" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Excellent">Excellent </option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Benefits In Kind
                                        </label>
                                    <select name="rate_crs_benefits" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Excellent">Excellent </option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Pension Scheme
                                        </label>
                                    <select name="rate_crs_pension" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Excellent">Excellent </option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Performance Bonus
                                        </label>
                                    <select name="rate_crs_perf_bonus" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Excellent">Excellent </option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-8 m-t-10">
                                    <label >Others Please Specify In Your Comments
                                        </label>
                                        <textarea name="rate_crs_comments"  class="form-control"></textarea>
                                </div>
                              <!-- next -->
                              <div class="form-group col-md-12 m-t-10 sub-heading">
                                    <label class="sub-heading">Kindly Rate The Under Listed Areas
                                    </label>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Career Progression
                                        </label>
                                    <select name="rate_career_progression" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Excellent">Excellent </option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Developmental Policies
                                        </label>
                                    <select name="rate_policies" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Excellent">Excellent </option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Staff Communication
                                        </label>
                                    <select name="rate_communication" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Excellent">Excellent </option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Company Culture
                                        </label>
                                    <select name="rate_culture" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Excellent">Excellent </option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Work Relationships
                                        </label>
                                    <select name="rate_relationships" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Excellent">Excellent </option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Company Values
                                        </label>
                                    <select name="rate_values" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Excellent">Excellent </option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-8 m-t-10">
                                    <label >Other Comments On The Listed Areas
                                        </label>
                                    <textarea name="comments_for_areas"  class="form-control"></textarea>
                                </div>
                                <!-- next -->
                                <div class="form-group col-md-12 m-t-10 sub-heading">
                                    <label class="sub-heading">Kindly Provide Your Comments Overall Experience With Five Continents In The Provided Spaces
                                    </label>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >What Did You Like Most About Your Job The Organization</label>
                                    <textarea name="comments_like" class="form-control"></textarea>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >What Did You Like Least About Your Job The Organization</label>
                                    <textarea name="comments_dislike" class="form-control"></textarea>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >What Does Your New Job Offer That Should Be Considered In Five Continents</label>
                                    <textarea name="comments_newjob_compare" class="form-control"></textarea>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label style="min-height: 75px">Under What Circumstances Would You Have Reconsidered Your Decision To Leave Five Continents Was This Made Known To Your Manager</label>
                                    <textarea name="comments_reconsider" class="form-control"></textarea> 
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label style="min-height: 75px">Any Policy Or Procedure That You Would Like To See Introduced Changed In The Company And Whys</label>
                                    <textarea name="comments_new_change" class="form-control"></textarea>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label style="min-height: 75px">Should You Have The Opportunity To Work For Five Continents In The Future Would You Work In The Same Department </label>
                                    <select name="comments_same_department" class="form-control custom-select" style="min-height:62px;height:62px" >
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label>Would You Reconsider Working For Five Continents In The Future </label>
                                    <select name="comments_reconsider_work" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label>Would You Recommend Employment At Five Continents To A Friend </label>
                                    <select name="comments_recommend" class="form-control custom-select">
                                        <option selected="true" disabled="disabled"></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label>Kindly Give General Comments And Suggestions In The Box Below</label>
                                    <textarea name="comments_general" style="min-height:38px;height:38px" class="form-control"></textarea> 
                                </div>
                                <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <?php $this->load->view('backend/footer'); ?>
       