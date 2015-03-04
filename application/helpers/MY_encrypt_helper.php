<?php

	function encode_string($log,$pass){
		
		$CI =& get_instance();
		$CI->load->library('encrypt');
		
		
		$sure = $log.$pass;
		$salt = sha1(md5($sure));
		$options = array(
		    'cost' => 12,
		    'salt' => $salt,
		);
		 
		$pass = password_hash($pass, PASSWORD_BCRYPT, $options);
		$sure = password_hash($sure, PASSWORD_BCRYPT, $options);
		$log = $CI->encrypt->encode($log);
		
		$data_code = array($sure,$log,$pass);
		
		return $data_code;
		
	}

?>