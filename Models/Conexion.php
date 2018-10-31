<?php 
	namespace Models;

	class Conexion {

		private $datos = array(
			'host' => 'localhost',
			'user' => 'root',
			'pass' => '',
			'db'   => 'proyectoPOO'
		);

		private $con;

		public function __construct()
		{
			$dsn = "mysql:host={$this->datos['host']};dbname={$this->datos['db']};charset=utf8";
			
			$this->con = new \PDO($dsn, $this->datos['user'], $this->datos['pass']);
		}

		public function consultaSimple($sql)
		{
			$this->con->query($sql);
		}

		public function consultaSimpleParametros($sql, $fields,$parametros)
		{
			try {
				print_r($sql);
				print_r($parametros);
				$stmt = $this->con->prepare($sql);
				for ($i=0; $i < sizeof($fields); $i++) { 
					$stmt->bindParam($fields[$i], $parametros[$i]);
				}
				$stmt->execute();
				
			} catch (PDOException $e) {
				echo $e->getMessage();
				
			}
		}

		public function consultaRetorno($sql){
			$stmt = $this->con->query($sql);
			$datos = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $datos;
		}

		public function consultaRetornoParametros($sql, $fields, $parametros){
			$stmt = $this->con->prepare($sql);
			for ($i=0; $i < sizeof($fields); $i++) { 
				$stmt->bindParam($fields[$i], $parametros[$i]);
			}
			$stmt->execute();
			$datos = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $datos;
		}
	}
?>