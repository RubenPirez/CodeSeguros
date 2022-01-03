<h6 class="card-title mb-0 text-color-warning">Ficha Cliente</h6>
<div class="row">
	<div class="col-md-3 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">ID:</label>
		<p class="text-muted"><?= $data['ID']?></p>
	</div>
	<div class="col-md-3 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">Nombre:</label>
		<p class="text-muted"><?= $data['name']?></p>
	</div>
	<div class="col-md-3 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">Apellidos:</label>
		<p class="text-muted"><?= $data['first_name']?></p>
	</div>
	<div class="col-md-3 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">DNI:</label>
		<p class="text-muted"><?= $data['DNI']?></p>
	</div>
</div>
<div class="row">
	<div class="col-md-3 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">Email:</label>
		<p class="text-muted"><?= $data['email']?></p>
	</div>
	<div class="col-md-3 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">Teléfono:</label>
		<p class="text-muted"><?= $data['phone_number']?></p>
	</div>
	<div class="col-md-3 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">Fecha de Alta:</label>
		<p class="text-muted"><?= $data['created']?></p>
	</div>
</div>
<div class="row">
	<div class="col-md-3 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">Dirección:</label>
		<p class="text-muted"><?= $data['address']?></p>
	</div>
	<div class="col-md-3 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">Ciudad:</label>
		<p class="text-muted"><?= $data['city']?></p>
	</div>
	<div class="col-md-3 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">País:</label>
		<p class="text-muted"><?= $data['country']?></p>
	</div>
	<div class="col-md-3 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">CP:</label>
		<p class="text-muted"><?= $data['CP']?></p>
	</div>
</div>
<div class="row mt-5 justify-content-center">
	<div class="col-md-4">
		<a href="<?=base_url('index.php/customers/edit/'.$data['ID'])?>"><button class="btn btn-primary" type="submit">Editar</button></a>
		<a href="<?=base_url('index.php/customers/remove/'.$data['ID'])?>"><button class="btn btn-primary">Borrar</button></a>
		<a href="<?=base_url('index.php/customers/get_list')?>"><button class="btn btn-primary">Volver</button></a>
	</div>
</div>

