<?php
	namespace X\Sys;

	use X\Sys\Registry;
	/**
	*
	*   Controller: the base controller in MVC systems.
	*
	**/
	class Controller{
		protected $model;
		protected $view;
		protected $params;
		protected $dataView;
		protected $conf;

		//SINGLETON

		function __construct($params,$dataView=null){
			$this->dataView=$dataView;
			$this->params=$params;
			$this->conf=Registry::getInstance();
			//El new revisa si existe la instancia.

		}

		function ajax($output){
			ob_clean(); //Descarta el contenido del buffer de salida. 
			if(is_array($output)){
				echo json_encode($output); //Array asociatiu -> json (Per fer el traspas de les dades).
			}
		}

	}