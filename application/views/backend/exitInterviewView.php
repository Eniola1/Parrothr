<?php $this->load->view('backend/header'); ?>
<?php $this->load->view('backend/sidebar'); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Exit Interview</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Exit Interview</li>
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
                        <h4 class="m-b-0 text-white"><?=ucwords($value->first_name.' '.$value->last_name)?>'s Exit Interview 
                        </h4>
                    </div>
                    <div class="card-body">
                    <form class="row" method="post" enctype="multipart/form-data">
                                <div class="form-group col-md-4 m-t-10">
                                    <label>Reports To </label>
                                    <input type="text" class="form-control" value="<?=ucwords($value->manager_fullname)?>" name="manager_id" readonly> 
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label>Length Of Service</label>
                                    <input type="text"  class="form-control" value="<?=$value->service_length?>" readonly> 
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label>Termination Date </label>
                                    <input type="date" id="" value="<?=$value->termination_date?>" class="form-control" placeholder="" readonly > 
                                </div>
                                <div class="form-group col-md-6 m-t-10">
                                    <label >What Was Your Reason For Joining Golden Tulip 
                                    </label>
                                    <select name="reason_joining" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->reason_joining?>"><?=$value->reason_joining?></option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 m-t-10">
                                    <label >What Is Your Reason For Leaving Golden Tulip 
                                        </label>
                                    <select name="reason_leaving" class="form-control custom-select" disabled>
                                    <option selected value="<?=$value->reason_leaving?>"><?=$value->reason_leaving?></option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12 m-t-10 sub-heading">
                                    <label class="sub-heading">Kindly Rate Your Line Manager Supervisor In The Following Areas
                                    </label>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Has Good Work Knowledge
                                        </label>
                                    <select name="rate_work_knlg" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_work_knlg?>"><?=$value->rate_work_knlg?></option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Exhibits Fair And Equal Treatment
                                        </label>
                                    <select name="rate_treatment" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_treatment?>"><?=$value->rate_treatment?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Ensures Cooperation Teamwork And Right Working Environment
                                    </label>
                                    <select name="rate_teamwork" class="form-control custom-select" disabled>
                                    <option selected value="<?=$value->rate_teamwork?>"><?=$value->rate_teamwork?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Encourages Listens To Suggestions
                                        </label>
                                    <select name="rate_listening" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_listening?>"><?=$value->rate_listening?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Receives Complaints And Problems
                                        </label>
                                    <select name="rate_recieve_complaint" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_recieve_complaint?>"><?=$value->rate_recieve_complaint?></option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Follow Policies And Practices
                                        </label>
                                    <select name="rate_follow_policies" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_follow_policies?>"><?=$value->rate_follow_policies?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-8 m-t-10">
                                    <label>Comments</label>
                                    <textarea name="comments" readonly  class="form-control"><?=$value->comments?></textarea>
                                </div>
                                <!--  next-->
                                <div class="form-group col-md-12 m-t-10 sub-heading">
                                    <label class="sub-heading">Kindly Rate Your Job Role Department In The Following Areas
                                    </label>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Cooperation Within Your Department
                                        </label>
                                    <select name="rate_dep_cooperation" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_dep_cooperation?>"><?=$value->rate_dep_cooperation?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Cooperation With Other Departments
                                        </label>
                                    <select name="rate_other_cooperation" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_other_cooperation?>"><?=$value->rate_other_cooperation?></option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Morale In Your Department
                                        </label>
                                    <select name="rate_dep_morale" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_dep_morale?>"><?=$value->rate_dep_morale?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Trainings Received
                                        </label>
                                    <select name="trainings_recieved" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->trainings_recieved?>"><?=$value->trainings_recieved?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Growth Potential
                                        </label>
                                    <select name="growth_potential" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->growth_potential?>"><?=$value->growth_potential?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Work Load
                                        </label>
                                    <select name="work_load" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->work_load?>"><?=$value->work_load?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Adequate Work Tools
                                        </label>
                                    <select name="work_tools" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->work_tools?>"><?=$value->work_tools?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Optimal Skill Use
                                        </label>
                                    <select name="skill_use" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->skill_use?>"><?=$value->skill_use?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Relationship With Peers And Supervisors
                                        </label>
                                    <select name="relation_peers_supervisor" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->relation_peers_supervisor?>"><?=$value->relation_peers_supervisor?></option>
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
                                    <select name="rate_pms_evaluated" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_pms_evaluated?>"><?=$value->rate_pms_evaluated?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >The Evaluation Of My Performance Is Accurate
                                        </label>
                                    <select name="rate_pms_accurate" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_pms_accurate?>"><?=$value->rate_pms_accurate?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >My Supervisors Discuss My Performance Evaluation
                                        </label>
                                    <select name="rate_pms_supervisior" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_pms_supervisior?>"><?=$value->rate_pms_supervisior?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >I Am Clear On My Deliverables
                                        </label>
                                    <select name="rate_pms_deliverable" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_pms_deliverable?>"><?=$value->rate_pms_deliverable?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >I Am Clear How My Deliverable Feed Into The Organizations Goals
                                        </label>
                                    <select name="rate_pms_deliverable_fit" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_pms_deliverable_fit?>"><?=$value->rate_pms_deliverable_fit?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >The Pms Is Transparent And Reliable
                                        </label>
                                    <select name="rate_pms_reliable" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_pms_reliable?>"><?=$value->rate_pms_reliable?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-8 m-t-10">
                                    <label >Other Comments On The Performance Management System
                                        </label>
                                        <textarea name="rate_pms_comments"  class="form-control"><?=$value->rate_pms_comments?></textarea>
                                </div>
                                <!-- next -->
                                <div class="form-group col-md-12 m-t-10 sub-heading">
                                    <label class="sub-heading">Kindly Rate The Compensation And Reward Systems
                                    </label>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Annual Salary
                                        </label>
                                    <select name="rate_crs_salary" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_crs_salary?>"><?=$value->rate_crs_salary?></option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Medical Plan
                                        </label>
                                    <select name="rate_crs_medical_plan" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_crs_medical_plan?>"><?=$value->rate_crs_medical_plan?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Benefits In Kind
                                        </label>
                                    <select name="rate_crs_benefits" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_crs_benefits?>"><?=$value->rate_crs_benefits?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Pension Scheme
                                        </label>
                                    <select name="rate_crs_pension" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_crs_pension?>"><?=$value->rate_crs_pension?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Performance Bonus
                                        </label>
                                    <select name="rate_crs_perf_bonus" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_crs_perf_bonus?>"><?=$value->rate_crs_perf_bonus?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-8 m-t-10">
                                    <label >Others Please Specify In Your Comments
                                        </label>
                                        <textarea name="rate_crs_comments"  class="form-control" readonly><?=$value->rate_crs_comments?></textarea>
                                </div>
                              <!-- next -->
                              <div class="form-group col-md-12 m-t-10 sub-heading">
                                    <label class="sub-heading">Kindly Rate The Under Listed Areas
                                    </label>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Career Progression
                                        </label>
                                    <select name="rate_career_progression" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_career_progression?>"><?=$value->rate_career_progression?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Developmental Policies
                                        </label>
                                    <select name="rate_policies" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_policies?>"><?=$value->rate_policies?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Staff Communication
                                        </label>
                                    <select name="rate_communication" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_communication?>"><?=$value->rate_communication?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Company Culture
                                        </label>
                                    <select name="rate_culture" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_culture?>"><?=$value->rate_culture?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Work Relationships
                                        </label>
                                    <select name="rate_relationships" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_relationships?>"><?=$value->rate_relationships?></option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >Company Values
                                        </label>
                                    <select name="rate_values" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->rate_values?>"><?=$value->rate_values?></option>
                                    </select>
                                </div>
                                <div class="form-group col-md-8 m-t-10">
                                    <label >Other Comments On The Listed Areas
                                        </label>
                                    <textarea name="comments_for_areas"  class="form-control" readonly><?=$value->comments_for_areas?></textarea>
                                </div>
                                <!-- next -->
                                <div class="form-group col-md-12 m-t-10 sub-heading">
                                    <label class="sub-heading">Kindly Provide Your Comments Overall Experience With Five Continents In The Provided Spaces
                                    </label>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >What Did You Like Most About Your Job The Organization</label>
                                    <textarea name="comments_like" readonly class="form-control"><?=$value->comments_like?></textarea>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >What Did You Like Least About Your Job The Organization</label>
                                    <textarea name="comments_dislike" class="form-control" readonly><?=$value->comments_dislike?></textarea>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label >What Does Your New Job Offer That Should Be Considered In Five Continents</label>
                                    <textarea name="comments_newjob_compare" class="form-control" readonly><?=$value->comments_newjob_compare?></textarea>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label style="min-height: 75px">Under What Circumstances Would You Have Reconsidered Your Decision To Leave Five Continents Was This Made Known To Your Manager</label>
                                    <textarea name="comments_reconsider" class="form-control" readonly><?=$value->comments_reconsider?></textarea> 
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label style="min-height: 75px">Any Policy Or Procedure That You Would Like To See Introduced Changed In The Company And Whys</label>
                                    <textarea name="comments_new_change" class="form-control" readonly><?=$value->comments_new_change?></textarea>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label style="min-height: 75px">Should You Have The Opportunity To Work For Five Continents In The Future Would You Work In The Same Department </label>
                                    <select name="comments_same_department" class="form-control custom-select" style="min-height:62px;height:62px" disabled >
                                        <option selected value="<?=$value->comments_same_department?>"><?=$value->comments_same_department?></option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label>Would You Reconsider Working For Five Continents In The Future </label>
                                    <select name="comments_reconsider_work" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->comments_reconsider_work?>"><?=$value->comments_reconsider_work?></option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label>Would You Recommend Employment At Five Continents To A Friend </label>
                                    <select name="comments_recommend" class="form-control custom-select" disabled>
                                        <option selected value="<?=$value->comments_recommend?>"><?=$value->comments_recommend?></option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 m-t-10">
                                    <label>Kindly Give General Comments And Suggestions In The Box Below</label>
                                    <textarea name="comments_general" style="min-height:38px;height:38px" class="form-control" readonly><?=$value->comments_general?></textarea> 
                                </div>
                                <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <?php $this->load->view('backend/footer'); ?>
       