<?php
	class Validador{
		private constant REGEXP_EMAIL 		= "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
		private constant REGEXP_NAME_LAST 	= "/^[a-zA-Z\s]+$/";
		private constant REGEXP_PHONE	 	= '/^[\d]{8,16}$/';
		
		public function validarEmail($numero){
			if(preg_match(REGEXP_EMAIL, $email)){
				return $email;
			}else{
				return NULL;
			}
		}

		public function validarNombreApellido($nombreOapellido){
			if(preg_match(REGEXP_NAME_LAST, $nombreOapellido)){
				return $nombreOapellido;
			}else{
				return NULL;
			}
		}

		public function validarTelefono($telefono){
			if(preg_match(REGEXP_PHONE, $telefono)){
				return $telefono;
			}else{
				return NULL;
			}
		}
	}
?>