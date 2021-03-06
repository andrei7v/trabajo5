<?php 
	namespace Config;

	class Enrutador
	{
		
		public static function run( Request $request ){
			$controlador = $request->getController() . "Controller";
			//print $controlador;
			$ruta = ROOT . "Controllers" . DS . $controlador . ".php";
			//print $ruta;
			$metodo = $request->getMetodo();
			if ($metodo == "index.php") {
				$metodo = "index";
			}

			$argumento = $request->getArgumento();

			if (is_readable($ruta)) {
				//print $ruta;
				require_once $ruta;
				$mostrar = "Controllers\\".$controlador;
				$controlador = new $mostrar;
				if (!isset($argumento)) {
					$datos = call_user_func(array($controlador, $metodo));
				} else {
					$datos = call_user_func_array(array($controlador, $metodo), $argumento);
				}
			}

			$route = ROOT . "Views" . DS . $request->getController() . DS . $request->getMetodo() . ".php";
			//print ROOT;
			if (is_readable($route)) {
				require_once $route;
			} else {
				print "No se encuentra la ruta especificada";
			}
			
		}
	}
?>