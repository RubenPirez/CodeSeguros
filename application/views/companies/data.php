<h6 class="card-title mb-0 text-color-warning">Ficha Compañía</h6>
<div class="row">
	<div class="col-md-4 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">ID:</label>
		<p class="text-muted"><?= $data['ID']?></p>
	</div>
	<div class="col-md-4 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">Nombre:</label>
		<p class="text-muted"><?= $data['name']?></p>
	</div>
	<div class="col-md-4 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">Fecha de Alta:</label>
		<p class="text-muted"><?= $data['created']?></p>
	</div>
</div>
<div class="row">
	<div class="col-md-4 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">Persona de Contacto:</label>
		<p class="text-muted"><?= $data['contact_person']?></p>
	</div>
	<div class="col-md-4 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">Teléfono de Contacto:</label>
		<p class="text-muted"><?= $data['contact_phone']?></p>
	</div>
	<div class="col-md-4 mt-3">
		<label class="tx-11 font-weight-bold mb-0 text-uppercase">Email:</label>
		<p class="text-muted"><?= $data['contact_mail']?></p>
	</div>
</div>
<div class="row mt-5 justify-content-center">
	<div class="col-md-4">
		<a href="<?=base_url('index.php/companies/edit/'.$data['ID'])?>"><button class="btn btn-primary" type="submit">Editar</button></a>
		<a href="<?=base_url('index.php/companies/remove/'.$data['ID'])?>"><button class="btn btn-primary">Borrar</button></a>
		<a href="<?=base_url('index.php/companies/get_list')?>"><button class="btn btn-primary">Volver</button></a>
	</div>
</div>

