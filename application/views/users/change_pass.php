<div class="col-md-6">
	<?php
	if ( $edited ){
		echo '<div class="alert alert-info"> Contraseña modificada correctamente </div>';
	}
	?>
	<h6 class="card-title">Cambio de Contraseña</h6>
	<form action="" method="POST">
		<div class="form-group">
			<label>Contraseña</label>
			<input type="password" class="form-control" name="pass" autocomplete="off" placeholder="Password">
		</div>
		<div class="form-group">
			<label>Nueva Contraseña</label>
			<input type="password" class="form-control" name="new_pass" autocomplete="off" placeholder="Password">
		</div>
		<div class="form-group">
			<label>Repite Nueva Contraseña</label>
			<input type="password" class="form-control" name="rpt_new_pass" autocomplete="off" placeholder="Password">
		</div>
		<input type="hidden" name="form" value="send">
		<input type="hidden" name="ID" value="<?=$data['ID']?>">
		<button type="submit" class="btn btn-primary mr-2">Enviar</button>
		<a href="<?=base_url('index.php/users/get_list')?>"><button class="btn btn-primary" type="button">Volver</button></a>
	</form>
</div>
