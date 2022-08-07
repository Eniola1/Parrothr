<?php

class Exit_model extends CI_Model{

  function __consturct(){
      parent::__construct();
  
  }

  public function exitPass($data){
    $this->db->insert('exit_pass',$data);
  }

  public function exitInterview($data){
    $this->db->insert('exit_interview',$data);
  }

  public function showExitPass(){
    $this->db->select('exit_pass.*');
    $this->db->select('employee.em_id');
    $this->db->select('employee.first_name');
    $this->db->select('employee.last_name');
    $this->db->select('designation.des_name');
    $this->db->select('department.dep_name');
    $this->db->select('branch.branch_name');
    $this->db->from('exit_pass');
    $this->db->where('exit_pass.pass_status', 'Pending');
    $this->db->join("employee", "employee.em_id = exit_pass.emp_id", "left");
    $this->db->join("designation", "designation.id = employee.des_id", "left");
    $this->db->join("department", "department.id = employee.dep_id", "left");
    $this->db->join("branch", "branch.id = employee.branch", "left");
    $this->db->order_by('exit_pass.id', 'DESC');
    $query = $this->db->get();

    return $query->result();
  }
  
  public function showExitPassReport(){
    $this->db->select('exit_pass.*');
    $this->db->select('employee.em_id');
    $this->db->select('employee.first_name');
    $this->db->select('employee.last_name');
    $this->db->select('designation.des_name');
    $this->db->select('department.dep_name');
    $this->db->select('branch.branch_name');
    $this->db->from('exit_pass');
    $this->db->where('exit_pass.pass_status !=', 'Pending');
    $this->db->join("employee", "employee.em_id = exit_pass.emp_id", "left");
    $this->db->join("designation", "designation.id = employee.des_id", "left");
    $this->db->join("department", "department.id = employee.dep_id", "left");
    $this->db->join("branch", "branch.id = employee.branch", "left");
    $this->db->order_by('exit_pass.id', 'DESC');
    $query = $this->db->get();

    return $query->result();
  }

  public function showEmployeeExitPassReport($id){
    $this->db->select('exit_pass.*');
    $this->db->from('exit_pass');
    $this->db->where('emp_id', $id);
    $this->db->order_by('exit_pass.id', 'DESC');
    $query = $this->db->get();
    return $query->result();
  }
  
  public function showExitInterview(){
    $this->db->select('exit_interview.*');
    $this->db->select('employee.em_id');
    $this->db->select('employee.first_name');
    $this->db->select('employee.last_name');
    $this->db->select('designation.des_name');
    $this->db->select('department.dep_name');
    $this->db->select('branch.branch_name');
    $this->db->from('exit_interview');
    $this->db->join("employee", "employee.em_id = exit_interview.em_id", "left");
    $this->db->join("designation", "designation.id = employee.des_id", "left");
    $this->db->join("department", "department.id = employee.dep_id", "left");
    $this->db->join("branch", "branch.id = employee.branch", "left");
    $this->db->order_by('exit_interview.id', 'DESC');

    $query = $this->db->get();

    return $query->result();
  }

  public function personalExitInterview($id){
    $this->db->select('exit_interview.*');
    $this->db->select('CONCAT(manager.first_name," ",manager.last_name) AS manager_fullname');
    $this->db->from('exit_interview');
    $this->db->where('exit_interview.em_id',$id);
    $this->db->join("employee AS manager", "manager.em_id = exit_interview.manager_id", "left");  
    $this->db->order_by('exit_interview.id', 'DESC');
    $query = $this->db->get();

    return $query->result();
  }

  public function getExitPass($id){
    $this->db->select('exit_pass.*');
    $this->db->select('employee.first_name');
    $this->db->select('employee.last_name');
    $this->db->from('exit_pass');
    $this->db->where('exit_pass.id', $id);
    $this->db->join('employee', 'employee.em_id = exit_pass.emp_id','left');
    $data = $this->db->get()->row();
    return $data;
  }
  
  public function getExitInterview($id){
    $this->db->select('exit_interview.*');
    $this->db->select('employee.em_id');
    $this->db->select('CONCAT(manager.first_name," ",manager.last_name) AS manager_fullname');
    $this->db->select('employee.first_name');
    $this->db->select('employee.last_name');
    $this->db->select('designation.des_name');
    $this->db->select('department.dep_name');
    $this->db->select('branch.branch_name');
    $this->db->from('exit_interview');
    $this->db->where('exit_interview.id', $id);
    $this->db->or_where('exit_interview.em_id', $id);
    $this->db->join("employee", "employee.em_id = exit_interview.em_id", "left");
    $this->db->join("employee AS manager", "manager.em_id = exit_interview.manager_id", "left");
    $this->db->join("designation", "designation.id = employee.des_id", "left");
    $this->db->join("department", "department.id = employee.dep_id", "left");
    $this->db->join("branch", "branch.id = employee.branch", "left");
    $data = $this->db->get()->row();
    return $data;
  }

  public function updateExitPass($id, $data){
    $this->db->where('id', $id);
      $this->db->update('exit_pass', $data); 
  }
  
  public function deleteExitInterview($id){
    $this->db->delete('exit_interview',array('id'=> $id));
  }
    
}
?>