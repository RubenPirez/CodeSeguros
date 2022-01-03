<h6 class="card-title">Listado de Pólizas</h6>
<div class="row mt-3 mb-5">
	<div class="col-md-4">
		<form action='' method='GET'> 
			<input type='text' name='buscar' class="form-control" placeholder="Inserta NIF cliente">
	</div>
	<div class="col-md-2">
			<input type="hidden" name="form" value="send">
			<input type='submit' value='Buscar' class="form-control btn btn-primary"> 
		</form>
	</div>
</div>
<div class="table-responsive">
	<table id="dataTableExample" class="table">
		<thead>
			<tr>
				<th>Nº de Póliza</th>
				<th>ID Cliente</th>
				<th>Producto</th>
				<th>Fecha de Alta</th>
				<th>Precio Anual</th>
				<th>Comisión</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php if ( $list !== null && $list !== false ){
				foreach ($list as $data) { 
					if ( empty($data) == false ){ ?>
						<tr>
							<td><?= $data['ID']?></td>
							<td><?= $data['ID_customer']?></td>
							<td><?= $data['ID_product']?></td>
							<td><?= $data['hiring_date']?></td>
							<td><?= $data['price']?></td>
							<td><?= $data['commission']?></td>
							<td>
								<a href="<?=base_url('index.php/insurances/get/'.$data['ID'])?>"><i class="link-icon text-info" data-feather="eye"></i></a>
								<a href="<?=base_url('index.php/insurances/edit/'.$data['ID'])?>"><i class="link-icon text-primary" data-feather="edit"></i> </a>
								<a href="<?=base_url('index.php/insurances/remove/'.$data['ID'])?>"><i class="link-icon text-danger" data-feather="trash"></i></a>
							</td>
						</tr>
			<?php 	}
				} 
			} ?>	
		</tbody>
	</table>
</div>