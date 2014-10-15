<?php
	class Validador{
		const REGEXP_EMAIL 		= "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
		const REGEXP_NAME_LAST 	= "/^[a-zA-Z\s]+$/";
		const REGEXP_PHONE	 	= '/^[\d]{8,16}$/';
		const REGEXP_CODIGO	 	= '/^[\d]{5,6}$/';
		
		public static function validarEmail($email){
			if(preg_match(self::REGEXP_EMAIL, $email)){
				return true;
			}else{
				return false;
			}
		}

		public static function validarNombreApellido($nombreOapellido){
			if(preg_match(self::REGEXP_NAME_LAST, $nombreOapellido)){
				return true;
			}else{
				return false;
			}
		}

		public static function validarTelefono($telefono){
			if(preg_match(self::REGEXP_PHONE, $telefono)){
				return true;
			}else{
				return false;
			}
		}

		public static function validarCodigo($codigo){
			if(preg_match(self::REGEXP_CODIGO, $codigo)){
				return true;
			}else{
				return false;
			}
		}
	}
?>