<?php

	class Employee_model extends CI_Model{


	function __consturct(){
	parent::__construct();
	
	}

	public function getdesignationId($id){
    $sql = "SELECT `des_id` FROM `employee` WHERE `em_id`='$id'";
    $query=$this->db->query($sql);
    $result = $query->row();
      return $result->des_id;
	}
    public function getdepartmentId($id){
      $sql = "SELECT `dep_id` FROM `employee` WHERE `em_id`='$id'";
      $query=$this->db->query($sql);
      $result = $query->row();
      return $result->dep_id;
	}
    
  public function getbranchId($id){
      $sql = "SELECT `branch` FROM `employee` WHERE `em_id`='$id'";
      $query=$this->db->query($sql);
      $result = $query->row();
      return $result->branch;
	}
    public function getbranch(){
	$query = $this->db->get('branch');
	$result = $query->result();
	return $result;
	}
    public function emselect(){
      $this->db->select('employee.*');
      $this->db->select('branch.branch_name');
      $this->db->select('department.dep_name');
      $this->db->select('designation.des_name');
      $this->db->from('employee');
      $this->db->where('employee.status', 'ACTIVE');
      $this->db->join('branch', 'branch.id = employee.branch','left');
      $this->db->join('department', 'department.id = employee.dep_id','left');
      $this->db->join('designation', 'designation.id = employee.des_id','left');
      $this->db->order_by('first_name', 'ASC');
      $result = $this->db->get()->result();
      return $result;
    }

    public function idselect($id){
      $this->db->select('id');
      $this->db->from('family');
      $this->db->where('em_id', $id);
      $query = $this->db->get()->result();
      return $query;
  }

    public function emselectByID($emid){
      $sql = "SELECT * FROM `employee` WHERE `em_id`='$emid'";
      $query=$this->db->query($sql);
      $result = $query->row();
      return $result;
    }
    
    public function getAdmins(){
      $sql = "SELECT * FROM `employee` WHERE `em_role`='ADMIN'";
      $query=$this->db->query($sql);
      $result = $query->result();
      return $result;
    }

    public function getAdminIds(){
      $adminIds = [];
      $admins = $this->getAdmins();
      foreach ($admins as $admin) {
          array_push($adminIds, $admin->em_id);
      }
      return $adminIds;
    }

    public function emselectByCode($emid){
      $sql = "SELECT * FROM `employee`
        WHERE `em_id`='$emid'";
      $query=$this->db->query($sql);
      $result = $query->row();
      return $result;
    }
    public function getInvalidUser(){
      $this->db->select('employee.*');
      $this->db->select('branch.branch_name');
      $this->db->select('department.dep_name');
      $this->db->select('designation.des_name');
      $this->db->from('employee');
      $this->db->where('employee.status', 'INACTIVE');
      $this->db->join('branch', 'branch.id = employee.branch','left');
      $this->db->join('department', 'department.id = employee.dep_id','left');
      $this->db->join('designation', 'designation.id = employee.des_id','left');
      $result = $this->db->get()->result();
      return $result;
	  }
    public function Does_email_exists($email) {
		$user = $this->db->dbprefix('employee');
        $sql = "SELECT `em_email` FROM $user
		WHERE `em_email`='$email'";
		$result=$this->db->query($sql);
        if ($result->row()) {
            return $result->row();
        } else {
            return false;
        }
    }
    public function Add($data){
        $this->db->insert('employee',$data);
    }
    
    public function addEmployeeOfTheMonth($data){
      // check if employee of the month for a branch already exists
      $query = $this->db->select('employee_of_the_month.id')
                        ->from('employee_of_the_month')
                        ->where('branch', $data['branch'])
                        ->get();
      $result = $query->result();
      // replace if it exists and add to past records
      if($result){
        $this->db->where('branch', $data['branch']);
        $this->db->update('employee_of_the_month',$data);

        $this->db->insert('employee_of_the_month_records',$data);
      }else{
        $this->db->insert('employee_of_the_month',$data);
        $this->db->insert('employee_of_the_month_records',$data);
      }

    }

    public function getEmployeeOfTheMonth(){
      $this->db->select('employee_of_the_month.*');
      $this->db->select('employee.first_name');
      $this->db->select('employee.last_name');
      $this->db->select('employee.em_image');
      $this->db->select('branch.branch_name');
      $this->db->select('department.dep_name');
      $this->db->select('designation.des_name');
      $this->db->from('employee_of_the_month');
      $this->db->join('employee', 'employee.em_id = employee_of_the_month.em_id','left');
      $this->db->join('branch', 'branch.id = employee.branch','left');
      $this->db->join('department', 'department.id = employee.dep_id','left');
      $this->db->join('designation', 'designation.id = employee.des_id','left');
      $this->db->order_by('employee_of_the_month.id', 'DESC');
      $result = $this->db->get()->result();
      return $result;
    }
    
    public function getEmployeeOfTheMonthByBranch($id){
      $this->db->select('employee.first_name');
      $this->db->select('employee.last_name');
      $this->db->select('employee.em_image');
      $this->db->from('employee_of_the_month');
      $this->db->where('employee_of_the_month.branch',$id);
      $this->db->join('employee', 'employee.em_id = employee_of_the_month.em_id','left');
      $result = $this->db->get()->row();
      return $result;
    }
    
    public function getEmployeeOfTheMonthReport(){
      $this->db->select('employee_of_the_month_records.*');
      $this->db->select('employee.first_name');
      $this->db->select('employee.last_name');
      $this->db->select('branch.branch_name');
      $this->db->select('department.dep_name');
      $this->db->select('designation.des_name');
      $this->db->from('employee_of_the_month_records');
      $this->db->join('employee', 'employee.em_id = employee_of_the_month_records.em_id','left');
      $this->db->join('branch', 'branch.id = employee.branch','left');
      $this->db->join('department', 'department.id = employee.dep_id','left');
      $this->db->join('designation', 'designation.id = employee.des_id','left');
      $this->db->order_by('employee_of_the_month_records.id', 'DESC');
      $result = $this->db->get()->result();
      return $result;
    }

    public function deleteEmployee($id){
      $this->db->delete('employee',array('em_id'=> $id));
    }

    public function GetBasic($id){
      $this->db->select('employee.*');
      $this->db->select('branch.branch_name');
      $this->db->select('department.dep_name');
      $this->db->select('designation.des_name');
      $this->db->from('employee');
      $this->db->where('employee.em_id', $id);
      $this->db->join('branch', 'branch.id = employee.branch','left');
      $this->db->join('department', 'department.id = employee.dep_id','left');
      $this->db->join('designation', 'designation.id = employee.des_id','left');
      $result = $this->db->get()->row();
      return $result;
    }

    public function famBackground($id){
      $this->db->select('*');
      $this->db->from('family');
      $this->db->where('em_id', $id);
      $query = $this->db->get()->row();
      return $query;
    }

    public function empdetails($id){
      $this->db->select('*');
      $this->db->from('employeedetails');
      $this->db->where('em_id', $id);
      $query = $this->db->get()->row();
      return $query;
    }

    public function profMembership($id){
      $this->db->select('*');
      $this->db->from('profmembership');
      $this->db->where('em_id', $id);
      $query = $this->db->get()->row();
      return $query;
    }

    public function training($id){
      $this->db->select('*');
      $this->db->from('training');
      $this->db->where('em_id', $id);
      $query = $this->db->get()->row();
      return $query;
    }

    public function skills($id){
      $this->db->select('*');
      $this->db->from('skills');
      $this->db->where('em_id', $id);
      $query = $this->db->get()->row();
      return $query;
    }

    public function history($id){
      $this->db->select('*');
      $this->db->from('employment');
      $this->db->where('em_id', $id);
      $query = $this->db->get()->row();
      return $query;
    }

    public function referees($id){
      $this->db->select('*');
      $this->db->from('referees');
      $this->db->where('em_id', $id);
      $query = $this->db->get()->row();
      return $query;
    }

    public function undertaking($id){
      $this->db->select('*');
      $this->db->from('undertaking');
      $this->db->where('em_id', $id);
      $query = $this->db->get()->row();
      return $query;
    }
    
    public function ProjectEmployee($id){
      $sql = "SELECT `assign_task`.`assign_user`,
      `employee`.`em_id`,`first_name`,`last_name`
      FROM `assign_task`
      LEFT JOIN `employee` ON `assign_task`.`assign_user`=`employee`.`em_id`
      WHERE `assign_task`.`project_id`='$id' AND `user_type`='Team Head'";
      $query=$this->db->query($sql);
      $result = $query->result();
      return $result;          
    }
    public function GetperAddress($id){
      $sql = "SELECT * FROM `address`
      WHERE `emp_id`='$id' AND `type`='Permanent'";
        $query=$this->db->query($sql);
		$result = $query->row();
		return $result;          
    }
    public function GetpreAddress($id){
      $sql = "SELECT * FROM `address`
      WHERE `emp_id`='$id' AND `type`='Present'";
        $query=$this->db->query($sql);
		$result = $query->row();
		return $result;          
    }
    public function GetEducation($id){
      $sql = "SELECT * FROM `education`
      WHERE `emp_id`='$id'";
        $query=$this->db->query($sql);
		$result = $query->result();
		return $result;          
    }
    public function GetExperience($id){
      $sql = "SELECT * FROM `emp_experience`
      WHERE `emp_id`='$id'";
        $query=$this->db->query($sql);
		$result = $query->result();
		return $result;          
    }
    public function GetBankInfo($id){
      $sql = "SELECT * FROM `bank_info`
      WHERE `em_id`='$id'";
        $query=$this->db->query($sql);
		$result = $query->row();
		return $result;          
    }
    public function GetAllEmployee(){
      $sql = "SELECT * FROM `employee`";
        $query=$this->db->query($sql);
		$result = $query->result();
		return $result;          
    }
    public function desciplinaryfetch(){
      $this->db->select('desciplinary.*');
      $this->db->select('employee.em_id');
      $this->db->select('employee.first_name');
      $this->db->select('employee.last_name');
      $this->db->from('desciplinary');
      $this->db->join('employee', 'desciplinary.em_id = employee.em_id', 'left');
      $this->db->where('desciplinary.close_action', '');
      $this->db->order_by('desciplinary.id', 'DESC');
      $result = $this->db->get()->result();
      return $result;        
    }
    public function desciplinaryReport(){
      $this->db->select('desciplinary.*');
      $this->db->select('employee.em_id');
      $this->db->select('employee.first_name');
      $this->db->select('employee.last_name');
      $this->db->from('desciplinary');
      $this->db->join('employee', 'desciplinary.em_id = employee.em_id', 'left');
      $this->db->where('desciplinary.close_action !=', '');
      $this->db->order_by('desciplinary.id', 'DESC');
      $result = $this->db->get()->result();
      return $result;        
    }
    public function GetLeaveiNfo($id,$year){
      $sql = "SELECT `assign_leave`.*,
      `leave_types`.`name`
      FROM `assign_leave`
      LEFT JOIN `leave_types` ON `assign_leave`.`type_id`=`leave_types`.`type_id`
      WHERE `assign_leave`.`emp_id`='$id' AND `dateyear`='$year'";
        $query=$this->db->query($sql);
		$result = $query->result();
		return $result;        
    }
    public function GetsalaryValue($id){
      $sql = "SELECT `emp_salary`.*,
      `addition`.*,
      `deduction`.*,
      `salary_type`.*
      FROM `emp_salary`
      LEFT JOIN `addition` ON `emp_salary`.`id`=`addition`.`salary_id`
      LEFT JOIN `deduction` ON `emp_salary`.`id`=`deduction`.`salary_id`
      LEFT JOIN `salary_type` ON `emp_salary`.`type_id`=`salary_type`.`id`
      WHERE `emp_salary`.`emp_id`='$id'";
        $query=$this->db->query($sql);
		$result = $query->row();
		return $result;        
    }
    public function Update($data,$id){
		$this->db->where('em_id', $id);
		$this->db->update('employee',$data);    
    }
    public function Update_Education($id,$data){
		$this->db->where('id', $id);
		$this->db->update('education',$data);        
    }
    public function Update_BankInfo($id,$data){
		$this->db->where('id', $id);
		$this->db->update('bank_info',$data);        
    }
    public function UpdateFamilyDetails($id,$data){
		$this->db->where('id', $id);
		$this->db->update('family',$data);        
    }
    public function Reset_Password($id,$data){
		$this->db->where('em_id', $id);
		$this->db->update('employee',$data);        
    }
    public function Update_Experience($id,$data){
		$this->db->where('id', $id);
		$this->db->update('emp_experience',$data);        
    }
    public function Update_Salary($sid,$data){
		$this->db->where('id', $sid);
		$this->db->update('emp_salary',$data);        
    }
    public function Update_Deduction($did,$data){
		$this->db->where('de_id', $did);
		$this->db->update('deduction',$data);        
    }
    public function Update_Addition($aid,$data){
		$this->db->where('addi_id', $aid);
		$this->db->update('addition',$data);        
    }
    public function Update_Desciplinary($id,$data){
		$this->db->where('id', $id);
		$this->db->update('desciplinary',$data);        
    }
    public function Update_Media($id,$data){
		$this->db->where('id', $id);
		$this->db->update('social_media',$data);        
    }
    public function AddFamilyDetails($data){
        $this->db->insert('family',$data);
    } 
    public function Add_education($data){
        $this->db->insert('education',$data);
    }
    public function Add_Experience($data){
        $this->db->insert('emp_experience',$data);
    }
    public function Add_Desciplinary($data){
        $this->db->insert('desciplinary',$data);
    }
    public function AddRequest($data){
      $this->db->insert('requests',$data);
    }
    public function UpdateRequest($id, $data){
      $this->db->where('id', $id);
		  $this->db->update('requests',$data);   
    }
    public function GetEmployeeRequests(){
      $this->db->select('requests.*');
      $this->db->select('employee.first_name');
      $this->db->select('employee.last_name');
      $this->db->select('designation.des_name');
      $this->db->select('department.dep_name');
      $this->db->select('branch.branch_name');
      $this->db->from('requests');
      $this->db->join('employee', 'employee.em_id = requests.em_id','left');
      $this->db->join('designation', 'designation.id = employee.des_id','left');
      $this->db->join('department', 'department.id = employee.dep_id','left');
      $this->db->join('branch', 'branch.id = employee.branch','left');
      $this->db->where('requests.request_status', 'Pending');
      $this->db->order_by('id', 'DESC');
      $result = $this->db->get()->result();

      return $result;

    }
    public function GetEmployeeRequestsReport(){
      $this->db->select('requests.*');
      $this->db->select('employee.first_name');
      $this->db->select('employee.last_name');
      $this->db->select('designation.des_name');
      $this->db->select('department.dep_name');
      $this->db->select('branch.branch_name');
      $this->db->from('requests');
      $this->db->join('employee', 'employee.em_id = requests.em_id','left');
      $this->db->join('designation', 'designation.id = employee.des_id','left');
      $this->db->join('department', 'department.id = employee.dep_id','left');
      $this->db->join('branch', 'branch.id = employee.branch','left');
      $this->db->where('requests.request_status !=', 'Pending');
      $this->db->order_by('id', 'DESC');
      $result = $this->db->get()->result();

      return $result;

    }

    public function GetRequests($id){
      $this->db->select('*');
      $this->db->where('em_id', $id);
      $this->db->order_by('id', 'DESC');
      $this->db->from('requests');
      $result = $this->db->get()->result();
      return $result; 
    }

    public function GetSingleRequest($id){
      $this->db->select('requests.*');
      $this->db->select('employee.first_name');
      $this->db->select('employee.last_name');
      $this->db->from('requests');
      $this->db->join('employee', 'employee.em_id = requests.em_id','left');
      $this->db->where('requests.id', $id);
      $result = $this->db->get()->row();
      return $result; 
    }
    public function GetDisciplinary($id){
      $this->db->select('*');
      $this->db->from('desciplinary');
      $this->db->where('em_id', $id);
      $this->db->order_by('id', 'DESC');
      $result = $this->db->get()->result();
      return $result; 
    }
    public function Add_BankInfo($data){
        $this->db->insert('bank_info',$data);
    }
    public function GetEmployeeId($id){
        $sql = "SELECT `em_password` FROM `employee` WHERE `em_id`='$id'";
        $query = $this->db->query($sql);
        $result = $query->row();
        return $result; 
    }
    public function GetFileInfo($id){
        $sql = "SELECT * FROM `employee_file` WHERE `em_id`='$id'";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result; 
    }
    public function GetSocialValue($id){
        $sql = "SELECT * FROM `social_media` WHERE `emp_id`='$id'";
        $query = $this->db->query($sql);
        $result = $query->row();
        return $result; 
    }
    public function GetEduValue($id){
        $sql = "SELECT * FROM `education` WHERE `id`='$id'";
        $query = $this->db->query($sql);
        $result = $query->row();
        return $result; 
    }
    public function GetExpValue($id){
        $sql = "SELECT * FROM `emp_experience` WHERE `id`='$id'";
        $query = $this->db->query($sql);
        $result = $query->row();
        return $result; 
    }
    public function GetDesValue($id){
      $this->db->select('desciplinary.*');
      $this->db->select('employee.first_name');
      $this->db->select('employee.last_name');
      $this->db->from('desciplinary');
      $this->db->where('desciplinary.id', $id);
      $this->db->join('employee', 'employee.em_id = desciplinary.em_id','left');
      $result = $this->db->get()->row();
      return $result;
    } 
	public function depselect(){
  	$query = $this->db->get('department');
  	$result = $query->result();
  	return $result;
	}
    public function Add_Department($data){
    $this->db->insert('department',$data);
  }

    public function Add_Designation($data){
      $this->db->insert('designation',$data);
    }
    public function File_Upload($data){
    $this->db->insert('employee_file',$data);
  }
    public function Add_Salary($data){
    $this->db->insert('emp_salary',$data);
  }
    public function Add_Addition($data1){
    $this->db->insert('addition',$data1);
  }
    public function Add_Deduction($data2){
    $this->db->insert('deduction',$data2);
  }
    public function Add_Assign_Leave($data){
    $this->db->insert('assign_leave',$data);
  }
    public function Insert_Media($data){
    $this->db->insert('social_media',$data);
  }
    public function desselect(){
  	$query = $this->db->get('designation');
  	$result = $query->result();
  	return $result;
	}
    public function DeletEdu($id){
      $this->db->delete('education',array('id'=> $id));
  }
    public function DeletEXP($id){
      $this->db->delete('emp_experience',array('id'=> $id));
  }
    public function DeletDisiplinary($id){
      $this->db->delete('desciplinary',array('id'=> $id));
  }        

  public function addPeerReview($data){
    $this->db->insert('peer_review',$data);
  }
  
  public function updatePeerReview($id, $data){
    $this->db->where('id', $id);
    $this->db->update('peer_review', $data);
  }

}
?>