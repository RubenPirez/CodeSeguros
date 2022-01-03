<h6 class="card-title">Lista de Clientes</h6>
<div class="table-responsive">
	<table id="dataTableExample" class="table">
		<thead>
			<tr>
				<th>ID Cliente</th>
				<th>Nombre</th>
				<th>DNI</th>
				<th>Email</th>
				<th>Teléfono</th>
				<th>Fecha Alta</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if ( $list !== null & $list !== false ){
				foreach ( $list as $data ) {
					if ( empty($data) == false ){
						echo '<tr>
						<td>'.$data["ID"].'</td>
						<td>'.$data["name"].'</td>
						<td>'.$data["DNI"].'</td>
						<td>'.$data["email"].'</td>
						<td>'.$data["phone_number"].'</td>
						<td>'.$data["created"].'</td>
						<td> 
							<a href="'.base_url("index.php/customers/get/".$data['ID']).'"><i class="link-icon text-info" data-feather="eye"></i></a>
							<a href="'.base_url("index.php/customers/edit/".$data['ID']).'"><i class="link-icon text-primary" data-feather="edit"></i></a>
							<a href="'.base_url("index.php/customers/remove/".$data['ID']).'"><i class="link-icon text-danger" data-feather="trash"></i></a>
						</td>
					</tr>';
					}					
				}					
			}
			?>
		</tbody>
	</table>		
</div>

