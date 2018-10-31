<?php 
	namespace Controllers;

	use Models\Usuario as Usuario;

	class registrarController
	{
		private $usuario;
		
		function __construct()
		{
			$this->usuario = new Usuario();
		}

		public function index(){
			if ($_POST) {
			    $email = $_POST['email'];
			    $username = $_POST['username'];
			    $password = $_POST['password'];
			    $password2 = $_POST['password2'];


				$this->usuario->set("email", $email);
				$this->usuario->set("username", $username);
				$this->usuario->set("password", md5($password));

				$datos = $this->usuario->validarUsuario();



                if (trim($email)=="" || $email=="") {
                    echo '<div class="alert alert-danger">Ingresa tu email.</div>';
                    return;
                }

                if (trim($username)=="" || $username=="") {
                    echo '<div class="alert alert-danger">Ingresa tu username.</div>';
                    return;
                }

                if (trim($password)=="" || $password=="") {
                    echo '<div class="alert alert-danger">Ingresa tu contraseña.</div>';
                    return;
                }

                if (trim($password2)=="" || $password2=="") {
                    echo '<div class="alert alert-danger">Ingresa nuevamente tu contraseña.</div>';
                    return;
                }

                if ($password !== $password2) {
                    echo '<div class="alert alert-danger">Tus contraseñas deben coincidir.</div>';
                    return;
                }


                if (sizeof($datos)>0) {
                    header("Location: " . URL . "registrar");

				} else {
                    $this->usuario->add();
                    header("Location: " . URL . "login");
				}	
			}
		}


	}
?>



