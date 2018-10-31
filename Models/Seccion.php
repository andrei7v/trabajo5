<?php 
	namespace Models;

	class Seccion
	{
		private $id;
		private $nombre;
		private $con;

		public function __construct()
		{
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido)
		{
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function listar(){
			$sql = "SELECT * FROM secciones";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function add()
		{
			$sql = "INSERT INTO secciones(nombre) VALUES ('{$this->nombre}')";
			$this->con->consultaSimple($sql);
		}

		public function delete()
		{
			$sql = "DELETE FROM secciones WHERE id = :id";
			
			$fields = [':id'];
			$parametros = [$this->id];
			
			$this->con->consultaSimpleParametros($sql, $fields, $parametros);
		}

		public function edit()
		{
			$sql = "UPDATE secciones SET nombre = :nombre
					WHERE id = :id";
			$fields = [':nombre', ':id'];
			$parametros = [$this->nombre, $this->id];
			$this->con->consultaSimpleParametros($sql, $fields, $parametros);
			
		}

		public function view()
		{
			$sql = "SELECT * FROM secciones WHERE id = :id";
			
			$fields = [':id'];
			$parametros = [$this->id];
			$row = $this->con->consultaRetornoParametros($sql, $fields, $parametros);
			return $row;
		}





        public function nombreSecId()
        {
            $sql = "SELECT nombre FROM secciones WHERE id = :id";
            $fields = [':id'];
            $parametros = [$this->id];
            $row = $this->con->consultaRetornoParametros($sql, $fields, $parametros);
            return $row;
        }



        public function viewAlumnos(){
            $sql = "SELECT e.id, e.nombre, s.nombre as nombre_seccion
					FROM estudiantes e
					INNER JOIN secciones s
					ON e.id_seccion = s.id
					WHERE s.id = :id";
            $fields = [':id'];
            $parametros = [$this->id];
            $row = $this->con->consultaRetornoParametros($sql, $fields, $parametros);
            return $row;
        }
	}
?>