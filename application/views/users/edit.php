<h6 class="card-title">Editar Usuario</h6>
<div class="col-md-6">
	<?php
		if ( $edited ){
			echo '<div class="alert alert-info"> Editado correctamente </div>';
		}
	?>
	<form action="" method="POST">
	<div class="col-md-2">
			<div class="form-group">
				<label>User ID</label>
				<input type="number" class="form-control" value="<?=$data['ID']?>" disabled>
			</div>
		</div>
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" class="form-control" name="name" value="<?=$data['name']?>">
		</div>
		<div class="form-group">
			<label>Apellidos</label>
			<input type="text" class="form-control" name="first_name" value="<?=$data['first_name']?>">
		</div>
		<div class="form-group">
			<label f>DNI</label>
			<input type="text" class="form-control" name="DNI" value="<?=$data['DNI']?>">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" name="mail" value="<?=$data['mail']?>">
		</div>
		<div class="form-group">
			<label>Edad</label>
			<input type="number" class="form-control" name="edad" value="<?=$data['edad']?>">
		</div>
		<input type="hidden" name="form" value="send">
		<input type="hidden" name="ID" value="<?=$data['ID']?>">
		<button class="btn btn-primary" type="submit">Guardar Cambios</button>
		<a href="<?=base_url('index.php/users/get_list')?>"><button class="btn btn-primary" type="button">Volver</button></a>
	</form>
</div>
