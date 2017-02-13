<?php

   namespace X\App\Controllers;

   //Use para utilizar la clase.  
   
   use X\Sys\Controller;

   //Controlador de error

   class Error extends Controller{
   		public function __construct($params){
   			parent::__construct($params);
           
   			$this->model=new \X\App\Models\mError();
   			$this->view =new \X\App\Views\vError();
            }
   		function home(){	
   		}
   }
