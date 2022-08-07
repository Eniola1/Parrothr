<?php

class Organization_model extends CI_Model{


    	function __consturct(){
    	   parent::__construct();
    	
    	}
    public function depselect(){
      $query = $this->db->get('department');
      $result = $query->result();
      return $result;
    }

    public function getBranchAndDepEmployeesIds($branch, $depId){
      $this->db->select('employee.em_id');
      $this->db->from('employee');
      $this->db->where('employee.dep_id', $depId);
      $this->db->where('employee.branch', $branch);
      $result = $this->db->get()->result();
      return $result;
    }
    
    public function getBranchAndDepAndDesEmployeesIds($branch, $depId, $desId){
      $this->db->select('employee.em_id');
      $this->db->from('employee');
      $this->db->where('employee.des_id', $desId);
      $this->db->where('employee.dep_id', $depId);
      $this->db->where('employee.branch', $branch);
      $result = $this->db->get()->result();
      return $result;
    }

    public function getDepartmentName($depId){
      if ($depId == null) {
        return '';
      }else{
        $sql    = "SELECT * FROM `department` WHERE `id`='$depId'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        $departmentName = $result->dep_name;
        return $departmentName;
      }
    }

    public function getDepartmentEmployees($depId){
      $this->db->select('employee.*');
      $this->db->select('branch.branch_name');
      $this->db->select('designation.des_name');
      $this->db->from('employee');
      $this->db->where('employee.dep_id', $depId);
      $this->db->join('branch', 'branch.id = employee.branch','left');
      $this->db->join('designation', 'designation.id = employee.des_id','left');
      $result = $this->db->get()->result();
      return $result;
    }

    public function getDesignationName($desId){
      if ($desId == null) {
        return '';
      }else{
        $sql    = "SELECT * FROM `designation` WHERE `id`='$desId'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        $designationName = $result->des_name;
        return $designationName;
      }
    }

    public function getDesignationEmployees($desId){
      $this->db->select('employee.*');
      $this->db->select('branch.branch_name');
      $this->db->select('department.dep_name');
      $this->db->from('employee');
      $this->db->where('employee.des_id', $desId);
      $this->db->join('branch', 'branch.id = employee.branch','left');
      $this->db->join('department', 'department.id = employee.dep_id','left');
      $result = $this->db->get()->result();
      return $result;
    }

      public function Add_Department($data){
        $this->db->insert('department',$data);
      }
      
      public function addBranch($data){
        $this->db->insert('branch',$data);
      }

      public function getBranchEmployees($id){
        $this->db->select('employee.*');
        $this->db->select('department.dep_name');
        $this->db->select('designation.des_name');
        $this->db->from('employee');
        $this->db->where('employee.branch', $id);
        $this->db->join('designation', 'designation.id = employee.des_id','left');
        $this->db->join('department', 'department.id = employee.dep_id','left');
        $query = $this->db->get();
        return $query->result();
      }

      public function getBranchName($id){
        $this->db->select('branch.*');
        $this->db->where('id', $id);
        $this->db->from('branch');
        $result = $this->db->get()->row();
        return $result->branch_name;
      }

      public function branchSelect(){
        $query = $this->db->get('branch');
        $result = $query->result();
        return $result;
      }

      public function branchDelete($id){
        $this->db->delete('branch',array('id' => $id ));
      }

      public function branchEdit($id){
        $this->db->select('*');
        $this->db->from('branch');
        $this->db->where('id', $id);
        $query =  $this->db->get()->row();
		    return  $query;
      }

      public function updateBranch($id, $data){
        $this->db->where('id',$id);
        $this->db->update('branch',$data);
      }

      public function deleteBranch($id){
        $this->db->delete('branch',array('id' => $id ));
      }

      public function department_delete($dep_id){
        $this->db->delete('department',array('id' => $dep_id ));
      }

      public function department_edit($dep){
          $sql    = "SELECT * FROM `department` WHERE `id`='$dep'";
          $query  = $this->db->query($sql);
          $result = $query->row();
          return $result;
      }
      public function Update_Department($id, $data){
        $this->db->where('id',$id);
        $this->db->update('department',$data);
      }

      public function Add_Designation($data){
        $this->db->insert('designation',$data);
      }
      
    public function designation_delete($des_id){
        $this->db->delete('designation',array('id'=> $des_id));
    }

      public function designation_edit($des){
          $sql    = "SELECT * FROM `designation` WHERE `id`='$des'";
          $query  = $this->db->query($sql);
          $result = $query->row();
          return $result;
      }
      public function Update_Designation($id, $data){
        $this->db->where('id',$id);
        $this->db->update('designation',$data);
      }
    public function desselect(){
        $query = $this->db->get('designation');
        $result = $query->result();
        return $result;
    }    
}
?>