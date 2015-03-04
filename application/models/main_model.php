<?php
class Main_model extends CI_Model{

	public function __construct() {
		
    	parent::__construct();
   
  	}

  
   
   public function get_data_project_back(){
   	
	
		$this->db->trans_start();
		$query = $this->db->get('data_project_back');
		$this->db->trans_complete();
		return $query->row();
			
		if($this->db->trans_status() === FALSE OR $query->num_rows() > 0)
			log_message();
			return FALSE;
		
   }
   
} 

