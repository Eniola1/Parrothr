<?php

class UniformIssuance_model extends CI_Model{

  function __consturct(){
      parent::__construct();
  
  }

  public function addUniformRequest($data){
    $this->db->insert('uniform_issuance',$data);
  }
    
}
?>