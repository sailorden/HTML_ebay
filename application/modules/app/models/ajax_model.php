<?php
class Ajax_model extends CI_Model{

	public function __construct(){
    	parent::__construct();
  	}
	
	public function get_image($item, $data, $table, $id_html, $id = FALSE){
			
		$data = array($item => $data);
		$this->db->trans_start();
		if($id) $this->db->where('id_'.$table, $id);
		$this->db->where('id_html', $id_html);
		$this->db->update($table, $data);
		$this->db->trans_complete(); 
		if ($this->db->trans_status() === FALSE){
			
			return FALSE;
			
		}else{
			
			return TRUE;
		}		
	
   }
	
	public function set_item($data, $table){
		
		$this->db->trans_start();
		$this->db->insert($table, $data);
		$this->db->trans_complete(); 
		
		if ($this->db->trans_status() === FALSE):
        	show_error('error_500');
		endif;
	
   }
	
	public function delete_item($id_html, $table, $id_table){
   		
		$this->db->trans_start();
		$this->db->where('id_html', $id_html);
		
		if($id_table){
			$aux = explode('.',$id_table);
			$this->db->where($aux[0], $aux[1]);
		}
		
		$this->db->delete($table);
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE):
	         show_error('error_500');
		endif;
		
	}
	
	public function set_text($data, $table, $id_html, $id_table = FALSE){
			
		$this->db->trans_start();
		$this->db->where('id_html', $id_html);
		
		if($id_table){
			$aux = explode('.',$id_table);
			$this->db->where($aux[0], $aux[1]);
		}
		
		$this->db->update($table, $data);
		$this->db->trans_complete();
		
		if ($this->db->trans_status() === FALSE){
			
			return FALSE;
			
		}else{
			
			return TRUE;
		}	
   }

} 

