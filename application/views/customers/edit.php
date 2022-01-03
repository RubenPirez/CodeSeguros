<h6 class="card-title">Editar Cliente</h6>
<div class="col-md-6">
<?php
if ( $edited ){
	echo '<div class="alert alert-info text-center"> Editado Correctamente </div>';
}
?>
	<form action="" method="POST">
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" class="form-control" name="name" value="<?= $data['name']?>">
		</div>
		<div class="form-group">
			<label>Apellidos</label>
			<input type="text" class="form-control" name="first_name" value="<?= $data['first_name']?>">
		</div>
		<div class="form-group">
			<label f>DNI</label>
			<input type="text" class="form-control" name="DNI" value="<?= $data['DNI']?>">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" name="email" value="<?= $data['email']?>">
		</div>
		<div class="form-group">
			<label>Teléfono</label>
			<input type="text" class="form-control" name="phone_number" value="<?= $data['phone_number']?>">
		</div>
		<div class="form-group">
			<label>Dirección</label>
			<input type="text" class="form-control" name="address" value="<?= $data['address']?>">
		</div>
		<div class="form-group">
			<label>Ciudad</label>
			<input type="text" class="form-control" name="city" value="<?= $data['city']?>">
		</div>
		<div class="form-group">
			<label>País</label>
			<input type="text" class="form-control" name="country" value="<?= $data['country']?>">
		</div>
		<div class="form-group">
			<label>Código Postal</label>
			<input type="number" class="form-control" name="CP" value="<?= $data['CP']?>">
		</div>
		<input type="hidden" name="ID" value="<?= $data['ID']?>">
		<input type="hidden" name="form" value="send">
		<button class="btn btn-primary" type="submit">Guardar Cambios</button>	
		<a href="<?=base_url('index.php/customers/get_list')?>"><button class="btn btn-primary" type="button">Volver</button></a>
	</form>
</div>	