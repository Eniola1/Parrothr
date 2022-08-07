<?php

class Recruitment_model extends CI_Model{

  function __consturct(){
      parent::__construct();
  
  }

  public function addRequirement($data){
    $this->db->insert('recruitment',$data);
  }
    
}
?>