<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login  extends MX_Controller {
	

	public function __construct(){
		
    	parent::__construct();
		$this->load->helper('MY_encrypt_helper');
    	$this->load->model('Login_model');
		
     }
	
	public function index(){
		
		if ( isset( $_POST['submit_login'] ) ) {
			
			$this->form_validation->set_rules('login', 'usuario', 'required');
			$this->form_validation->set_rules('password', 'Contraseña', 'required|min_length[8]');
			
			$this->form_validation->set_error_delimiters('<div role="alert" class="alert alert-danger">', '</div>');
			$this->form_validation->set_message('required', '%s es requerido.');
			$this->form_validation->set_message('min_length', '%s no puede tener menos de %s caracteres.');
			
			if ($this->form_validation->run() == TRUE){
				
				$user_back = encode_string($this->input->post('login'),$this->input->post('password'));
				if(!$this->Login_model->get_data_user($user_back[0])){
					
					$data['error'] = '<div role="alert" class="alert alert-danger">usuario o contraseña incorrectos.</div>';
					
				}else{
					
					$sesion_data ['sure_id'] = $user_back[0];
					$this->session->set_userdata($sesion_data);
					 redirect('app');
				}
					
			}
			
			
		}
		
		if(isset($data)){
					
			$this->load->view('login',$data);
			
		}else{
				
			$this->load->view('login');
		}

	}
	
	public function logout(){
		
		$this->session->unset_userdata($sesion_data);
		$this->session->sess_destroy();
		redirect(site_url());
	
	}

}
