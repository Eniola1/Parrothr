<?php

class Appraisal_model extends CI_Model{

  function __consturct(){
    parent::__construct();

  }

  public function addAppraisal($data){
    $this->db->insert('appraisal',$data);
  }

  public function addPerfAppraisal($data){
    $this->db->insert('performance_appraisal',$data);
  }
  
  public function updatePerfAppraisal($id, $data){
    $this->db->where('id', $id);
    $this->db->update('performance_appraisal', $data);
  }

  public function perfAppraisalList(){
    $this->db->select('performance_appraisal.id');
    $this->db->select('performance_appraisal.type_of_appraisal');
    $this->db->select('performance_appraisal.review_period');
    $this->db->select('performance_appraisal.created_date');
    $this->db->select('performance_appraisal.appraisal_status');
    $this->db->select('employee.em_id');
    $this->db->select('CONCAT(manager.first_name," ",manager.last_name) AS manager_fullname');
    $this->db->select('employee.first_name');
    $this->db->select('employee.last_name');
    $this->db->select('designation.des_name');
    $this->db->select('department.dep_name');
    $this->db->select('branch.branch_name');
    $this->db->from('performance_appraisal');
    $this->db->join("employee", "employee.em_id = performance_appraisal.em_id", "left");
    $this->db->join("employee AS manager", "manager.em_id = performance_appraisal.manager_id", "left");
    $this->db->join("designation", "designation.id = employee.des_id", "left");
    $this->db->join("department", "department.id = employee.dep_id", "left");
    $this->db->join("branch", "branch.id = employee.branch", "left");
    $data = $this->db->get()->result();
    return $data;
  }

  public function employeePerfAppraisalList($id){
    $this->db->select('performance_appraisal.id');
    $this->db->select('performance_appraisal.type_of_appraisal');
    $this->db->select('performance_appraisal.review_period');
    $this->db->select('performance_appraisal.created_date');
    $this->db->select('performance_appraisal.appraisal_status');
    $this->db->select('employee.em_id');
    $this->db->select('manager.em_id');
    $this->db->select('CONCAT(manager.first_name," ",manager.last_name) AS manager_fullname');
    $this->db->select('employee.first_name');
    $this->db->select('employee.last_name');
    $this->db->select('designation.des_name');
    $this->db->select('department.dep_name');
    $this->db->select('branch.branch_name');
    $this->db->from('performance_appraisal');
    // $this->db->where('performance_appraisal.id', $id);
    $this->db->where('performance_appraisal.em_id', $id);
    $this->db->join("employee", "employee.em_id = performance_appraisal.em_id", "left");
    $this->db->join("employee AS manager", "manager.em_id = performance_appraisal.manager_id", "left");
    $this->db->join("designation", "designation.id = employee.des_id", "left");
    $this->db->join("department", "department.id = employee.dep_id", "left");
    $this->db->join("branch", "branch.id = employee.branch", "left");
    $data = $this->db->get()->result();
    return $data;
  }

  public function perfAppraisalData($id){
    $this->db->select('performance_appraisal.*');
    $this->db->select('CONCAT(manager.first_name," ",manager.last_name) AS manager_fullname');
    $this->db->select('employee.first_name');
    $this->db->select('employee.last_name');
    $this->db->select('designation.des_name');
    $this->db->select('department.dep_name');
    $this->db->select('branch.branch_name');
    $this->db->from('performance_appraisal');
    $this->db->where('performance_appraisal.id', $id);
    $this->db->join("employee", "employee.em_id = performance_appraisal.em_id", "left");
    $this->db->join("employee AS manager", "manager.em_id = performance_appraisal.manager_id", "left");
    $this->db->join("designation", "designation.id = employee.des_id", "left");
    $this->db->join("department", "department.id = employee.dep_id", "left");
    $this->db->join("branch", "branch.id = employee.branch", "left");
    $data = $this->db->get()->row();
    return $data;
  }

  public function deleteAppraisal($id){
    $this->db->delete('performance_appraisal',array('id'=> $id));
  }

  public function addPeerReview($data){
    $this->db->insert('peer_review',$data);
  }
  
  public function updatePeerReview($id, $data){
    $this->db->where('id', $id);
    $this->db->update('peer_review', $data);

  }

