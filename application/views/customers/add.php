<h6 class="card-title">Añadir Cliente</h6>
<div class="col-md-6">
	<?php
	if ( $add ){
		echo'<div class="alert alert-info text-center"> Añadido correctamente </div>';
	}
	?>
	<form action="" method="POST">
		<div class="col-md-2">
			<div class="form-group">
				<label>User ID</label>
				<input type="number" class="form-control" value="1" disabled>
			</div>
		</div>
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label>Apellidos</label>
			<input type="text" name="first_name" class="form-control">
		</div>
		<div class="form-group">
			<label f>DNI</label>
			<input type="text" name="DNI" class="form-control">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label>Teléfono</label>
			<input type="text" name="phone_number" class="form-control">
		</div>
		<div class="form-group">
			<label>Dirección</label>
			<input type="text" name="address" class="form-control">
		</div>
		<div class="form-group">
			<label>Ciudad</label>
			<input type="text" name="city" class="form-control">
		</div>
		<div class="form-group">
			<label>País</label>
			<input type="text" name="country" class="form-control">
		</div>
		<div class="form-group">
			<label>Código Postal</label>
			<input type="number" name="CP" class="form-control">
		</div>
		<input type="hidden" name="form" value="send">
		<button class="btn btn-primary" type="submit">Añadir Nuevo Cliente</button>
		<a href="<?=base_url('index.php/customers/get_list')?>"><button class="btn btn-primary" type="button">Volver</button></a>
	</form>
</div>