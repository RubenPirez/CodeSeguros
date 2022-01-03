<h6 class="card-title mb-0 text-color-warning">Ficha Póliza</h6>
<div class="row">
	<div class="col-md-4 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">Nº de Póliza:</label>
		<p class="text-muted"><?= $data['ID']?></p>
	</div>
	<div class="col-md-4 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">ID Cliente:</label>
		<p class="text-muted"><?= $data['ID_customer']?></p>
	</div>
	<div class="col-md-4 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">Fecha de Alta:</label>
		<p class="text-muted"><?= $data['hiring_date']?></p>
	</div>
</div>
<div class="row">
	<div class="col-md-4 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">ID_producto:</label>
		<p class="text-muted"><?= $data['ID_product']?></p>
	</div>
	<div class="col-md-4 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">Precio Anual:</label>
		<p class="text-muted"><?= $data['price']?></p>
	</div>
	<div class="col-md-4 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">Comisión:</label>
		<p class="text-muted"><?= $data['commission']?></p>
	</div>
</div>
<div class="row mt-5 justify-content-center">
	<div class="col-md-4">
		<a href="<?=base_url('index.php/insurances/edit/'.$data['ID'])?>"><button class="btn btn-primary" type="button">Editar</button></a>
		<a href="<?=base_url('index.php/insurances/remove/'.$data['ID'])?>"><button class="btn btn-primary" type="button">Borrar</button></a>
		<a href="<?=base_url('index.php/insurances/get_list')?>"><button class="btn btn-primary" type="button">Volver</button></a>
	</div>
</div>

