<?php 
	namespace Views;

	$template = new Template();

	class Template
	{
		
		public function __construct()
		{
			session_start();
?>
			<!DOCTYPE html>
			<html>
			<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<title>Administracion de Estudiantes</title>
				<link rel="stylesheet" href="<?php echo URL; ?>Views/Template/css/bootstrap.css">
				<link rel="stylesheet" href="<?php echo URL; ?>Views/Template/css/general.css">
			</head>
			<body>
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Administracion de Estudiantes</a>
						</div>
						<?php 
							if (isset($_SESSION['id'])) {
						?>
							<div class="collapse navbar-collapse navbar-ex1-collapse">
								<ul class="nav navbar-nav">
									<li class="active"><a href="<?php echo URL; ?>">Inicio</a></li>
									<li><a href="#">Link</a></li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Estudiantes <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="<?php echo URL; ?>estudiantes">Listado</a></li>
											<li><a href="<?php echo URL; ?>estudiantes/agregar">Agregar</a></li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Secciones <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="<?php echo URL; ?>secciones">Listado</a></li>
											<li><a href="<?php echo URL; ?>secciones/agregar">Agregar</a></li>
										</ul>
									</li>
								</ul>
								
								
								<ul class="nav navbar-nav navbar-right">
									<li><a>Bienvenido <?php echo $_SESSION['username']; ?></a></li>
									<li><a href="<?php echo URL; ?>login/logout">LOGOUT</a></li>
									<li><a target="_blank" href="https://www.swarbox.com/">SWARBOX</a></li>
									
								</ul>
							</div>
						<?php
							} else {
						?>
							<div class="collapse navbar-collapse navbar-ex1-collapse">
								<ul class="nav navbar-nav">
									<li class="active"><a href="<?php echo URL; ?>">Inicio</a></li>
									<li><a href="#">Link</a></li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Credenciales <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="<?php echo URL; ?>login">Iniciar sesión</a></li>
											<li><a href="<?php echo URL; ?>registrar">Regístrate</a></li>
										</ul>
									</li>
								</ul>
								
								
								<ul class="nav navbar-nav navbar-right">
									<li><a target="_blank" href="https://www.swarbox.com/">SWARBOX</a></li>
									
								</ul>
							</div>
						<?php
							}
							

						?>


					</div>
				</nav>
				
<?php
		}

		public function __destruct()
		{
?>
				<footer class="navbar-fixed-bottom">
					Todos los derechos reservados &copy 2018
				</footer>
				<script src="<?php echo URL; ?>Views/Template/js/jquery-3.2.1.min.js" type="text/javascript"></script>
				<script src="<?php echo URL; ?>Views/Template/js/bootstrap.min.js" type="text/javascript"></script>
			</body>
			</html>
<?php
		}
	}
?>