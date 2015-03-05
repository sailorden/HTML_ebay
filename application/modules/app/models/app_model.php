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
			
   		$this->db->select('html.id_html');
		$this->db->where('template.id_template', $id_template);
		$this->db->where('html.state', 1);
		$this->db->join('html', 'templates.id_template = html.id_template');  
		$query = $this->db->get('templates');
		
		if ($query->num_rows() > 0){
			
			return $query->row()->name_template;
		}
		else{
				
			return FALSE;
		}		
	
   }
   
   public function get_html($id_template, $id_html){
			
   		$this->db->select('html.name_html');
		$this->db->where('template.id_template', $id_template);
		$this->db->where('html.id_html', $id_html);
		$this->db->join('html', 'templates.id_template = html.id_template');  
		$query = $this->db->get('templates');
		
		if ($query->num_rows() > 0){
			
			return $query->row()->name_template;
		}
		else{
				
			return FALSE;
		}
				
	
   }
   
} 

