<h6 class="card-title">Añadir Póliza</h6>
<div class="col-md-6">
	<?php
		if ( $add ){
			echo '<div class="alert alert-success"> Póliza añadida correctamente </div>';;
		}
	?>
	<form action="" method="POST">
		<div class="form-group">
			<label>DNI Cliente</label>
			<select class="js-example-basic-single w-100" data-width="100%" name="ID_customer">
				<option selected disabled>DNI Cliente</option>
				<?php
					foreach ($c_data as $cdata) { ?>
						<option value="<?= $cdata['ID'];?>"><?= $cdata['DNI'];?></option>
				<?php	} ?>	
			</select>
		</div>
		<div class="form-group">
			<label>Selecciona el Producto</label>
			<select class="js-example-basic-single w-100" data-width="100%" name="ID_product">
				<option selected disabled>Producto</option>
				<?php
					foreach ($p_data as $pdata) { ?>
						<option value="<?=$pdata['ID'];?>"><?=$pdata['product_name'];?></option>
				<?php } ?>	
			</select>
		</div>
		<div class="form-group">
			<label>Precio</label>
			<input type="text" name="price" class="form-control">
		</div>
		<div class="form-group">
		<label>Comisión</label>
			<select class="js-example-basic-single w-100" data-width="100%" name="commission">
				<option selected disabled>Comisión</option>
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
		<button class="btn btn-primary" type="submit">Añadir Nueva Póliza</button>
		<a href="<?=base_url('index.php/insurances/get_list')?>"><button class="btn btn-primary" type="button">Volver</button></a>
	</form>
</div>	