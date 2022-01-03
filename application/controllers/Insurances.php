<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insurances extends CI_Controller {

	public function add(){
		$add = false;
		$this->load->model('Products_model', 'promodel');
		$this->load->model('Customers_model', 'cumodel');
		$this->load->model('Insurances_model', 'imodel');
		if ( $this->input->post('form') == 'send' ){
				$this->imodel->add(
				$this->input->post('ID_customer'),
				$this->input->post('ID_product'),
				$this->input->post('price'),
				$this->input->post('commission')
			);
			$add = true;
		}

		$customer_data = $this->cumodel->get_list(1);
		$product_data = $this->promodel->get_list();
		$html = $this->load->view('insurances/add', ['p_data'=>$product_data, 'c_data'=>$customer_data ,'add'=>$add], true);
		$this->load->view('panel', ['content'=>$html]);
	}

	public function edit($id){
		$edited = false;
		$this->load->model('Insurances_model', 'imodel');
		if ( $this->input->post('form') == 'send' ){
			$this->imodel->edit(
				$this->input->post('ID'),
				$this->input->post('ID_product'),
				$this->input->post('price'),
				$this->input->post('commission')
			);
			$edited = true;
		}
		
		$data = $this->imodel->get($id);
		$html = $this->load->view('insurances/edit', ['data'=>$data ,'edited'=>$edited], true);
		$this->load->view('panel', ['content'=>$html]);
	}

	public function get_list(){
		$this->load->model('Customers_model', 'cumodel');
		$this->load->model('Insurances_model', 'imodel');
		$list = null;
		$id = null;
		$dni = $this->input->get('buscar');
		if ( $this->input->get('form') == 'send' ){
			$id = $this->cumodel->get_id($dni);
		}
		if ( $id !== null ){	
			$list = $this->imodel->get_list($id);
		}	

		$html = $this->load->view('insurances/list', ['list'=>$list], true);
		$this->load->view('panel', ['content'=>$html]);	
	}

	public function get($id){
		$this->load->model('Insurances_model', 'imodel');
		$data = $this->imodel->get($id);

		$html = $this->load->view('insurances/data', ['data'=>$data], true);
		$this->load->view('panel', ['content'=>$html]);	
	}

	public function remove($id){
		$this->load->model('Insurances_model', 'imodel');
		$this->imodel->remove($id);

		redirect('insurances/get_list');
	}

}