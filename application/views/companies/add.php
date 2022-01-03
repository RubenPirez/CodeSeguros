<h6 class="card-title">Añadir Nueva Compañía</h6>
<div class="col-md-6">
<?php
if ( $add ){
	echo '<div class="alert alert-success"> Nueva compañía creada correctamente </div>';
}
?>
	<form action="" method="POST">
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label>Persona de Contacto</label>
			<input type="text" class="form-control" name="contact_person">
		</div>
		<div class="form-group">
			<label>Teléfono</label>
			<input type="text" class="form-control" name="contact_phone">
		</div>	
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" name="contact_mail">
		</div>
		<input type="hidden" name="form" value="send">
		<button class="btn btn-primary" type="submit">Añadir Nueva Compañía</button>
		<a href="<?=base_url('index.php/companies/get_list')?>"><button class="btn btn-primary" type="button">Volver</button></a>
	</form>
</div>	