  public function peerReviewList(){
    $this->db->select('peer_review.id');
    $this->db->select('peer_review.type_of_appraisal');
    $this->db->select('peer_review.review_start');
    $this->db->select('peer_review.review_end');
    $this->db->select('peer_review.review_status');
    $this->db->select('employee.em_id');
    $this->db->select('CONCAT(peer.first_name," ",peer.last_name) AS peer_fullname');
    $this->db->select('employee.first_name');
    $this->db->select('employee.last_name');
    $this->db->select('designation.des_name');
    $this->db->select('department.dep_name');
    $this->db->select('branch.branch_name');
    $this->db->from('peer_review');
    $this->db->join("employee", "employee.em_id = peer_review.em_id", "left");
    $this->db->join("employee AS peer", "peer.em_id = peer_review.peer_id", "left");
    $this->db->join("designation", "designation.id = employee.des_id", "left");
    $this->db->join("department", "department.id = employee.dep_id", "left");
    $this->db->join("branch", "branch.id = employee.branch", "left");
    $this->db->order_by('peer_review.id', 'DESC');
    $data = $this->db->get()->result();
    return $data;
  }
  
public function empPeerReviewList($id){
  $this->db->select('peer_review.id');
  $this->db->select('peer_review.type_of_appraisal');
  $this->db->select('peer_review.review_start');
  $this->db->select('peer_review.review_end');
  $this->db->select('peer_review.review_status');
  $this->db->select('employee.em_id');
  $this->db->select('CONCAT(peer.first_name," ",peer.last_name) AS peer_fullname');
  $this->db->select('employee.first_name');
  $this->db->select('employee.last_name');
  $this->db->from('peer_review');
  $this->db->where('peer_review.em_id', $id);
  $this->db->or_where('peer_review.peer_id', $id);
  $this->db->or_where('peer_review.supervisor_id', $id);
  $this->db->join("employee", "employee.em_id = peer_review.em_id", "left");
  $this->db->join("employee AS peer", "peer.em_id = peer_review.peer_id", "left");
  $this->db->order_by('peer_review.id', 'DESC');
  $data = $this->db->get()->result();
  return $data;
}

public function peerReviewData($id){
  $this->db->select('peer_review.*');
  $this->db->select('CONCAT(peer.first_name," ",peer.last_name) AS peer_fullname');
  $this->db->select('employee.first_name');
  $this->db->select('employee.last_name');
  $this->db->select('designation.des_name');
  $this->db->select('department.dep_name');
  $this->db->select('branch.branch_name');
  $this->db->from('peer_review');
  $this->db->where('peer_review.id', $id);
  $this->db->join("employee", "employee.em_id = peer_review.em_id", "left");
  $this->db->join("employee AS peer", "peer.em_id = peer_review.peer_id", "left");
  $this->db->join("designation", "designation.id = employee.des_id", "left");
  $this->db->join("department", "department.id = employee.dep_id", "left");
  $this->db->join("branch", "branch.id = employee.branch", "left");
  $data = $this->db->get()->row();
  return $data;
}

public function deletePeerReview($id){
  $this->db->delete('peer_review',array('id'=> $id));
}

/**Used for adding a huge number of columns into any table */
public function addColumns(){
  $this->load->dbforge();
  $columns = [
    'perf_note',
    'perf_imprv',
    'keep_doing',
    'stop_doing',
    'start_doing',
    'prod_wrk_vol',
    'prod_wrk_lvl',
    'prod_expectn',
    'prod_rating',
    'prod_comment',
    'qual_time_wrk',
    'qual_error',
    'qual_accu',
    'qual_rating',
    'qual_comment',
    'know_procd',
    'know_probs',
    'know_retain',
    'know_rating',
    'know_comment',
    'team_frictn',
    'team_disagree',
    'team_help',
    'team_rating',
    'team_comment',
    'init_funcs',
    'init_trust',
    'init_skills',
    'init_rating',
    'init_comment',
    'recd_accu',
    'recd_complete',
    'recd_rating',
    'recd_comment',
    'cust_attentn',
    'cust_attitude',
    'cust_rating',
    'cust_comment',
    'safe_know',
    'safe_comply',
    'safe_rating',
    'safe_comment',
    'atnd_reg',
    'atnd_disrup',
    'atnd_reason',
    'atnd_rating',
    'atnd_comment',
    'lead_delegate',
    'lead_relatnshp',
    'lead_plan',
    'lead_rating',
    'lead_comment',
    'overall_rating',
    'focus_areas',
    'emp_comment',
    'sec_lvl_supvisr_comment',
  ];
  $prefs = ['type' => 'TEXT', 'default' => NULL];
  $fields = array_fill_keys($columns, $prefs);
  // print_r($fields);exit;
  $this->dbforge->add_column('', $fields);

  echo 'Done successfully';
}
    
}
