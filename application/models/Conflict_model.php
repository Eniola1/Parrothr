<?php

class Conflict_model extends CI_Model{

  function __consturct(){
      parent::__construct();
  
  }

  public function addConflictOfInterest($data){
    $this->db->insert('conflict_of_interest',$data);
  }

  public function showConflictOfInterest(){
    $this->db->select('conflict_of_interest.*');
    $this->db->select('employee.em_id');
    $this->db->select('employee.first_name');
    $this->db->select('employee.last_name');
    $this->db->select('designation.des_name');
    $this->db->select('department.dep_name');
    $this->db->select('branch.branch_name');
    $this->db->from('conflict_of_interest');
    $this->db->join("employee", "employee.em_id = conflict_of_interest.emp_id", "left");
    $this->db->join("designation", "designation.id = employee.des_id", "left");
    $this->db->join("department", "department.id = employee.dep_id", "left");
    $this->db->join("branch", "branch.id = employee.branch", "left");
    $query = $this->db->get();

    return $query->result();
  }
  
  public function personalConflictOfInterest($id){
    $this->db->select('conflict_of_interest.*');
    $this->db->from('conflict_of_interest');
    $this->db->where('emp_id', $id);
    $query = $this->db->get();
    return $query->result();
  }

  public function getConflictInterestById($id){
    $this->db->select('conflict_of_interest.*');
    $this->db->select('employee.first_name');
    $this->db->select('employee.last_name');
    $this->db->select('branch.branch_name');
    $this->db->select('department.dep_name');
    $this->db->select('designation.des_name');
    $this->db->from('conflict_of_interest');
    $this->db->where('conflict_of_interest.id', $id);
    $this->db->join('employee', 'employee.em_id = conflict_of_interest.emp_id','left');
    $this->db->join('branch', 'branch.id = employee.branch','left');
    $this->db->join('department', 'department.id = employee.dep_id','left');
    $this->db->join('designation', 'designation.id = employee.des_id','left');
    $result = $this->db->get()->row();
    return $result; 
  }

  public function deleteConflict($id){
    $this->db->delete('conflict_of_interest',array('id'=> $id));
  }
    
}
?>