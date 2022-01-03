<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function add(){
		$add = false;
		$this->load->model('Companies_model', 'comodel');
		$this->load->model('Products_model', 'promodel');
		if ( $this->input->post('form') == 'send'){
			$this->promodel->add(
				$this->input->post('ID_company'),
				$this->input->post('name'),
				$this->input->post('type')
			);
			$add = true;
		}
		
		$data = $this->promodel->get_list();
		$company_data = $this->comodel->get_list();		
		$html = $this->load->view('products/add', ['data'=>$data, 'c_data'=>$company_data, 'add'=>$add], true);
		$this->load->view('panel', ['content'=>$html]);
	}

	public function edit($id){
		$edited = false;
		$this->load->model('Products_model', 'promodel');
		if ( $this->input->post('form') == 'send'){
			$this->promodel->edit(
				$this->input->post('ID'),
				$this->input->post('ID_company'),
				$this->input->post('product_name'),
				$this->input->post('type')
			);
			$edited = true;
		}

		$data = $this->promodel->get($id);
		$html = $this->load->view('products/edit', ['data'=>$data, 'edited'=>$edited], true);
		$this->load->view('panel', ['content'=>$html]);
	}

	public function get($id){
		$this->load->model('Products_model', 'promodel');
		$data = $this->promodel->get($id);
		$html = $this->load->view('products/data', ['data'=>$data], true);
		$this->load->view('panel', ['content'=>$html]);
	}

	public function get_list(){
		$this->load->model('Products_model', 'promodel');
		
		$data = $this->promodel->get_list();
		$html = $this->load->view('products/list', ['list'=>$data], true);
		$this->load->view('panel', ['content'=>$html]);
	}

	public function remove($id){
		$this->load->model('Products_model', 'promodel');
		$this->promodel->remove($id);

		redirect('products/get_list');
	}
}