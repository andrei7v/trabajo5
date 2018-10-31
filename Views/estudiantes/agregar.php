<?php 
	if (isset($_SESSION['id'])) {
?>
	<div class="col-md-8 col-md-offset-2">

		<h3>Agregar Estudiantes</h3>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Agregar nuevo estudiante</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<form action="" method="POST" role="form" enctype="multipart/form-data">					
							<div class="form-group">
								<label for="nombre">Ingresar nombre</label>
								<input type="text" class="form-control" id="nombre" name="nombre">
							</div>
							<div class="form-group">
								<label for="edad">Ingresar edad</label>
								<input type="number" class="form-control" id="edad" name="edad">
							</div>
							<div class="form-group">
								<label for="promedio">Ingresar promedio</label>
								<input type="number" class="form-control" id="promedio" name="promedio">
							</div>
							<div class="form-group">
								<label for="id_seccion">Seleccionar sección</label>
								<select name="id_seccion" id="id_seccion" class="form-control" required="required">
									<?php 
										foreach ($datos as $row) {
									?>
											<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
									<?php
										}
									?>
									
								</select>
							</div>
							<div class="form-group">
								<label for="imagen">Seleccionar imagen</label>
								<input type="file" class="form-control" id="imagen" name="imagen">
							</div>
							<button type="submit" class="btn btn-primary">Guardar</button>
							<button type="reset" class="btn btn-danger">Cancelar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>
<?php
	} else {
		header("Location: " . URL . "login");
	}
	
?>