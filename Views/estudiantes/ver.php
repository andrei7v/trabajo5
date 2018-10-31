<?php 
	if (isset($_SESSION['id'])) {
?>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3>Datos del estudiante <?php echo $datos[0]['nombre']; ?></h3>
			<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-tit
				le">Perfil del estudiante <?php echo $datos[0]['nombre']; ?></h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3">
						<img src="<?php echo URL; ?>Views/Template/imagenes/avatars/<?php echo $datos[0]['imagen']; ?>" class="img-responsive" alt="Image">
					</div>
					<div class="col-md-7">
						<ul class="list-group">
							<li class="list-group-item">
								<strong>Nombre: </strong><?php echo $datos[0]['nombre']; ?>
							</li>
							<li class="list-group-item">
								<strong>Edad: </strong><?php echo $datos[0]['edad']; ?>
							</li>
							<li class="list-group-item">
								<strong>Promedio: </strong><?php echo $datos[0]['promedio']; ?>
							</li>
							<li class="list-group-item">
								<strong>Sección: </strong><?php echo $datos[0]['nombre_seccion']; ?>
							</li>
							<li class="list-group-item">
								<strong>Fecha de registro: </strong><?php echo $datos[0]['fecha']; ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
<?php
	} else {
		header("Location: " . URL . "login");
	}
	
?>