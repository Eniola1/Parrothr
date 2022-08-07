<form class="row filledAppraisalForm" action="<?= base_url() ?>appraisal/AddAppraisal" method="post" enctype="multipart/form-data" id="employeeAppraisal">
    <input type="hidden" name="id">
    <div class="form-group col-md-4 m-t-10">
        <label>Supervisor Name </label>
        <select class="form-control" data-placeholder="Choose a Category" tabindex="1" name="manager_id">
            <option selected disabled>Select Here</option>
            <?php foreach ($employees as $value) : ?>
                <option value="<?= $value->em_id ?>"><?= ucwords($value->first_name . ' ' . $value->last_name) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group col-md-4 m-t-10">
        <label>Type Of Appraisal </label><br>
        <select name="type_of_appraisal" class="form-control custom-select" required>
            <option value="Annual">Annual</option>
            <option value="Semi-Annual">Semi-Annual</option>
            <option value="Probation">Probation</option>
        </select>
    </div>
    <div class="form-group col-md-4 m-t-10">
        <label>Review Period </label>
        <select name="review_period" class="form-control custom-select" required>
            <option value="Yearly">Yearly</option>
            <option value="Quaterly">Quaterly</option>
            <option value="Monthly">Monthly</option>
        </select>
    </div>
    <div class="form-group col-md-4 m-t-10">
        <label style=" display:flex; align-items:end">Most Successful Job Accomplishments Within The Review Period </label>
        <textarea class="form-control" name="job_accomplishments" placeholder="Give atleast 3 points"></textarea>
    </div>
    <div class="form-group col-md-4 m-t-10">
        <label style=" display:flex; align-items:end">Key Strengths Of Employee </label>
        <textarea class="form-control" name="key_strengths" placeholder="Give atleast 3 points"></textarea>
    </div>
    <div class="form-group col-md-4 m-t-10">
        <label style=" display:flex; align-items:end">Problems Since Last Performance Appraisal </label>
        <textarea class="form-control" name="problems_last_perf_appr" placeholder="Give atleast 3 points"></textarea>
    </div>
    <div class="form-group col-md-4 m-t-10">
        <label>Key Areas That Need Improvement </label>
        <textarea class="form-control" placeholder="Give atleast 3 points" name="key_areas_improv"></textarea>
    </div>
    <div class="form-group col-md-4 m-t-10">
        <label>Disciplinary Issues If Any </label>
        <textarea class="form-control" placeholder="" name="disciplinary_issues"></textarea>
    </div>
    <div class="form-group col-md-4 m-t-10">
        <label>Academic Professional Qualifications</label>
        <textarea name="academic_qualifications" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-4 m-t-10">
        <label>Recent Training Course Attended</label>
        <textarea name="recent_training" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-12 m-t-10 sub-heading">
        <label class=" sub-heading">
            <h5 style="color: #000">Section 1A: Discussion Points </h5>
        </label>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Overall Job Objectives</label>
        <textarea name="overall_objectives" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>State Your Understanding Of Your Main Duties And Responsibilities Performed (At Least 5)</label>
        <textarea name="main_duties" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>List Your Most Significant Accomplishments Or Contributions During Reporting Period How Does These Achievements Align With The Goals Objectives Outlined In Your Last Review</label>
        <textarea name="significant_accomplishments" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Since The Last Appraisal Period Have You Successfully Performed Any New Tasks Or Additional Duties Outside The Scope Of Your Regular Responsibilities? If So Please Specify</label>
        <textarea name="new_tasks" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>What Activities Have You Initiated Or Actively Participated In To Encourage Harmony And Teamwork Within Your Group And Or Office? What Was The Result?</label>
        <textarea name="activities_teamwork" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Identify Two Goals And Tasks That You Consider To Be Most Important In The Coming Year And Indicate How You Plan To Accomplish Them</label>
        <textarea name="goals_coming_year" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>What Kind Of Work Or Job Would You Like To Be Doing In 1 - 2 Years' Time</label>
        <textarea name="kind_of_job_wish" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>What Sort Of Training Experiences Would Benefit You In The Next Year? Not Just Your Job Skills - Also Your Natural Strength And Personal Passions You Would Like To Develop - You And Your Work Can Benefit From These</label>
        <textarea name="training_experiences_coming_year" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-12 m-t-10 sub-heading"><label class=" sub-heading">
            <h5 style="color: #000">
                <h5 style="color: #000">Section 1B: Objectives Overall Section Ratings</h5>
        </label>
    </div>
    <div class="form-group col-md-7 m-t-10">
        <label style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">List The Objectives That You Set Out To Achieve In The Past 12 Months (Or Period Covered By The Appraisal). Score Your Performance On Each Achievement Provide Comments As Appropriate</label>
    </div>
    <div class="col-md-5"></div>
    <div class="form-group col-md-4 m-t-10">
        <label>Objective (Financial) </label>
        <textarea name="objs_financial" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-4 m-t-10">
        <label>Action Items </label>
        <textarea name="objs_financial_actions" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-4 m-t-10">
        <label>Outcomes </label>
        <textarea name="objs_financial_outcomes" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Employee's Rating </label>
        <select name="objs_financial_employee_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Employee's Comments </label>
        <textarea name="objs_financial_employee_comment" class="form-control"></textarea>
    </div>
    <br>
    <div class="form-group col-md-4 m-t-10">
        <label>Objective (Internal Process) 15</label>
        <textarea name="objs_process" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-4 m-t-10">
        <label>Action Items </label>
        <textarea name="objs_process_action" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-4 m-t-10">
        <label>Outcomes </label>
        <textarea name="objs_process_outcome" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Employee's Rating </label>
        <select name="objs_process_employee_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Employee's Comments </label>
        <textarea name="objs_process_employee_comment" class="form-control"></textarea>
    </div>
    
    <div class="form-group col-md-4 m-t-10">
        <label>Objective (Customer)</label>
        <textarea name="objs_customer" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-4 m-t-10">
        <label>Action Items </label>
        <textarea name="objs_customer_action" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-4 m-t-10">
        <label>Outcomes </label>
        <textarea name="objs_customer_outcome" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Employee's Rating </label>
        <select name="objs_customer_employee_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Employee's Comments </label>
        <textarea name="objs_customer_employee_comment" class="form-control"></textarea>
    </div>
    
    <div class="form-group col-md-12 m-t-10 sub-heading">
        <label class=" sub-heading">
            <h5 style="color: #000">Section 2: General Performance Requirement</h5>
        </label>
    </div>
    <div class="form-group col-md-8 m-t-10">
        <label style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Evaluate Yourself On All Factors That Applies To You By Scoring Your Own Capability In The Following Area</label>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-3 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Communication </label>
    </div>
    <div class="col-md-9"></div>
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Skill And Clarity Selects And Uses Appropriate Communication Procedures </p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="communication_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="communication_assessmt" class="form-control"></textarea>
    </div>

    <!-- second level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Interactive Readily Shares Appropriate Work Related Information</p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="share_work_info_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="share_work_info_assessmt" class="form-control"></textarea>
    </div>
    

    <!-- 3rd level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Listening Skills Listens Effectively And Provides Information And Guidance To Individuals In An Appropriate And Timely Manner </p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="listening_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="listening_assessmt" class="form-control"></textarea>
    </div>

    <!-- 4th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Verbally Conveys Information In A Clear And Accurate Manner</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="verbally_convery_info_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="verbally_convery_info_assessmt" class="form-control"></textarea>
    </div>

    <!-- 5th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Expresses Ideas And Thoughts Well In Writing</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="express_ideas_well_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="express_ideas_well_assessmt" class="form-control"></textarea>
    </div>
    <!-- 6th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self Assessment</label>
        <select name="communication_average_rating" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    
    <!-- last -->
    <div class="form-group col-md-10 m-t-10">
        <p class="" style="font-family: ui-sans-serif;"><span class="font-italic font-18">Employee's Comment</span> (fill after Supervisor's comments)</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <!-- <label>Employee's Comment </label> -->
        <textarea name="communication_employee_finalcomment" style="height:38px" class="form-control"></textarea>
    </div>
    <div class="col-md-6"></div>

    <!-- next section -->
    <div class="form-group col-md-6 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Competency and Job Knowledge </label>
    </div>
    <div class="col-md-6"></div>
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Demonstrates Knowledge Of Fundamental Methods And Procedure Of Job </p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="knowledge_of_procedure_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="knowledge_of_procedure_assessmt" class="form-control"></textarea>
    </div>

    <!-- second level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Applies The Technical And Professional Skills Needed For The Job</p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="technical_skills_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="technical_skills_assessmt" class="form-control"></textarea>
    </div>

    <!-- 3rd level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Skills: Exhibits Ability To Quickly Learn Job Procedures</p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="quickly_learn_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="quickly_learn_assessmt" class="form-control"></textarea>
    </div>
    
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Requires Minimal Supervision</p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="minimal_supervision_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="minimal_supervision_assessmt" class="form-control"></textarea>
    </div>

    <!-- 4th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Experience: Displays Understanding Of How This Job Relates To Others</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="understanding_job_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="understanding_job_assessmt" class="form-control"></textarea>
    </div>

    <!-- 5th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Technology Skill: Proficient Use Of Work Related Equipment Tools Technology</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="proficient_use_equipmt_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="proficient_use_equipmt_assessmt" class="form-control"></textarea>
    </div>
    <!-- 6th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self Assessment</label>
        <select name="competency_average_rating" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs improvement (Partially meet Job Standards)</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    

    <!-- last -->
    <div class="form-group col-md-10 m-t-10">
        <p class="" style="font-family: ui-sans-serif;"><span class="font-italic font-18">Employee's Comment</span> (fill after Supervisor's comments)</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <!-- <label>Employee's Comment </label> -->
        <textarea name="competency_employee_finalcomment" style="height:38px" class="form-control"></textarea>
    </div>
    <div class="col-md-6"></div>

    <!-- next level -->
    <div class="form-group col-md-6 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Initiative And Motivation Rating </label>
    </div>
    <div class="col-md-6"></div>
    <div class="form-group col-md-9 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Independent: Takes Independent Actions Calculated Risks And Ask For Help When Needed</p>
    </div>
    <div class="col-md-3"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="risk_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="risk_assessmt" class="form-control"></textarea>
    </div>

    <!-- second level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Resourcefulness: Explore And Suggest New Approaches To Effect Departmental Goals</p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="resourceful_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="resourceful_assessmt" class="form-control"></textarea>
    </div>

    <!-- 3rd level -->
    <div class="form-group col-md-9 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Motivating: Undertakes Self Development Activities</p>
    </div>
    <div class="col-md-3"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="motivating_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="motivating_assessmt" class="form-control"></textarea>
    </div>

    <!-- 4th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Volunteers Readily And Seek Increased Responsibilities</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="volunteer_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="volunteer_assessmt" class="form-control"></textarea>
    </div>

    <!-- 6th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self Assessment</label>
        <select name="initiatv_aveg_rating" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    

    <!-- last -->
    <div class="form-group col-md-10 m-t-10">
        <p class="" style="font-family: ui-sans-serif;"><span class="font-italic font-18">Employee's Comment</span> (fill after Supervisor's comments)</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <!-- <label>Employee's Comment </label> -->
        <textarea name="initiatv_employee_final_comment" style="height:38px" class="form-control"></textarea>
    </div>
    <div class="col-md-6"></div>


    <!-- next section -->
    <div class="form-group col-md-6 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Productivity/Execution Rating </label>
    </div>
    <div class="col-md-6"></div>
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Volume: Consistently Handles Assigned Workload </p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="handle_workload_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="handle_workload_assessmt" class="form-control"></textarea>
    </div>

    <!-- second level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Accuracy: Consistently Produce Accurate Work. (Substantial Review Not Required)</p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="accurate_work_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="accurate_work_assessmt" class="form-control"></textarea>
    </div>

    <!-- 3rd level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Self Management: Establishes And Manages Priorities Effectively</p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="self_management_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="self_management_assessmt" class="form-control"></textarea>
    </div>

    <!-- 4th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Timeliness: Works Efficiently And Uses Time And Resources Effectively</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="timeliness_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="timeliness_assessmt" class="form-control"></textarea>
    </div>

    <!-- 5th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Dependability: Consistently Adhere To Set Work Schedule Is Reliable</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="depndability_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="depndability_assessmt" class="form-control"></textarea>
    </div>
    <!-- 5th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Meets Deadline /Targets</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="meet_deadline_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="meet_deadline_assessmt" class="form-control"></textarea>
    </div>
    <!-- 5th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Produce And Maintain Written Job Reports And Records Without Error</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="job_reports_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="job_reports_assessmt" class="form-control"></textarea>
    </div>

    <!-- 5th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Keep Records Reports Accurately Neatly On Time With Little Or No Supervision</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="keep_records_rating" class="form-control custom-select">
            <option disabled selected>Select Here</option>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="keep_records_assessmt" class="form-control"></textarea>
    </div>
    <!-- 6th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self Assessment</label>
        <select name="productivity_average_rating" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs improvement (Partially meet Job Standards)</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    

    <!-- last -->
    <div class="form-group col-md-10 m-t-10">
        <p class="" style="font-family: ui-sans-serif;"><span class="font-italic font-18">Employee's Comment</span> (fill after Supervisor's comments)</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <!-- <label>Employee's Comment </label> -->
        <textarea name="productivity_employee_finalcomment" style="height:38px" class="form-control"></textarea>
    </div>
    <div class="col-md-6"></div>
    <!-- next section -->

    <div class="form-group col-md-6 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Customer Service & Focus Rating </label>
    </div>
    <div class="col-md-6"></div>
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Responds To Requests For Service And Assistance Courteously And Promptly </p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="request_serv_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="request_serv_assessmt" class="form-control"></textarea>
    </div>

    <!-- second level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Pay Attention To Guest Concern And Seek Positive Resolution</p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="attent_toguest_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="attent_toguest_assessmt" class="form-control"></textarea>
    </div>

    <!-- 3rd level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Commits To Doing The Best Job Possible</p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="best_job_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs improvement (Partially meet Job Standards)</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="best_job_assessmt" class="form-control"></textarea>
    </div>

    <!-- 6th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self Assessment</label>
        <select name="customer_serv_average_rating" class="form-control custom-select" disabled>
            <option selected disabled></option> 
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs improvement (Partially meet Job Standards)</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    

    <!-- last -->
    <div class="form-group col-md-10 m-t-10">
        <p class="" style="font-family: ui-sans-serif;"><span class="font-italic font-18">Employee's Comment</span> (fill after Supervisor's comments)</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <!-- <label>Employee's Comment </label> -->
        <textarea name="customer_serv_employee_finalcomment" style="height:38px" class="form-control"></textarea>
    </div>
    <div class="col-md-6"></div>

    <!-- next level -->
    <div class="form-group col-md-6 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Problem Solving Rating</label>
    </div>
    <div class="col-md-6"></div>
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Identifies Problems In A Timely Manner </p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="ident_problem_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="ident_problem_assessmt" class="form-control"></textarea>
    </div>

    <!-- second level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Review Facts And Data Skillfully To Solve Issues Effectively</p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="solve_issues_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="solve_issues_assessmt" class="form-control"></textarea>
    </div>

    <!-- 3rd level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Develops Alternative Solutions</p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="dev_altsolutn_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs improvement (Partially meet Job Standards)</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="dev_altsolutn_assessmt" class="form-control"></textarea>
    </div>
    
    <!-- 6th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Resolves Problems In Early Stages</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="resol_earlprobs_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs improvement (Partially meet Job Standards)</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="resol_earlprobs_assessmt" class="form-control"></textarea>
    </div>
    
    <!-- 6th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Works Well In Group Problem Solving Situations</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="group_work_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs improvement (Partially meet Job Standards)</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="group_work_assessmt" class="form-control"></textarea>
    </div>

    <!-- last -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self Assessment</label>
        <select name="problem_solvn_average_rating" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    

    <!-- last -->
    <div class="form-group col-md-10 m-t-10">
        <p class="" style="font-family: ui-sans-serif;"><span class="font-italic font-18">Employee's Comment</span> (fill after Supervisor's comments)</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <!-- <label>Employee's Comment </label> -->
        <textarea name="problem_solvn_employee_finalcomment" style="height:38px" class="form-control"></textarea>
    </div>
    <div class="col-md-6"></div>
    <!-- next level -->
    <div class="form-group col-md-6 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Resource Management</label>
    </div>
    <div class="col-md-6"></div>
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Care Of Company Assets Including Technology Equipment Budget And Space Where Applicable </p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="care_assets_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="care_assets_assessmt" class="form-control"></textarea>
    </div>

    <!-- last -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self Assessment</label>
        <select name="resource_mangmt_aveg_rating" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    

    <!-- last -->
    <div class="form-group col-md-10 m-t-10">
        <p class="" style="font-family: ui-sans-serif;"><span class="font-italic font-18">Employee's Comment</span> (fill after Supervisor's comments)</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <!-- <label>Employee's Comment </label> -->
        <textarea name="resource_mangmt_employee_finalcomment" style="height:38px" class="form-control"></textarea>
    </div>
    <div class="col-md-6"></div>

    <!-- next level -->
    <div class="form-group col-md-6 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Performance Management</label>
    </div>
    <div class="col-md-6"></div>
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Provides Employees With Performance Standards Expectations And On Going Feedbacks On Progress</p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="perf_std_expec_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="perf_std_expec_assessmt" class="form-control"></textarea>
    </div>

    <!-- last -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self Assessment</label>
        <select name="perf_std_expec_aveg_rating" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    

    <!-- last -->
    <div class="form-group col-md-10 m-t-10">
        <p class="" style="font-family: ui-sans-serif;"><span class="font-italic font-18">Employee's Comment</span> (fill after Supervisor's comments)</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <!-- <label>Employee's Comment </label> -->
        <textarea name="perf_std_expec_employee_finalcomment" style="height:38px" class="form-control"></textarea>
    </div>
    <div class="col-md-6"></div>

    <!-- next section -->
    <div class="form-group col-md-6 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Core Values </label>
    </div>
    <div class="col-md-6"></div>
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Appearance </p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="apperance_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="apperance_assessmt" class="form-control"></textarea>
    </div>

    <!-- second level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Adherence To Policy And Standards</p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="adhto_policy_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="adhto_policy_assessmt" class="form-control"></textarea>
    </div>

    <!-- 3rd level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Comply With Precautions For Safety Of Self And Others</p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="comply_precautn_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="comply_precautn_assessmt" class="form-control"></textarea>
    </div>

    <!-- 4th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Has Knowledge Of Safety Polices & Procedure</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="knolg_policy_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="knolg_policy_assessmt" class="form-control"></textarea>
    </div>

    <!-- 5th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Confidentiality: Changes Approach Or Method To Best Fit The Situation (Discretion)</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="confidetial_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="confidetial_assessmt" class="form-control"></textarea>
    </div>

    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Takes Responsibility For Own Actions</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="responsbty_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="responsbty_assessmt" class="form-control"></textarea>
    </div>

    <!--  -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Schedules Time Off In Advance</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="schedules_timeoff_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="schedules_timeoff_assessmt" class="form-control"></textarea>
    </div>

    <!--  -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Begin Work On Time</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="punctual_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="punctual_assessmt" class="form-control"></textarea>
    </div>
    <!--  -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Keep Absences Within Guidelines</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="absence_guide_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="absence_guide_assessmt" class="form-control"></textarea>
    </div>
    <!--  -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Ensures Work Responsibilities Are Covered When Absent</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="responsiby_absent_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="responsiby_absent_assessmt" class="form-control"></textarea>
    </div>
    <!--  -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Arrives At Meetings And Appointments On Time</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="meeting_punc_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="meeting_punc_assessmt" class="form-control"></textarea>
    </div>
    <!--  -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Leaves Early</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="leave_early_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="leave_early_assessmt" class="form-control"></textarea>
    </div>
    <!--  -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Displays Helpful Attitude</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="helpful_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="helpful_assessmt" class="form-control"></textarea>
    </div>
    <!--  -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Always Follow Supervisor's Work Instructions Effectively No Disciplinary Record</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="superv_instrcn_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="superv_instrcn_assessmt" class="form-control"></textarea>
    </div>
    
    <!-- 6th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self Assessment</label>
        <select name="core_vals_rating" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs improvement (Partially meet Job Standards)</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    

    <!-- last -->
    <div class="form-group col-md-10 m-t-10">
        <p class="" style="font-family: ui-sans-serif;"><span class="font-italic font-18">Employee's Comment</span> (fill after Supervisor's comments)</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <!-- <label>Employee's Comment </label> -->
        <textarea name="core_vals_employee_finalcomment" style="height:38px" class="form-control"></textarea>
    </div>
    <div class="col-md-6"></div>
    <!-- next section -->
    <div class="form-group col-md-6 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Excellence (Quality) Rating </label>
    </div>
    <div class="col-md-6"></div>
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Neatness And Thoroughness Of Work Effort </p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="neat_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="neat_assessmt" class="form-control"></textarea>
    </div>

    <!-- second level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Take Time And Care To Check Work</p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="check_work_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="check_work_assessmt" class="form-control"></textarea>
    </div>

    <!-- 3rd level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Infrequent Mistakes Errors</p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="errors_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="errors_assessmt" class="form-control"></textarea>
    </div>

    <!-- 4th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Applies Feedback To Improve Performance</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="feedback_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="feedback_assessmt" class="form-control"></textarea>
    </div>

    <!-- 5th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Create A Culture Supportive Of Staff Which Fosters Individual Motivation And Team Performance</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="culture_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="culture_assessmt" class="form-control"></textarea>
    </div>
    <!--  -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Staff Development: Develop Necessary Skills In Staff And Maximize Existing Skills In All Staff</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="staffdev_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="staffdev_assessmt" class="form-control"></textarea>
    </div>
    <!--  -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">EEO: Considers Eeo Policies And Objective In Hiring Promoting And Transfer And Reclassifying Staff</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="eeo_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="eeo_assessmt" class="form-control"></textarea>
    </div>
    
    <!-- 6th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self Assessment</label>
        <select name="eeo_aveg_rating" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs improvement (Partially meet Job Standards)</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    

    <!-- last -->
    <div class="form-group col-md-10 m-t-10">
        <p class="" style="font-family: ui-sans-serif;"><span class="font-italic font-18">Employee's Comment</span> (fill after Supervisor's comments)</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <!-- <label>Employee's Comment </label> -->
        <textarea name="eeo_employee_finalcomment" style="height:38px" class="form-control"></textarea>
    </div>
    <div class="col-md-6"></div>
    <!-- next section -->
    <div class="form-group col-md-6 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Team Work And Relationship With Others</label>
    </div>
    <div class="col-md-6"></div>
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Attitude Towards - Others Offers Assistant And Support To Co Workers To Achieve Desired Result </p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="support_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="support_assessmt" class="form-control"></textarea>
    </div>

    <!-- second level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Conflict Prevention - Minimal Level Of Friction Between Co Workers And Supervisor</p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="conflictprevtn_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="conflictprevtn_assessmt" class="form-control"></textarea>
    </div>

    <!-- 3rd level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Works Actively To Resolve Conflicts And Cooperatively In A Group</p>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="conflictresoln_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="conflictresoln_assessmt" class="form-control"></textarea>
    </div>

    <!-- 4th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Human Relations - Establishes And Maintains Productive Rapport With Others At All Level Within And Outside The Department</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="hr_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="hr_assessmt" class="form-control"></textarea>
    </div>

    <!-- 5th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Respect - Exhibits Tact Consideration And Treat Others With Fairness And Dignity</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="respect_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="respect_assessmt" class="form-control"></textarea>
    </div>
    <!-- 6th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self Assessment</label>
        <select name="teamwork_aveg_rating" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs improvement (Partially meet Job Standards)</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    

    <!-- last -->
    <div class="form-group col-md-10 m-t-10">
        <p class="" style="font-family: ui-sans-serif;"><span class="font-italic font-18">Employee's Comment</span> (fill after Supervisor's comments)</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <!-- <label>Employee's Comment </label> -->
        <textarea name="teamwork_employee_finalcomment" style="height:38px" class="form-control"></textarea>
    </div>
    <div class="col-md-6"></div>
    <!--next line -->


    <!--  -->
    <div class="form-group col-md-12 m-t-10 sub-heading">
        <label class=" sub-heading">
            <h5 style="color: #000">Section 3: Professional Development Section Rating</h5>
        </label>
    </div>
    <div class="form-group col-md-8 m-t-10">
        <label style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Describe Your Professional Development Activities Since Last Year Such As Offsite Seminars Classes (Specify If Self Directed Or Required By Your Supervisor), Onsite Training, Peer Training, Management Coaching Or Mentoring On The Job Experience, Exposure To Challenging Projects, Other - Please Describe</label>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Recent Training /Course Attended</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>Rating </label>
        <select name="recent_traingn_rating" class="form-control custom-select">
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self-Assessment </label>
        <textarea name="recent_traingn_assessmt" class="form-control"></textarea>
    </div>
    <!-- 6th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Self Assessment</label>
        <select name="profdev_aveg_rating" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs improvement (Partially meet Job Standards)</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    

    <div class="form-group col-md-6 m-t-10 m-r-10">
        <label>Name Any Other Management Personnel Besides Your Current Supervisor That You Feel Should Provide Input Toward Your Performance Appraisal</label>
        <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="wished_supervisor_id">
            <option selected disabled>Select Here</option>
            <?php foreach ($employees as $value) : ?>
                <option value="<?= $value->em_id ?>"><?= ucwords($value->first_name . ' ' . $value->last_name) ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group col-md-12 m-t-10 empSubmit">
        <button type="submit" class="btn btn-info">Submit</button>
    </div>
    <div class="form-group col-md-6 empSubmit">
        <p>NB: By submtting, you certify that all information provided above are accurate. </p>
    </div>
</form>