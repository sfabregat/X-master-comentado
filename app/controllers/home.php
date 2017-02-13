<?php

   namespace X\App\Controllers;

   //Use para utilizar la clase.  
   
   use X\Sys\Controller;

   //Controlador de home

   class Home extends Controller{
   		public function __construct($params){
   			parent::__construct($params);
            $this->dataView=array(
               'title'=>'title',
               'name'=>'name');

            //Creem la instancia.

   			$this->model=new \X\App\Models\mHome();
   			$this->view =new \X\App\Views\vHome($this->dataView);
   		}
   }
