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
				
			$data['robots'] = 'noindex, nofollow';
			
			$data['js'] =  $this->load->view(url_title($this->App_model->get_template($id), 'underscore').'/js_module/js_module','',TRUE);
			
			$data['template'] = $this->App_model->get_template($id);
		
			$data['html'] = $this->App_model->get_html($id,$id_html);
			
			$data['style'] = $this->App_model->get_style_html($data['html']->id_html);
			
			$data['social'] = $this->App_model->get_social_html($data['html']->id_html);
			
			$data['menu'] = $this->App_model->get_menu_html($data['html']->id_html);
			
			$data['tabs'] = $this->App_model->get_tabs_html($data['html']->id_html);
			
			$data['carrusel'] = $this->App_model->get_carrusel_html($data['html']->id_html);
			
			$this->load->view('layout', $data);
		
		}
		
		
 	}
	
	
}
