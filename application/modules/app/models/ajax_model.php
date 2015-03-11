<?php
class Ajax_model extends CI_Model{

	public function __construct(){
    	parent::__construct();
  	}
	
	public function get_image($item, $data, $table, $id_html){
			
		$data = array($item => $data);
		$this->db->trans_start();
		$this->db->where('id_html', $id_html);
		$this->db->update($table, $data);
		$this->db->trans_complete(); 
		if ($this->db->trans_status() === FALSE){
			
			return FALSE;
			
		}else{
			
			return TRUE;
		}
				
	
   }

} 

