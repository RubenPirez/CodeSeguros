<?php

class Users_model extends CI_Model{
// comprueba si coinciden usuario y password en la bd
	function login($email, $password){
		$password = sha1($password);

		$tmp =$this->db
				->where('mail', $email)
				->where('pass', $password)
				->get('users');

		if ( $tmp->num_rows() == 0 ){
			return [
				'status' => 'false',
				'error' => 'Usuario/Password incorrectos'
			];
		} else {
		// si el login es correcto genera un token aleatorio
			$data_user =  $tmp->row_array();
		// 3 veces un número aleatorio + tiempo acutual + los datos de usuario convertidos a String. Simplementa para darle mayor seguridad
			$token = sha1( rand(1000000, 10000000).rand(1000000, 10000000).rand(1000000, 10000000).time().json_encode($data_user) );
		// actualiza el token en la base de datos
			$this->db->set('token', $token)->where('ID', $data_user['ID'])->update('users');
			$data_user['token'] = $token;
		// devuelve los datos de usuario con el nuevo token	
			return [
				'status' => true,
				'data_user' => $data_user,
				'token' => $data_user['token']
			];
		}
	}
// comprueba si coincide el token con el usuario y devuelve los datos de usuario incluido el valor del token
	function check_token($token){
		$tmp = $this->db->where('token', $token)->get('users');
		if ( $tmp->num_rows() == 0 ){
			return [
				'status' => false,
				'error' => 'token no válido'
			];
		} else {
			$data_user =  $tmp->row_array();
			return [
				'status' => true,
				'data_user' => $data_user,
				'token' => $data_user['token']
			];
		}
	}

	function get($user_id){

		$tmp = $this->db
				->where('ID', $user_id)
				->get('users');

		if ( $tmp == null){
			return false;
		} else {
			return $tmp->row_array();
		}	
	}

	function get_list(){
		$tmp = $this->db->get('users')->result_array();
		if ( $tmp == null ){
			return false;
		} else {
			return $tmp;
		}
	}

	function redirect($ruta){
		header("Location: ".$ruta);
	}

	function add($email, $pass, $user_name, $first_name, $edad, $user_dni){
		$new_user_data = [
			'mail'		=> $email,
			'pass'		=> sha1($pass),
			'name'	=> $user_name,
			'first_name'=> $first_name,
			'edad'		=> $edad,
			'DNI'	=> $user_dni
		];

		$this->db->insert('users', $new_user_data);
		if ( $this->db->affected_rows() > 0 ){
			return true;
		} else {
			return false;
		}
	}

	function update($user_id, $email, $user_name, $first_name, $edad, $dni){
		$user_new_data = [
			'mail'		=> $email,
			'name'		=> $user_name,
			'first_name'=> $first_name,
			'edad'		=> $edad,
			'dni'		=> $dni
		];

		$this->db
			->set($user_new_data)
			->where('ID', $user_id)
			->update('users');
		
		if ( $this->db->affected_rows() > 0 ){
			return true;
		} else {
			return false;
		}
	}

	function change_pass($user_id, $pass, $new_pass, $rpt_new_pass){
		$pass_sha1 = sha1($pass);
		$new_pass_sha1 = sha1($new_pass);
		$rpt_new_pass_sha1 = sha1($rpt_new_pass);
		$tmp = $this->db->where('ID', $user_id) 
						->where('pass', $pass_sha1)
						->get('users')
						->row_array();
		if ( $tmp == null){
			return false;
		} else {
			if ( $new_pass_sha1 == $rpt_new_pass_sha1 ){
				$this->db
					->set('pass', $new_pass_sha1)
					->where('ID', $user_id)
					->update('users');
				return true;
			} else {
				return false;
			}
		}	
	}

	function remove($user_id){
		$this->db->where('ID', $user_id)->delete('users');
		if ( $this->db->affected_rows() > 0 ){
			return true;
		} else {
			return false;
		}
	}
}
