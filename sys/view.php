<?php

	namespace X\Sys;

	class View extends \ArrayObject{ 		

		public function __construct($dataView){
			parent::__construct($dataView,\ArrayObject::ARRAY_AS_PROPS);
				//Permite acceder a las variables con $this.
		}
		public function render($fileview){
			ob_start();
	 		include APP.'tpl'.DS.$fileview; 
	 		return ob_get_clean();
		}
	}