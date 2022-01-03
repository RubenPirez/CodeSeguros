<?php

class Customers_model extends CI_Model{

	function get($customer_id){
		$query = $this->db
					->where('ID', $customer_id)
					->get('customers')
					->row_array();
		if ( $query == null ){
			return false;
		} else {
			return $query;
		}
	}

	function get_list($user_id){
		$tmp = $this->db
				->where('ID_user', $user_id)
				->get('customers')
				->result_array();
		
		if ( $tmp == null ){
			return false;
		} else {
			return $tmp;
		}
	}

	function add($user_id, $customer_name, $first_name, $dni, $email, $phone_number, $address, $city, $country, $cp){
		$customer_data = [
			'ID_user'		=> $user_id,
			'name'			=> $customer_name,
			'first_name'	=> $first_name,
			'DNI'			=> $dni,
			'email'		=> $email,
			'phone_number'	=> $phone_number,
			'address'		=> $address,
			'city'			=> $city,
			'country'		=> $country,
			'CP'			=> $cp
		];
		$this->db->insert('customers', $customer_data);
		if ( $this->db->affected_rows() > 0){
			return true;
		} else {
			return false;
		}
	}

	function edit($customer_id, $customer_name, $first_name, $dni, $email, $phone_number, $address, $city, $country, $cp){
		$customer_data = [
			'name'			=> $customer_name,
			'first_name'	=> $first_name,
			'DNI'			=> $dni,
			'email'		=> $email,
			'phone_number'	=> $phone_number,
			'address'		=> $address,
			'city'			=> $city,
			'country'		=> $country,
			'CP'			=> $cp
		];
		$this->db
			->set($customer_data)
			->where('ID', $customer_id)
			->update('customers');
		if ( $this->db->affected_rows() > 0 ){
			return true;
		} else {
			return false;
		}
	}

	function remove($customer_id){
		$this->db->where('ID', $customer_id)->delete('customers');
		if ( $this->db->affected_rows() > 0 ){
			return true;
		} else {
			return false;
		}
	}

	function id_customer_list(){
		$query =$this->db
			->select('ID')
			->get('customers')
			->result_array();
		return $query;
	}

	function get_id($customer_dni){
		$query = $this->db
			->select('ID')
			->where('DNI', $customer_dni)
			->get('customers')
			->row_array();
		if ( $query == null ){
			return false;
		} else {
			return $query['ID'];
		}
	}

}

