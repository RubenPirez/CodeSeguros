<h6 class="card-title">Lista de Compañías</h6>
<div class="table-responsive">
	<table id="dataTableExample" class="table">
		<thead>
			<tr>
				<th>ID Compañía</th>
				<th>Nombre</th>
				<th>Persona de Contacto</th>
				<th>Teléfono</th>
				<th>Email</th>
				<th>Fecha Alta</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			if ( $list !== null && $list !== false ){
				foreach ($list as $data) {
					if ( empty($data) == false ){ ?>
						<tr>
							<td><?= $data['ID']?></td>
							<td><?= $data['name']?></td>
							<td><?= $data['contact_person']?></td>
							<td><?= $data['contact_phone']?></td>
							<td><?= $data['contact_mail']?></td>
							<td><?= $data['created']?></td>
							<td>
								<a href="<?=base_url('index.php/companies/get/'.$data['ID'])?>"><i class="link-icon text-info" data-feather="eye"></i></a>
								<a href="<?=base_url('index.php/companies/edit/'.$data['ID'])?>"><i class="link-icon text-primary" data-feather="edit"></i> </a>
								<a href="<?=base_url('index.php/companies/remove/'.$data['ID'])?>"><i class="link-icon text-danger" data-feather="trash"></i></a>
							</td>
						</tr>
			<?php	}
				}
			} ?>
		</tbody>
	</table>		
</div>
