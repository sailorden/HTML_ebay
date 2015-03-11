<?php
class App_model extends CI_Model{

	public function __construct(){
    	parent::__construct();
  	}
	 
   public function get_template($id_template){
   		
		$this->db->where('id_template', $id_template); 
		$query = $this->db->get('templates');
		
		if ($query->num_rows() > 0){
			
			return $query->row()->name_template;
		}
		else{
				
			return FALSE;
		}
				
	
   }
   
   public function get_temporal($id_template){
			
		$this->db->select('*');
   		$this->db->where('id_template', $id_template);
		$this->db->where('state', 1);
		$query = $this->db->get('html');
		
		if ($query->num_rows() > 0){
			
			return $query->row();
		}
		else{
				
			return FALSE;
		}		
	
   }

   public function get_primary($id_template){
			
		$this->db->select('*');
		$this->db->where('id_template', $id_template);
		$this->db->where('state', 2);
		$query = $this->db->get('html');
		
		if ($query->num_rows() > 0){
			
			return $query->row();
		}
		else{
				
			return FALSE;
		}	
   }

} 

