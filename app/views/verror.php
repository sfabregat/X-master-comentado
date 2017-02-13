<?php

	namespace X\App\Views;

	//Use para utilizar la clase.
	  
	use \X\Sys\View;
	
	//Vista de error

	class vError extends View{

		function __construct($dataView){
			parent::__construct($dataView);
			echo $this->render('terror.php');
		}
	}