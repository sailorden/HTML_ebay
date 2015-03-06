<?php
class Clone_template_model extends CI_Model{

	public function __construct(){
    	parent::__construct();
  	}
	 
   public function clone_html($id_template){
   		
		$this->db->trans_start();
		$query = $this->db->get_where('html', array('id_template' => $id_template,'state' => 2));
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) 
		show_error('Parece que algo a fallado al intentar acceder a su base de datos, por favor inténtelo más tarde y si el problema continua póngase en contacto con el administrador.');
		
		if ($query->num_rows() > 0){

			$data = array(
			
               'id_template' => $query->row()->id_template,
               'name_html' => $query->row()->name_html,
               'name_product' => $query->row()->name_product,
			   'price' => $query->row()->price,
			   'old_price' => $query->row()->old_price,
			   'description_product' => $query->row()->description_product,
			   'img_top_1_html' => $query->row()->img_top_1_html,
			   'img_top_2_html' => $query->row()->img_top_2_html,
			   'img_top_3_html' => $query->row()->img_top_3_html,
			   'name_menu' => $query->row()->name_menu,
			   'banner_1' => $query->row()->banner_1,
			   'banner_2' => $query->row()->banner_2,
			   'shipping_image_1' => $query->row()->shipping_image_1,
			   'shipping_image_2' => $query->row()->shipping_image_2,
			   'shipping_image_3' => $query->row()->shipping_image_3,
			   'text_footer_1' => $query->row()->text_footer_1,
			   'text_footer_2' => $query->row()->text_footer_2,
			   'title_footer_1' => $query->row()->title_footer_1,
			   'title_footer_2' => $query->row()->title_footer_2,
			   'state' => 1
            );
			
			$this->db->trans_start();
			$this->db->insert('html', $data);
			$this->db->trans_complete(); 
			if ($this->db->trans_status() === FALSE) log_message();
			show_error('Parece que algo a fallado al intentar acceder a su base de datos, por favor inténtelo más tarde y si el problema continua póngase en contacto con el administrador.');
			
		}else{
				
			show_error('Parece que la Base de datos no ha arrojado ningún resultado.');	 
		}
				
	
   }
   
} 

