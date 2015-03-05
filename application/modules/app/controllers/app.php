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
		
		
		/*if($this->App_model->get_temporal($id)){
			redirect('app/html/'.$id.'/'.$this->App_model->get_temporal($id));
		}else{
			$data['html'] = $this->App_model->get_basic_html($id);
		}*/

		$data['title'] = "Panel de control | YCP Manager";
			
		$data['keywords'] = url_title($this->App_model->get_template($id), 'underscore');

		$data['description'] = "";
			
		$data['reference'] = 'APP';

		$data['view'] = url_title($this->App_model->get_template($id), 'underscore').'/'.url_title($this->App_model->get_template($id), 'underscore');
			
		$data['robots'] = 'noindex, nofollow';
		
		$data['js'] =  $this->load->view(url_title($this->App_model->get_template($id), 'underscore').'/js_module/js_module','',TRUE);
		
		$data['template'] = $this->App_model->get_template($id);
		
		$this->load->view('layout', $data);
		
		
 	}
	
	public function html($id = 1, $id_html){

		$data['title'] = "Panel de control | YCP Manager";
			
		$data['keywords'] = url_title($this->App_model->get_template($id), 'underscore');

		$data['description'] = "";
			
		$data['reference'] = 'APP';

		$data['view'] = url_title($this->App_model->get_template($id), 'underscore').'/'.url_title($this->App_model->get_template($id), 'underscore');
			
		$data['robots'] = 'noindex, nofollow';
		
		$data['js'] =  $this->load->view(url_title($this->App_model->get_template($id), 'underscore').'/js_module/js_module','',TRUE);
		
		$data['template'] = $this->App_model->get_template();
		
		$this->load->view('layout', $data);
		
		
 	}
	
	
}
