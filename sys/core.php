<?php
	namespace X\Sys;
	
	/**
	* Core: Front Controller
	*
	*  @author: Sergio
	*  @package:sys
	*
	*
	**/

	use X\Sys\Request;
	use X\App\Controllers\Error;

	class Core{

		//Creación de parametros

		static private $controller;
		static private $action;
		static private $params;


		public  static function init(){
			
			Request::exploding();

			//Se prepara para extraer el controlador de la variable. 

			self::$controller=Request::getVariable();

			self::$action=Request::getVariable();
			
			self::$params=Request::getParams();
			
			//ROUTING			
			self::router();
		}

		/**
		* router: Looks for controller and action
		*
		*
		*
		*/

		static function router(){
			//Busca el controlador home
			self::$controller=(self::$controller!="")?self::$controller:'home';
			self::$action=(self::$action!="")?self::$action:'home';
			$filename=strtolower(self::$controller).'.php';
			$fileroute=APP.'controllers'.DS.$filename;
		
			//Comprueba si se puede leer.
			if(is_readable($fileroute)){
				$contr_class='\X\App\Controllers\\'.ucfirst(self::$controller);
				self::$controller=new $contr_class(self::$params);
				//Llamamos a la accion
				if (is_callable(array(self::$controller,self::$action))){
					call_user_func(array(self::$controller,self::$action));
				}
				//Si no la encuentra significa que el metodo no existe.
				else{ echo self::$action.': Mètode inexistent';}
			}else{
				self::$controller=new Error(self::$params);		
			}
		}
	}
