<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App  extends MX_Controller {
	

	public function __construct(){
		
    	parent::__construct();
		$this->load->model('App_model');

    }
	  
	public function index(){

		redirect('app/template/1');
		
 	}
	
	public function template($id = 1){
		
		
		if($this->App_model->get_temporal($id)){
			
			redirect('app/html/'.$id.'/'.$this->App_model->get_temporal($id)->id_html);
		}

		$data['title'] = "HTML ebay";
			
		$data['keywords'] = "";

		$data['description'] = "";
			
		$data['reference'] = 'APP';

		$data['view'] = url_title($this->App_model->get_template($id), 'underscore').'/'.url_title($this->App_model->get_template($id), 'underscore');
		
		$data['folder_template'] = url_title($this->App_model->get_template($id), 'underscore');
			
		$data['robots'] = 'noindex, nofollow';
		
		$data['js'] =  $this->load->view(url_title($this->App_model->get_template($id), 'underscore').'/js_module/js_module','',TRUE);
		
		$data['template'] = $this->App_model->get_template($id);
		
		$data['html'] = $this->App_model->get_primary($id);
		
		$data['style'] = $this->App_model->get_style_html($data['html']->id_html);
		
		$data['social'] = $this->App_model->get_social_html($data['html']->id_html);
		
		$data['menu'] = $this->App_model->get_menu_html($data['html']->id_html);
		
		$data['tabs'] = $this->App_model->get_tabs_html($data['html']->id_html);
		
		$data['carrusel'] = $this->App_model->get_carrusel_html($data['html']->id_html);
		
		$this->load->view('layout', $data);
		
		
 	}
	
	public function html($id = 1, $id_html = 0){
		
		if($id_html == 0){
			
			$this->load->model('Clone_template_model');
			$html = $this->Clone_template_model->clone_template($id,$id_html);
			redirect('app/html/'.$html->id_template.'/'.$html->id_html);

		}elseif($id == 0){
			
			$this->load->model('Clone_template_model');
			$html = $this->Clone_template_model->clone_template($id,$id_html);
			redirect('app/html/'.$html->id_template.'/'.$html->id_html);

		}else{
				
			$data['title'] = "HTML ebay";
				
			$data['keywords'] = "";
	
			$data['description'] = "";
				
			$data['reference'] = 'APP';
	
			$data['view'] = url_title($this->App_model->get_template($id), 'underscore').'/'.url_title($this->App_model->get_template($id), 'underscore');
			
			$data['folder_template'] = url_title($this->App_model->get_template($id), 'underscore');
			
			$data['id_html'] = $id_html;
			
			$data['id_template'] = $id;

			$data['robots'] = 'noindex, nofollow';
			
			$data['js'] =  $this->load->view(url_title($this->App_model->get_template($id), 'underscore').'/js_module/js_module','',TRUE);
			
			$data['template'] = $this->App_model->get_template($id);
			
			$data['folder_template'] = url_title($this->App_model->get_template($id), 'underscore');
		
			$data['html'] = $this->App_model->get_html($id,$id_html);
			
			$data['style'] = $this->App_model->get_style_html($data['html']->id_html);
			
			$data['social'] = $this->App_model->get_social_html($data['html']->id_html);
			
			$data['menu'] = $this->App_model->get_menu_html($data['html']->id_html);
			
			$data['tabs'] = $this->App_model->get_tabs_html($data['html']->id_html);
			
			$data['carrusel'] = $this->App_model->get_carrusel_html($data['html']->id_html);
			
			$this->load->view('layout', $data);
		
		}
		
 	}

 	public function update_input_text($id, $id_html){
 		
		if($this->input->is_ajax_request()){
			
			$table = $this->input->post('table');
			$id_table = $this->input->post('id_table');
			$item = $this->input->post('id');
			$data[$item] = $this->input->post('value');
		
			$this->load->model('Ajax_model');
			
			$this->Ajax_model->set_text($data, $table, $id_html, $id_table);
			
			echo $data[$item];
			
		}else{
			
			show_404();
		}
 		
 	}
	
	public function add_new_tab($id){
 		
		if($this->input->is_ajax_request()){
			
			$id_html = $this->input->post('id_html');
			
			$table = $this->input->post('table');
		
			$this->load->model('Ajax_model');
			
			$data['name_tab'] = "NUEVO TAB";
			
			$data['text_tab'] = "Añade aquí tu texto.";
			
			$data['id_html'] = $id_html;
			
			$this->Ajax_model->set_item($data, $table);
			
			$data['tabs'] = $this->App_model->get_tabs_html($id_html);
			
			$data['is_change'] = TRUE;
			
			echo json_encode($this->load->view(url_title($this->App_model->get_template($id), 'underscore').'/include/tabs_template',$data, true));
			
		}else{
			
			show_404();
		}
 		
 	}
	

	public function update_each_item($id, $id_html){
 		
		if($this->input->is_ajax_request()){
			
			$table = $this->input->post('table');
			$item = $this->input->post('id');
			$data[$item] = $this->input->post('value');
			if($this->input->post('id_item')){
				
				$id_item = 'id_'.$table.'.'.$this->input->post('id_item');
				
			}else{
				
				$id_item = FALSE;
			} 
		
			$this->load->model('Ajax_model');
			$this->Ajax_model->set_text($data, $table, $id_html,$id_item);
			
			$data['html'] = $this->App_model->get_primary($id);
			$data['social'] = $this->App_model->get_social_html($id_html);
			$data['menu'] = $this->App_model->get_menu_html($id_html);
			$data['is_change'] = TRUE;
			echo json_encode($this->load->view(url_title($this->App_model->get_template($id), 'underscore').'/include/'.$table.'_template',$data, true));
			
		}else{
			
			show_404();
		}
			
	}

	public function update_style($id, $id_html){
 		
		if($this->input->is_ajax_request()){
			
			$table = $this->input->post('table');
			$item = $this->input->post('id');
			$data[$item] = $this->input->post('value');
		
			$this->load->model('Ajax_model');
			$this->Ajax_model->set_text($data, $table, $id_html);
			
			$data['style'] = $this->App_model->get_style_html($id_html);
			$data['folder_template'] = url_title($this->App_model->get_template($id), 'underscore');
			echo json_encode($this->load->view(url_title($this->App_model->get_template($id), 'underscore').'/include/style_template',$data, true));
		
		}else{
			
			show_404();
		}
			
	}
	
	public function update_carrusel($id, $id_html){
 		
		if($this->input->is_ajax_request()){
			
			$this->load->model('Ajax_model');
			$data['carrusel'] = $this->App_model->get_carrusel_html($id_html);
			
			echo json_encode($this->load->view(url_title($this->App_model->get_template($id), 'underscore').'/include/carrusel_template',$data, true));
		
		}else{
			
			show_404();
		}
			
	}


	public function delete_tab($id){
 		
		if($this->input->is_ajax_request()){
			
			$id_html = $this->input->post('id_html');
			
			$table = $this->input->post('table');
		
			$this->load->model('Ajax_model');
			
			$id_html = $this->input->post('id_html');
			
			$id_table = $this->input->post('id_table');
			
			$this->Ajax_model->delete_item($id_html, $table, $id_table);
			
			$data['tabs'] = $this->App_model->get_tabs_html($id_html);
			
			$data['is_change'] = TRUE;
			
			echo json_encode($this->load->view(url_title($this->App_model->get_template($id), 'underscore').'/include/tabs_template',$data, true));
			
		}else{
			
			show_404();
		}
 		
 	}
	
	public function add_new_menu($id){
 		
		if($this->input->is_ajax_request()){
			
			$id_html = $this->input->post('id_html');
			
			$table = $this->input->post('table');
		
			$this->load->model('Ajax_model');
			
			$data['name_menu'] = "NUEVO LINK";
			
			$data['id_html'] = $id_html;
			
			$this->Ajax_model->set_item($data, $table);
			
			$data['menu'] = $this->App_model->get_menu_html($id_html);
			
			$data['html'] = $this->App_model->get_html($id, $id_html);
			
			$data['is_change'] = TRUE;
			
			$views = array(
			
							$this->load->view(url_title($this->App_model->get_template($id), 'underscore').'/include/menu_template',$data, true),
							$this->load->view(url_title($this->App_model->get_template($id), 'underscore').'/include/modal_form/modal_menu',$data, true),
						
						);
			
			echo json_encode($views);
			
		}else{
			
			show_404();
		}
 		
 	}
	
	public function delete_menu($id){
 		
		if($this->input->is_ajax_request()){
			
			$id_html = $this->input->post('id_html');
			
			$table = $this->input->post('table');
		
			$this->load->model('Ajax_model');
			
			$id_html = $this->input->post('id_html');
			
			$id_table = $this->input->post('id_table');
			
			$this->Ajax_model->delete_item($id_html, $table, $id_table);
			
			$data['menu'] = $this->App_model->get_menu_html($id_html);
			
			$data['html'] = $this->App_model->get_html($id,$id_html);
			
			$data['is_change'] = TRUE;
			
			$views = array(
			
							$this->load->view(url_title($this->App_model->get_template($id), 'underscore').'/include/menu_template',$data, true),
							$this->load->view(url_title($this->App_model->get_template($id), 'underscore').'/include/modal_form/modal_menu',$data, true),
						
						);
			
			echo json_encode($views);
			
		}else{
			
			show_404();
		}
 		
 	}

	
	public function up_load_image($id, $id_html){
		
		if($this->input->is_ajax_request()){
			
			$primary_images = array('top1.jpg','top2.jpg','top3.jpg','promo.jpg','garantia.jpg','image.jpg','bg.jpg','animado.jpg','icono_example.jpg');
			
			$table = $this->input->post('table');
			$item = $this->input->post('id');
			$id_html = $this->input->post('id_html');
			$max_width = $this->input->post('max_width');
			$max_height = $this->input->post('max_height');
			$folder_template = $this->input->post('folder_template');
			$folder_image = $this->input->post('folder_image');
			$name_image = $this->input->post('file_name');
			
			if(!in_array($name_image, $primary_images)){
				$this->delete_image_url($folder_template.'/'.$folder_image.'/'.$name_image);
			}
			
			
			if($this->input->post('id_item')){
				
				$id_item = $this->input->post('id_item');
				
			}else{
				
				$id_item = FALSE;
			} 
			
			$config['upload_path'] = $folder_template.'/'.$folder_image.'/';
			$config['allowed_types'] = '*';
			$config['max_size']     = '500';
			
			if($table == 'style'){
				$config['max_width'] = 0;
				$config['max_height'] = 0;
			}else{
				$config['max_width'] = $max_width;
				$config['max_height'] = $max_height;
			}
			
			$config['overwrite'] = FALSE;
			
			$this->load->library('upload');
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('file')){
				
				$this->load->model('Ajax_model');
				$data_image = $this->upload->data();
				if($this->Ajax_model->get_image($item,$data_image['file_name'],$table,$id_html,$id_item)){
					
					echo json_encode($data_image['file_name']);
					
				}else{
					
					echo json_encode('<div id="dialog-message" title="¡Ups! parece que tenemos un error"><p><span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>Problemas al guardar la imagen en la base de datos.', '</p></div>');
				}

			}else{
				
				echo json_encode($this->upload->display_errors('<div id="dialog-message" title="¡Ups! parece que tenemos un error"><p><span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>', '</p></div>'));
			}
			
			
		}else{
			
			show_404();
		}

	}

	public function up_load_image_carrusel($id){
		
		if($this->input->is_ajax_request()){
			
			$table = $this->input->post('table');
			$item = $this->input->post('id');
			$id_html = $this->input->post('id_html');
			$folder_template = $this->input->post('folder_template');
			$folder_image = $this->input->post('folder_image');
			
			
			if($this->input->post('id_item')){
				
				$id_item = $this->input->post('id_item');
				
			}else{
				
				$id_item = FALSE;
			} 
			
			$config['upload_path'] = $folder_template.'/'.$folder_image.'/';
			$config['allowed_types'] = '*';
			$config['max_size']     = '500';
			$config['max_width'] = 0;
			$config['max_height'] = 0;
			$config['overwrite'] = FALSE;
			
			$this->load->library('upload');
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('file')){
				
				$this->load->model('Ajax_model');
				$data_image = $this->upload->data();
				
				$data[$item] = $data_image['file_name'];
				$data['id_html'] = $id_html;
				
				if($this->Ajax_model->set_item($data,$table)){
					
					$data['carrusel'] = $this->App_model->get_carrusel_html($id_html);
					$data['html'] = $this->App_model->get_html($id,$id_html);

					$json = array(
			
							$this->load->view(url_title($this->App_model->get_template($id), 'underscore').'/include/modal_form/modal_carrusel',$data, true),
							$data_image['file_name']
						
						);
			
					echo json_encode($json);

				}else{
					
					echo json_encode('<div id="dialog-message" title="¡Ups! parece que tenemos un error"><p><span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>Problemas al guardar la imagen en la base de datos.', '</p></div>');
				}

			}else{
				
				echo json_encode($this->upload->display_errors('<div id="dialog-message" title="¡Ups! parece que tenemos un error"><p><span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>', '</p></div>'));
			}
			
			
		}else{
			
			show_404();
		}

	}


	public function save_html($id, $id_html){
		
		if(isset($_POST['submit_save_html'])){
			
			$name_html = "";
			
			if($this->input->post('name_html') ==""){
				
				$name_html = 'html_'.$id_html;
				
			}else{
				
				$name_html = $this->input->post('name_html');
			}
			
			$this->App_model->save_html($id, $id_html,$name_html);
			redirect('app/html/'.$id.'/'.$id_html);
			
		}else{
			
			show_404();
		}
		
		
		
	}

	public function download_html($id = FALSE, $id_html = FALSE){
		
		if($id AND $id_html){
				
			$html = $this->App_model->get_html($id,$id_html);
			
			header('Content-type: application/msword');
			header('Content-Disposition: inline; filename='.$html->name_html.'.txt');
			
			$data['js'] =  $this->load->view(url_title($this->App_model->get_template($id), 'underscore').'/js_module/js_module','',TRUE);
			
			$data['template'] = $this->App_model->get_template($id);
			
			$data['folder_template'] = url_title($this->App_model->get_template($id), 'underscore');
		
			$data['html'] = $this->App_model->get_html($id,$id_html);
			
			$data['style'] = $this->App_model->get_style_html($data['html']->id_html);
			
			$data['social'] = $this->App_model->get_social_html($data['html']->id_html);
			
			$data['menu'] = $this->App_model->get_menu_html($data['html']->id_html);
			
			$data['tabs'] = $this->App_model->get_tabs_html($data['html']->id_html);
			
			$data['carrusel'] = $this->App_model->get_carrusel_html($data['html']->id_html);
			
			$data['downloadable_version'] = TRUE;
			
			echo $this->load->view(url_title($this->App_model->get_template($id), 'underscore').'/'.url_title($this->App_model->get_template($id), 'underscore'), $data, true);
			
		}else{
			
			show_404();
		}
			
	}
			

	public function delete_background($id){
		
		if($this->input->is_ajax_request()){
			
			$table = $this->input->post('table');
			$item = $this->input->post('id');
			$id_html = $this->input->post('id_html');
			$url = $this->input->post('url');

			if($this->input->post('id_item')){
				
				$id_item = $this->input->post('id_item');
				
			}else{
				
				$id_item = FALSE;
			} 
			
			$this->load->model('Ajax_model');
			
			$json = array(FALSE, FALSE);
			
			if(!$this->delete_image_url($url))
				$json[1] = json_encode('<div id="dialog-message" title="¡Ups! parece que tenemos un error"><p><span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>Problemas al eliminar el archivo de imagen de fondo.', '</p></div>');
				
			
			$this->Ajax_model->get_image($item,"",$table,$id_html,$id_item);
			
			$data['html'] = $this->App_model->get_primary($id);
		
			$data['style'] = $this->App_model->get_style_html($data['html']->id_html);			
			
			$json[0] = json_encode($data['style']->background_image);
			
			echo json_encode($json);


		}else{
			
			show_404();
		}


	}
	
	public function delete_image_carrusel($id){
		
		if($this->input->is_ajax_request()){
			
			$table = $this->input->post('table');
			$item = $this->input->post('id');
			$id_html = $this->input->post('id_html');
			$url = $this->input->post('url');

			if($this->input->post('id_table')){
				
				$id_item = $this->input->post('id_table');
				
			}else{
				
				$id_item = FALSE;
			} 
			
			$this->load->model('Ajax_model');
			
			if(!$this->delete_image_url($url))
				echo json_encode('<div id="dialog-message" title="¡Ups! parece que tenemos un error"><p><span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>Problemas al eliminar el archivo de imagen del carrusel.', '</p></div>');
				
			
			$this->Ajax_model->delete_item($id_html, $table, $id_item);

		}else{
			
			show_404();
		}


	}
	
	public function my_html(){
		
		$data['title'] = "Mis HTML | HTML ebay";
			
		$data['keywords'] = "";

		$data['description'] = "";
			
		$data['reference'] = 'APP';
		
		$data['view'] = 'my_html';

		$data['htmls'] = $this->App_model->get_all_html();
		
		$this->load->view('layout', $data);
	}
	
	public function delete_html($id_html = FALSE){
		
		if($id_html){
		
			$this->App_model->delete_html($id_html);
			redirect('app/my_html');
		
		}else{
			
			show_404();
		}
	}
	
	private function delete_image_template($id_template, $id_html, $id_table, $table, $field_image, $folder){
		
		$folder_template = url_title($this->App_model->get_template($id_template), 'underscore');
		
		$file = $this->App_model->get_image($id_html, $id_table, $field_image, $table);
		
		if(!unlink($folder_template.'/'.$folder.'/'.$file[$field_image]))
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
		
	}
	
	private function delete_image_url($url){
		
		if(!unlink($url))
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
		
	}

}
