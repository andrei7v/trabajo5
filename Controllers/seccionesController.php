<?php 
	namespace Controllers;
	
	use Models\Seccion as Seccion;

	class seccionesController
	{
		private $seccion;

		public function __construct(){
			$this->seccion = new Seccion();
		}

		public function index(){
			$datos = $this->seccion->listar();
			return $datos;
		}

		public function agregar()
		{
			if ($_POST) {
				$this->seccion->set("nombre", $_POST['nombre']);
				$this->seccion->add();
				header("Location: " . URL . "secciones");
			}
		}

		public function editar($id)
		{
			if (!$_POST) {
				$this->seccion->set("id", $id);
				$datos = $this->seccion->view();
				return $datos;
			} else {
				$this->seccion->set("id", $_POST['id']);
				$this->seccion->set("nombre", $_POST['nombre']);
				$this->seccion->edit();
				header("Location: " . URL . "secciones");
				
			}
		}

		public function eliminar($id)
		{
			$this->seccion->set("id", $id);
			$this->seccion->delete();
			header("Location: " . URL . "secciones");
		}

        public function ver($id){
            $this->seccion->set("id", $id);
            $id_nombre = $this->seccion->nombreSecId();
            $datos3 = $this->seccion->viewAlumnos();
            $datos = array($datos3, $id_nombre);
            return $datos;
        }

		public function numero($num)
		{
			echo "Es el estudiante numero: ".$num;
		}
	}
?>