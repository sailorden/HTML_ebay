<?php
class Login_model extends CI_Model{

	public function __construct() {
		
    	parent::__construct();
   
  	}

   public function get_data_user($sure_id){

		$this->db->select('sure_id');
		$query = $this->db->get_where('user_back', array('sure_id' => $sure_id));
			
		if ($query->num_rows() > 0) {
					
			return $query->row()->sure_id;
				
		}else{
				
			return FALSE;
				
		}
	
   }
   
} 

