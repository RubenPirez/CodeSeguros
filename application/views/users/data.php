<h6 class="card-title mb-0 text-color-warning">Ficha Usuario</h6>
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
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">Fecha de Alta:</label>
		<p class="text-muted"><?= $data['created']?></p>
	</div>
</div>
<div class="row">
	<div class="col-md-3 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">DNI:</label>
		<p class="text-muted"><?= $data['DNI']?></p>
	</div>
	<div class="col-md-3 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">Correo Electrónico:</label>
		<p class="text-muted"><?= $data['mail']?></p>
	</div>
	<div class="col-md-3 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">Edad:</label>
		<p class="text-muted"><?= $data['edad']?></p>
	</div>
</div>
<div class="row mt-5 justify-content-center">
	<div class="col-md-4">
		<a href="<?=base_url('index.php/users/edit/'.$data['ID'])?>"><button class="btn btn-primary" type="submit">Editar</button></a>
		<a href="<?=base_url('index.php/users/remove/'.$data['ID'])?>"><button class="btn btn-primary" type="submit">Borrar</button></a>
		<a href="<?=base_url('index.php/users/get_list')?>"><button class="btn btn-primary" type="submit">Volver</button></a>
	</div>
</div>
