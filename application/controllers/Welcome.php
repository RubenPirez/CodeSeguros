<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index() {

		if ( $this->input->post('form') == 'send' ){
			$this->load->model('Users_model', 'umodel');
			$datos = $this->umodel->login($this->input->post('user'), $this->input->post('pass'));

			//print_r($datos);

			if ( $datos['status'] ){
				setcookie('token', $datos['token'], time()+31536000, '/');
				redirect(base_url('index.php/customers/get_list'));
			}

			//$datos = $this->umodel->check_token("dasds644133cc992e5394aeb387086d66752a6c883573");
			//print_r($datos);
		}

		$this->load->view('users/login');
		//$this->load->view('panel', ['content'=>$html]);
	}
}
