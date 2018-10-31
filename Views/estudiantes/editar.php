<?php 
	$secciones = $estudiantes->listarSecciones();
	if (isset($_SESSION['id'])) {
?>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3>Editar Estudiantes</h3>
			<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-tittle">Editar estudiante</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-3">
						<img src="<?php echo URL; ?>Views/Template/imagenes/avatars/<?php echo $datos[0]['imagen']; ?>" class="img-responsive" alt="Image">
					</div>
					<div class="col-md-7">
						<form action="" method="POST" role="form">					
							<div class="form-group">
								<label for="nombre">Ingresar nombre</label>
								<input type="text" class="form-control" value="<?php echo $datos[0]['nombre']; ?>" id="nombre" name="nombre">
							</div>
							<div class="form-group">
								<label for="edad">Ingresar edad</label>
								<input type="number" class="form-control" value="<?php echo $datos[0]['edad']; ?>" id="edad" name="edad">
							</div>
							<div class="form-group">
								<label for="promedio">Ingresar promedio</label>
								<input type="number" class="form-control" value="<?php echo $datos[0]['promedio']; ?>" id="promedio" name="promedio">
							</div>
							<div class="form-group">
								<label for="id_seccion">Seleccionar sección (<b>Sección actual: <?php echo $datos[0]['nombre_seccion']; ?></b>)</label>
								<select name="id_seccion" id="id_seccion" class="form-control" required="required">
									<option value="0">Seleccionar sección</option>
									<?php 
										foreach ($secciones as $row) {
									?>
											<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
									<?php
										}
									?>
									
								</select>
							</div>
							<input type="hidden" name="id_seccion_old" value="<?php echo $datos[0]['id_seccion']; ?>">
							<input type="hidden" name="id" value="<?php echo $datos[0]['id']; ?>">
							<button type="submit" class="btn btn-primary">Guardar cambios</button>
							<button type="reset" class="btn btn-danger">Cancelar</button>
						</form>
					</div>
					<div class="col-md-1"></div>
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