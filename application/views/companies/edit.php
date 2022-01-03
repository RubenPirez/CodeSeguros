<h6 class="card-title">Editar Compañía</h6>
<div class="col-md-6">
<?php
	if ( @$edited ){
		echo '<div class="alert alert-success"> Editado Correctamente </div>';
	}
?>
	<form action="" method="POST">
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" class="form-control" name="name" value="<?=$data['name']?>">	
		</div>
		<div class="form-group">
			<label>Persona de Contacto</label>
			<input type="text" class="form-control" name="contact_person" value="<?=$data['contact_person']?>">
		</div>
		<div class="form-group">
			<label f>Teléfono de Contacto</label>
			<input type="text" class="form-control" name="contact_phone" value="<?=$data['contact_phone']?>">
		</div>
		<div class="form-group">
			<label>Email de Contacto</label>
			<input type="text" class="form-control" name="contact_mail" value="<?=$data['contact_mail']?>">
		</div>
		<input type="hidden" name="ID" value="<?=$data['ID']?>">
		<input type="hidden" name="form" value="send">
		<button class="btn btn-primary" type="submit">Guardar Cambios</button>
		<a href="<?=base_url('index.php/companies/get_list')?>"><button class="btn btn-primary" type="button">Volver</button></a>
	</form>
</div>
