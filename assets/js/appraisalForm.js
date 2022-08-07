/**
 * Appraisal JS
 * Purpose of populating the long appraisal form
 * Author: Ochiabuto Jideofor
 */

// calculate array sum
function getSum(total, num) {
    return total + Math.round(num);
}

/**Change average as inputs are filled */
$(".filledAppraisalForm").change(function(){

    /**---------------Section 1------------------ */
    /**Objectives Total from Evaluator*/
    let sec1 = [
        $('.filledAppraisalForm').find('[name = "objs_financial_manager_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "objs_process_manager_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "objs_customer_manager_rating"]').val(),
    ];
    const sec1Total = sec1.reduce(getSum, 0);

    /**----------------Section 2-------------------------*/
    /**Communication average */
    let comEmpArr = [
        $('.filledAppraisalForm').find('[name = "communication_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "share_work_info_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "listening_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "verbally_convery_info_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "express_ideas_well_rating"]').val(),
    ];
    let comEvaArr = [
        $('.filledAppraisalForm').find('[name = "communication_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "share_work_info_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "listening_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "verbally_convery_info_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "express_ideas_well_managerassessmt"]').val(),
    ];
    const comEmpAve = Math.round(comEmpArr.reduce(getSum, 0)/comEmpArr.length);
    const comEvaAve = Math.round(comEvaArr.reduce(getSum, 0)/comEvaArr.length);
    $('.filledAppraisalForm').find('[name = "communication_average_rating"]').val(comEmpAve);
    $('.filledAppraisalForm').find('[name = "communication_average_managerassessmt"]').val(comEvaAve);


    /**Competency Average */
    let compEmpArr = [
        $('.filledAppraisalForm').find('[name = "knowledge_of_procedure_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "technical_skills_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "quickly_learn_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "minimal_supervision_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "understanding_job_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "proficient_use_equipmt_rating"]').val(),
    ];
    let compEvaArr = [
        $('.filledAppraisalForm').find('[name = "knowledge_of_procedure_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "technical_skills_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "quickly_learn_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "minimal_supervision_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "understanding_job_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "proficient_use_equipmt_managerassessmt"]').val(),
    ];
    const compEmpAve = Math.round(compEmpArr.reduce(getSum, 0)/compEmpArr.length);
    const compEvaAve = Math.round(compEvaArr.reduce(getSum, 0)/compEvaArr.length);
    $('.filledAppraisalForm').find('[name = "competency_average_rating"]').val(compEmpAve);
    $('.filledAppraisalForm').find('[name = "competency_average_managerassessmt"]').val(compEvaAve);


    /**Initiative Average */
    let iniEmpArr = [
        $('.filledAppraisalForm').find('[name = "risk_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "resourceful_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "motivating_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "volunteer_rating"]').val(),
    ];
    let iniEvaArr = [
        $('.filledAppraisalForm').find('[name = "risk_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "resourceful_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "motivating_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "volunteer_managerassessmt"]').val(),
    ];
    const iniEmpAve = Math.round(iniEmpArr.reduce(getSum, 0)/iniEmpArr.length);
    const iniEvaAve = Math.round(iniEvaArr.reduce(getSum, 0)/iniEvaArr.length);
    $('.filledAppraisalForm').find('[name = "initiatv_aveg_rating"]').val(iniEmpAve);
    $('.filledAppraisalForm').find('[name = "initiatv_aveg_managerassessmt"]').val(iniEvaAve);

    /**Productivity Average */
    let prodEmpArr = [
        $('.filledAppraisalForm').find('[name = "handle_workload_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "accurate_work_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "self_management_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "timeliness_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "depndability_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "meet_deadline_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "job_reports_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "keep_records_rating"]').val(),
    ];
    let prodEvaArr = [
        $('.filledAppraisalForm').find('[name = "handle_workload_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "accurate_work_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "self_management_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "timeliness_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "depndability_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "meet_deadline_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "job_reports_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "keep_records_managerassessmt"]').val(),
    ];
    const prodEmpAve = Math.round(prodEmpArr.reduce(getSum, 0)/prodEmpArr.length);
    const prodEvaAve = Math.round(prodEvaArr.reduce(getSum, 0)/prodEvaArr.length);
    $('.filledAppraisalForm').find('[name = "productivity_average_rating"]').val(prodEmpAve);
    $('.filledAppraisalForm').find('[name = "productivity_average_managerassessmt"]').val(prodEvaAve);
    
    /**Customer Service Average */
    let custEmpArr = [
        $('.filledAppraisalForm').find('[name = "request_serv_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "attent_toguest_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "best_job_rating"]').val(),
    ];
    let custEvaArr = [
        $('.filledAppraisalForm').find('[name = "request_serv_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "attent_toguest_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "best_job_managerassessmt"]').val(),
    ];
    const custEmpAve = Math.round(custEmpArr.reduce(getSum, 0)/custEmpArr.length);
    const custEvaAve = Math.round(custEvaArr.reduce(getSum, 0)/custEvaArr.length);
    $('.filledAppraisalForm').find('[name = "customer_serv_average_rating"]').val(custEmpAve);
    $('.filledAppraisalForm').find('[name = "customer_serv_average_managerassessmt"]').val(custEvaAve);
    
    /**Problem Solving Average */
    let probEmpArr = [
        $('.filledAppraisalForm').find('[name = "ident_problem_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "solve_issues_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "dev_altsolutn_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "resol_earlprobs_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "group_work_rating"]').val(),
    ];
    let probEvaArr = [
        $('.filledAppraisalForm').find('[name = "ident_problem_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "solve_issues_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "dev_altsolutn_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "resol_earlprobs_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "group_work_managerassessmt"]').val(),
    ];
    const probEmpAve = Math.round(probEmpArr.reduce(getSum, 0)/probEmpArr.length);
    const probEvaAve = Math.round(probEvaArr.reduce(getSum, 0)/probEvaArr.length);
    $('.filledAppraisalForm').find('[name = "problem_solvn_average_rating"]').val(probEmpAve);
    $('.filledAppraisalForm').find('[name = "problem_solvn_average_managerassessmt"]').val(probEvaAve);
    
    /**Resource Management Average */
    let rescEmpArr = [
        $('.filledAppraisalForm').find('[name = "care_assets_rating"]').val(),
    ];
    let rescEvaArr = [
        $('.filledAppraisalForm').find('[name = "care_assets_managerassessmt"]').val(),
    ];
    const rescEmpAve = Math.round(rescEmpArr.reduce(getSum, 0)/rescEmpArr.length);
    const rescEvaAve = Math.round(rescEvaArr.reduce(getSum, 0)/rescEvaArr.length);
    $('.filledAppraisalForm').find('[name = "resource_mangmt_aveg_rating"]').val(rescEmpAve);
    $('.filledAppraisalForm').find('[name = "resource_mangmt_aveg_managerassessmt"]').val(rescEvaAve);
    
    /**Performance Management Average */
    let perfEmpArr = [
        $('.filledAppraisalForm').find('[name = "perf_std_expec_rating"]').val(),
    ];
    let perfEvaArr = [
        $('.filledAppraisalForm').find('[name = "perf_std_expec_managerassessmt"]').val(),
    ];
    const perfEmpAve = Math.round(perfEmpArr.reduce(getSum, 0)/perfEmpArr.length);
    const perfEvaAve = Math.round(perfEvaArr.reduce(getSum, 0)/perfEvaArr.length);
    $('.filledAppraisalForm').find('[name = "perf_std_expec_aveg_rating"]').val(perfEmpAve);
    $('.filledAppraisalForm').find('[name = "perf_std_expec_aveg_managerassessmt"]').val(perfEvaAve);
    
    /**Core Values Average */
    let coreEmpArr = [
        $('.filledAppraisalForm').find('[name = "apperance_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "adhto_policy_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "comply_precautn_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "knolg_policy_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "confidetial_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "responsbty_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "schedules_timeoff_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "punctual_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "absence_guide_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "responsiby_absent_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "meeting_punc_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "leave_early_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "helpful_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "superv_instrcn_rating"]').val(),
    ];
    let coreEvaArr = [
        $('.filledAppraisalForm').find('[name = "apperance_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "adhto_policy_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "comply_precautn_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "knolg_policy_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "confidetial_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "responsbty_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "schedules_timeoff_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "punctual_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "absence_guide_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "responsiby_absent_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "meeting_punc_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "leave_early_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "helpful_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "superv_instrcn_managerassessmt"]').val(),
    ];
    const coreEmpAve = Math.round(coreEmpArr.reduce(getSum, 0)/coreEmpArr.length);
    const coreEvaAve = Math.round(coreEvaArr.reduce(getSum, 0)/coreEvaArr.length);
    $('.filledAppraisalForm').find('[name = "core_vals_rating"]').val(coreEmpAve);
    $('.filledAppraisalForm').find('[name = "core_vals_managerassessmt"]').val(coreEvaAve);
    
    /**Excellence Average */
    let excEmpArr = [
        $('.filledAppraisalForm').find('[name = "neat_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "check_work_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "errors_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "feedback_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "culture_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "staffdev_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "eeo_rating"]').val(),
    ];
    let excEvaArr = [
        $('.filledAppraisalForm').find('[name = "neat_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "check_work_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "errors_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "feedback_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "culture_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "staffdev_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "eeo_managerassessmt"]').val(),
    ];
    const excEmpAve = Math.round(excEmpArr.reduce(getSum, 0)/excEmpArr.length);
    const excEvaAve = Math.round(excEvaArr.reduce(getSum, 0)/excEvaArr.length);
    $('.filledAppraisalForm').find('[name = "eeo_aveg_rating"]').val(excEmpAve);
    $('.filledAppraisalForm').find('[name = "eeo_aveg_managerassessmt"]').val(excEvaAve);
    
    /**Team Work Average */
    let teamEmpArr = [
        $('.filledAppraisalForm').find('[name = "support_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "conflictprevtn_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "conflictresoln_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "hr_rating"]').val(),
        $('.filledAppraisalForm').find('[name = "respect_rating"]').val(),
    ];
    let teamEvaArr = [
        $('.filledAppraisalForm').find('[name = "support_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "conflictprevtn_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "conflictresoln_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "hr_managerassessmt"]').val(),
        $('.filledAppraisalForm').find('[name = "respect_managerassessmt"]').val(),
    ];
    const teamEmpAve = Math.round(teamEmpArr.reduce(getSum, 0)/teamEmpArr.length);
    const teamEvaAve = Math.round(teamEvaArr.reduce(getSum, 0)/teamEvaArr.length);
    $('.filledAppraisalForm').find('[name = "teamwork_aveg_rating"]').val(teamEmpAve);
    $('.filledAppraisalForm').find('[name = "teamwork_aveg_managerassessmt"]').val(teamEvaAve);

    /**Section 2 total from Evaluator */
    let sec2 = [
        ...comEvaArr,
        ...compEvaArr,
        ...iniEvaArr,
        ...prodEvaArr,
        ...custEvaArr,
        ...probEvaArr,
        ...rescEvaArr,
        ...perfEvaArr,
        ...coreEvaArr,
        ...excEvaArr,
        ...teamEvaArr,
    ];
    const sec2Total = sec2.reduce(getSum, 0);

    /**---------------Section 3------------------- */
    /**Professional Development Average */
    let profEmpArr = [
        $('.filledAppraisalForm').find('[name = "recent_traingn_rating"]').val(),
    ];
    let profEvaArr = [
        $('.filledAppraisalForm').find('[name = "recent_traingn_managerassessmt"]').val(),
    ];
    const profEmpAve = Math.round(profEmpArr.reduce(getSum, 0)/profEmpArr.length);
    const profEvaAve = Math.round(profEvaArr.reduce(getSum, 0)/profEvaArr.length);
    $('.filledAppraisalForm').find('[name = "profdev_aveg_rating"]').val(profEmpAve);
    $('.filledAppraisalForm').find('[name = "profdev_aveg_managerassessmt"]').val(profEvaAve);

    /**Section 3 total from Evaluator */
    let sec3 = [
        ...profEvaArr,
    ];
    const sec3Total = sec3.reduce(getSum, 0);

    /**-------------------Overall Rating by percentage--------------------- */
    //Section 1 -------------50%
    const sec1Rating = (sec1Total/(sec1.length * 5)) * 50;
    //Section 2 Rating ------45%
    const sec2Rating = (sec2Total/(sec2.length * 5)) * 45;
    //Section 3 Rating ------5%
    const sec3Rating = (sec3Total/(sec3.length * 5)) * 5;

    //Overall Rating
    const overallRating = sec1Rating + sec2Rating + sec3Rating;

    //Insert Values
    $('.filledAppraisalForm').find('[name = "overall_rating_sec1"]').val(sec1Rating.toFixed(2));
    $('.filledAppraisalForm').find('[name = "overall_rating_sec2"]').val(sec2Rating.toFixed(2));
    $('.filledAppraisalForm').find('[name = "overall_rating_sec3"]').val(sec3Rating.toFixed(2));
    $('.filledAppraisalForm').find('[name = "total_score"]').val(overallRating.toFixed(2));

});