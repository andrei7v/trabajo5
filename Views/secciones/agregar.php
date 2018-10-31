<?php 
	if (isset($_SESSION['id'])) {
?>
	<div class="col-md-8 col-md-offset-2">

		<h3>Agregar Secciones</h3>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Agregar nueva sección</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<form action="" method="POST" role="form" enctype="multipart/form-data">					
							<div class="form-group">
								<label for="nombre">Ingresar nombre</label>
								<input type="text" class="form-control" id="nombre" name="nombre">
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