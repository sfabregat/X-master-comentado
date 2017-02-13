<?php
	namespace X\Sys;
	/**
	*
	*	Request: Translate URL
	*   to controller, action
	*   and parameters
	*	@author: Sergio 
	*	@package: sys
	*
	**/
	
	class Request{
		static private $query=array();

		static function exploding(){
			$array_query=explode('/',$_SERVER['REQUEST_URI']);
			
			array_shift($array_query);
			if(end($array_query)==""){
				array_pop($array_query);
			}
			$dir=dirname($_SERVER['PHP_SELF']); //Es el directorio raiz.
			
			if($dir=='/'.$array_query[0]){
				array_shift($array_query);
			}		
						
			self::$query=$array_query;
			
		}

		static function getVariable(){ //Recibe las variables
			return array_shift(self::$query);
		}

		static function getParams(){ //Recibe los parametros
			if(count(self::$query)>0){
				if((count(self::$query)%2)==0){
					for($i=0;$i<count(self::$query);$i++){
						if(($i%2)==0){
							$key[]=self::$query[$i];
						}
						else{
							$value[]=self::$query[$i];
						}
					}
					$result=array_combine($key, $value);
					return $result;
				}
			}
		}

	}