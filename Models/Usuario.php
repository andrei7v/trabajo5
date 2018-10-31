<?php 
	namespace Models;

	class Usuario
	{
		private $id;
		private $email;
		private $username;
		private $password;
		private $con;

		function __construct()
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

		public function validar()
		{
			$sql = "SELECT * FROM usuario
					WHERE username = :username
					AND password = :password";
			$fields = [':username', ':password'];
			$parametros = [$this->username, $this->password];
			$row = $this->con->consultaRetornoParametros($sql, $fields, $parametros);
			return $row;

		}



        public function validarUsuario()
        {
            $sql = "SELECT * FROM usuario
					WHERE username = :username";
            $fields = [':username'];
            $parametros = [$this->username];
            $row = $this->con->consultaRetornoParametros($sql, $fields, $parametros);
            return $row;

        }



        public function add()
        {
            $sql = "INSERT INTO usuario (email, username ,password) 
                    VALUES ('{$this->email}', '{$this->username}', '{$this->password}')";
            $this->con->consultaSimple($sql);
        }


    }
?>