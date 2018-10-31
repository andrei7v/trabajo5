<?php 
	namespace Models;

	class Estudiante
	{
		private $id;
		private $nombre;
		private $edad;
		private $promedio;
		private $imagen;
		private $id_seccion;
		private $fecha;
		private $con;

		function __construct(){

			$this->con = new Conexion();
		}

		public function set($atributo, $contenido){

			$this->$atributo = $contenido;
		}

		public function get($atributo){
			
			return $this->$atributo;
		}

		public function listar(){
			$sql = "SELECT e.*, s.nombre as nombre_seccion
					FROM estudiantes e
					INNER JOIN secciones s
					ON e.id_seccion = s.id";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function add(){
			$sql = "INSERT INTO estudiantes(nombre, edad, promedio, imagen, id_seccion, fecha)
					VALUES(:nombre, :edad, :promedio, :imagen, :id_seccion, NOW())";
			$fields = [':nombre', ':edad', ':promedio', ':imagen', ':id_seccion'];
			$parametros = [$this->nombre, $this->edad, $this->promedio, $this->imagen, $this->id_seccion];
			$this->con->consultaSimpleParametros($sql, $fields, $parametros);
		}

		public function delete(){
			$sql = "DELETE FROM estudiantes WHERE id = :id";
			$fields = [':id'];
			$parametros = [$this->id];
			
			$this->con->consultaSimpleParametros($sql, $fields, $parametros);
		}

		public function edit(){
			$sql = "UPDATE estudiantes SET 
					nombre = :nombre,
					edad = :edad,
					promedio = :promedio,
					id_seccion= :id_seccion
					WHERE id = :id";
			$fields = [':nombre', ':edad', ':promedio', ':id_seccion', ':id'];
			$parametros = [$this->nombre, $this->edad, $this->promedio, $this->id_seccion, $this->id];
			$this->con->consultaSimpleParametros($sql, $fields, $parametros);
		}

		public function view(){
			$sql = "SELECT e.*, s.nombre as nombre_seccion
					FROM estudiantes e
					INNER JOIN secciones s
					ON e.id_seccion = s.id
					WHERE e.id = :id";
			$fields = [':id'];
			$parametros = [$this->id];
			$row = $this->con->consultaRetornoParametros($sql, $fields, $parametros);
			return $row;
		}
	}
?>