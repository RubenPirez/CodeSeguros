<h6 class="card-title">Editar Producto</h6>
<div class="col-md-6">
<?php
	if ( @$edited ){
		echo '<div class="alert alert-success"> Editado Correctamente </div>';
	}
?>
	<form action="" method="POST">
		<div class="form-group">
			<label>Compañía</label>
			<input type="text" class="form-control" name="ID_company" value="<?=$data['ID_company']?>">	
		</div>
		<div class="form-group">
			<label>Producto</label>
			<input type="text" class="form-control" name="product_name" value="<?=$data['product_name']?>">
		</div>
		<div class="form-group">
			<label>Selecciona Tipo de Producto</label>
			<select class="js-example-basic-single w-100" data-width="100%" name="type">
				<option value="<?=$data['type']?>" selected><?=$data['type']?></option>	
				<option value="auto">Auto</option>
				<option value="moto">Moto</option>
				<option value="hogar">Hogar</option>
				<option value="vida">Vida</option>
			</select>
		</div>
		<input type="hidden" name="ID" value="<?=$data['ID']?>">
		<input type="hidden" name="form" value="send">
		<button class="btn btn-primary" type="submit">Guardar Cambios</button>
		<a href="<?=base_url('index.php/products/get_list')?>"><button class="btn btn-primary" type="button">Volver</button></a>
	</form>
	
</div>