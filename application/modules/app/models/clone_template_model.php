<?php
class Clone_template_model extends CI_Model{

	public function __construct(){
    	parent::__construct();
  	}
	
	public function clone_template($id_template){
		
		$this->clone_html($id_template);
		
		$this->db->trans_start();
		$query = $this->db->get_where('html', array('id_template' => $id_template,'state' => 1));
		$this->db->trans_complete();
		
		if ($this->db->trans_status() === FALSE)
			show_error('Error al intentar extraer el último id.'.__DIR__.' Linea '.__LINE__);
		
		$this->clone_menu($query->row()->id_html);
		$this->clone_social($query->row()->id_html);
		$this->clone_style($query->row()->id_html);
		$this->clone_tabs($query->row()->id_html);
		$this->clone_carrusel($query->row()->id_html);

		return $query->row()->id_html;
	}
	 
   	private function clone_html($id_template){
   		
		$this->db->trans_start();
		$query = $this->db->get_where('html', array('id_template' => $id_template,'state' => 2));
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) 
			show_error('Error al intentar extraer datos desde la tabla html.'.__DIR__.' Linea '.__LINE__);
		
		if ($query->num_rows() > 0){

			$data = array(
			
               'id_template' => $query->row()->id_template,
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
			if ($this->db->trans_status() === FALSE)
				show_error('Error al intentar crear una nueva plantilla en la tabla html.'.__DIR__.' Linea '.__LINE__);

		}else{
				
			show_error('Parece que la Base de datos no ha arrojado ningún resultado desde la tabla html<br/>'.__DIR__.' Linea '.__LINE__);	 
		}
		
   }

	private function clone_menu($id_html){

		$data = array(
		
           'id_html' => $id_html,
           'name_menu' => 'link_1',
           'link_menu' => '#'
        );
		
		$this->db->trans_start();
		$this->db->insert('menu', $data);
		$this->db->trans_complete(); 
		if ($this->db->trans_status() === FALSE)
			show_error('Error al intentar crear un nuevo menú en la tabla menu.'.__DIR__.' Linea '.__LINE__);

   }

	private function clone_social($id_html){

		$data = array(
		
           'id_html' => $id_html,
           'social_facebook' => '#'
        );
		
		$this->db->trans_start();
		$this->db->insert('social', $data);
		$this->db->trans_complete(); 
		if ($this->db->trans_status() === FALSE)
			show_error('Error al intentar insertar en la tabla social.'.__DIR__.' Linea '.__LINE__);

   }
	
	private function clone_style($id_html){

		$data = array(
		
           'id_html' => $id_html,
        );
		
		$this->db->trans_start();
		$this->db->insert('style', $data);
		$this->db->trans_complete(); 
		if ($this->db->trans_status() === FALSE)
			show_error('Error al intentar insertar en la tabla style.'.__DIR__.' Linea '.__LINE__);

   }
	
	private function clone_tabs($id_html){

		$data = array(
		
           'id_html' => $id_html,
           'name_tab' => 'Tab 1',
           'text_tab' => 'Lorem ipsum dolor '
        );
		
		$this->db->trans_start();
		$this->db->insert('tabs', $data);
		$this->db->trans_complete(); 
		if ($this->db->trans_status() === FALSE)
			show_error('Error al intentar insertar en la tabla tabs.'.__DIR__.' Linea '.__LINE__);

   }

	private function clone_carrusel($id_html){

		$data = array(
			    array(
			   
			      'id_html' => $id_html,
			      'image_carrusel' => 'pic1.jpg' 
			    ),
			    array(
			   
			      'id_html' => $id_html,
			      'image_carrusel' => 'pic2.jpg'
			    )
		);
		
		$this->db->trans_start();
		$this->db->insert_batch('carrusel', $data);
		$this->db->trans_complete(); 
		if ($this->db->trans_status() === FALSE)
			show_error('Error al intentar crear un nuevo carrusel en la tabla carrusel.'.__DIR__.' Linea '.__LINE__);

   }
   
} 

