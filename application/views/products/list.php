<h6 class="card-title">Listado de Productos</h6>
<div class="table-responsive">
	<table id="dataTableExample" class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Compañía</th>
				<th>Producto</th>
				<th>Tipo</th>
				<th>Fecha Alta</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if ( $list !== null && $list !== false ){
					foreach ($list as $data) {
						if ( empty($data) == false ) { ?>
							<tr>
								<td><?=$data['ID']?></td>
								<td><?=$data['ID_company']?></td>
								<td><?=$data['product_name']?></td>
								<td><?=$data['type']?></td>
								<td><?=$data['created']?></td>
								<td>
									<a href="<?=base_url('index.php/products/get/'.$data['ID'])?>"><i class="link-icon text-info" data-feather="eye"></i></a>
									<a href="<?=base_url('index.php/products/edit/'.$data['ID'])?>"><i class="link-icon text-primary" data-feather="edit"></i> </a>
									<a href="<?=base_url('index.php/products/remove/'.$data['ID'])?>"><i class="link-icon text-danger" data-feather="trash"></i></a>
								</td>
							</tr>
				<?php	}
					}
				} ?>
		</tbody>
	</table>	
</div>
