<?php 
	if (isset($_SESSION['id'])) {
?>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3>Editar Secciones</h3>
			<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-tittle">Editar sección <?php echo $datos[0]['nombre']; ?></h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-7">
						<form action="" method="POST" role="form">					
							<div class="form-group">
								<label for="nombre">Ingresar nombre</label>
								<input type="text" class="form-control" value="<?php echo $datos[0]['nombre']; ?>" id="nombre" name="nombre">
							</div>
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