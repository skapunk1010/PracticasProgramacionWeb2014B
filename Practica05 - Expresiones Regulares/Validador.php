<?php
	class Validador{
		private const REGEXP_EMAIL 		= "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
		private const REGEXP_NAME_LAST 	= "/^[a-zA-Z\s]+$/";
		private const REGEXP_PHONE	 	= '/^[\d]{8,16}$/';
		
		public static function validarEmail($numero){
			if(preg_match(REGEXP_EMAIL, $email)){
				return $email;
			}else{
				return NULL;
			}
		}

		public static function validarNombreApellido($nombreOapellido){
			if(preg_match(REGEXP_NAME_LAST, $nombreOapellido)){
				return $nombreOapellido;
			}else{
				return NULL;
			}
		}

		public static function validarTelefono($telefono){
			if(preg_match(REGEXP_PHONE, $telefono)){
				return $telefono;
			}else{
				return NULL;
			}
		}
	}
?>