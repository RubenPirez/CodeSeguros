<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tester extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {

		$this->load->view('welcome_tester');
		$this->load->model('Users_model', 'users');
		$this->load->model('Customers_model', 'cus');
		$this->load->model('Insurances_model', 'insur');
		$this->load->model('Products_model', 'pro');
		$this->load->model('Companies_model', 'com');


					# ******* MÉTODOS DEL MODELO USERS ******* 


	# COMPRUEBA SI EXISTE EL USUARIO Y SI CORRESPONDE LA CONTRASEÑA
	//	$tmp = $this->users->login('rubenpadelone@gmail.com', '123456789');
	//	var_dump($tmp);

	# REALIZA UNA REDIRECCIÓN A LA URL PASADA COMO PARÁMETRO
	//	$this->users->redirect("welcome");

	# OBTIENE LOS DATOS DEL USUARIO A TRAVES DEL ID OBTENIDO CON LA FUNCIÓN LOGIN
	/*	$user_id = $tmp['ID'];
		$tmp2 = $this->users->get($user_id);
		print_r($tmp2);
	*/

	# INSERTA UN NUEVO USUARIO PASÁNDOLE COMO PARÁMETRO TODOS LOS DATOS
	/*	$tmp = $this->users->add('pepe@pepe.es', '666666666', 'Pepe', 'Botella', 57, '321654852L');

		if ( $tmp ){
			echo "Usuario creado correctamente";
		} else {
			echo "Error al crear el nuevo usuario";
		}
	*/
	
	# EDITA LOS DATOS DE UN USUARIO, EN ESTE CASO EL ID LO OBTIENE DE LA FUNCIÓN LOGIN
	/*	$tmp = $this->users->update(3, 'pepito@pepito.es', 'Pepito', 'Botellón', 61, '45258987L');
		var_dump($tmp);
	*/	

	# CAMBIA EL PASSWORD DEL USUARIO
	/*	$tmp = $this->users->change_pass(1, '123456789', '987654321', '987654321');
		var_dump($tmp);
	*/

	# ELIMINAR UN USUARIO DE LA TABLA
	/*	$tmp = $this->users->remove(3);
		if ( $tmp ){
			echo "usuario borrado correctamente";
		} else {
			echo "error al borrar el usuario";
		}
	*/

						# ******* MÉTODOS DEL MODELO CLIENTES *******


	# SACAR UNA LISTA DE TODOS LOS CLIENTES DE UN USUARIO SEGUN SU ID
	/*	$tmp = $this->cus->get_list(1);
		var_dump($tmp);
	*/

	# OBTENER TODOS LOS DATOS DE UN CLIENTE POR SU ID
	/*	$tmp = $this->cus->get(2);
		if ( ! $tmp ){
			echo "No existe ningún cliente con ese ID";
		} else {
			print_r($tmp);
		}
	*/

	# AÑADIR UN NUEVO CLIENTE
	/*	$tmp = $this->cus->add(2, 'Lorena', 'Contador Díaz', '32462132M', 'lorena@contador.com', '+34666521491', 'Calle de abajo 60', 'Almería', 'España', 42615);
		if ( $tmp ){
			echo "Usuario añadido correctamente";
		} else  {
			echo "Error al crear el nuevo usuario";
		}
	*/

	# EDITAR UN CLIENTE
	/*	$tmp = $this->cus->edit(2, 'Marta', 'Cano Salvador', '25329126L', 'marta@riera.es', '+34964578221', 'Calle de arriba 28', 'Granada', 'España', 46587);
		if ( $tmp ){
			echo "Los cambios se han guardado";
		} else {
			echo "Error al actualizar los datos";
		}
	*/

	# BORRAR UN CLIENTE
	/*	$tmp = $this->cus->remove(4);
		if ( $tmp ){
			echo "Cliente borrado correctamente";
		} else {
			echo "Error al borrar al cliente";
		}
	*/

	# LISTADO CON TODOS LOS ID DE LOS CLIENTES
	/*	$tmp = $this->cus->id_customer_list();
		print_r($tmp);
	*/

	# OBTENER EL ID DE CLIENTE A TRAVÉS DE SU DNI
	/*	$tmp = $this->cus->get_id('25329126L');
		//var_dump($tmp);
		if ( $tmp ){
			echo "EL ID del cliente es: ".$tmp;
		} else {
			echo "No existe ningún cliente con el DNI introducido";
		}
	*/	

					# ******* MÉTODOS DEL MODELO INSURANCES *******


	# AÑADIR UNA NUEVA PÓLIZA
	/*	$tmp = $this->insur->add(2, 4, 225, 10);
		if ( $tmp ){
			echo "Póliza creada correctamente";
		} else {
			echo "ERROR al crear la nueva póliza";
		}
	*/

	# EDITAR UNA PÓLIZA SEGÚN SU ID
	/*	$tmp = $this->insur->edit(6, 6, 310, 15);
		if ( $tmp ){
			echo "Póliza actualizada correctamente";
		} else {
			echo "ERROR al actualizar la póliza";
		}
	*/

	# ELIMINA UNA PÓLIZA SEGUN SU ID
	/*	$tmp = $this->insur->remove(6);
		if ( $tmp ){
			echo "Póliza eliminada correctamente";
		} else {
			echo "ERROR al eliminar la póliza";
		}
	*/

	# LISTA TODAS LAS POLIZAS DE UN CLIENTE SEGUN SU ID
	/*	$tmp = $this->insur->get_list(2);
		var_dump($tmp);
	*/

	# OBTIENE LOS DATOS DE UNA POLIZA SEGÚN SU ID
	/*	$tmp = $this->insur->get(2);
		var_dump($tmp);
	*/

						# ******* MÉTODOS DEL MODELO PRODUCTS *******


	# AÑADE UN NUEVO PRODUCTO
	/*	$tmp = $this->pro->add(4, 'Seguro Hogar', 'hogar');
		if ( $tmp ){
			echo "Producto creado correctamente";
		} else {
			echo "ERROR al crear el nuevo producto";
		}
	*/

	# EDITA UN PRODUCTO SEGUN SU ID
	/*	$tmp = $this->pro->edit(1, 2, 'Seguro Moto Mapfre', 'moto');
		if ( $tmp ){
			echo "Producto actualizada correctamente";
		} else {
			echo "ERROR al actualizar el producto";
		}
	*/

	# ELIMINA UN PRODUCTO
	/*	$tmp = $this->pro->remove(8);
		if ( $tmp ){
			echo "Producto borrado correctamente";
		} else {
			echo "Error al borrar el producto";
		}
	*/

	# OBTIENE TODOS LOS DATOS DE UN PRODUCTO SEGÚN SU ID
	/*	$tmp = $this->pro->get(7);
		var_dump($tmp);
	*/

	# OBTIENE UN LISTADO DE TODOS LOS ID DE LOS PRODUCTOS
	/*	$tmp = $this->pro->get_list();
		var_dump($tmp);
	*/
	

						# ******* MÉTODOS DEL MODELO COMPANIES *******


	# AÑADE UNA NUEVA COMPAÑIA
	/*	$tmp = $this->com->add('Caser Seguros', 'Laura Gil', '+34965214785', laura@caserseguros.com);
		if ( $tmp ){
			echo "Compañía creada correctamente";
		} else {
			echo "ERROR al crear la nueva compañía";
		}
	*/

	# EDITA LOS DATOS DE UNA COMPAÑIA SEGÚN SU ID
	/*	$tmp = $this->com->edit(4, 'Caser Seguros', 'Lola Rodriguez', '+34 915554120', 'laurag@caserseguros.com');
		if ( $tmp ){
			echo "Compañía actualizada correctamente";
		} else {
			echo "ERROR al actualizar la compañía";
		}
	*/

	# ELIMINA UNA COMPAÑIA SEGÚN SU ID
	/*	$tmp = $this->com->remove(3);
		if ( $tmp ){
			echo "Compañía eliminada correctamente";
		} else {
			echo "ERROR al eliminar la compañía";
		}
	*/

	# OBTENER TODOS LOS DATOS DE UNA COMPAÑÍA SEGÚN SU ID
	/*	$tmp = $this->com->get(2);
		var_dump($tmp);
	*/

	# OBTENER TODOS LOS ID DE LAS COMPAÑIAS
	/*	$tmp = $this->com->get_list();
		var_dump($tmp);
	*/
	}
}