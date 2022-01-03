
<h6 class="card-title">Añadir Producto</h6>
<div class="col-md-6">
	<?php
		if ( $add ){
			echo '<div class="alert alert-success"> Añadido Correctamente </div>';;
		}
	?>
	<form action="" method="POST">
		<div class="form-group">
			<label>Selecciona la Compañía</label>
			<select class="js-example-basic-single w-100" data-width="100%" name="ID_company">
				<option selected disabled>Nombre Compañía</option>
				<?php foreach ($c_data as $c_dat) { ?>
				<option value="<?=$c_dat['ID']?>"><?=$c_dat['name']?></option>
				<?php }?>
			</select>	
		</div>
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label>Selecciona Tipo de Producto</label>
			<select class="js-example-basic-single w-100" data-width="100%" name="type">	
				<option value="auto">Auto</option>
				<option value="moto">Moto</option>
				<option value="hogar">Hogar</option>
				<option value="vida">Vida</option>
			</select>
		</div>
		<input type="hidden" name="form" value="send">
		<button class="btn btn-primary" type="submit">Añadir Nuevo Producto</button>
		<a href="<?=base_url('index.php/products/get_list')?>"><button class="btn btn-primary" type="button">Volver</button></a>
	</form>
</div>	
