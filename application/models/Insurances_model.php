<?php

class Insurances_model extends CI_Model{

	function add($customer_id, $product_id, $price, $comission){
		$comission = $price * ($comission / 100);
		$new_insurance_data = [
			'ID_customer'	=> $customer_id,
			'ID_product'	=> $product_id,
			'price'			=> $price,
			'commission'	=> $comission
		];
		$this->db->insert('insurances', $new_insurance_data);
		if ( $this->db->affected_rows() > 0 ){
			return true;
		} else {
			return false;
		}
	}

	function edit($insurance_id, $product_id, $price, $comission){
		$comission = $price * ($comission / 100);
		$this->db
			->set('ID_product', $product_id)
			->set('price', $price)
			->set('commission', $comission)
			->where('ID', $insurance_id)
			->update('insurances');
		if ( $this->db->affected_rows() > 0 ){
			return true;
		} else {
			return false;
		}
	}

	function remove($insurance_id){
		$this->db->where('ID', $insurance_id)->delete('insurances');
		if ( $this->db->affected_rows() > 0 ){
			return true;
		} else {
			return false;
		}
	}

	function get($insurance_id){
		$query = $this->db->where('ID', $insurance_id)->get('insurances')->row_array();
		if ( $query == null ){
			return false;
		} else {
			return $query;
		}
	}

	function get_list($customer_id){
		$query = $this->db->where('ID_customer', $customer_id)->get('insurances')->result_array();
		if ( $query == null ){
			return false;
		} else {
			return $query;
		}
	}
}

