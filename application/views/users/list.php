<h6 class="card-title">Lista de Usuarios</h6>
<div class="table-responsive">
	<table id="dataTableExample" class="table">
		<thead>
			<tr>
				<th>ID Usuario</th>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>DNI</th>
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
							<td><?= $data["ID"] ?></td>
							<td><?= $data["name"]?></td>
							<td><?= $data["first_name"]?></td>
							<td><?= $data["DNI"]?></td>
							<td><?= $data["mail"]?></td>
							<td><?= $data["created"]?></td>
							<td>
								<a href="<?=base_url('index.php/users/get/'.$data['ID'])?>"><i class="link-icon text-info" data-feather="eye"></i></a>
								<a href="<?=base_url('index.php/users/edit/'.$data['ID'])?>"><i class="link-icon text-primary" data-feather="edit"></i> </a>
								<a href="<?=base_url('index.php/users/remove/'.$data['ID'])?>"><i class="link-icon text-danger" data-feather="trash"></i></a>
								<a href="<?=base_url('index.php/users/change_pass/'.$data['ID'])?>"><i class="link-icon text-warning" data-feather="lock"></i></a>
							</td>
						</tr>
			<?php   }
				}
			} ?>
		</tbody>
	</table>		
</div>
