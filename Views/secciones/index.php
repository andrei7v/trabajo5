<?php 
	if (isset($_SESSION['id'])) {
?>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">LISTADO DE SECCIONES</h3>
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nombre</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								foreach ($datos as $row) {
							?>
								<tr>
									<td>
                                        <?php echo $row['id']; ?>
                                    </td>
									<td>
                                        <a href="<?php echo URL; ?>secciones/ver/<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></a>
                                    </td>
									<td>
										<a class="btn btn-warning" href="<?php echo URL; ?>secciones/editar/<?php echo $row['id']; ?>">Editar</a>
										<a class="btn btn-danger" href="<?php echo URL; ?>secciones/eliminar/<?php echo $row['id']; ?>">Eliminar</a>
									</td>
								</tr>
							<?php
								}
							?>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php
	} else {
		header("Location: " . URL . "login");
	}
	
?>