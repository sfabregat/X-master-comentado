<?php
	//Muestra los errores
	error_reporting(E_ALL);
	
	//Mustra los errores (Debe quitarse una vez se vaya a publicar el proyecto).
	ini_set('display_errors',1);

	//Archivo de configuración
	require_once 'x.inc.php';

	use \X\Sys\Autoload; 
	use \X\Sys\Core;

	$loader=new Autoload();
	$loader->register();

	//Se registra el namespace de la ruta
	$loader->addNamespace('X\Sys','sys');
	$loader->addNamespace('X\App','app');
	$loader->addNamespace('X\App\Controllers','app/controllers');
	$loader->addNamespace('X\App\Models','app/models');
	$loader->addNamespace('X\App\Views','app/views');		
	
	Core::init();