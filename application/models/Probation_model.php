<?php

class Probation_model extends CI_Model{

  function __consturct(){
      parent::__construct();
  
  }

  public function addProbation($data){
    $this->db->insert('probation',$data);
  }
  public function updateProbation($id, $data){
    $this->db->where('id', $id);
    $this->db->update('probation', $data);
  }

  public function probationList(){
    $this->db->select('probation.id');
    $this->db->select('probation.created_date');
    $this->db->select('probation.probation_status');
    $this->db->select('employee.em_id');
    $this->db->select('CONCAT(supervisor.first_name," ",supervisor.last_name) AS supervisor_fullname');
    $this->db->select('employee.first_name');
    $this->db->select('employee.last_name');
    $this->db->select('designation.des_name');
    $this->db->select('department.dep_name');
    $this->db->select('branch.branch_name');
    $this->db->from('probation');
    $this->db->join("employee", "employee.em_id = probation.em_id", "left");
    $this->db->join("employee AS supervisor", "supervisor.em_id = probation.supervisor_id", "left");
    $this->db->join("designation", "designation.id = employee.des_id", "left");
    $this->db->join("department", "department.id = employee.dep_id", "left");
    $this->db->join("branch", "branch.id = employee.branch", "left");
    $this->db->order_by('probation.id', 'DESC');
    $data = $this->db->get()->result();
    return $data;
  }
  
  public function empProbationList($id){
    $this->db->select('probation.id');
    $this->db->select('probation.created_date');
    $this->db->select('probation.probation_status');
    $this->db->select('employee.em_id');
    $this->db->select('CONCAT(supervisor.first_name," ",supervisor.last_name) AS supervisor_fullname');
    $this->db->select('employee.first_name');
    $this->db->select('employee.last_name');
    $this->db->select('designation.des_name');
    $this->db->select('department.dep_name');
    $this->db->select('branch.branch_name');
    $this->db->from('probation');
    $this->db->where('probation.em_id', $id);
    $this->db->or_where('probation.supervisor_id', $id);
    $this->db->or_where('probation.hod_id', $id);
    $this->db->or_where('probation.gm_id', $id);
    $this->db->join("employee", "employee.em_id = probation.em_id", "left");
    $this->db->join("employee AS supervisor", "supervisor.em_id = probation.supervisor_id", "left");
    $this->db->join("designation", "designation.id = employee.des_id", "left");
    $this->db->join("department", "department.id = employee.dep_id", "left");
    $this->db->join("branch", "branch.id = employee.branch", "left");
    $this->db->order_by('probation.id', 'DESC');
    $data = $this->db->get()->result();
    return $data;
  }

  public function probationData($id){
    $this->db->select('probation.*');
    $this->db->select('employee.first_name');
    $this->db->select('employee.last_name');
    $this->db->select('designation.des_name');
    $this->db->select('department.dep_name');
    $this->db->select('branch.branch_name');
    $this->db->from('probation');
    $this->db->where('probation.id', $id);
    $this->db->join("employee", "employee.em_id = probation.em_id", "left");
    $this->db->join("designation", "designation.id = employee.des_id", "left");
    $this->db->join("department", "department.id = employee.dep_id", "left");
    $this->db->join("branch", "branch.id = employee.branch", "left");
    $this->db->order_by('probation.id', 'DESC');
    $data = $this->db->get()->row();
    return $data;
  }
    
  public function deleteProbation($id){
    $this->db->delete('probation',array('id'=> $id));
  }
}
?>