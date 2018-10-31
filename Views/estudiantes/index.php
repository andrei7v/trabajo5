<?php 
	if (isset($_SESSION['id'])) {
?>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">LISTADO DE ESTUDIANTES</h3>
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Imagen</th>
								<th>Nombre</th>
								<th>Edad</th>
								<th>Seccion</th>
								<th>Promedio</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								foreach ($datos as $row) {
							?>
								<tr>
									<td><img class="img_avatar" src="<?php URL;?>Views/Template/imagenes/avatars/<?php echo $row['imagen']; ?>"></td>
									<td><a href="<?php echo URL; ?>estudiantes/ver/<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></a></td>
									<td><?php echo $row['edad']; ?></td>
									<td><?php echo $row['nombre_seccion']; ?></td>
									<td><?php echo $row['promedio']; ?></td>
									<td>
										<a class="btn btn-warning" href="<?php echo URL; ?>estudiantes/editar/<?php echo $row['id']; ?>">Editar</a>
										<a class="btn btn-danger" href="<?php echo URL; ?>estudiantes/eliminar/<?php echo $row['id']; ?>">Eliminar</a>
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
