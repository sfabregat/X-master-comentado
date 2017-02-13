<?php
	namespace X\Sys;
	/**
	 * 
	 * 
	 * Registry: stores app information
	 * 
	 * @author Sergio
	 * 
	 * 
	 * */

	 //Registry es un array associativo que hace de registro en la alicación y que solo se puede acceder desde una instancia.

	class Registry{

	 	 private $data=array();
	 	 static $instance;
	
	 	 // singleton instance
	 	 public static function getInstance(){ //comprueba si hay una instancia y si no la hay la crea.
	 	 	// there is no instance?
	 	 	if (!(self::$instance instanceof self)){
	 	 		self::$instance=new self();
	 	 		return self::$instance;
	 	 	}else{
	 	 		return self::$instance;
	 	 	}
	 	 }

	 	 function __construct(){ 
	 	 	//crea un array para ponerlo de atributo en el registry.
	 	 	$this->data=array();
	 	 	$this->loadConf();
	 	 }

	 	 function __set($key,$value){ 
	 	 	//Función con metodo magico.
	 	 	if(!array_key_exists($key, $this->data)) //si no existe se añande.
	 	 		{
	 	 			$this->data[$key]=$value;
	 	 		}
	 	 }

	 	 //Guarda la clave y el valor del array 

	 	 function __get($key){
	 	 	if(array_key_exists($key, $this->data)){
	 	 		return $this->data[$key];
	 	 	}else{
	 	 		return null; 
	 	 	}
	 	 }
 		//retorna el valor del data de la key y si no exixte retornarqa null


		//con el get obtendremos la clave

	 	 function __unset($key=null){ //Metodo magico que permite borrar elementos del registry.
	 	 								
	 	 	if($key!=null){
	 	 		if(array_key_exists($key,$this->data)){
	 	 			unset($this->data[$key]);
	 	 		}
	 	 	}
	 	 	else{
	 	 		unset($this->data);
	 	 	}
	 	 }
	 	 function loadConf(){
	 	 	$file= APP.'config.json';
	 	 	$jsonStr=file_get_contents($file);
	 	 	
	 	 	
	 	 	
	 	 }
	 }

