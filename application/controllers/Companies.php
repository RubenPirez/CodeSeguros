<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Companies extends CI_Controller {

	public function index(){

	}

	public function add(){
		$add = false;
		$this->load->model('Companies_model', 'comodel');
		if ( $this->input->post('form') == 'send' ){
			$this->comodel->add(
				$this->input->post('name'), 
				$this->input->post('contact_person'), 
				$this->input->post('contact_phone'), 
				$this->input->post('contact_mail')
			);
		$add = true;
		}

		$html = $this->load->view('companies/add', ['add'=>$add], true);
		$this->load->view('panel', ['content'=>$html]);
	}

	public function edit($id){
		$edited = false;
		$this->load->model('Companies_model', 'comodel');
	// FORMULARIO ENVIADO
		if ( $this->input->post('form') == 'send' ){
			$this->comodel->edit(
				$this->input->post('ID'), 
				$this->input->post('name'), 
				$this->input->post('contact_person'), 
				$this->input->post('contact_phone'), 
				$this->input->post('contact_mail')
			);
			
		 //redirect('companies/get_list');
		 $edited = true;
		 }
		// OBTIENE LOS DATOS DE LA BD SEGÚN SU ID
			$data = $this->comodel->get($id);
		// MUESTRA LOS DATOS
			$html = $this->load->view('companies/edit', ['data'=>$data, 'edited'=>$edited], true);
			$this->load->view('panel', ['content'=>$html]);
	}

	public function remove($id){

		$this->load->model('Companies_model', 'comodel');
		$this->comodel->remove($id);

		redirect('companies/get_list');
	}

	public function get($id){

		$this->load->model('Companies_model', 'comodel');
		$data = $this->comodel->get($id);

		$html = $this->load->view('companies/data', ['data'=>$data], true);
		$this->load->view('panel', ['content'=>$html]);
	}

	public function get_list(){

		$this->load->model('Companies_model', 'comodel');
		$data = $this->comodel->get_list();

		$html = $this->load->view('companies/list', ['list'=>$data], true);
		$this->load->view('panel', ['content'=>$html]);
	}

}