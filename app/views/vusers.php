<?php

	namespace X\App\Views;

	//Use para utilizar la clase.  

	use \X\Sys\View;

	//Vista de users.
	
	class vUsers extends View{

		function __construct($dataView){
			parent::__construct($dataView);
			echo $this->render('tusers.php');
		}
	}