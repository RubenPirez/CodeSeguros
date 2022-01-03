<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

	public function add(){
		$add = false;
		$this->load->model('Customers_model', 'cumodel');

		if ( $this->input->post('form') == 'send' ){
			$this->cumodel->add(
				1,
				$this->input->post('name'),
				$this->input->post('first_name'),
				$this->input->post('DNI'),
				$this->input->post('email'),
				$this->input->post('phone_number'),
				$this->input->post('address'),
				$this->input->post('city'),
				$this->input->post('country'),
				$this->input->post('CP')
			);
			$add = true;
		}

		$html = $this->load->view('customers/add', ['add'=>$add], true);
		$this->load->view('panel', ['content'=>$html]);

	}

	public function edit($id){
		$edited = false;
		$this->load->model('Customers_model', 'cumodel');

		if ( $this->input->post('form') == 'send' ){
			$this->cumodel->edit(
				$this->input->post('ID'),
				$this->input->post('name'),
				$this->input->post('first_name'),
				$this->input->post('DNI'),
				$this->input->post('email'),
				$this->input->post('phone_number'),
				$this->input->post('address'),
				$this->input->post('city'),
				$this->input->post('country'),
				$this->input->post('CP')
			);
			$edited = true;
		} 

		$data = $this->cumodel->get($id);
		$html = $this->load->view('customers/edit', ['data'=>$data, 'edited'=>$edited], true);
		$this->load->view('panel', ['content'=>$html]);

	}

	public function get($id){
		$this->load->model('Customers_model', 'cumodel');
		$data = $this->cumodel->get($id);

		$html = $this->load->view('customers/data', ['data'=>$data], true);
		$this->load->view('panel', ['content'=>$html]);

	}

	public function get_list(){
		
		$this->load->model('Customers_model', 'cumodel');
		$data = $this->cumodel->get_list(USERDATA['ID']);

		$html = $this->load->view('customers/list', ['list'=>$data], true);
		$this->load->view('panel', ['content'=>$html]);

	}

	public function remove($id){
		$this->load->model('Customers_model', 'cumodel');
		$this->cumodel->remove($id);

		redirect('customers/get_list');
	}

}