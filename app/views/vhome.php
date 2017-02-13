<?php

	namespace X\App\Views;

	//Use para utilizar la clase.  

	use \X\Sys\View;

	//Vista de home
	
	class vHome extends View{

		function __construct($dataView){
			parent::__construct($dataView);
			echo $this->render('thome.php');
		}
	}