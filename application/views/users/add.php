<h6 class="card-title">Añadir Usuario</h6>
<div class="col-md-6">
	<?php
		if ( $add ){
			echo '<div class="alert alert-info"> Añadido correctamente </div>';
		}
	?>
	<form action="" method="POST">
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="mail" class="form-control">
		</div>
		<div class="form-group">
			<label>Contraseña</label>
			<input type="password" name="pass" class="form-control">
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
			<label>Edad</label>
			<input type="number" name="edad" class="form-control">
		</div>
		<div class="form-group">
			<label f>DNI</label>
			<input type="text" name="DNI" class="form-control">
		</div>				
		<input type="hidden" name="form" value="send">
		<button class="btn btn-primary" type="submit">Añadir Nuevo Usuario</button>
		<a href="<?=base_url('index.php/users/get_list')?>"><button class="btn btn-primary" type="button">Volver</button></a>
	</form>
</div>
