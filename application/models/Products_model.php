<?php

class Products_model extends CI_Model{

	function add($company_id, $name, $type){
		$new_product_data = [
			'ID_company'	=> $company_id,	
			'product_name'	=> $name,
			'type'			=> $type
		];
		$this->db->insert('products', $new_product_data);
		if ( $this->db->affected_rows() > 0 ){
			return true;
		} else {
			return false;
		}
	}

	function edit($product_id, $company_id, $name, $type){
		$product_data = [
			'ID_company'	=> $company_id,	
			'product_name'	=> $name,
			'type'			=> $type
		];
		$this->db
			->set($product_data)
			->where('ID', $product_id)
			->update('products');
		if ( $this->db->affected_rows() > 0 ){
			return true;
		} else {
			return false;
		}	
	}

	function remove($product_id){
		$this->db->where('ID', $product_id)->delete('products');
		if ( $this->db->affected_rows() > 0 ){
			return true;
		} else {
			return false;
		}
	}

	function get($product_id){
		$query = $this->db->where('ID', $product_id)->get('products')->row_array();
		if ( $query == null ){
			return false;
		} else {
			return $query;
		}
	}

	function get_list(){
		$query = $this->db->get('products')->result_array();
		if ( $query == null ){
			return false;
		} else {
			return $query;
		}
	}
}

