<?php
class App_model extends CI_Model{

	public function __construct(){
    	parent::__construct();
  	}
	 
   public function get_template($id_tempalte){
   		
		$this->db->where('id_template', $id_tempalte); 
		$query = $this->db->get('templates');
		
		if ($query->num_rows() > 0){
			
			return $query->row()->name_template;
		}
		else{
				
			return FALSE;
		}
				
	
   }
   
} 

