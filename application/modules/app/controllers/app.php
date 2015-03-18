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
			$html = $this->Clone_template_model->clone_template($id);
			redirect('app/html/'.$id.'/'.$html);

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
			
			$table = $this->input->post('table');
			$item = $this->input->post('id');
			$id_html = $this->input->post('id_html');
			$max_width = $this->input->post('max_width');
			$max_height = $this->input->post('max_height');
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
			$config['max_width'] = $max_width;
			$config['max_height'] = $max_height;
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

					echo json_encode($this->load->view(url_title($this->App_model->get_template($id), 'underscore').'/include/modal_form/modal_carrusel',$data, true));

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
			

	public function delete_image($id){
		
		if($this->input->is_ajax_request()){
			
			$table = $this->input->post('table');
			$item = $this->input->post('id');
			$id_html = $this->input->post('id_html');

			if($this->input->post('id_item')){
				
				$id_item = $this->input->post('id_item');
				
			}else{
				
				$id_item = FALSE;
			} 
			
			$this->load->model('Ajax_model');
			$this->Ajax_model->get_image($item,"",$table,$id_html,$id_item);
			
			$data['html'] = $this->App_model->get_primary($id);
		
			$data['style'] = $this->App_model->get_style_html($data['html']->id_html);			
			
			echo json_encode($data['style']->background_image);


		}else{
			
			show_404();
		}


	}
	
	public function delete_image_carrusel($id){
		
		if($this->input->is_ajax_request()){
			
			$table = $this->input->post('table');
			$item = $this->input->post('id');
			$id_html = $this->input->post('id_html');

			if($this->input->post('id_table')){
				
				$id_item = $this->input->post('id_table');
				
			}else{
				
				$id_item = FALSE;
			} 
			
			$this->load->model('Ajax_model');
			
			$this->Ajax_model->delete_item($id_html, $table, $id_item);
			
			//$data['carrusel'] = $this->App_model->get_carrusel_html($id_html);
			
			//$data['html'] = $this->App_model->get_html($id,$id_html);

			//echo json_encode($this->load->view(url_title($this->App_model->get_template($id), 'underscore').'/include/modal_form/modal_carrusel',$data, true));



		}else{
			
			show_404();
		}


	}

}
