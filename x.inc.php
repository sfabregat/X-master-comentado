<?php

	namespace X;

	require_once __DIR__.'/sys/autoload.php';

	define('DS',DIRECTORY_SEPARATOR);
	define('ROOT',realpath(__DIR__).DS);
	
	//Para acceder a qualquier archivo sin saber el fichero raiz.
	//Se usara app como la ruta del sistema que sera el fichero base de las carpetas.
	define('APP',ROOT.'app'.DS);
