<?php 
	if (!isset($_SESSION['id'])) {
?>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">INICIAR SESIÓN</h3>
				</div>
				<div class="panel-body">
					<div class="col-md-8 col-md-offset-2">
						<form action="" method="POST" role="form">					
							<div class="form-group">
								<label for="username">Ingresar username</label>
								<input type="text" class="form-control" id="username" name="username">
							</div>
							<div class="form-group">
								<label for="password">Ingresar password</label>
								<input type="password" class="form-control" id="password" name="password">
							</div>
							
							<button type="submit" class="btn btn-primary">Iniciar sesión</button>
							<button type="reset" class="btn btn-danger">Cancelar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
	} else {
?>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Ya estás logeado</h3>
				</div>
				<div class="panel-body">
					<div class="col-md-8 col-md-offset-2">
						<a class="btn btn-primary" href="<?php echo URL; ?>estudiantes">Ir a estudiantes</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
	}
	
?>
