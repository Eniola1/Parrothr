<?php

class Notice_model extends CI_Model{


    function __consturct(){
        parent::__construct();
    
    }

    public function GetNotice(){
        $this->db->select('notice.*');
        $this->db->select('branch.branch_name');
        $this->db->select('designation.des_name');
        $this->db->select('department.dep_name');
        $this->db->from('notice');
        $this->db->order_by('notice.date', 'DESC');
        $this->db->join('branch', 'branch.id = notice.branch','left');
        $this->db->join('designation', 'designation.id = notice.des_id','left');
        $this->db->join('department', 'department.id = notice.dep_id','left');
        $result = $this->db->get()->result();
        return $result;
    }
    
    public function GetEmployeeNotice($depId, $desId, $branch){
        $this->db->select('notice.*');
        $this->db->select('branch.branch_name');
        $this->db->select('designation.des_name');
        $this->db->select('department.dep_name');
        $this->db->from('notice');
        $array = array('branch' => '', 'dep_id' => '', 'des_id' => '');
        $this->db->where($array);
        $this->db->or_where('branch', $branch)->where('dep_id', '')->where('des_id', '');
        $this->db->or_where('branch', $branch)->where('dep_id', $depId)->where('des_id', '');
        $this->db->or_where('branch', $branch)->where('dep_id', $depId)->where('des_id', $desId);
        $this->db->order_by('notice.date', 'DESC');
        $this->db->join('branch', 'branch.id = notice.branch','left');
        $this->db->join('designation', 'designation.id = notice.des_id','left');
        $this->db->join('department', 'department.id = notice.dep_id','left');
        $result = $this->db->get()->result();
        return $result;
    }

    public function GetEmployeesByNotice($branch, $depId, $desId){
        $this->db->select('employee.em_id');
        $this->db->from('notice');
        $array = array('branch' => '', 'dep_id' => '', 'des_id' => '');
        $this->db->where($array);
        $this->db->or_where('employee.branch', $branch)->where('employee.dep_id', '')->where('employee.des_id', '');
        $this->db->or_where('employee.branch', $branch)->where('employee.dep_id', $depId)->where('employee.des_id', '');
        $this->db->or_where('employee.branch', $branch)->where('employee.dep_id', $depId)->where('employee.des_id', $desId);
        $this->db->join('employee', 'employee.em_id = notice.em_id','left');
        $result = $this->db->get()->result();
        return $result;
    }

    public function Published_Notice($data){
        $this->db->insert('notice',$data);
    }
    public function GetNoticelimit(){
        $this->db->order_by('date', 'DESC');
		$query = $this->db->get('notice');
		$result =$query->result();
        return $result;        
    }
          
    public function deleteNotice($id){
        $this->db->delete('notice',array('id'=> $id));
    }

    public function GetSingleRequest($id){
        $this->db->where('id', $id);
        $result = $this->db->get('notice')->row();
        return $result; 
      }
}
?>