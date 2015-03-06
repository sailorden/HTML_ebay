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
   
   public function get_html($id_template, $id_html){
			
		$this->db->select('*');
		$this->db->where('id_template', $id_template);
		$this->db->where('id_html', $id_html);
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
   
   public function get_menu_html($id_html){
			
		$this->db->select('*');
		$this->db->where('id_html', $id_html);
		$query = $this->db->get('menu');
		
		if ($query->num_rows() > 0){
			
			return $query->result();
		}
		else{
				
			return FALSE;
		}	
   }
   
    public function get_tabs_html($id_html){
			
		$this->db->select('*');
		$this->db->where('id_html', $id_html);
		$query = $this->db->get('tabs');
		
		if ($query->num_rows() > 0){
			
			return $query->result();
		}
		else{
				
			return FALSE;
		}	
   }
	
	public function get_style_html($id_html){
			
		$this->db->select('*');
		$this->db->where('id_html', $id_html);
		$query = $this->db->get('style');
		
		if ($query->num_rows() > 0){
			
			return $query->row();
		}
		else{
				
			return FALSE;
		}	
   }
	
	public function get_social_html($id_html){
			
		$this->db->select('*');
		$this->db->where('id_html', $id_html);
		$query = $this->db->get('social');
		
		if ($query->num_rows() > 0){
			
			return $query->row();
		}
		else{
				
			return FALSE;
		}	
   }

	public function get_carrusel_html($id_html){
			
		$this->db->select('*');
		$this->db->where('id_html', $id_html);
		$query = $this->db->get('carrusel');
		
		if ($query->num_rows() > 0){
			
			return $query->result();
		}
		else{
				
			return FALSE;
		}	
   }

   
} 

