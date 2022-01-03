<?php

class Companies_model extends CI_Model{

	function add($name, $contact_person, $phone, $mail){
		$new_data_company = [
			'name'	=> $name,
			'contact_person'=> $contact_person,
			'contact_phone'	=> $phone,
			'contact_mail'	=> $mail
		];
		$this->db->insert('companies', $new_data_company);
		if ( $this->db->affected_rows() > 0 ){
			return true;
		} else {
			return false;
		}
	}

	function edit($company_id, $name, $contact_person, $phone, $mail){
		$new_data_company = [
			'name'	=> $name,
			'contact_person'=> $contact_person,
			'contact_phone'	=> $phone,
			'contact_mail'	=> $mail
		];
		$this->db
			->set($new_data_company)
			->where('ID', $company_id)
			->update('companies');
		if ( $this->db->affected_rows() > 0 ){
			return true;
		} else {
			return false;
		}
	}

	function remove($company_id){
		$this->db->where('ID', $company_id)->delete('companies');
		if ( $this->db->affected_rows() > 0 ){
			return true;
		} else {
			return false;
		}
	}

	function get($company_id){
		$query = $this->db->where('ID', $company_id)->get('companies')->row_array();
		if ( $query == null){
			return false;
		} else {
			return $query;
		}
	}

	function get_list(){
		$query = $this->db->get('companies')->result_array();
		if ( $query == null){
			return false;
		} else {
			return $query;
		}
	}
}

