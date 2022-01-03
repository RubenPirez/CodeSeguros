<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function login(){
		$error = false;
		$this->load->model('Users_model', 'umodel');
		if ( $this->input->post('form') == 'send' ){
		$data =	$this->umodel->login(
				$this->input->post('user'),
				$this->input->post('pass')
			);
			if ( $data == false ){
				echo "Error";
				$error = true;
			} else {
				echo "Todo OK";
				redirect('/users/get_list');
			}
		}

		$html = $this->load->view('users/login', ['error'=>$error], true);
		$this->load->view('panel', ['content'=>$html]);
	}

	public function get($id){
		$this->load->model('Users_model', 'umodel');
		$data = $this->umodel->get($id);

		$html = $this->load->view('users/data', ['data'=>$data], true);
		$this->load->view('panel', ['content'=>$html]);

	}

	public function add(){
		$add = false;
		$this->load->model('Users_model', 'umodel');
		if ( $this->input->post('form') == 'send' ){
			$this->umodel->add(
				$this->input->post('mail'),
				$this->input->post('pass'),
				$this->input->post('name'),
				$this->input->post('first_name'),
				$this->input->post('edad'),
				$this->input->post('DNI')
			);
			$add = true;
		}
		$html = $this->load->view('users/add', ['add'=>$add], true);
		$this->load->view('panel', ['content'=>$html]);
	}

	public function edit($id){
		$edited = false;
		$this->load->model('Users_model', 'umodel');
		if ( $this->input->post('form') == 'send' ){
			$this->umodel->update(
				$this->input->post('ID'),
				$this->input->post('mail'),
				$this->input->post('name'),
				$this->input->post('first_name'),
				$this->input->post('edad'),
				$this->input->post('DNI')
			);
			$edited = true;
		}

		$data = $this->umodel->get($id);
		$html = $this->load->view('users/edit', ['data'=>$data, 'edited'=>$edited], true);
		$this->load->view('panel', ['content'=>$html]);
	}

	public function remove($id){
		$this->load->model('Users_model', 'umodel');
		$this->umodel->remove($id);
		redirect('/users/get_list');
	}

	public function get_list(){
		$this->load->model('Users_model', 'umodel');
		$data = $this->umodel->get_list();

		$html = $this->load->view('users/list', ['list'=>$data], true);
		$this->load->view('panel', ['content'=>$html]);
	}

	public function change_pass($id){
		$edited = false;
		$this->load->model('Users_model', 'umodel');
		if ( $this->input->post('form') == 'send' ){
			$this->umodel->change_pass(
			$this->input->post('ID'),
			$this->input->post('pass'),
			$this->input->post('new_pass'),
			$this->input->post('rpt_new_pass')
			);
			$edited = true;	
		}

		$data = $this->umodel->get($id);
		$html = $this->load->view('users/change_pass', ['data'=>$data, 'edited'=>$edited], true);
		$this->load->view('panel', ['content'=>$html]);
	}

	public function logout(){
		setcookie('token', false, -1, '/');
		redirect(base_url());
	}

}