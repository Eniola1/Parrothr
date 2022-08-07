<form class="row filledAppraisalForm" action="<?= base_url() ?>appraisal/AddAppraisal" method="post" id="evaluatorAppraisal" enctype="multipart/form-data">
    <input type="hidden" name="id">
    <div class="form-group col-md-12 m-t-10 sub-heading"><label class=" sub-heading">
            <h5 style="color: #000">
                <h5 style="color: #000">Section 1B: Objectives Overall Section Ratings</h5>
        </label>
    </div>
    <div class="form-group col-md-7 m-t-10">
        <label style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">The Objectives That Were Set Out By The Employee To Be Achieved In The Past 12 Months (Or Period Covered By The Appraisal). Score S/He Performance On Each Achievement Provide Comments As Appropriate</label>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Manager's Rating (Financial)</label>
        <select name="objs_financial_manager_rating" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Manager's Comments </label>
        <textarea name="objs_financial_manager_comment" class="form-control" ></textarea>
    </div>

    <div class="form-group col-md-6 m-t-10">
        <label>Manager's Rating (Internal Process)</label>
        <select name="objs_process_manager_rating" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Manager's Comments </label>
        <textarea name="objs_process_manager_comment" class="form-control" ></textarea>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Manager's Rating (Customer)</label>
        <select name="objs_customer_manager_rating" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs improvement (Partially meet Job Standards)</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Manager's Comments </label>
        <textarea name="objs_customer_manager_comment" class="form-control" ></textarea>
    </div>
    
    <div class="form-group col-md-12 m-t-10 sub-heading">
        <label class=" sub-heading">
            <h5 style="color: #000">Section 2: General Performance Requirement</h5>
        </label>
    </div>
    <div class="form-group col-md-8 m-t-10">
        <label style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Evaluate S/He On All Factors That Applies By Scoring S/He Own Capability In The Following Area</label>
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-3 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Communication </label>
    </div>
    <div class="col-md-9"></div>
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Skill And Clarity Selects And Uses Appropriate Communication Procedures </p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="communication_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="communication_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- second level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Interactive Readily Shares Appropriate Work Related Information</p>
    </div>    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="share_work_info_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="share_work_info_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 3rd level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Listening Skills Listens Effectively And Provides Information And Guidance To Individuals In An Appropriate And Timely Manner </p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="listening_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="listening_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 4th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Verbally Conveys Information In A Clear And Accurate Manner</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="verbally_convery_info_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="verbally_convery_info_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 5th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Expresses Ideas And Thoughts Well In Writing</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="express_ideas_well_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="express_ideas_well_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 6th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment</label>
        <select name="communication_average_managerassessmt" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    
    <!-- next section -->
    <div class="form-group col-md-12 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Competency and Job Knowledge </label>
    </div>
    <div class="col-md-6"></div>
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Demonstrates Knowledge Of Fundamental Methods And Procedure Of Job </p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="knowledge_of_procedure_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="knowledge_of_procedure_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- second level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Applies The Technical And Professional Skills Needed For The Job</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="technical_skills_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="technical_skills_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 3rd level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Skills: Exhibits Ability To Quickly Learn Job Procedures</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="quickly_learn_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="quickly_learn_mangercomment" class="form-control" ></textarea>
    </div>
    
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Requires Minimal Supervision</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="minimal_supervision_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="minimal_supervision_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 4th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Experience: Displays Understanding Of How This Job Relates To Others</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="understanding_job_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="understanding_job_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 5th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Technology Skill: Proficient Use Of Work Related Equipment Tools Technology</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="proficient_use_equipmt_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="proficient_use_equipmt_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 6th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment</label>
        <select name="competency_average_managerassessmt" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs improvement (Partially meet Job Standards)</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    
    <!-- next level -->
    <div class="form-group col-md-12 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Initiative And Motivation Rating </label>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="risk_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="risk_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- second level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Resourcefulness: Explore And Suggest New Approaches To Effect Departmental Goals</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="resourceful_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="resourceful_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 3rd level -->
    <div class="form-group col-md-9 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Motivating: Undertakes Self Development Activities</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="motivating_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="motivating_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 4th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Volunteers Readily And Seek Increased Responsibilities</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="volunteer_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="volunteer_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 6th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment</label>
        <select name="initiatv_aveg_managerassessmt" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>

    <!-- next section -->
    <div class="form-group col-md-12 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Productivity/Execution Rating </label>
    </div>

    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="handle_workload_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="handle_workload_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- second level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Accuracy: Consistently Produce Accurate Work. (Substantial Review Not Required)</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="accurate_work_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="accurate_work_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 3rd level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Self Management: Establishes And Manages Priorities Effectively</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="self_management_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="self_management_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 4th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Timeliness: Works Efficiently And Uses Time And Resources Effectively</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="timeliness_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="timeliness_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 5th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Dependability: Consistently Adhere To Set Work Schedule Is Reliable</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="depndability_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="depndability_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 5th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Meets Deadline /Targets</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="meet_deadline_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="meet_deadline_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 5th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Produce And Maintain Written Job Reports And Records Without Error</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="job_reports_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="job_reports_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 5th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Keep Records Reports Accurately Neatly On Time With Little Or No Supervision</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="keep_records_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="keep_records_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 6th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment</label>
        <select name="productivity_average_managerassessmt" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs improvement (Partially meet Job Standards)</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>

    <!-- next section -->

    <div class="form-group col-md-12 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Customer Service & Focus Rating </label>
    </div>
    <div class="col-md-6"></div>
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Responds To Requests For Service And Assistance Courteously And Promptly </p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="request_serv_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="request_serv_mangercomment" class="form-control" ></textarea>
    </div>
    

    <!-- second level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Pay Attention To Guest Concern And Seek Positive Resolution</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="attent_toguest_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="attent_toguest_mangercomment" class="form-control" ></textarea>
    </div>
    

    <!-- 3rd level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Commits To Doing The Best Job Possible</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="best_job_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="best_job_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 6th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment</label>
        <select name="customer_serv_average_managerassessmt" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs improvement (Partially meet Job Standards)</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>

    <!-- next level -->
    <div class="form-group col-md-12 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Problem Solving Rating</label>
    </div>
    <div class="col-md-6"></div>
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Identifies Problems In A Timely Manner </p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="ident_problem_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="ident_problem_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- second level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Review Facts And Data Skillfully To Solve Issues Effectively</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="solve_issues_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="solve_issues_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 3rd level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Develops Alternative Solutions</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="dev_altsolutn_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="dev_altsolutn_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 6th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Resolves Problems In Early Stages</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="resol_earlprobs_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="resol_earlprobs_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 6th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Works Well In Group Problem Solving Situations</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="group_work_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="group_work_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- last -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment</label>
        <select name="problem_solvn_average_managerassessmt" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>

    <!-- next level -->
    <div class="form-group col-md-12 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Resource Management</label>
    </div>
    <div class="col-md-6"></div>
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Care Of Company Assets Including Technology Equipment Budget And Space Where Applicable </p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="care_assets_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="care_assets_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- last -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment</label>
        <select name="resource_mangmt_aveg_managerassessmt" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>

    <!-- next level -->
    <div class="form-group col-md-12 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Performance Management</label>
    </div>
    <div class="col-md-6"></div>
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Provides Employees With Performance Standards Expectations And On Going Feedbacks On Progress</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="perf_std_expec_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="perf_std_expec_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- last -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment</label>
        <select name="perf_std_expec_aveg_managerassessmt" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>

    <!-- next section -->
    <div class="form-group col-md-12 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Core Values </label>
    </div>
    <div class="col-md-6"></div>
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Appearance </p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="apperance_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="apperance_mangercomment" class="form-control" ></textarea>
    </div>
    

    <!-- second level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Adherence To Policy And Standards</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="adhto_policy_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="adhto_policy_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 3rd level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Comply With Precautions For Safety Of Self And Others</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="comply_precautn_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="comply_precautn_mangercomment" class="form-control" ></textarea>
    </div>
    

    <!-- 4th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Has Knowledge Of Safety Polices & Procedure</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="knolg_policy_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="knolg_policy_mangercomment" class="form-control" ></textarea>
    </div>
    

    <!-- 5th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Confidentiality: Changes Approach Or Method To Best Fit The Situation (Discretion)</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="confidetial_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="confidetial_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!--  -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Takes Responsibility For Own Actions</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="responsbty_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="responsbty_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!--  -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Schedules Time Off In Advance</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="schedules_timeoff_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="schedules_timeoff_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!--  -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Begin Work On Time</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="punctual_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="punctual_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!--  -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Keep Absences Within Guidelines</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="absence_guide_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="absence_guide_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!--  -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Ensures Work Responsibilities Are Covered When Absent</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="responsiby_absent_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="responsiby_absent_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!--  -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Arrives At Meetings And Appointments On Time</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="meeting_punc_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="meeting_punc_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!--  -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Leaves Early</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="leave_early_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="leave_early_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!--  -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Displays Helpful Attitude</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="helpful_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="helpful_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!--  -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Always Follow Supervisor's Work Instructions Effectively No Disciplinary Record</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="superv_instrcn_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="superv_instrcn_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!--  -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Has Disciplinary Record</p>
    </div>
    <div class="col-md-2"></div>
    <div class="form-group col-md-6 m-t-10">
        <label>How many?</label>
        <input name="discplinary_record" class="form-control">
    </div>
    <!-- 6th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment</label>
        <select name="core_vals_managerassessmt" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs improvement (Partially meet Job Standards)</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>

    
    <!-- next section -->
    <div class="form-group col-md-12 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Excellence (Quality) Rating </label>
    </div>
    <div class="col-md-6"></div>
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Neatness And Thoroughness Of Work Effort </p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="neat_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="neat_mangercomment" class="form-control" ></textarea>
    </div>
    

    <!-- second level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Take Time And Care To Check Work</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="check_work_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="check_work_mangercomment" class="form-control" ></textarea>
    </div>
    

    <!-- 3rd level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Infrequent Mistakes Errors</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="errors_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="errors_mangercomment" class="form-control" ></textarea>
    </div>
    

    <!-- 4th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Applies Feedback To Improve Performance</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="feedback_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="feedback_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 5th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Create A Culture Supportive Of Staff Which Fosters Individual Motivation And Team Performance</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="culture_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="culture_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!--  -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Staff Development: Develop Necessary Skills In Staff And Maximize Existing Skills In All Staff</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="staffdev_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="staffdev_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!--  -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">EEO: Considers Eeo Policies And Objective In Hiring Promoting And Transfer And Reclassifying Staff</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="eeo_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="eeo_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 6th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment</label>
        <select name="eeo_aveg_managerassessmt" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs improvement (Partially meet Job Standards)</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>

    <!-- next section -->
    <div class="form-group col-md-12 m-t-10">
        <label style="background: transparent;font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;border-bottom: 1px solid #1e007f">Team Work And Relationship With Others</label>
    </div>
    <div class="col-md-6"></div>
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Attitude Towards - Others Offers Assistant And Support To Co Workers To Achieve Desired Result </p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="support_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="support_mangercomment" class="form-control" ></textarea>
    </div>
    

    <!-- second level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Conflict Prevention - Minimal Level Of Friction Between Co Workers And Supervisor</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="conflictprevtn_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="conflictprevtn_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 3rd level -->
    <div class="form-group col-md-8 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Works Actively To Resolve Conflicts And Cooperatively In A Group</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="conflictresoln_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="conflictresoln_mangercomment" class="form-control" ></textarea>
    </div>
    

    <!-- 4th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Human Relations - Establishes And Maintains Productive Rapport With Others At All Level Within And Outside The Department</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="hr_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="hr_mangercomment" class="form-control" ></textarea>
    </div>
    

    <!-- 5th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Respect - Exhibits Tact Consideration And Treat Others With Fairness And Dignity</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="respect_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="respect_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 6th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment</label>
        <select name="teamwork_aveg_managerassessmt" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs improvement (Partially meet Job Standards)</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>

    <!--  -->
    <div class="form-group col-md-12 m-t-10 sub-heading">
        <label class=" sub-heading">
            <h5 style="color: #000">Section 3: Professional Development Section Rating</h5>
        </label>
    </div>
    <div class="form-group col-md-8 m-t-10">
        <label style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Describe S/He Professional Development Activities Since Last Year Such As Offsite Seminars Classes, Onsite Training, Peer Training, Management Coaching Or Mentoring On The Job Experience, Exposure To Challenging Projects, Other - Please Describe</label>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment </label>
        <select name="recent_traingn_managerassessmt" class="form-control custom-select" >
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs Improvement Partially Meet Job Standards</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-6 m-t-10">
        <label>Supervisor's Comments / Explanation </label>
        <textarea name="recent_traingn_mangercomment" class="form-control" ></textarea>
    </div>
    
    <!-- 6th level -->
    <div class="form-group col-md-10 m-t-10">
        <p style="font-style: italic;font-size: 18px;font-family: ui-sans-serif;padding: 0;background: transparent;">Average Score For This Section</p>
    </div>
    
    <div class="form-group col-md-6 m-t-10">
        <label>Evaluator Assessment</label>
        <select name="profdev_aveg_managerassessmt" class="form-control custom-select" disabled>
            <option selected disabled></option>
            <option value="5">Excellent (Consistently Exceed Job Standards)</option>
            <option value="4">Outstanding (Frequently Exceeds Job Standards)</option>
            <option value="3">Satisfactory (Meets Job Standards</option>
            <option value="2">Needs improvement (Partially meet Job Standards)</option>
            <option value="1">Unacceptable Fails To Meet Standards</option>
        </select>
    </div>
    <div class="form-group col-md-12 m-t-10 evalSubmit">
        <input type="hidden" name="overall_rating_sec1">
        <input type="hidden" name="overall_rating_sec2">
        <input type="hidden" name="overall_rating_sec3">
        <input type="hidden" name="total_score">
        <button type="submit" class="btn btn-info">Submit</button>
    </div>
    <div class="form-group col-md-6 evalSubmit">
        <p>NB: By submtting, you certify that all information provided above are accurate. </p>
    </div>
</form>
