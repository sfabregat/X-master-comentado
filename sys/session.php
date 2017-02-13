<?php
	namespace X\Sys;
	
	class Session{
		//Crea la Sesión

		static function init(){
			session_start(); //inicia la sesion.

			self::set('id',session_id());

			//Guardamos el session_id 

		}

		static function set($key,$value){
			$_SESSION[$key]=$value;
		}

		static function get($key){
			if(self::exist($key)){
				return $_SESSION[$key];
			}
			else{
				return null;
			}
		}

		static function exist($key){ 
			//Comprueba si existe la clave
			if(array_key_exists($key, $_SESSION)){
				return true;
			}else{
				return false;
			}
		}
		static function del($key){ 
		//Borrar la variable de sesión.

			if (self::exist($key)){
				unset($_SESSION[$key]);
			}
		}

		static function destroy(){ 
		//Destruimos la sesión.
			
			session_destroy();
		}
	}