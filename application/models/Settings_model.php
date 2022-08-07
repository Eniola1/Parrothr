<?php

	class Settings_model extends CI_Model{


	function __consturct(){
	parent::__construct();
	
	}
    public function GetSettingsValue(){
		$settings = $this->db->dbprefix('settings');
        $sql = "SELECT * FROM $settings";
		$query=$this->db->query($sql);
		$result = $query->row();
		return $result;	        
    }
    public function SettingsUpdate($id,$data){
		$this->db->where('id', $id);
		$this->db->update('settings',$data);		
	}        
    
	public function setsession($em_id, $sessionId){
		$query = $this->db->select('session.em_id')
                        ->from('session')
                        ->where('em_id', $em_id)
                        ->get();
      	$result = $query->result();
		if($result){
			$this->db->where('em_id', $em_id);
			$this->db->update('session',array('session_id'=> $sessionId));
		}else{
			$this->db->insert('session',array('em_id'=> $em_id,'session_id'=> $sessionId));
		}
			
	}   

	public function getsessionId($em_id){
		$query = $this->db->select('session.session_id')
					->from('session')
					->where('em_id', $em_id)
					->get();
		return $query->row();
	}
}