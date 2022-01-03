<h6 class="card-title">Editar Póliza</h6>
<div class="col-md-6">
	<?php
		if ( $edited ){
			echo '<div class="alert alert-success"> Datos Editados Correctamente </div>';;
		}
	?>
	<form action="" method="POST">
		<div class="form-group">
			<label>ID Cliente</label>
			<input type="number" class="form-control" value="<?=$data['ID'];?>" disabled>
		</div>
		<div class="form-group">
			<label>Selecciona el Producto</label>
			<input type="number" class="form-control" name="ID_product" value="<?=$data['ID_product'];?>">
		</div>
		<div class="form-group">
			<label>Precio</label>
			<input type="text" class="form-control" name="price" value="<?=$data['price'];?>">
		</div>
		<div class="form-group">
		<label>Comisión</label>
			<select class="js-example-basic-single w-100" data-width="100%" name="commission">
				<option selected disabled><?=$data['commission'];?></option>
				<option value="5">5%</option>
				<option value="10">10%</option>
				<option value="15">15%</option>
				<option value="20">20%</option>
				<option value="25">25%</option>
				<option value="30">30%</option>
				<option value="35">35%</option>
				<option value="40">40%</option>
				<option value="45">45%</option>
				<option value="50">50%</option>
			</select>
		</div>
		<input type="hidden" name="form" value="send">
		<input type="hidden" name="ID" value="<?=$data['ID'];?>">
		<button class="btn btn-primary" type="submit">Guardar Cambios</button>
		<a href="<?=base_url('index.php/insurances/get_list')?>"><button class="btn btn-primary" type="button">Volver</button></a>
	</form>
</div>	