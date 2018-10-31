<?php 
	define('DS', DIRECTORY_SEPARATOR);
	define("ROOT", realpath(dirname(__FILE__)) . DS);
	define("URL", "http://localhost/trabajo4/");

	require_once 'Config/Autoload.php';

	use Config\Autoload;
	use Config\Request;
	use Config\Enrutador;

	Autoload::run();

	require_once "Views/template.php";

	Enrutador::run(new Request());

?>