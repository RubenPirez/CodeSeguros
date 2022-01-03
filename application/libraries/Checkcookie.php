<?php

Class Checkcookie{

	function __construct(){
		// acceso a la base de datos
		$CI = & Get_instance();

		$CI->load->model('Users_model', 'umodel');
		$result = $CI->umodel->check_token(@$_COOKIE['token']);

		if ( $CI->uri->uri_string !== "" && $result['status'] == false ){
			redirect(base_url());
		} else if ( $CI->uri->uri_string == "" && $result['status'] ) {
			redirect(base_url('index.php/customers/get_list'));
		} else if ( $CI->uri->uri_string == "" ) {
			return false;
		} else {
			define('USERDATA', $result['data_user']);
		}	
	}
}
