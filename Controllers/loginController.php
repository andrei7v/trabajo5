<?php 
	namespace Controllers;

	use Models\Usuario as Usuario;

	class loginController
	{
		private $usuario;
		
		function __construct()
		{
			$this->usuario = new Usuario();
		}

		public function index(){
			if ($_POST) {
				$this->usuario->set("username", $_POST['username']);
				$this->usuario->set("password", md5($_POST['password']));

				$datos = $this->usuario->validar();

				if (sizeof($datos)>0) {
					$_SESSION['id'] = $datos[0]['id'];
					$_SESSION['email'] = $datos[0]['email'];
					$_SESSION['username'] = $datos[0]['username'];
					header("Location: " . URL . "estudiantes");
				} else {
					header("Location: " . URL . "login");
				}	
			}
		}

		public function logout()
		{
			session_destroy();
			session_unset();
			header("Location: " . URL . "login");
		}
	}
?>